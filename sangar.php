<?php
include 'koneksi.php';

//kalau tidak ada id di query string
if(!isset($_GET['id_user'])){
    header('location:index.php');
}
$id_user = $_GET['id_user'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM user WHERE id_user=$id_user");

while($user_data = mysqli_fetch_array($result))
{
$email = $user_data['email']; 
$username = $user_data['username'];
$password = md5($user_data['password']);
$role = $user_data['role'];
}
?>