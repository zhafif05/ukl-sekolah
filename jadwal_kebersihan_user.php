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
          <li ><a href="laporan_sampah_user.php">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_user.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_user.php"class="p">JADWAL KEBERSIHAN</a></li>

        </ul>
      </nav>
      </header>
      <section class="badan" >  <h1>Jadwal Kebersihan</h1>
      <body>
    <table border="1" >
        <tr>
            <th >No</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Tugas</th>
            <th>Jam</th>
        </tr>
    


<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM jadwal_kebersihan ") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["lokasi"];?></td>
    <td><?php echo $data["tanggal"];?></td>
    <td><?php echo $data["tugas"];?></td>
    <td><?php echo $data["jam"];?></td>
    <?php }?>

</tr>
</table><div>
<a href="halaman utama_user.php" class="pencet">Kembali</a>
  </div> 
</section>
 </body>
   
