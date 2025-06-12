<?php
include '../koneksi.php';
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $penulis = $_POST['penulis'];
  $tanggal = $_POST['tanggal'];
  $isi = $_POST['isi'];

  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($tmp, "../uploads/artikel/$gambar");

  mysqli_query($conn, "INSERT INTO artikel (judul, penulis, tanggal, isi, gambar) 
    VALUES ('$judul', '$penulis', '$tanggal', '$isi', '$gambar')");
  header("Location: artikel_admin.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
   <style>

body {
  background: white;
  font-family: Arial, sans-serif;
}

.container {
    width: 300px;
    margin: 120px auto;
    padding: 30px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    text-align: left;
}

.container h2 {
    margin-bottom: 20px;
    color: #444;
}

form input[type="text"],
form input[type="number"],
form input[type="date"],
form textarea {
  width: 100%;
  padding: 8px 10px;
  margin-bottom: 5px;
  border: 1px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
}

form button,
form input[type="submit"] {
  width: 100%;
    padding: 10px;
    background: #F4E731;
    border: none;
    color: #333;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
}

form button:hover,
form input[type="submit"]:hover {
  background-color:rgb(233, 221, 58);
}
</style>
</head>
<body>
  <div class="container">
<h2>Tambah Artikel</h2>
<form method="POST" enctype="multipart/form-data">
  Judul: <input type="text" name="judul" required><br>
  Penulis: <input type="text" name="penulis" required><br>
  Tanggal: <input type="date" name="tanggal" required><br>
  Gambar: <input type="file" name="gambar" required><br>
  Isi Artikel:<br>
  <textarea name="isi" rows="10" cols="50" required></textarea><br>
  <button type="submit" name="submit">Simpan</button>
</form>
</div>
</body>
</html>