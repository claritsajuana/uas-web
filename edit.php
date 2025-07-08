<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM warga WHERE id=$id");
$b = mysqli_fetch_assoc($data);
?>
<link rel="stylesheet" href="css/form.css">
<h2>Edit Buku</h2>
<form action="proses_edit.php" method="POST">
  <input type="hidden" name="id" value="<?= $b['id'] ?>">
  <input type="text" name="nama_lengkap" value="<?= $b['nama_lengkap'] ?>" required><br>
  <input type="number" name="nomor_kk" value="<?= $b['nomor_kk'] ?>" required><br>
  <input type="text" name="alamat" value="<?= $b['alamat'] ?>" required><br>
  <select name="status">
    <option <?= $b['status']=='kepala keluarga'?'selected':'' ?>>kepala keluarga</option>
    <option <?= $b['status']=='anggota keluarga'?'selected':'' ?>>anggota keluarga</option>
  </select><br>
  <button type="simpan perubahan">Update</button>
</form>