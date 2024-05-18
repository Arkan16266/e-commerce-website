<?php
require 'config.php'
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"]
    $duplicate = mysqli_query($conn, "SELECT * FORM user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert ('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO user VALUES('', '$name', '$username','$email', '$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Regisration Sucsessful'); </script>"
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>" 
        }
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="container">
        <div class="pembungkus_login">
        <header>
            <h1>Sign In</h1>
        </header>
       <form action="" method="get">
        <input class="input_border" type="text" placeholder="Email">
        <input class="input_border" type="text" placeholder="Name">
        <input class="input_border" type="text" placeholder="Buat Password">
        <input class="input_border" type="password" placeholder="Konfirmasi Password">
       </form> 
       <div class="button">
      <!-- HTML !-->
<button class="button-13" role="button">Daftar</button>
    </div>
    <p style="margin-top: 30px;">Sudah punya akun? <a href="login.html">Login </a></p>
    </div>
</div>
</body>
</html>