<?php
$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

require 'funcion_masalah.php';

if(isset($_POST['kirim2'])){

    if(kirim2($_POST)> 0){
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
          <li ><a href="laporan_sampah_RT.php">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_RT.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_RT.php" class="p">JADWAL KEBERSIHAN</a></li>
        </ul>
      </nav>
      </header>
    <section class="badan">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Jadwal_kebersihan</h1>
            <form action="" method="post">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            <div class="form-group">
                    <label for="RT">Rt</label>
                    <input type="number" min="1" max="10" class="form-control" id="RT" name="RT">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" >
                </div>
                <div class="form-group">
                    <label for="tugas">Tugas</label>
                    <input type="text" class="form-control" id="tugas" name="tugas" >
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam">>
                </div>
                <button name="kirim2" type="submit" class="btn btn-primary" value="kirim2">Kirim</button>


            </form>
        </div>
    </div>
</div>

<ul class="pading">
      <li><a href="jadwal_kebersihan_RT.php" class ="pencet">Kembali</a></li>
    </ul>

</section>
      </section>  
</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>