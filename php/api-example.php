<?php

require_once 'Bukubank.php';
$obj = new Bukubank;

// Get User info
$userinfo = $obj->user_info();

// Get bank list
// $banklist = $obj->bank_list();

// Recent Mutasi Rekening
//$recentmutasi = $obj->recent_mutasi();

// Pencarian Mutasi Rekening
//$search = $obj->search_mutasi(['type'=>'K']);


print_r($userinfo);
