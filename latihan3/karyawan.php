<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="karyawan.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="align-items: center; margin : 0px 0px 0px 60px;">
<div style="height: inherit; width : 400px; padding: 20px;">
<h2 style="text-align: center;"> Data Karyawan</h2>
<form action="karyawan.php" method="POST">
    <label for="nama">Nama Karyawan</label>
    <input type="text" name="nama"></br>
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="enum" name="jenis_kelamin"></br>
    <label for="status">Status</label></br>
    <input type="enum" name="status"></br>
    <label for="gaji_pokok">Gaji Pokok</label>
    <input type="text" name="gaji_pokok"></br>
    <input type="submit" name="kirim" value="kirim" style="padding: 10px; width:375px; 
    background :gainsboro; margin : 10px 10px 10px 10px; font-size :20px">
</form>
</div>
</body>
</html>

<?php
include 'config.php';

$nama =$_POST['nama'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$status =$_POST['status'];
$gaji_pokok =$_POST['gaji_pokok'];

if ($nama != null && status != null)
{
    $mysqli ="INSERT INTO `karyawan`(`nama`, `jenis_kelamin`, `status`, `gaji_pokok`) 
    VALUES ('$nama', '$jenis_kelamin', '$status', '$gaji_pokok')";

if ($mysqli->query ($mysqli)== TRUE){
}
else 
    echo "error :". $mysqli . "<br>" . $mysqli->error; 
}

?>