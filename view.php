<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>password</th>
            <th>email</th>
            <th>aksi</th>
        </tr>
    


<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'web tanaman langka');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM user ") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["nama"];?></td>
    <td><?php echo $data["password"];?></td>
    <td><?php echo $data["email"];?></td>
    <td><span><a href='delet.php?id=<?php echo $data["id"];?>'>hapus</a></span></td>
    <?php ?>
    <td><span><a href='view anyar.php?id=<?php echo $data["id"];?>'>edit data</a></span></td>
    <?php }?>
v
</tr>
</table>
<a href="index.php">Kembali</a>
</body>
</html>

