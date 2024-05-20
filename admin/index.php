<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "fantasy_apparel";

try {
    $koneksi = new mysqli($servername, $username, $password, $dbname);
    if (!$koneksi) {
        throw new Exception("Koneksi gagal: " . mysqli_connect_error());
    } else {
        echo "Koneksi berhasil";
    }
} catch (Exception $e) {
    // echo 'Caught exception: Access denied for user ' . $username . '@' . $servername . ' (using password: YES)', "\n";
}
?>

<!-- admin/index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<title>Website Utama</title>
<style>
    /* CSS untuk navbar */
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color: #f4f4f4;
    }

    .container {
        display: flex;
    }

    .navbar-top{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: red;
        width: 100%;
        height: 100px;
    }
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        background-color: #333;
        overflow: hidden;
    }

    .navbar a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    h1 {
        text-align: center;
    }

    


</style>
</head>
<body>
<div class="container">
    <div class="navbar-top">
        <h1>Fantasy Apparel</h1>
    </div>

<div class="navbar">
  <a href="#"><span class="material-symbols-outlined">
    home
    </span></a>
  <a href="kategori.php"><span class="material-symbols-outlined">
    category
    </span></a>
  <a href="costumer.html">Services</a>
  <a href="pesanan.php"><span class="material-symbols-outlined">
    local_mall
    </span></a>

    <a href="#"><span class="material-symbols-outlined">
        logout
        </span></a>
</div>
</div>

    <h1>Selamat Datang</h1>


</body>
</html>