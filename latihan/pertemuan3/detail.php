<?php 
  require 'functions.php';
  // ambil id dari url
  $id = $_GET['id'];
  // query mahasiswa berdasarkan id
  $m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img width="100" src="img/<?= $m['gambar'] ?>" alt=""></li>
    <li>NRP : <?= $m['nrp'] ?> </li>
    <li>Nama : <?= $m['nama'] ?></li>
    <li>Email : <?= $m['email'] ?></li>
    <li>Jurusan : <?= $m['jurusan'] ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan1.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>
</html>