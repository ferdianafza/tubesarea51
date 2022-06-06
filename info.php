<?php

// echo "<br>";
$curl = curl_init();

$harga = 10052;
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://bukubank.com/api/v1/mutasi?module=ovo&amount={$harga}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Authorization: IHN49tgpPWhKAaEjbXYf3n0y5svqlz7MrmiLQwD6"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

$someArray = json_decode($response, true);
// print_r($someArray);
echo "<br>";
echo $someArray["message"];
echo $someArray[0]["mutasi_id"];
echo "<br>";
echo $someArray[0]["amount"];
$jumlah = (int) $someArray[0]["amount"];
echo '<br>';
if ($someArray[0]["amount"] == $harga) {
	echo "sama 10050";
} else if ($someArray[0]["amount"] == 10000.00) {
	echo "sama 10000.00";
} else if ($someArray[0]["amount"] == "10000.00") {
	echo "sama string '10000.00";
} else {
	echo "tidak ada yang sama";
}


exit();
