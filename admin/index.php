<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$page = $_GET['page'] ?? 'beranda';

switch ($page) {
    case 'beranda':
        include 'beranda_admin.php';
        break;
    case 'artikel':
        include 'artikel_admin.php';
        break;
    case 'tambah_artikel':
        include 'tambah_artikel.php';
        break;
    case 'edit_artikel':
        include 'edit_artikel.php';
        break;
    case 'delete_artikel':
        include 'delete_artikel.php';
        break;
    case 'galeri_tari':
        include 'galeri_tari_admin.php';
        break;
    case 'galeri_karawitan':
        include 'galeri_karawitan_admin.php';
        break;
    case 'galeri_fotografi':
        include 'galeri_fotografi_admin.php';
        break;
    case 'tambah_galeri_tari':
        include 'tambah_galeri_tari.php';
        break;
    case 'hapus_galeri_tari':
        include 'hapus_galeri_tari.php';
        break;
    case 'kegiatan_prestasi':
        include 'kegiatan&prestasi_admin.php';
        break;
    case 'edit_kegiatan':
        include 'edit_kegiatan.php';
        break;
    case 'hapus_kegiatan':
        include 'hapus_kegiatan.php';
        break;
    case 'persewaan':
        include 'persewaan_admin.php';
        break;
    case 'artikel':
        include 'artikel_admin.php';
        break;
    default:
        echo "<h1>404 - Halaman Tidak Ditemukan</h1>";
        break;
}
?>
