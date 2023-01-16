<?php
error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $no_rumah = $_POST['no_rumah'];
    $status = $_POST['status'];

    $sql = 'INSERT INTO warga (nik, nama, jenis_kelamin, no_hp,
    alamat, no_rumah, status) ';
    $sql .= "VALUE ('{$nik}', '{$nama}','{$jenis_kelamin}',
    '{$no_hp}', '{$alamat}', '{$no_rumah}', '{$status})";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Tambah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Tambah Data Warga</h1>
            <div class="main">
                <form method="post" action="tambah.php"
                enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">NIK</span>
                    <input type="text" class="form-control" placeholder="Harus Di Isi" aria-label="nik" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">NAMA</span>
                    <input type="text" class="form-control" aria-label="nama" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3 row">
                    <label>Jenis Kelamin</label>
                    <div class="options">
                        <label class="radio">
                            <input name="jenis_kelamin" type="radio" value="L" checked="checked">Laki Laki</option>
                        </label>
                        <label class="radio">
                            <input name="jenis_kelamin" type="radio" value="P">Perempuan</option>
                        </label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">No. Handphone</span>
                    <input type="text" class="form-control" aria-label="no_hp" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text" id="addon-wrapping">Alamat</span>
                    <input type="text" class="form-control" aria-label="alamat" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">No. Rumah</span>
                    <input type="text" class="form-control" aria-label="no_rumah" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="submit">
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>