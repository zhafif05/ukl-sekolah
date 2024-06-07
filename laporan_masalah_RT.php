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
            <th>Progres</th>


        </tr>
    


        <?php
                session_start();

                // Cek apakah sesi RT ada
                if(isset($_SESSION['RT'])) {
                    $RT = $_SESSION['RT'];

                    $nomor = 1;
                    $mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

                    if ($mysqli->connect_error) {
                        die("Koneksi gagal: " . $mysqli->connect_error);
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $sql = "SELECT laporan_masalah.idmasalah, laporan_masalah.tanggal_waktu, laporan_masalah.laporan, user.nama, user.RT, laporan_masalah.status
                                FROM laporan_masalah
                                JOIN user ON laporan_masalah.iduser = user.iduser
                                WHERE user.RT = '$RT'" ;

                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            while ($data = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$nomor}</td>
                                        <td>{$data['nama']}</td>
                                        <td>{$data['RT']}</td>
                                        <td>{$data['laporan']}</td>
                                        <td>{$data['tanggal_waktu']}</td>
                                        <td>{$data['status']}</td>
                                      </tr>";
                                $nomor++;
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada data untuk RT ini</td></tr>";
                        }
                    }
                    $mysqli->close();
                } else {
                    echo "<tr><td colspan='6'>Sesi RT tidak ditemukan. Harap login terlebih dahulu.</td></tr>";
                }
                ?>

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