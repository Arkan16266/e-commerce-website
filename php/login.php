<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: index.php");
        }
        else{
            echo "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo "<script> alert('Wrong Username or Email'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="form">
    <form class="" action="" method="post" autocomplete="off">
        <h2>Login</h2>
        <!-- <label for="usernameemail"> Username or Email :</label> -->
        <input class="username" type="text" name="usernameemail" id = "usernameemail" required value="" placeholder="Username/Email"><br>
        <!-- <label for="usernameemail"> Password</label> -->
        <input class="password" type="password" name="password" id = "password" required value="" placeholder="Password" ><br>
        <button type="submit" name= "submit">Login</button>
        <br>
        <a href="regisration.php">Regisration</a>
    </form>
    </div>
    <br>
</body>
</html>