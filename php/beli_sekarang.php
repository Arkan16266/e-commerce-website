<!-- <?php 
if (file_exists('./koneksi.php')) {
    include '../php/koneksi.php';
} else {
    die('File koneksi.php not found');
}
    $dummyData = [
        [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        ],
        [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        ],
        [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        ],
        [
            // "nama" => "nkllk",
            // "harga" => "08098909",
            // "desc" => "ljhhlkkjhkjhkjhjkhkjhkjhkjhkjhjk"
        ],
    ];

    // Menerima data dari formulir tambah_barang.php
    $nama_produk = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $stok = isset($_POST['stok']) ? $_POST['stok'] : '';
    $katalog = isset($_FILES['katalog']['name']) ? $_FILES['katalog']['name'] : ''; // Jika menggunakan input file
    $detail_barang = isset($_POST['detail_barang']) ? $_POST['detail_barang'] : '';

    // Menampilkan data dalam menu card
    echo "<div class='content'>";
    echo "<img src='$katalog' alt='Katalog'>";
    echo "<p>$nama_produk</p>";
    echo "<p>$harga</p>";
    echo "<p>$stok</p>";
    echo "<p>$detail_barang</p>";
    echo "</div>";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="beli_sekarang.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }

        nav {
            background-color: rgb(245, 245, 245);
            display: flex;
            height: 70px;
            align-items: center;
            padding: 0 40px;
            position: sticky;
            top: 0;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 25px 20px -20px;
        }

        .nav-hero1 img {
            padding-right: 10px;
            margin-right: 15px;
            width: 100px;
        }

        .nav-hero3 ul {
            list-style-type: none;
            display: flex;
        }

        .nav-hero3 li {
            margin-left: 25px;
        }

        .nav-hero3 a {
            position: relative;
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        input {
            margin-left: 10px;
            border-radius: 10px;
            background-color: #9999;
            padding: 7px 10px;
            border: 2px solid black;   
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            width: 100%;
            height: 80vh;
        }

        .content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .produk img {
            border: 3px solid red;
            max-width: 100%;
            height: auto;
        }

        .deskripsiproduk {
            padding: 20px;
        }

        .deskripsiproduk h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .deskripsiproduk ul {
            list-style-type: none;
            padding-left: 0;
        }

        .deskripsiproduk li {
            margin-bottom: 5px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-hero1">
            <a href="#"><img src="PROJEK_KEJURUAN/asset/WhatsApp Image 2024-03-06 at 11.34.29.jpeg" alt="Logo" width="100px"></a>
        </div>
        <div class="nav-hero2">
            <input type="text" placeholder="Search...">
            <a href="#">
                <i class="material-symbols-outlined">search</i>
            </a>
        </div>
        <div class="nav-hero3">
            <ul>
                <li><a href="/home/tentang_kami.html">Tentang Kami</a></li> 
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="logout.php">Akun<span href="logout.php" class="material-symbols-outlined">account_circle</span></a></li>
            </ul>
        </div>
    </nav>

        <div class="container">
            <div class="content">
                <a href="beli_sekarang.php">
                <img src="/PROJEK_KEJURUAN/asset/shoes.jpg" alt="" style="width:300px; height:300px;">
                <h3>Shoes</h3>
                <h6>$100.00</h6>
                <button class="buy-1">Beli Sekarang</button>
                </a>
            </div>
        </div>

    <!-- <div class="container">
        <div class="content"> -->
        <!-- <?php foreach ($dummyData as $row) { ?>

            <div class="produk">
            <img src="<?= $row["katalog"] ?>" alt="" width="300px" height="300px">           
         </div>
            <div class="deskripsiproduk">
                <ul> 
                    <h3>Detail Produk</h3>
                    <li><p><?= $row["nama_produk"] ?></p></li>
                    <li><p><?= $row["harga"] ?></p></li>
                    <li><p><?= $row["stok"] ?></p></li>
                    <li><p><?= $row["detail_barang"] ?></p></li>
                </ul>
            </div>
            <?php } ?> -->

        <!-- </div>
    </div> -->
    <!-- <div class="button-container">
        <a href="keranjang.php"></a><button>Beli</button>
        <button>Simpan</button> -->
    <!-- </div> -->
</body>
</html>

