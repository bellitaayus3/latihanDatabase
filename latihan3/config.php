<?php
$host = "localhost";
$user = "root";
$password ="";
$db = "latihan1";

$mysqli = new mysqli($host, $user, $password, $db);
if 
($mysqli->connect_error) {
    die ("connection failed : ".$mysqli->connect_error);
}

?>