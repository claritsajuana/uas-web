<?php
$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_rt");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>