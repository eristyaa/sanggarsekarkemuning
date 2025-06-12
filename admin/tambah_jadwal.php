<?php
include('../koneksi.php');
?>

<?php
if (isset($_POST['tambah'])) {
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $tari = $_POST['tari'];
  $pengajar = $_POST['pengajar'];
  $lokasi = $_POST['lokasi'];
  $status = $_POST['status'];

  $conn->query("INSERT INTO jadwal_latihan (tanggal, jam, tari, pengajar, lokasi, status)
                VALUES ('$tanggal', '$jam', '$tari','$pengajar', '$lokasi', '$status')");

  echo "<script>alert('Jadwal berhasil ditambahkan'); window.location='latihan_admin.php';</script>";
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
    <h2>Tambah Jadwal Latihan</h2>

<form class="formgaleri" method="post" action="">
  <label>Tanggal:</label><br>
  <input type="date" name="tanggal" required><br><br>

  <label>Jam:</label><br>
  <input type="time" name="jam" required><br><br>

  <label>Nama Tari:</label><br>
  <input type="text" name="tari" required><br><br>

  <label>Nama Pengajar:</label><br>
  <input type="text" name="pengajar" required><br><br>

  <label>Lokasi:</label><br>
  <input type="text" name="lokasi" required><br><br>

  <label>Status:</label><br>
  <select name="status">
    <option value="Belum Terlaksana">Belum Terlaksana</option>
    <option value="Aktif">Aktif</option>
    <option value="Selesai">Selesai</option>
  </select><br><br>

  <button type="submit" name="tambah">Simpan</button>
</form>
</div>
</body>
</html>