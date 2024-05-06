<?php


$mysqli = new mysqli('localhost', 'root', '', 'manejemen_lingkungan');

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location:index.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM laporan_sampah WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
$jenis_sampah = $data['jenis_sampah']; 
$berat_sampah = $data['berat_sampah'];
$tanggal_waktu = $data['tanggal_waktu'];
$lokasi_pembuangan = $data['lokasi_pembuangan'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="laporan.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Laporan Sampah</h1>
            <form action="edit.php" method="post">
                <div class="form-group">
                    <label for="jenis_sampah">jenis_sampah</label>
                    <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah"value="<?php echo $jenis_sampah ;?>">
                </div>
                <div class="form-group">
                    <label for="berat_sampah">berat_sampah</label>
                    <input type="text" class="form-control" id="berat_sampah" name="berat_sampah" value="<?php echo $berat_sampah ;?>">
                </div>
                <div class="form-group">
                    <label for="tanggal_waktu">tanggal_waktu</label>
                    <input type="text" class="form-control" id="tanggal_waktu" name="tanggal_waktu" value="<?php echo $tanggal_waktu ;?>">
                </div>
                <div class="form-group">
                    <label for="lokasi_pembuangan">lokasi_pembuangan</label>
                    <input type="text" class="form-control" id="lokasi_pembuangan" name="lokasi_pembuangan" value="<?php echo $lokasi_pembuangan ;?>">>
                </div>
                <button name="simpan" type="submit" class="btn btn-primary" value="simpan">Kirim</button>
                <input type="hidden" name="id" value=<?php echo $_GET['id'] ;?>>


            </form>
        </div>
    </div>
</div>

</body>
</html>
