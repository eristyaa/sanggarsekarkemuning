<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM kegiatan WHERE id = $id");
    $data = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tahun = $_POST['tahun'];
    $penampilan = $_POST['penampilan'];
    $acara = $_POST['acara'];

    $conn->query("UPDATE kegiatan SET tahun = '$tahun', penampilan = '$penampilan', acara = '$acara' WHERE id = $id");
    header("Location: kegiatan&prestasi_admin.php");
    exit;
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
  margin-bottom: 10px;
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
    <h2>Edit Kegiatan</h2>

<form method="post">
    <label>Tahun:</label><br>
    <input type="text" name="tahun" value="<?= $data['tahun'] ?>"><br>
    <label>Penampilan:</label><br>
    <input type="text" name="penampilan" value="<?= $data['penampilan'] ?>"><br>
    <label>Acara:</label><br>
    <input type="text" name="acara" value="<?= $data['acara'] ?>"><br><br>
    <button type="submit">Simpan</button>
</form>
</div>
</body>
</html>