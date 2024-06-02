<?php
$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

require 'funcion.php';

if(isset($_POST['register'])){

    if(register($_POST)> 0){
        echo "<script>
        alert('User Baru Berhasil Ditambahkan!')</script>";
    }
    else{
        echo mysqli_error($mysqli );
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Register only</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
                <input type="hidden" value="pengguna" id="role" name="role">
                <div class="form-group">
                    <label for="username">RT</label>
                    <input type="number" min="1" max="10" class="form-control" id="RT" name="RT" placeholder="Masukkan RT">
                </div>
                <div class="form-group">
                    <label for="username">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                </div>
                <button name="register" type="submit" class="btn btn-primary">register</button>


            </form>
        </div>
    </div>
</div>

</body>
</html>