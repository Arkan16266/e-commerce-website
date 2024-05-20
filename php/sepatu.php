<?php 
// if (file_exists('./koneksi.php')) {
    // include '../php/koneksi.php';
// } else {
    // die('File koneksi.php not found');
// }
    // $dummyData = [
        // [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        // ],
        // [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        // ],
        // [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        // ],
        // [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        // ],
    // ];

    // Menerima data dari formulir tambah_barang.php
    // $nama_produk = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';
    // $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
        // $stok = isset($_POST['stok']) ? $_POST['stok'] : '';
        // $katalog = isset($_FILES['katalog']['name']) ? $_FILES['katalog']['name'] : ''; // Jika menggunakan input file
    // $detail_barang = isset($_POST['detail_barang']) ? $_POST['detail_barang'] : '';

    // Menampilkan data dalam menu card
    // echo "<div class='content'>";
    // echo "<img src='path/to/images/$katalog' alt='Katalog'>";
    // echo "<h3>$nama_produk</h3>";
    // echo "<p>Harga: $harga</p>";
    // echo "<p>Stok: $stok</p>";
    // echo "<p>$detail_barang</p>";
    // echo "</div>";
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sepatu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
<body>
    <!-- navbar -->
    <nav>
        <!-- logo -->
        <div class="nav-hero1">
            <h1><a href="#">Sepatu</a></h1>
        </div>
        <!-- logo -->
        <div class="nav-hero2">
            <input type="text" placeholder="Search...">
            <a href="#">
                <i class="material-symbols-outlined">search</i>
                
            </a>
        </div>
        <div class="nav-hero3">
            <ul>
                <li><a href="/PROJEK_KEJURUAN/php/index.php">Home</a></li>
                <li><a href="/home/tentang_kami.html">Tentang Kami</a></li> 
                <!-- <li><a href="#">bantuan</a></li> -->
                <li><a href="keranjang.html">Keranjang</a></li>
                <li><a href="logout.php" >Akun<span href="logout.php" class="material-symbols-outlined">account_circle</span></a></li>
            </ul>
        </div>
    </nav>
    <div class="gallery">
            <?php
            include "koneksi.php";
            $ambildata = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <div class="content">
                <a href="keranjang.php">
                <h3><?php echo $tampil['nama_produk']; ?></h3>
                <h6><?php echo $tampil['harga']; ?></h6>
                <div class="border">
                <img src="<?php echo $tampil['katalog']; ?>" alt="Product Image">
                
                <p><?php echo $tampil['detail_barang']; ?></p>
                <button>Buy Now</button>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
</body>
</html>
</html>
