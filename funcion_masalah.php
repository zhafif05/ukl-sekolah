<?php
session_start();
function submit ($data){

    $laporan= $data['laporan'];
    $tanggal = $data["tanggal_waktu"];
    $id_user = $_SESSION['iduser'];

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query = "INSERT INTO laporan_masalah VALUES ('','$laporan','$tanggal', '$id_user','Belum Selesai')";
if ($mysqli->query($query)) {

    echo "<script>
    alert('Data Sudah Terkirim!')</script>";

} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();

}





function kirim ($data){

$jenis_sampah=$data['jenis_sampah'];
$berat_sampah=$data['berat_sampah'];
$tanggal_waktu=$data['tanggal_waktu'];
$lokasi_pembuangan =$data["lokasi_pembuangan"];
$id_user = $_SESSION['iduser'];

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query = "INSERT INTO laporan_sampah VALUES ('','$id_user','$jenis_sampah','$berat_sampah','$tanggal_waktu','$lokasi_pembuangan')";
if ($mysqli->query($query)) {

echo "<script>
alert('Data Sudah Terkirim!')</script>";

} else {
echo "Error: " . $mysqli->error;
}

$mysqli->close();
}



function kirim2 ($data){

    $tanggal = $_POST['tanggal'];
    $tugas = $_POST['tugas'];
    $jam = $_POST['jam'];
    $id_user = $_SESSION['iduser'];

    $mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');
    
    $query = "INSERT INTO jadwal_kebersihan VALUES ('','$id_user','$tanggal','$tugas','$jam')";

    if ($mysqli->query($query)) {
    
    echo "<script>
    alert('Data Sudah Terkirim!')</script>";
    
    } else {
    echo "Error: " . $mysqli->error;
    }
    
    $mysqli->close();
    }



?>



