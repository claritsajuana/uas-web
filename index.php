<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="css/table.css">
<h2>Daftar Warga</h2>
<a href="tambah.php">+ Tambah Warga</a>
<table border="1">
<tr>
    <th>No</th>
    <th>Nama lengkap</th>
    <th>Nomor KK</th>
    <th>NIK</th>
    <th>Alamat</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM warga");
while ($b = mysqli_fetch_array($data)) {
    echo "<tr>
        <td>$no</td>
        <td>{$b['nama_lengkap']}</td>
        <td>{$b['nomor_kk']}</td>
        <td>{$b['nik']}</td>
        <td>{$b['alamat']}</td>
        <td>{$b['status']}</td>
        <td>
            <a href='edit.php?id={$b['id']}'>Edit</a> |
            <a href='hapus.php?id={$b['id']}' onclick='return confirm(\"Hapus?\")'>Hapus</a>
        </td>
    </tr>";
    $no++;
}
?>
</table>
