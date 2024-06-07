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
            <th>Isi</th>
            <th>Tanggal & Waktu</th>
            <th>Progres</th>



        </tr>
    


<?php

session_start();

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $user_id = $_SESSION['iduser'];
    
    $sql = "SELECT * FROM laporan_masalah WHERE iduser = '$user_id'";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        while($data = $result->fetch_assoc()) {

?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["laporan"];?></td>
    <td><?php echo $data["tanggal_waktu"];?></td>
    <td><?php echo $data["status"];?></td>
    
    <?php }?>
    <?php }?>
    <?php }?>
</tr>
</table>
</div>
<div> 
    <ul class="pading">
      <li><a href="laporan_masalah_user.php" class ="pencet">Kembali</a></li>
    </ul>
  </div>
</section>

</body> 
 <footer>
        <p class="akhir">&copy; 2023 Landing Page. ZIP LAST.</p>
      </footer>
</html>
<?php


session_start();

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');


?>
