
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sanggar Sekar Kemuning</title>
  <link rel="stylesheet" href="aset/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
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
    <a href="beranda_admin.php">Beranda</a>
    <a href="kegiatan&prestasi_admin.php">Kegiatan & Prestasi</a>
    <?php if (isset($_SESSION['admin'])): ?>
      <a href="latihan_admin.php">Jadwal Latihan</a>
    <?php endif; ?>
    <div class="dropdown">
      <a href="#">Galeri
        <svg class="dropdown-icon" viewBox="0 0 10 6">
        <path d="M1 1l4 4 4-4" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </a>
      <div class="dropdown-content">
        <a href="galeri_tari_admin.php">Tari</a>
        <a href="galeri_karawitan_admin.php">Karawitan</a>
        <a href="galeri_fotografi_admin.php">Fotografi</a>
      </div>
    </div>
    <a href="persewaan_admin.php">Persewaan</a>
    <a href="artikel_admin.php">Artikel & Berita</a>
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
