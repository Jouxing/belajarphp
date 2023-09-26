<?php 
require 'functions.php';


// cek apakah tombol tambah sudah di tekan
if(isset($_POST['tambah'])){
 if(tambah($_POST) > 0) {
  echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'latihan1.php';
      </script>";
 } else {
  echo "data gagal ditambahkan!";
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">


  <ul>
    <li>
      <label>
        Nama :
        <input required type="text" autofocus name="nama">
      </label>
    </li>
    <li>
      <label>
        NRP :
        <input required type="text" name="nrp">
      </label>
    </li>
    <li>
      <label>
        Email :
        <input required type="email" name="email">
      </label>
    </li>
    <li>
      <label>
        Jurusan :
        <input required type="text" name="jurusan">
      </label>
    </li>
    <li>
      <label>
        Gambar : 
        <input type="text" name="gambar">
      </label>
    </li>
  </ul>
  <li>
    <button type="submit" name="tambah">Tambah Data</button>
  </li>
  
  
  
  </form>
  
  
</body>
</html>