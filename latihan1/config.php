<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datatabel";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli-> connect_error){
    die ("connection failed: " . $mysqli->connect_error);
}

// date_default_timezone_set('Asia/Jakarta');

// $nama_hari = array ("MInggu","Senin","Selasa", "Rabu","kamis","Jumat","sabtu");
// $hari = date ("w");
// $hari_ini = $nama_hari[$hari];

// $tgl_sekarang = date("d");
// $bln_sekarang = date("m");
// $thn_sekarang = date("Y");

// $tanggal = date("ymd");
// $jam = date("H:I:S");
// echo''.$tgl_sekarang.' '.$bln_sekarang. ' '. $thn_sekarang;
// didalem tanda kutip satu dikasih spasi untuk spasi saat ditampilkan
?>