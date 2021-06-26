<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli-> connect_error){
    die ("connection failed: " . $mysqli->connect_error);
}
?>
