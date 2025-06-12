<?php
include('../koneksi.php');

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT gambar FROM galeri_tari WHERE id = $id"));
unlink("../uploads/" . $data['nama_file']);

// Hapus data dari DB
$query = "DELETE FROM galeri_tari WHERE id = $id";
if (mysqli_query($conn, $query)) {
  header("Location: galeri_tari_admin.php");
  exit;
} else {
  echo "Gagal menghapus data.";
}
?>
