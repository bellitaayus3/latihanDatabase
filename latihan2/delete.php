<?php
include "config.php";

$nama_pasien = $_GET["nama_pasien"];

$sql = "DELETE FROM `rumah_sakit` WHERE `nama_pasien`= '$nama_pasien'";

if ($mysqli->query($sql)==TRUE) {
    echo "berhasil";
    }else{
        echo $mysqli->error;
    }
?>
