<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            background-color: #f4f4f4;
        }
        
       .container {
            display: flex;
        }
        
       .navbar-top {
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
        
        form {
            width: 100%;
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #5a5a5a;
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin: 10px 0 5px;
        }
        
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="checkbox"] {
            margin-right: 5px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 0;
            cursor: pointer;
            border-radius: 4px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            form {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar-top">
            <h1>Fantasy Apparel</h1>
        </div>
        <div class="navbar">
            <a href="index.php"><span class="material-symbols-outlined">home</span></a>
            <a href="kategori.html"><span class="material-symbols-outlined">category</span></a>
            <a href="costumer.html">Services</a>
            <a href="pesanan.php"><span class="material-symbols-outlined">local_mall</span></a>
            <a href="#"><span class="material-symbols-outlined">logout</span></a>
        </div>
    </div>
    <h1>Tambah Barang</h1>
    <form action="#" method="post" enctype="multipart/form-data" >
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="namaProduk">
        
        <label for="hargaProduk">Harga:</label>
        <input type="text" id="hargaProduk" name="hargaProduk">
        
        <label for="stokProduk">Stok:</label>
        <input type="text" id="stokProduk" name="stokProduk">

        <label for="variasi">Variasi:</label>
        <input type="text" id="variasi" name="variasi">
        
        <label for="katalog">Tambah Foto:</label>
        <input type="file" id="katalog" name="katalog" accept="image/*">
        
        <label for="detailBarang">Detail Barang:</label>
        <textarea id="detailBarang" name="detailBarang"></textarea>
        
        <input type="submit" value="Submit" name="proses">
    </form>
    <!-- <?php
    // Include the database connection file
    include 'koneksi.php';
    // Debugging statement
    echo ";dkf;dslkf";
    // Check if the form is submitted
    if(isset($_POST['proses'])){
        $target_dir = "../asset/";
        $target_file = $target_dir . basename($_FILES["katalog"]["name"]);
        move_uploaded_file($_FILES["katalog"]["tmp_name"], $target_file);
        echo $target_file;
        // Insert the new product into the database
        mysqli_query($koneksi, "insert into barang values(
        null,
        '$_POST[namaProduk]',
        '$_POST[hargaProduk]',
        '$_POST[stokProduk]',
        '$target_file',
        '$_POST[detailBarang]',
        '$_POST[variasi]')");

        // Display a success message
        echo "data barang baru telah tersimpan";
    }
    ?>
</body>
</html>

