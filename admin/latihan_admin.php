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
      <h2>Jadwal Latihan</h2>
    </div>
    <div class="kegiatan-body">
      <div class="kegiatan-text">
      <p>Kegiatan pembelajaran Rutin Sanggar SEKAR KEMUNING bidang Seni Tari Tradisional dilaksanakan setiap Hari Rabu jam 18.15 - Selesai, bertempat di Balai Desa Pandankrajan Kecamatan Kemlagi Kabupaten Mojokerto. Dengan pelatih berpengalaman dan mempunyai sertifikat Ijazah Sarjana Seni.
Sedangkan untuk pembelajaran kegiatan Seni Karawitan  dilaksanakan setiap hari Selasa jam 19.00 - Selesai.</p>
        <form method="post" action="hapus_jadwal.php">
          <table>
            <thead>
              <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Tari</th>
                <th>Pengajar</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $kegiatan = $conn->query("SELECT * FROM jadwal_latihan ORDER BY tanggal DESC");
              $no = 1;
              while ($row = $kegiatan->fetch_assoc()) {
                  echo "<tr>
                          <td>$no</td>
                          <td>{$row['tanggal']}</td>
                          <td>{$row['jam']}</td>
                          <td>{$row['tari']}</td>
                          <td>{$row['pengajar']}</td>
                          <td>{$row['lokasi']}</td>
                          <td>{$row['status']}</td>
                          <td>
                            <a href='edit_jadwal.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
                            <a href='hapus_jadwal.php?id={$row['id']}' class='btn btn-hapus' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                          </td>
                        </tr>";
                        $no++;
              }
              ?>
            </tbody>
          </table>
          <br>
          <a href="tambah_jadwal.php" class="btn btn-tambah">+ Tambah Jadwal</a>
        </form>
    </div>
</div>
            </div>
    </div>
    </section>
<?php include('footer_admin.php'); ?>
