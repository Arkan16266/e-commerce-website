<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Saya</title>
    <link rel="stylesheet" href="keranjang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <nav>
            <div class="nav-hero1">
                <h2>Keranjang Saya</h2>
            </div>
            <div class="nav-hero2">
                <a href="#">
                    <i class="material-symbols-outlined">shopping_cart</i>
                </a>
            </div>
            <div class="nav-hero3">
                <ul>
                    <li> <i class="material-symbols-outlined">search</i></li>
                    <li><input type="text" placeholder="Search..."></li>
                    <li><a href="logout.php" ><span class="material-symbols-outlined">account_circle</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container-item">
            <div class="item">
            <?php
                    include "koneksi.php";
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM barang");
                    while ($tampil = mysqli_fetch_array($ambildata)){
                   ?> 
                <div class="checkbox">
                <input type="checkbox" name="" id="">
                </div>
                <div class="img">
                <img src="<?php echo $tampil['katalog'];?>" alt="Product Image">
                </div>
                    <div class="content">
                        <h3><?php echo $tampil['nama_produk'];?></h3>
                        <p><?php echo $tampil['variasi'];?></p>
                        <h6><?php echo $tampil['harga'];?></h6>
                    </div>
                    <?php
                    }
                   ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

