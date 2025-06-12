<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include('header_admin.php'); include('../koneksi.php'); ?>
<section class="kegiatan-section">
<div class="kegiatan-card">
   <div class="kegiatan-header">
      <h2>Kegiatan</h2>
    </div>
    <div class="kegiatan-body">
      <div class="kegiatan-text">
        <p>
      Sanggar Sekar Kemuning aktif mengikuti berbagai kegiatan seni dan budaya sebagai bentuk pelestarian dan promosi seni tradisional kepada masyarakat luas.
    </p>
        <form method="post" action="hapus_kegiatan.php">
          <table>
            <thead>
              <tr>
                <th>Tahun</th>
                <th>Penampilan</th>
                <th>Acara</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $kegiatan = $conn->query("SELECT * FROM kegiatan ORDER BY tahun DESC");
              while ($row = $kegiatan->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['tahun']}</td>
                          <td>{$row['penampilan']}</td>
                          <td>{$row['acara']}</td>
                          <td>
                            <a href='edit_kegiatan.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
                            <a href='hapus_kegiatan.php?id={$row['id']}' class='btn btn-hapus' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                          </td>
                        </tr>";
              }
              ?>
            </tbody>
          </table>
          <br>
          <a href="tambah_kegiatan.php" class="btn btn-tambah">+ Tambah Kegiatan</a>
        </form>

    <div class="kegiatan-header">
    <h2>Prestasi</h2>
      </div>
      <ol>
<?php
$prestasi = $conn->query("SELECT * FROM prestasi ORDER BY id");
while ($row = $prestasi->fetch_assoc()) {
    echo "<li>
        {$row['isi']}
        <a href='edit_prestasi.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
        <a href='hapus_prestasi.php?id={$row['id']}' class='btn btn-hapus' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
    </li>";
}
?>
</ol>
<a href="tambah_prestasi.php" class="btn btn-tambah">+ Tambah Prestasi</a>
    </div>
</div>
    </div>
    </section>
<?php include('footer_admin.php'); ?>
