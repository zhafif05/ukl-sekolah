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
?>
