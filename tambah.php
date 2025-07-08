<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="css/form.css">
<h2>Tambah warga</h2>
<form action="proses_tambah.php" method="POST">
  <input type="text" name="nama_lengkap" placeholder="nama_lengkap" required><br>
  <input type="number" name="nomor_kk" placeholder="nomor_kk" required><br>
  <input type="number" name="nik" placeholder="nik" required><br>
  <input type="text" name="alamat" placeholder="alamat" required><br>
  <input type="text" name="status" placeholder="status" required><br>
  
  <select name="status">
    <option>kepala keluarga</option>
    <option>anggota keluarga</option>
  </select><br>
  <button type="simpan perubahan">Simpan</button>
</form>