<?php
include "config.php";


if (isset($_GET['id_pasien'])){
    echo "didalam et";
    $id_pasien = $_GET['id_pasien'];

    $sqlAmbilData = "SELECT * FROM `rumah_sakit` WHERE `id_pasien`=$id_pasien";
    $data1 = $mysqli->query($sqlAmbilData);
    $data = $data1->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="update.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="align-items :center; margin : 0px 0px 0px 50px">
    <div style="height: current; width : 300px; paddind: 50px;">
    <h2 style="text-align:center">Data Pasien</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien']?>">
        
        <label for="name_pasien">Nama Pasien</label>
        <input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']?>"><br>
        <label for="umur">Umur</label>
        <input type="text" name="umur" value="<?php echo $data['umur']?>"><br>
        <label for="spesialis">Spesialis</label>
        <input type="text" name="spesialis" value="<?php echo $data['spesialis']?>"><br>
        <label for="tanggal_masuk">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" value="<?php echo $data['tanggal_masuk']?>"><br>
        <label for="tanggal_keluar">Tanggal Keluar</label>
        <input type="date" name="tanggal_keluar" value="<?php echo $data['tanggal_keluar']?>"><br>
        <label for="riwayat">Riwayat</label>
        <input type="text" name="riwayat" value="<?php echo $data['riwayat']?>"><br>
        <label for="nama_dokter">Nama Dokter</label>
        <input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter']?>"><br>
        <input type="submit" name="simpan" value="simpan" style="padding: 10px; width:120px; 
        background-color: white; margin: 15px 15px 15px 130px;">
</form>
</div>
</body>
</html>

<?php 
}
if (isset($_POST['id_pasien'])){
    // echo "dalam post";
    $sqlUpdate = "UPDATE `rumah_sakit` SET `nama_pasien`='$_POST[nama_pasien]',
    `umur`='$_POST[umur]',`spesialis`='$_POST[spesialis]',`tanggal_masuk`='$_POST[tanggal_masuk]',
    `tanggal_keluar`='$_POST[tanggal_keluar]',`riwayat`='$_POST[riwayat]',`nama_dokter`='$_POST[nama_dokter]' 
    WHERE `id_pasien`='$_POST[id_pasien]'";

    if($mysqli->query($sqlUpdate) === TRUE){
        echo "Data Berhasil di Update";
    }else{
        echo $mysqli->error;
    }
}




?>