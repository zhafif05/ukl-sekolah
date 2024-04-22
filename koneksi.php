<?php
$databaseHost = "localhost";
$databaseName = "web tanaman langka";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect ($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if($mysqli){

}
else{
    echo "koneksi db gagal.<br/>";
}

?>