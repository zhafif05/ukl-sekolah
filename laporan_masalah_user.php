<?php
$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

require 'funcion_masalah.php';

if(isset($_POST['submit'])){

    if(submit($_POST)> 0){
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIP LAST</title>
    <link rel="stylesheet" href="laporan2.css">
</head>
<body >
    <header class="kepala">
      <div class="nama">
        <div class="namapertama">ZIP</div>
        <div class="namaterakhir"> LAST</div>
      </div>
      <nav >
        <ul  class="menubar">
          <li><a href="halaman utama_user.php">HOME </a></li>
          <li ><a href="laporan_sampah_user.php">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_user.php"class="p">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_user.php">JADWAL KEBERSIHAN</a></li>
        </ul>
      </nav>
      </header>
      <section class="badan">   
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Laporan Masalah</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="laporan">Laporan</label>
                    <input type="text" class="form-control" id="laporan" name="laporan" placeholder="Maksukan Laporan">
                </div>
                <div class="form-group">

                    <label for="tanggal_waktu">Tanggal/Waktu</label>
                    <input type="date" class="form-control" id="tanggal_waktu" name="tanggal_waktu" placeholder="Masukkan Tanggal">
                </div>
                <input type="hidden" name="iduser" 
                value=<?php $mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');
                $result = mysqli_query($mysqli," SELECT * FROM user WHERE iduser ");
                ?>>
                <button name="submit" type="submit" class="btn btn-primary">Kirim</button>


            </form>
        </div>
    </div>
</div>
<div>
<ul class="pading">
    <li><a href="halaman utama_user.php" class ="pencet">Kembali</a></li>
    <form action="user_history.php" method="get">
    <button type="submit">Lihat History</button>
    </form>

    </ul>
   </div>
      </section>  
</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>