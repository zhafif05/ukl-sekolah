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
    <table border="1" align="center" class="tabel" >
        <tr>
            <th >No</th>
            <th >Nama</th>
            <th >RT</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Tugas</th>
            <th>Jam</th>
            <th colspan="2">aksi</th>
            <th></th>
        </tr>
    


<?php

session_start();

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$RT = $_SESSION['RT'];

$query_mysql=mysqli_query($mysqli, "SELECT jadwal_kebersihan.id,jadwal_kebersihan.tanggal,jadwal_kebersihan.jam,jadwal_kebersihan.tugas,user.nama,
user.RT,user.alamat FROM jadwal_kebersihan JOIN user ON jadwal_kebersihan.id_user = user.iduser WHERE user.RT = '$RT';") or die (mysqli_error());

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
    <td ><span><a href='delet2.php?id=<?php echo $data["id"];?>' class="pencett">hapus</a></span></td>
    <td ><span><a href='pengganti2.php?id=<?php echo $data["id"];?>' class="pencett">edit data</a></span></td>
   
    <?php }?>

</tr>

</table>
</div>
  <div> 
    <ul class="pading">
      <li><a href="halaman utama RT.php" class ="pencet">Kembali</a></li>
      <li><a href="kirim_jadwal.php" class ="pencet">Kirim data</a></li>
    </ul>
  </div>
</section>
 </body>
   
