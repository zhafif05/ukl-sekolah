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
          <li><a href="laporan_masalah_RT.php"class="p">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_RT.php">JADWAL KEBERSIHAN</a></li>
        </ul>
      </nav>
      </header>
      <section class="badan" >  
        <div>
          <h1>Laporan Sampah</h1>
      </div>
      <div class="center">
    <table border="1" align="center">
        <tr>
            <th >No</th>
            <th>Nama</th>
            <th>RT</th>
            <th>Isi</th>
            <th>Tanggal & Waktu</th>


        </tr>
    


<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM laporan_masalah ") or die (mysqli_error());


$resutl=mysqli_query($mysqli, "SELECT laporan_masalah.idmasalah,laporan_masalah.laporan,laporan_masalah.tanggal_waktu,user.nama,user.RT FROM laporan_masalah JOIN user ON laporan_masalah.iduser = user.iduser") or die (mysqli_error());


while($data= mysqli_fetch_array($resutl)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["nama"];?></td>
    <td><?php echo $data["RT"];?></td>
    <td><?php echo $data["laporan"];?></td>
    <td><?php echo $data["tanggal_waktu"];?></td>

    <?php }?>

</tr>
</table>
</div>
<div> 
    <ul class="pading">
      <li><a href="halaman utama RT.php" class ="pencet">Kembali</a></li>
    </ul>
  </div>
</section>

</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>