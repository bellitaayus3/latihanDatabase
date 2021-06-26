<?php
include "config.php";

$nama = $_GET ["nama"];
$jurusan = $_GET ["jurusan"];
$prodi = $_GET ["prodi"];

$sintak = "INSERT INTO `mahasiswa`(`nama`, `jurusan`, `prodi`) VALUES ('$nama','$jurusan','$prodi')";

$mysqli->query($sintak);
?>