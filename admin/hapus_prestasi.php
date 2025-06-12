<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM prestasi WHERE id = $id");
}

header("Location: kegiatan&prestasi_admin.php");
exit;
