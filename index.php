<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

if(isset($_POST["login"])){

    $username= $_POST["username"];
    $password= $_POST["password"];

    $result = mysqli_query($mysqli," SELECT * FROM user WHERE username= '$username' AND password='$password'");

    //cek username
    if( mysqli_num_rows($result )>0){
    $row =mysqli_fetch_assoc($result );
    if($row['role']=="Ketua RT"){


        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'Ketua RT';
        //alihkan ke halaman dashboard admin
        header("location:halaman utama RT.php");

    //cek jika user login sebagai user        
    }
    else if($row['role']=="pengguna"){
        //buat session login dan username   
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'pengguna';
        //alihkan ke halaman dashboard user
        header("location:halaman utama_user.php");

    }else{

        //alihkan ke halaman user kembali
        header("location:index.php");
    }
}


    $error=true;
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>halaman Login</title>
        <link rel="stylesheet" href="login.css">
    
    </head>
    <body>
        <div class="container">
            <h1>LOG-IN</h1><br>
            <form action="" method="post">
                <input type="text" id="password" name="username" placeholder="username">
                <input type="password" id="username" name="password"placeholder="password">
                <?php if(isset($error)):?>
                <p align="center" style="color : red; font-style:italic;">Password / Username Salah Bosss</p>
                <?php endif;?>       
                <button type="submit"  name="login">Login</button>
            </form>
         <div>
           <a class="forgot" href="register baru.php">Register</a>    
            </div>
        </div>
    </body>    
</html>