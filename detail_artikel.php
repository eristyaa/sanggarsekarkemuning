<?php
include ('header.php'); include 'koneksi.php'; // koneksi ke database

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id = $id");
  $data = mysqli_fetch_assoc($query);
}
?>

<section class="kegiatan-section">
<div class="kegiatan-card">
   <div class="kegiatan-header">
      <h2>Artikel Berita</h2>
    </div>
    <div class="kegiatan-body">
      <div class="kegiatan-text">
        <div class="judul-artikel">
<h2><?php echo $data['judul']; ?></h2>
<p><strong><?php echo $data['penulis']; ?></strong>, dipublikasikan pada <?php echo $data['tanggal']; ?></p>
<img src="uploads/artikel/<?php echo $data['gambar']; ?>" alt="Gambar Artikel" width="500">
</div>
<div class="isi-artikel">
  <?php echo nl2br($data['isi']); ?>
</div>
</div>
</div>
    </div>
    </section>
    <?php include('footer.php'); ?>
