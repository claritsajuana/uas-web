<?php
include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$nomor_kk = $_POST['nomor_kk'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

mysqli_query($koneksi, "INSERT INTO warga (nama_lengkap, nomor_kk, nik, alamat, status) VALUES ('$nama_lengkap', '$nomor_kk', $nik, '$alamat', '$status')");

header("Location: index.php");
?>