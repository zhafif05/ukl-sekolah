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
          <li><a href="halaman utama_user.php">HOME </a></li>
          <li ><a href="laporan_sampah_user.php">LAPORAN SAMPAH</a></li>
          <li><a href="laporan_masalah_user.php">LAPORAN MASALAH</a></li>
          <li ><a href="jadwal_kebersihan_user.php"class="p">JADWAL KEBERSIHAN</a></li>

        </ul>
      </nav>
      </header>
      <section class="badan" >  
      <h1>Jadwal Kebersihan</h1>
      <div class="center">
    <table border="1" align="center">
        <tr>
            <th >No</th>
            <th >Nama</th>
            <th >RT</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Tugas</th>
            <th>Jam</th>
        </tr>
    


<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query_mysql=mysqli_query($mysqli, "SELECT 
jadwal_kebersihan.tanggal,
jadwal_kebersihan.jam,
jadwal_kebersihan.tugas,
user.nama,
user.RT,
user.alamat
FROM 
jadwal_kebersihan
JOIN 
user 
ON 
jadwal_kebersihan.id_user = user.iduser;") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["nama"];?></td>
    <td><?php echo $data["RT"];?></td>
    <td><?php echo $data["alamat"];?></td>
    <td><?php echo $data["tanggal"];?></td>
    <td><?php echo $data["tugas"];?></td>
    <td><?php echo $data["jam"];?></td>
    <?php }?>

</tr>

</table>
</div>
<div>
<ul class="pading">
      <li><a href="halaman utama_user.php" class ="pencet">Kembali</a></li>
    </ul>
   </div>
</section>
 </body>
   
