<?php
$page = $_GET['page'] ?? 'beranda';

switch ($page) {
    case 'beranda':
        include 'beranda.php';
        break;
    case 'artikel':
        include 'artikel.php';
        break;
    case 'detail_artikel':
        include 'detail_artikel.php';
        break;
    case 'galeri_tari':
        include 'galeri_tari.php';
        break;
    case 'galeri_karawitan':
        include 'galeri_karawitan.php';
        break;
    case 'galeri_fotografi':
        include 'galeri_fotografi.php';
        break;
    case 'kegiatan_prestasi':
        include 'kegiatan&prestasi.php';
        break;
    case 'persewaan':
        include 'persewaan.php';
        break;
    default:
        echo "<h1>404 - Halaman Tidak Ditemukan</h1>";
        break;
}
?>
