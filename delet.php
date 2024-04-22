<?php
$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');
    $id=$_GET["id"];

    $result= mysqli_query($mysqli, "DELETE FROM user WHERE id='$id'");
    header("location:view.php")

?>