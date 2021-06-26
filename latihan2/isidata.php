<?php
include 'config.php';

$nama_pasien = $_GET['nama_pasien'];
$umur = $_GET['umur'];
$spesialis = $_GET['spesialis'];
$tanggal_masuk = $_GET['tanggal_masuk'];
$tanggal_keluar = $_GET['tanggal_keluar'];
$riwayat = $_GET['riwayat'];
$nama_dokter = $_GET['nama_dokter'];

$Sintak = ("INSERT INTO `rumah_sakit`(`nama_pasien`, `umur`, `spesialis`, `tanggal_masuk`, `tanggal_keluar`, `riwayat`, `nama_dokter`) 
VALUES ('$nama_pasien', '$umur', '$spesialis', '$tanggal_masuk', '$tanggal_keluar',  '$riwayat', '$nama_dokter')");


echo $nama_pasien  ; 
echo $umur ;
echo $spesialis;
echo $tanggal_masuk;
echo $tanggal_keluar;
echo $riwayat;
echo $nama_dokter;


$mysqli->query($Sintak);
if($mysqli->query($Sintak)===TRUE){
    echo "data berhasil ditambahkan ";
}
else{
    echo "data eror".$mysqli->connect_error;
}
?>