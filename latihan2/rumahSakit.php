<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cardView.css">
    <title>Document</title>
</head>
<body style="background-color:aliceblue ;">
    <div class="contener">
    
    <?php

    $data2 = mysqli_query($mysqli,"SELECT * FROM `rumah_sakit`");
    while($dataindex = mysqli_fetch_array($data2))
   
    {
        
        // var_dump ($dataindex);
        $id_pasien=$dataindex["id_pasien"];
        $nama_pasien=$dataindex["nama_pasien"];
        $umur=$dataindex["umur"];
        $spesialis=$dataindex["spesialis"];
        $tanggal_keluar=$dataindex["tanggal_keluar"];
        $tanggal_masuk=$dataindex["tanggal_masuk"];
        $riwayat=$dataindex["riwayat"];
        $nama_dokter=$dataindex["nama_dokter"];
        
        // echo $namaPasien;
  
        echo "<div class ='card'>

            <a href='http://localhost/latihandatabase/latihan2/datapasien_isi.php?
                    nama_pasien=$nama_pasien&umur=$umur&spesialis=$spesialis&tanggal_masuk=$tanggal_masuk
                    &tanggal_keluar=$tanggal_keluar&riwayat=$riwayat&nama_dokter=$nama_dokter'>       
            <img src='rumahsakit.jpg' alt='' style='width: 200px; height: 130px;'>

                    <p> Nama Pasien :  $nama_pasien </p>
                    <p> Umur : $umur </p>
                    <p> Spesialis : $spesialis </p>
                    <p> Tanggal Masuk : $tanggal_masuk </p>
                    <p> Tanggal Keluar : $tanggal_keluar</p>
                    <p> Riwayat : $riwayat</p>
                    <p> Nama Dokter :$nama_dokter</p> <br>
                    <button><a href='update.php?id_pasien=$id_pasien'>EDIT</a></button>
                    <button><a href='delete.php?nama_pasien=$nama_pasien'>DELETE</a><button>
            </a>
        </div>";
 
    }

    ?>


    </div>
</body>
</html>