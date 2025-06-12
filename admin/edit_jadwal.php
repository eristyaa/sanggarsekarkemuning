<?php
include('../koneksi.php');

if (!isset($_GET['id'])) {
  echo "<script>alert('ID tidak ditemukan'); window.location='latihan_admin.php';</script>";
  exit;
}

$id = $_GET['id'];
$query = $conn->query("SELECT * FROM jadwal_latihan WHERE id = $id");

if ($query->num_rows == 0) {
  echo "<script>alert('Data tidak ditemukan'); window.location='latihan_admin.php';</script>";
  exit;
}

$data = $query->fetch_assoc();
?>

<?php
if (isset($_POST['update'])) {
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $tari = $_POST['tari'];
  $pengajar = $_POST['pengajar'];
  $lokasi = $_POST['lokasi'];
  $status = $_POST['status'];

  $conn->query("UPDATE jadwal_latihan 
                SET tanggal='$tanggal', jam='$jam', tari='$tari', pengajar='$pengajar', lokasi='$lokasi', status='$status' 
                WHERE id = $id");

  echo "<script>alert('Jadwal berhasil diupdate'); window.location='latihan_admin.php';</script>";
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
    <h2>Edit Jadwal Latihan</h2>

<form class="formgaleri" method="post" action="">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">

  <label>Tanggal:</label><br>
  <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" required><br><br>

  <label>Jam:</label><br>
  <input type="time" name="jam" value="<?= $data['jam'] ?>" required><br><br>

  <label>Nama Tari:</label><br>
  <input type="text" name="tari" value="<?= $data['tari'] ?>" required><br><br>

  <label>Nama Pengajar:</label><br>
  <input type="text" name="pengajar" value="<?= $data['pengajar'] ?>" required><br><br>

  <label>Lokasi:</label><br>
  <input type="text" name="lokasi" value="<?= $data['lokasi'] ?>" required><br><br>

  <label>Status:</label><br>
  <select name="status">
    <option value=" Belum Terlaksana" <?= $data['status'] == 'Belum Terlaksana' ? 'selected' : '' ?>>Belum Terlaksana</option>
    <option value="Aktif" <?= $data['status'] == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
    <option value="Selesai" <?= $data['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
  </select><br><br>

  <button type="submit" name="update">Simpan</button>
</form>
</div>
</body>
</html>