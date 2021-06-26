<?php 
$nama_pasien= $_GET['nama_pasien'];
$umur = $_GET['umur'];
$spesialis = $_GET['spesialis'];
$tanggal_masuk = $_GET['tanggal_masuk'];
$tanggal_keluar =$_GET['tanggal_keluar'];
$riwayat =$_GET['riwayat'];
$nama_dokter =$_GET ['nama_dokter'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="datapasien_isi.css">
    <title>Biodata Pasien</title>
</head>
<body>
    <div class="contener">
    <h1>Biodata Pasien</h1>
    <div class="biodata_pasien">
        <h3>Nama :<?php echo $nama_pasien?> </h3>
        <h3>Umur :<?php echo $umur?> </h3>
        <h3>Spesialis :<?php echo $spesialis?> </h3>
        <h3>Tanggal Masuk :<?php echo $tanggal_masuk?> </h3>
        <h3>Tanggal Keluar :<?php echo $tanggal_keluar?> </h3>
        <h3>Riwayat :<?php echo $riwayat?> </h3>
        <h3>Nama Dokter :<?php echo $nama_dokter?> </h3>
    </div>
    </div> 

</body>
</html>