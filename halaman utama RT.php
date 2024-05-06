<?php
session_start();
if(isset($_POST['logout'])){
  session_unset();
  session_destroy();
  header ('location:index.php');

}

?>


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
          <li><a href="halaman utama RT.php" class="p">HOME </a></li>
          <li ><a href="laporan_sampah_RT.php">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_RT.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_RT.php">JADWAL KEBERSIHAN</a></li>
          <form class="logout-btn"  action="index.php" method="post"><button type="submit" name="logout">logout</button></form>

        </ul>

      </nav>
      </header>
      <section class="badan" >
        <div>Selamat Datang !!</div>
      </section>  
</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>