<?php

require_once 'Bukubank.php';
$obj = new Bukubank;
// Callback Notifikasi URL
$data = $obj->catch_ipn();

//do something with this data
file_put_contents('log-callback.txt', sprintf("%s %s\n", date('Y-m-d H:i:s'), json_encode($data)), FILE_APPEND);
