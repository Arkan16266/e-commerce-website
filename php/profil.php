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
    <title>Document</title>
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#profil">Profil</a>
    </div>
    <div class="container">
        <h1>profil</h1>
        <p>Kelola informasi Profil Anda</p>

        <div class="form">
            <ul>
                <li><p>Username :</p> <p> <?php echo htmlspecialchars($row["username"]); ?> </p></li>
                <li><p>Name :</p> <p><?php echo htmlspecialchars($row["name"]); ?></p> </li>
                <li><p>Email :</p> <p><?php echo htmlspecialchars($row["email"]); ?></p></li>
                <li><p>Password :</p> <p><?php echo htmlspecialchars($row["password"]); ?></p></li>
                <li><p>tambahkan alamat anda:</p><p></p></li>
            </ul>
        </div>
    </div>
</body>
</html>
