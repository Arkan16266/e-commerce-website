<!-- admin/index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="produk.css"> -->
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

    .produk {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f4f4f4;
        width: 100%;
        height: 100%;
    }

    .produk-item {
        border: 2px solid #333;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
    }

    .bawah-gambar {
        display: flex;
        justify-content: space-between;
        align-items: center;
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
  <a href="#"><span class="material-symbols-outlined">
    category
    </span></a>
  <a href="#">Services</a>
  <a href="#"><span class="material-symbols-outlined">
    local_mall
    </span></a>

    <a href="#"><span class="material-symbols-outlined">
        logout
        </span></a>
</div>
</div>

<div class="produk">
    <div class="produk-item">
        <img src="/asset/adidas.png" alt="" width="200px">
        <div class="bawah-gambar">
        <div class="judul-produk">
        <p>Sandal</p>
        <p>Rp 00.000</p>
    </div>
    <div class="input-produk">
        <a href="#">edit</a>
        <a href="#">hapus</a>
    </div>
</div>
    </div>
</div>

</body>
</html>