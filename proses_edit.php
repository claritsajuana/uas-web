<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$nomorkk = $_POST['nomor_kk'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

mysqli_query($koneksi, "UPDATE warga SET 
  nama_lengkap='$nama_lengkap', nomor_kk=$nomor_kk, 
  nik=$nik, alamat='$alamat', 
  status='$status',
  WHERE id=$id");

header("Location: index.php");
?>