<?php


include 'koneksi.php';

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location:view.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM user WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
$nama = $data['nama']; 
$username = $data['username'];
$password = md5($data['password']);
$role = $data['role'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>halo</h1></header>
    <form method="POST"action="edit.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama ;?>"></td>
            </tr>
            <tr>
            <td>username</td>    
            <td><input type="text" name="username" value="<?php echo $username ;?>"></td></tr>
            <tr>
            <td>password</td>    
            <td><input type="text" name="password" value="<?php echo $password ;?>"></td></tr>
            <tr>
                <td>role</td>
                <td>
                    <select name="role" id="role" require>
                        <option disabled selected><?php echo $role ?></option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'] ;?>></td>
                <td><input type="submit" name="simpan" value="simpan"></td>   
            </tr>
        
        </table>
                
    </form>
</body>
</html>