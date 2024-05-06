<?php
function register ($data){

    $nama =$data['nama'];
    $laporan=$data['laporan'];
    $tanggal =$data["tanggal_waktu"];
    $RT=$data["iduser"];
    

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query = "INSERT INTO laporan_masalah VALUES ('','$nama','$laporan','$tanggal','$RT')";
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

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$query = "INSERT INTO laporan_sampah VALUES ('','$jenis_sampah','$berat_sampah','$tanggal_waktu','$lokasi_pembuangan')";
if ($mysqli->query($query)) {

echo "<script>
alert('Data Sudah Terkirim!')</script>";

} else {
echo "Error: " . $mysqli->error;
}

$mysqli->close();
}

?>



