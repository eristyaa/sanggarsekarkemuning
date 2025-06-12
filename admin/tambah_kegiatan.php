<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tahun = $_POST['tahun'];
    $penampilan = $_POST['penampilan'];
    $acara = $_POST['acara'];

    $conn->query("INSERT INTO kegiatan (tahun, penampilan, acara) VALUES ('$tahun', '$penampilan', '$acara')");
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
    <h2>Tambah Kegiatan</h2>
 <form method="post">
    <label>Tahun:</label><br>
    <input type="text" name="tahun"><br>
    <label>Penampilan:</label><br>
    <input type="text" name="penampilan"><br>
    <label>Acara:</label><br>
    <input type="text" name="acara"><br><br>
    <button type="submit">Tambah</button>
</form>
</div>
</body>
</html>