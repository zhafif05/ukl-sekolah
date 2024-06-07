<?php

$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

$id=$_GET["id"];

$result= mysqli_query($mysqli, "DELETE FROM jadwal_kebersihan WHERE id='$id'");
header("location:jadwal_kebersihan_RT.php")



?>