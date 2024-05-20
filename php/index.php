<?php
require 'config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if no session has been started yet
}

// Redirect to login if user is not logged in
if (empty($_SESSION["id"])) {
    header("Location: login.php");
    exit; // Stop further execution after redirection
}

$id = $_SESSION["id"];
$query = "SELECT * FROM user WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
 
    <title>Home</title>
  
</head>
<body>

<div class="header">
        <!-- <h1>Fantasy jersey</h1>
        <div class="search-container">
            <input type="text" name="search" placeholder="Search..." class="search-input">
            <a href="#" class="search-btn">
                <i class="fas fa-search"></i>              
            </a>
        </div> -->
    </div>



    <nav>
        <div class="nav-hero1">
            <a href="#"><img src="PROJEK_KEJURUAN/asset/WhatsApp Image 2024-03-06 at 11" alt="Fantasy Apparel" width="100px"></a>
        </div>

        <div class="nav-hero2">
        <div class="search-container">
            <input type="text" name="search" placeholder="Search..." class="search-input">
            <a href="#" class="search-btn">
                <i class="fas fa-search"></i>              
            </a>
        </div> 
        </div>
        <div class="nav-hero3">
            <ul>
                <li><a href="tentang_kami.php">Tentang Kami</a></li> 
                <li><a href="keranjang.php">Keranjang</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Akun <i class="material-symbols-outlined">account_circle</i></button>
                        <div id="dropdown-content" class="dropdown-content">
                            <a href="profil.php">Profil</a>
                            <a href="kerannjang.php">Keranjang</a>
                            <a href="logout.php">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="content1">
            <h1 style="text-align: center;">Hello, <?php echo htmlspecialchars($row["name"]); ?></h1>
            <h1 style="text-align: left;">Berbagai macam kategori produk</h1>
            <div class="kategori-container">
                <div class="kategori-item1">
                    <a href="/PROJEK_KEJURUAN/php/sepatu.php">
                        <img src="/PROJEK_KEJURUAN/asset/kategori1.jpg" alt="" width="200px">
                        <p>Jersey</p>
                    </a>
                </div>
                <div class="kategori-item2">
                    <a href="/PROJEK_KEJURUAN/php/jersey.php">
                        <!-- <img src="/PROJEK_KEJURUAN/asset/jersey.png" alt="" width="200px"> -->
                        <p>Jersey</p>
                    </a>
                </div>
                <div class="kategori-item3">
                    <a href="/PROJEK_KEJURUAN/php/jersey.php">
                        <!-- <img src="/PROJEK_KEJURUAN/asset/jersey.png" alt="" width="200px"> -->
                        <p>Jersey</p>
                    </a>
                </div>
                <div class="kategori-item4">
                    <a href="/PROJEK_KEJURUAN/php/jersey.php">
                        <!-- <img src="/PROJEK_KEJURUAN/asset/jersey.png" alt="" width="200px"> -->
                        <p>Jersey</p>
                    </a>
                </div>
            </div>
        </div>
        <h1>Semua Produk</h1>
        <div class="gallery">
            <?php
            include "koneksi.php";
            $ambildata = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <div class="content">
                <h3><?php echo $tampil['nama_produk']; ?></h3>
                <h6><?php echo $tampil['harga']; ?></h6>
                <img src="<?php echo $tampil['katalog']; ?>" alt="Product Image">
                <p><?php echo $tampil['detail_barang']; ?></p>
                <button>Buy Now</button>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <footer>Copyright faridarkan</footer>
</body>
</html>

<script>
var headerElement = document.querySelector('.header');
var backgrounds = ['url("/PROJEK_KEJURUAN/asset/background1.jpeg")', 'url("/PROJEK_KEJURUAN/asset/background2.jpeg")', 'url("/PROJEK_KEJURUAN/asset/background3.jpeg")'];
var currentBackgroundIndex = 0;

function changeBackground() {
    headerElement.style.backgroundImage = backgrounds[currentBackgroundIndex];
    currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
}

setInterval(changeBackground, 5000); // Ganti latar belakang setiap 5 detik

var greetingElement = document.getElementById('greeting');
var names = ['', '', '', ''];
var currentIndex = 0;

function typeEffect(text, i) {
    if (i < text.length) {
        greetingElement.innerText = text.substring(0, i + 1);
        setTimeout(function() {
            typeEffect(text, i + 1);
        }, 100); // Waktu delay antar karakter (ms)
    } else {
        setTimeout(changeGreeting, 5000); // Waktu delay sebelum ganti teks (ms)
    }
}

function changeGreeting() {
    var currentName = names[currentIndex];
    typeEffect('Hello, ' + currentName, 0);
    currentIndex = (currentIndex + 1) % names.length;
}

changeGreeting();

var headerTextElement = document.getElementById('header-text');

function changeHeaderText() {
    if (headerTextElement.innerText === 'Fantasy Jersey') {
        headerTextElement.innerText = 'Selamat Datang';
    } else {
        headerTextElement.innerText = 'Fantasy Jersey';
    }
}

setInterval(changeHeaderText, 5000); // Ubah teks setiap 5 detik

document.querySelectorAll('.content1, .content2, .content3, .content4').forEach(item => {
    item.addEventListener('mouseover', function() {
        this.style.backgroundSize = '120%'; // Zoom background
        this.querySelector('img').style.filter = 'brightness(150%)'; // Menurunkan kecerahan gambar
    });

    item.addEventListener('mouseout', function() {
        this.style.backgroundSize = '100%'; // Kembalikan ukuran background
        this.querySelector('img').style.filter = 'brightness(100%)'; // Kembalikan kecerahan gambar
    });
});
</script>

