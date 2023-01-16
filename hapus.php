<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM warga WHERE nama = '{$id}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
?>