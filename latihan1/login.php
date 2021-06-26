<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>           

    <link rel ="stylesheet" href="loginn.css">
</head>
<body>
  <div class="kontener">
        <form action="login.php" method="GET">
            <label for=""> username </label>
            <input type="text" name="user"><br>
            <label for ="">password</label>
            <input type = "password" name="pass"><br></br>
            <input type = "submit" name="submit" id="submit" value="kirim">

        </form>
    </div>
</body>
</html>

<?php

include "config.php";

$dataDariUrlUser = $_GET["user"];
$dataDariUrlPass = $_GET["pass"];

$sql = "SELECT * FROM user";
$q = $mysqli ->query ($sql);

 while ($database = $q->fetch_array()){
     $userNamaDatabase = $database['nama_user'];
     $passwordDatabase = $database['password'];

     if($userNamaDatabase == $dataDariUrlUser && $passwordDatabase == $dataDariUrlPass)
     
    {
         header('location: latihan.html');
         echo "data sama dengan yang ada pada database untuk user $dataDariUrlUser";
     }
     else{
         echo "user $dataDariUrlUser tidak terdaftar";
         header ('location: error.html');
     }
 }

 ?>