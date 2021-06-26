<?php
// untuk membuka php
include "config.php";
// include : masukin file


$sintak = "SELECT * FROM `rumah_sakit` ";
// sintak : aturan penulisan  

$datapasien = $mysqli->query("SELECT * FROM `rumah_sakit`");

while ($data = mysqli_fetch_array($datapasien)) {
// while : pengulangan
// mysqli_fetch_array : proses pengambilan

// echo "nama : " .$data ['nama'] ."<br>";
// echo "alamat :" .$data ['alamat'] ."<br>";
// echo "no_telepon :" .$data ['no_telepon'] ."<br>";


}


