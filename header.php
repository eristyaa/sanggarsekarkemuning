<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sanggar Sekar Kemuning</title>
  <link rel="stylesheet" href="aset/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cagliostro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ancizar+Sans:ital,wght@0,100..1000;1,100..1000&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
  <header>
    <img src="aset/img/logo.png" alt="Logo Sanggar" />
    <h1>Sanggar Sekar Kemuning<br><small>Mojokerto - Jawa Timur</small></h1>
  </header>
  <nav>
    <a href="beranda.php">Beranda</a>
    <a href="kegiatan&prestasi.php">Kegiatan & Prestasi</a>
    <?php if (isset($_SESSION['admin_logged_in'])): ?>
      <a href="jadwallatihan.php">Jadwal Latihan</a>
    <?php endif; ?>
    <div class="dropdown">
      <a href="#dropdown-content">Galeri
        <svg class="dropdown-icon" viewBox="0 0 10 6">
        <path d="M1 1l4 4 4-4" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </a>
      <div class="dropdown-content">
        <a href="galeri_tari.php">Tari</a>
        <a href="galeri_karawitan.php">Karawitan</a>
        <a href="galeri_fotografi.php">Fotografi</a>
      </div>
    </div>
    <a href="persewaan.php">Persewaan</a>
    <a href="artikel.php">Artikel & Berita</a>
    <a href="#footer">Kontak</a>
    <a href="#footer">Lokasi</a>
  </nav>
<section class="hero">
  <div class="slider">
    <img src="aset/img/hero/konten1.jpg" class="slide active" alt="Slide 1" />
    <img src="aset/img/hero/konten2.jpg" class="slide" alt="Slide 2" />
    <img src="aset/img/hero/konten3.jpg" class="slide" alt="Slide 3" />
    <button class="nav prev">&#10094;</button>
    <button class="nav next">&#10095;</button>
  </div>
  <div class="hero-text">
    <h2>Sanggar Sekar Kemuning</h2>
  </div>
</section>
