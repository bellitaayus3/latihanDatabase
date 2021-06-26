<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cms";

$mysqli = new mysqli($host,$user,$pass,$db);

if ($mysqli->connect_error){
    die ("connection failed : " . $mysqli->connect_error);
}

date_default_timezone_set('Asia/Jakarta');

$nama_hari = array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date ("w");
$hari_ini = $nama_hari [$hari];

$tanggal_sekarang = date ("d");
$bulan_sekarang = date ("m");
$tahun_sekarang = date ("y");

$tanggal = date ('Ymd');
$jam = date ("H:i:s");
?>