<?php
include ('header.php'); include 'koneksi.php'; // koneksi ke database
$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
?>

<section class="kegiatan-section">
<div class="kegiatan-card">
   <div class="kegiatan-header">
      <h2>Artikel Berita</h2>
    </div>
    <div class="kegiatan-body">
      <div class="kegiatan-text">
<div class="artikel-list">
  <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <div class="artikel-box">
      <img src="uploads/artikel/<?php echo $row['gambar']; ?>" alt="Thumbnail" width="100">
      <h3><?php echo $row['judul']; ?></h3>
      <p><?php echo substr(strip_tags($row['isi']), 0, 100) . '...'; ?></p>
      <a href="detail_artikel.php?id=<?php echo $row['id']; ?>">Baca Selengkapnya</a>
    </div>
  <?php } ?>
</div>
 </div>
</div>
    </div>
    </section>
    <?php include('footer.php'); ?>