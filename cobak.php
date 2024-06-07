<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {


$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');


$query = "SELECT laporan_masalah.idmasalah,laporan_masalah.tanggal_waktu,laporan_masalah.laporan,user.nama,user.RT,user.alamat FROM laporan_masalah JOIN user ON laporan_masalah.iduser = user.iduser ";
if ($mysqli->query($query)) {
    ;
    
} else {
    echo "Error: " . $mysqli->error;
}
//sudah ada username 
$result = mysqli_query($mysqli," SELECT * FROM user WHERE RT= ' $_SESSION['RT'] ' ");

if(mysqli_fetch_assoc($result )){

  header("location:laporan_masalah_RT.php");


}


$mysqli->close();

}
?>
