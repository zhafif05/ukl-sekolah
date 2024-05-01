
<?php

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');


//cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $jenis_sampah = $_POST['jenis_sampah']; 
    $berat_sampah = $_POST['berat_sampah'];
    $tanggal_waktu = $_POST['tanggal_waktu'];
    $lokasi_pembuangan = $_POST['lokasi_pembuangan'];
    
    //buat query update
    $result = mysqli_query($mysqli, "UPDATE laporan_sampah SET jenis_sampah='$jenis_sampah', berat_sampah='$berat_sampah', tanggal_waktu='$tanggal_waktu', lokasi_pembuangan='$lokasi_pembuangan' WHERE id=$id");
    header('location:edit_sampah.php');
} else {
    die("Akses dilarang...");
}


?>