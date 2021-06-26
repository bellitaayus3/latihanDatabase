<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="latihan2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="align-items: center; margin: 0px 0px 0px 50px;">
    <div style="height: inherit;width: 300px; padding: 30px;">
    <h2 style="text-align: center;">Formulir Pasien</h2>  
    <form action="latihan2.php" method="GET">
        <label for="nama_pasien">Nama Pasien</label>
        <input type="text" name="nama_pasien">
        <label for="umur">Umur</label>
        <input type="text" name="umur">
        <label for="spesialis">Spesialis</label>
        <input type="text" name="spesialis">
        <label for="tanggal_masuk">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk">
        <label for="tanggal_keluar">Tanggal Keluar</label>
        <input type="date" name="tanggal_keluar">
        <label for="riwayat">Riwayat</label>
        <textarea name="riwayat" cols="50" rows="4"></textarea>
        <label for="nama_dokter">Dokter</label>
        <input type="text" name="nama_dokter">
        <input type="submit" name="kirim" value="Kirim" style="padding: 15px; width:425px; 
        background-color: white; margin: 15px 0px 0px 0px;">
 </form>
</div>
</body>
</html>


<?php
include 'config.php';

$nama_pasien =$_GET['nama_pasien'];
$umur =$_GET['umur'];
$spesialis =$_GET['spesialis'];
$tanggal_masuk =$_GET['tanggal_masuk'];
$tanggal_keluar =$_GET['tanggal_keluar'];
$riwayat =$_GET['riwayat'];
$nama_dokter =$_GET['nama_dokter'];



if ($nama_pasien != null && $riwayat != null )
{
    // var_dump("ok");
    $sql = "INSERT INTO `rumah_sakit`(`nama_pasien`, `umur`, `spesialis`,  `tanggal_masuk`, `tanggal_keluar`, `riwayat`, `nama_dokter`)
    VALUES ('$nama_pasien', '$umur', '$spesialis', '$tanggal_masuk', '$tanggal_keluar',  '$riwayat', '$nama_dokter')";
    // harus kutip (') bukan (`)



if ($mysqli->query($sql) === TRUE) {
    // echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $mysqli->error; }
}
?>