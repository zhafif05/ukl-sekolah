<?php
function register ($data){

    $nama =$data['nama'];
    $password =$data['password'];
    $username =$data['username'];
    $role=$data['role'];
    $email=$data['email'];
    $RT=$data['RT'];
    $alamat=$data['alamat'];

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

//sudah ada username 
$result = mysqli_query($mysqli," SELECT * FROM user WHERE username= '$username' ");

if(mysqli_fetch_assoc($result )){

    echo "<script>
    alert('Username Sudah Ada!')</script>";

    return false;

}

$query = "INSERT INTO user VALUES ('$nama','$password','$username','$role','','$email','$RT','$alamat')";
if ($mysqli->query($query)) {
    header("location:index.php");
    
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();

}
?>
