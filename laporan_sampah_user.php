<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIP LAST</title>
    <link rel="stylesheet" href="lihat.css">
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
          <li ><a href="laporan_sampah_user.php"class="p">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_user.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_user.php">JADWAL KEBERSIHAN</a></li>
        </ul>
      </nav>
      </header>
      <section class="badan" >  
        <div>
          <h1>Laporan sampah</h1>
      </div>
      <body>
    <table border="1" align="center">
        <tr>
            <th >No</th>
            <th>Jenis Sampah</th>
            <th>Berat Sampah</th>
            <th>Tanggal & Waktu</th>
            <th>Lokasi Pembuangan</th>
        </tr>
    


<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM laporan_sampah ") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["jenis_sampah"];?></td>
    <td><?php echo $data["berat_sampah"];?></td>
    <td><?php echo $data["tanggal_waktu"];?></td>
    <td><?php echo $data["lokasi_pembuangan"];?></td>
    <?php }?>

</tr>
</table>
<div >
<a href="halaman utama_user.php" class="pencet">Kembali</a>
   </div>
</section>
 </body>

</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>