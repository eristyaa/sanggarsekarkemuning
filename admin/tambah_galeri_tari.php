<?php
include('../koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tanggal = $_POST['tanggal'];
  $nama_file = $_FILES['foto']['name'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  $folder = "../uploads/";

  // Pindahkan file ke folder uploads
  if (move_uploaded_file($tmp_file, $folder . $nama_file)) {
    $query = "INSERT INTO galeri_tari (tanggal, gambar) VALUES ('$tanggal', '$nama_file')";
    if (mysqli_query($conn, $query)) {
      header("Location: galeri_tari_admin.php");
      exit;
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Upload file gagal.";
  }
}
?>
