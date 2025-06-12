<?php
include('../koneksi.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Cek apakah data ada
  $cek = $conn->query("SELECT * FROM jadwal_latihan WHERE id = $id");
  if ($cek->num_rows > 0) {
    // Hapus data
    $conn->query("DELETE FROM jadwal_latihan WHERE id = $id");
    echo "<script>alert('Jadwal berhasil dihapus'); window.location='latihan_admin.php';</script>";
  } else {
    echo "<script>alert('Data tidak ditemukan'); window.location='latihan_admin.php';</script>";
  }
} else {
  echo "<script>alert('ID tidak valid'); window.location='latihan_admin.php';</script>";
}
?>
