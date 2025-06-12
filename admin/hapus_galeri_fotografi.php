<?php
include('../koneksi.php');

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT gambar FROM galeri_fotografi WHERE id = $id"));
unlink("../uploads/" . $data['nama_file']);

$query = "DELETE FROM galeri_fotografi WHERE id = $id";
if (mysqli_query($conn, $query)) {
  header("Location: galeri_fotografi_admin.php");
  exit;
} else {
  echo "Gagal menghapus data.";
}
?>
