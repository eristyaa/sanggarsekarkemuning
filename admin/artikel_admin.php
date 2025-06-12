<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include 'header_admin.php'; ?>

<?php
include '../koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
?>

<section class="kegiatan-section">
  <div class="kegiatan-card fixed-width">
    <div class="kegiatan-header">
      <h2>Kelola Artikel Berita</h2>
    </div>
   <div class="kegiatan-body">
    <div class="kegiatan-text">
    <p> Temukan kabar terkini seputar kegiatan, penampilan, dan prestasi Sanggar Sekar Kemuning Majapahit. Di sini kami hadirkan 
      rangkaian artikel yang mendokumentasikan semangat, dedikasi, dan kecintaan kami terhadap seni budaya. Ikuti terus perkembangan terbaru 
      dan jadilah bagian dari perjalanan seni kami.</p>
      <br>
<a href="tambah_artikel.php" class="btn btn-tambah">+ Tambah Artikel</a>
<br><br>
<table border="1" cellpadding="10">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tanggal</th>
    <th>Aksi</th>
  </tr>
  <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['judul'] ?></td>
      <td><?= $row['penulis'] ?></td>
      <td><?= $row['tanggal'] ?></td>
      <td>
  <a href="edit_artikel.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
  <a href="delete_artikel.php?id=<?= $row['id'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
      </td>
    </tr>
  <?php } ?>
</table>
  </div>
 </div>
    </div>
</section>
<?php include 'footer_admin.php'; ?>