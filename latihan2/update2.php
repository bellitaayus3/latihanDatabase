<?php 
include 'config.php';

$id_pasien =$_GET['id_pasien'];
$nama_pasienBaru =$_GET['nama_pasienBaru'];
$umurBaru =$_GET['umurBaru'];
$spesialisBaru =$_GET['spesialisBaru'];
$tanggal_masukBaru =$_GET['tanggal_masukBaru'];
$tanggal_keluarBaru =$_GET['tanggal_keluarBaru'];
$riwayatBaru =$_GET['riwayatBaru'];
$nama_dokterBaru =$_GET['nama_dokterBaru'];


$sql = "UPDATE `rumah_sakit` SET `nama_pasien`='$nama_pasienBaru',`umur`='$umurBaru',`spesialis`='$spesialisBaru',
        `tanggal_masuk`='$tanggal_masukBaru',`tanggal_keluar`='$tanggal_keluarBaru',`riwayat`='$riwayatBaru',
        `nama_dokter`= '$nama_dokterBaru' WHERE `id_pasien` = '$id_pasien'";




if ($mysqli->query ($sql) === TRUE){
    echo "success";
}
   else {
       echo "error : " . $mysqli->error;
}

?>