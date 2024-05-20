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
            flex-direction: column; /* Added to align items vertically */
        }

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
            margin-bottom: 20px; /* Ensure spacing between title and form */
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
            <a href="#"><span class="material-symbols-outlined">
                home
            </span></a>
            <a href="kategori.php"><span class="material-symbols-outlined">
                category
            </span></a>
            <a href="#">Services</a>
            <a href="pesanan.php"><span class="material-symbols-outlined">
                local_mall
            </span></a>
            <a href="#"><span class="material-symbols-outlined">
                logout
            </span></a>
        </div>
    </div>

    <h1>Tambah Barang</h1> <!-- Moved above the form for vertical alignment -->
    <form action="sepatu.php" method="post" enctype="multipart/form-data"> <!-- Removed 'php/' from the action attribute -->
        <label for="namaBarang">Nama Barang:</label>
        <input type="text" id="namaBarang" name="namaBarang">

        <label for="katalog">Katalog:</label>
        <input type="file" id="katalog" name="katalog" accept="image/*">

        <label for="ready">Ready:</label>
        <input type="checkbox" id="ready" name="ready">

        <label for="sold">Sold:</label>
        <input type="checkbox" id="sold" name="sold">

        <label for="detailBarang">Detail Barang:</label>
        <textarea id="detailBarang" name="detailBarang"></textarea>

        <input type="submit" value="Submit">
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Menghentikan pengiriman formulir bawaan

                const formData = new FormData(form);
                fetch('sepatu.php', { // Removed 'php/' from the fetch URL
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        // Handle response jika sukses
                        console.log('Data berhasil dikirim');
                    } else {
                        // Handle response jika gagal
                        console.error('Gagal mengirim data');
                    }
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                });
            });
        });
    </script>
</body>
</html>

