<?php

class Bukubank
{	
	private $api_key = 'YOUR_API_KEY';	// Setup Your API KEY here 
	private $base_url = 'https://bukubank.com/api';	
	private $version = '1.0';

	function __construct() {

	}

	public function bank_list()
	{
		return $this->curl('v1/bank');
	}

	public function user_info()
	{
		return $this->curl('v1/user');
	}

	public function recent_mutasi($offset = 0)
	{
		return $this->curl('v1/mutasi/recent', 'GET', array('offset' => $offset));
	}

	public function catch_ipn($user_api_key = FALSE)
	{
		$api_key = $_SERVER['HTTP_X_API_KEY'];

		$valid_key = FALSE;
		if ($user_api_key) {
			$valid_key = ($user_api_key == $api_key);
		} else {

			$valid_key = (@$this->api_key == $api_key);
		}

		if (!$valid_key) {
			exit('Invalid Api Key');
		}

		$post = file_get_contents("php://input");
		$json = json_decode($post);

		if (json_last_error() !== JSON_ERROR_NONE) {			
			exit("Invalid JSON");
		}

		return $json;
	}

	public function search_mutasi($uparams = array())
	{
		$params = array();
		foreach ((array)$uparams as $k => $v) {
			if (in_array($k, array('mutasi_id', 'date', 'type', 'module', 'description', 'amount'))) {
				$params[$k] = $v;
			}
		}

		return $this->curl('v1/mutasi', 'GET', $params);
	}

	protected function curl($endpoint, $method = 'GET', $params = [])
	{
		$url = $this->base_url . '/' . ltrim($endpoint, '/');

		$ch = curl_init();

		if ($method == 'GET') {
			$url .= '?' . http_build_query($params);
		} else {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
		}

		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . @$this->api_key,
			'Accept: application/json',
			'User-Agent: Bukubank CI ' . $this->version
		]);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 180);
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$errno = curl_errno($ch);
		$error = curl_error($ch);

		curl_close($ch);

		if ($errno) {
			$result = json_encode([
				'success'     	=> false,
				'error_message'	=> $error
			]);
		}

		return json_decode($result);
	}
}
