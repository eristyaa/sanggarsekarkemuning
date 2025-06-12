<?php include('header.php'); include('koneksi.php'); ?>
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
    <table>
      <thead>
        <tr>
          <th>Tahun</th>
          <th>Penampilan</th>
          <th>Acara</th>
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
                  </tr>";
        }
        ?>
      </tbody>
    </table>
    <div class="kegiatan-header">
    <h2>Prestasi :</h2>
      </div>
    <ol>
      <?php
      $prestasi = $conn->query("SELECT * FROM prestasi ORDER BY id DESC");
      while ($row = $prestasi->fetch_assoc()) {
          echo "<li>{$row['isi']}</li>";
      }
      ?>
    </ol>
    </div>
    </div>
</div>
    </div>
    </section>
<?php include('footer.php'); ?>
