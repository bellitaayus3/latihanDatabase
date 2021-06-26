<?php
// untuk membuka php
include "config.php";
// include : masukin file


$sintak = "SELECT * FROM `mahasiswa`";
// sintak : aturan penulisan  

$datamahasiswa = $mysqli->query("SELECT * FROM `mahasiswa`");

while ($data = mysqli_fetch_array($datamahasiswa)) {
// while : pengulangan
// mysqli_fetch_array : proses pengambilan

    echo "nama : " . $data['nama'] . '<br>';
    echo "jurusan : " . $data['jurusan'] . '<br>';
    echo "prodi : " . $data['prodi'] . '<br>';
// echo = perintah untuk manggil data

}
?>

