
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
    $mysqli->close();

}

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

if(isset($_POST['simpan2'])){
    $id = $_POST['id'];
    $lokasi = $_POST['lokasi']; 
    $tanggal = $_POST['tanggal'];
    $tugas = $_POST['tugas'];
    $jam = $_POST['jam'];
    
    //buat query update
    $result = mysqli_query($mysqli, "UPDATE jadwal_kebersihan SET lokasi='$lokasi', tugas='$tugas', tanggal='$tanggal', jam='$jam' WHERE id=$id");
    header('location:jadwal_kebersihan_RT.php');

}
?>