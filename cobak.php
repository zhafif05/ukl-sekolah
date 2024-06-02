<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIP LAST</title>
    <link rel="stylesheet" href="tabel.css">
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
          <li ><a href="jadwal_kebersihan_RT.php"class="p">JADWAL KEBERSIHAN</a></li>

        </ul>
      </nav>
      </header>
      <section class="badan" >  
      <h1>Jadwal Kebersihan</h1>
      <div class="center">
<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'intako');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM tas ") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>
<ul>
    <li><?php echo $data["nama"];?></li>
    <?php }?>
</ul>
</div>
  <div> 
    <ul class="pading">
      <li><a href="halaman utama RT.php" class ="pencet">Kembali</a></li>
      <li><a href="kirim_jadwal.php" class ="pencet">Kirim data</a></li>
    </ul>
  </div>
</section>
 </body>
   
