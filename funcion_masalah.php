<?php
function register ($data){

    $nama =$data['nama'];
    $laporan=$data['laporan'];
    $RT=$data['Rt'];
    $tanggal =$data["tanggal_waktu"];

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

$query = "INSERT INTO laporan_masalah VALUES ('','$nama','$laporan','$RT','$tanggal')";
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

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

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



