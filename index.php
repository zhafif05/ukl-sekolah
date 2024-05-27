<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

if(isset($_POST["login"])){

    $email= $_POST["email"];
    $password= $_POST["password"];

    $result = mysqli_query($mysqli," SELECT * FROM user WHERE email= '$email' AND password='$password'");

    //cek username
    if( mysqli_num_rows($result )>0){
    $row =mysqli_fetch_assoc($result );
    $iduser = $row['iduser'];
    $_SESSION['iduser'] = $iduser;

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
                <input type="email" id="email" name="email" placeholder="email">
                <input type="password" id="password" name="password"placeholder="password">
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