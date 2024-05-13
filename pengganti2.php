<?php


$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location:index.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM jadwal_kebersihan WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
$lokasi = $data['lokasi']; 
$tanggal = $data['tanggal'];
$tugas = $data['tugas'];
$jam = $data['jam'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="laporan2.css">
</head>
<body>
    <section class="badan">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Jadwal_kebersihan</h1>
            <form action="edit.php" method="post">
                <div class="form-group">
                    <label for="lokasi">lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi"value="<?php echo $lokasi ;?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal ;?>">
                </div>
                <div class="form-group">
                    <label for="tugas">tugas</label>
                    <input type="text" class="form-control" id="tugas" name="tugas" value="<?php echo $tugas ;?>">
                </div>
                <div class="form-group">
                    <label for="jam">jam</label>
                    <input type="text" class="form-control" id="jam" name="jam" value="<?php echo $jam ;?>">>
                </div>
                <button name="simpan2" type="submit" class="btn btn-primary" value="simpan2">Kirim</button>
                <input type="hidden" name="id" value=<?php echo $_GET['id'] ;?>>


            </form>
        </div>
    </div>
</div>
</section>
</body>
</html>
