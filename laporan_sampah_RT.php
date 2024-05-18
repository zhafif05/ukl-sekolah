<?php
$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

require 'funcion_masalah.php';

if(isset($_POST['kirim'])){

    if(kirim($_POST)> 0){
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
          <li><a href="halaman utama RT.php">HOME </a></li>
          <li ><a href="laporan_sampah_RT.php"class="p">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_RT.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_RT.php">JADWAL KEBERSIHAN</a></li>
        </ul>
      </nav>
      </header>
      <section class="badan">
        <div class="kosongan"></div> 
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Laporan Sampah</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="jenis_sampah">jenis_sampah</label>
                    <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" placeholder="Masukkan jenis_sampah">
                </div>
                <div class="form-group">
                    <label for="berat_sampah">berat_sampah</label>
                    <input type="text" class="form-control" id="berat_sampah" name="berat_sampah" placeholder="Maksukan berat_sampah">
                </div>
                <div class="form-group">
                    <label for="tanggal_waktu">tanggal_waktu</label>
                    <input type="date" class="form-control" id="tanggal_waktu" name="tanggal_waktu" placeholder="Masukkan tanggal_waktu">
                </div>
                <div class="form-group">
                    <label for="lokasi_pembuangan">lokasi_pembuangan</label>
                    <input type="text" class="form-control" id="lokasi_pembuangan" name="lokasi_pembuangan" placeholder="Masukkan lokasi_pembuangan">
                </div>
                <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>



            </form>
        </div>
    </div>
</div>
<div align="center" >
    <ul class="pading">
      <li><a href="halaman utama RT.php" class ="pencet">Kembali</a></li>
      <li><a href="edit_sampah.php" class ="pencet">lihat data</a></li>
    </ul>
</div>
      </section>  
</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>
</html>