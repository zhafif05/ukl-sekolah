<?php
$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');
    $id=$_GET["id"];

    $result= mysqli_query($mysqli, "DELETE FROM laporan_sampah WHERE id='$id'");
    header("location:edit_sampah.php")

    $mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');
    $id=$_GET["id"];

    $result= mysqli_query($mysqli, "DELETE FROM jadwal_kebersihan WHERE id='$id'");
    header("location:jadwal_kebersihan.php")



?>

