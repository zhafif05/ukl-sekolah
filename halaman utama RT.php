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
    <link rel="stylesheet" href="hlm.css">
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
          <a href="logout.php" class="btn">Logout</a>
        </ul>

      </nav>
      </header>
      <section class="hero">
            <div class="container">
                <h2>Selamat Datang di Aplikasi Menejemen Lingkungan </h2>
                <p>Platform untuk melaporkan dan mengelola masalah lingkungan di pedesaan.</p>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="feature">
                    <img src="https://4.bp.blogspot.com/-UhAdqTS55IM/VLVivGxnezI/AAAAAAAABF8/Cob5OUhew0o/s1600/Surat.jpg" alt="Laporan Sampah Icon">
                    <h3>Laporan Sampah</h3>
                    <p>Laporkan penumpukan sampah di daerah Anda untuk pengelolaan yang lebih baik.</p>
                </div>
                <div class="feature">
                    <img src="https://i1.wp.com/www.transmediariau.com/assets/berita/original/45928405679-header+sampah1.png" alt="Masalah Lingkungan Icon">
                    <h3>Masalah Lingkungan</h3>
                    <p>Identifikasi dan laporkan masalah lingkungan lainnya yang membutuhkan perhatian.</p>
                </div>
                <div class="feature">
                    <img src="https://2.bp.blogspot.com/-Y4gMRtYl7xI/WXyczlZTlHI/AAAAAAAAAq4/drNv9lSgDEknp3cuYVYbYhz6Ixvi4hkEACLcBGAs/s1600/gotong%2Broyong%2Bdi%2Bkawasan%2Bperumahan.jpg" alt="Jadwal Kegiatan Icon">
                    <h3>Jadwal Kegiatan</h3>
                    <p>Ikuti kegiatan pembersihan lingkungan yang telah dijadwalkan oleh komunitas.</p>
                </div>
            </div>
        </section>
</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>