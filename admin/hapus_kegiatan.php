<?php
include('../koneksi.php');
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $hapus = $conn->query("DELETE FROM kegiatan WHERE id = $id");

    if ($hapus) {
        header("Location: kegiatan&prestasi_admin.php?status=sukses");
    } else {
        header("Location: kegiatan&prestasi_admin.php?status=gagal");
    }
    exit;
}