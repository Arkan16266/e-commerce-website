<?php
require "config.php";
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Username or Email Has Already Taken'); </script>";
    } else {
        if($password == $confirmpassword){
            $query = "INSERT INTO user VALUES ('','$username', '$email', '$password',  '$name')";
            mysqli_query($conn,$query);
            echo "<script> alert('Registration Berhasil'); </script>";
        } else {
            echo "<script> alert('Password dan Confirm Password Tidak Sama!!'); </script>";
        }
    }
}
?>


<style>
    body {
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisration</title>
    <link rel="stylesheet" href="regisration.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- <div class="container"> -->
        <div class="form">
    <h2>Regisration</h2>
    <form class="" action="" method="post" autocomplete="off" >
        <div class="name">
        <!-- <label for="name">Name</label> -->
        <input type="text" name="name" id = "name" required value="" placeholder="Name" > <br>
        </div>
        <div class="username">
        <!-- <label for="username">Username : </label> -->
        <input type="text" name="username" id = "username" required value="" placeholder="Username"> <br>
        </div>
        <div class="email">
        <!-- <label for="email">Email</label> -->
        <input type="email" name="email" id = "email" required value="" placeholder="Email" > <br>
        </div>
        <div class="password">
        <!-- <label for="password">Password</label> -->
        <input type="password" name="password" id = "password" required value="" placeholder="Create your password" > <br>
        </div>
        <div class="confirmpassword">
        <!-- <label for="confirmpassword">Confirm Password</label> -->
        <input type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder ="Confirm Password" > <br>
        </div>
        <button type="submit" name="submit" >Register</button>
        <p style="margin-top: 10px;">Sudah Memiliki akun?<a href="login.php">Login</a></p>
    </form>
    <!-- </div> -->
    <!-- <br> -->
</div>
</body>
</html>