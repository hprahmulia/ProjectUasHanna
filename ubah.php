<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $no_rumah = $_FILES['no_rumah'];
    $status = NULL;
    $users_id = NUll;

    }
    $sql = 'UPDATE warga SET ';
    $sql .= "nik = '{$nik}', nama = '{$nama}', ";
    $sql .= "jenis_kelamin = '{$jenis_kelamin}' no_hp = '{$no_hp}', alamat = '{$alamat}' ";
    $sql .= "no_rumah = '{$no_rumah}'";
    $sql .= "WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');

$id = $_GET['id'];
$sql = "SELECT * FROM warga WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);
function is_select($var, $val)
{
    if ($var == $val) return 'selected="selected"';
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Warga</title>
</head>

<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <div class="main">
            <form method="post" action="ubah.php" enctype="multipart/form-data">
                <div class="input">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo
                                                            $data['nik']; ?>" />
                </div>
                <div class="input">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo
                                                            $data['nama']; ?>" />
                    </select>
                </div>
                <div class="input">
                    <label>No Handphone</label>
                    <input type="text" name="no_hp" value="<?php echo
                                                                $data['no_hp']; ?>" />
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?php echo
                                                                $data['alamat']; ?>" />
                </div>
                <div class="input">
                    <label>No Rumah/label>
                    <input type="text" name="no_rumah" value="<?php echo
                                                            $data['no_rumah']; ?>" />
                </div>
                <div class="input">
                    <label>Status</label>
                    <input type="text" name="status" value="<?php echo
                                                            $data['status']; ?>" />
                </div>
                <div class="submit">
                    <input type="hidden" name="id" value="<?php echo
                                                            $data['id']; ?>" />
                    <input type="submit" name="submit" value="Simpan" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>