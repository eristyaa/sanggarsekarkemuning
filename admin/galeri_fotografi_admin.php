<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<?php  
include('header_admin.php'); 
include('../koneksi.php'); 
?>

<section class="kegiatan-section">
  <div class="kegiatan-card">
    <div class="kegiatan-header">
      <h2>Galeri Fotografi</h2>
    </div>

    <div class="kegiatan-body">
      <div class="kegiatan-text">
        <p>
          Sanggar SEKAR KEMUNING Bidang Photography bekerjasama dengan beberapa komunitas Photographer di Jawa timur untuk membuat 
          event phorography Dimana tallent semua diambilkan dari anak Sanggar. yang menjadi ciri khas dari kegiatan Photography 
          SEKAR KEMUNING adalah mengangkat tema-tema Tradisional. untuk event dilaksanakan sesuai kebutuhan.
        </p>
        <br>
      <?php
      $query = "SELECT tanggal FROM galeri_fotografi GROUP BY tanggal ORDER BY tanggal DESC";
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $tanggal = $row['tanggal'];
        echo "<div class='galeri-item'>";
        echo "<h4 class='mt-4'>" . date("d/m/Y", strtotime($tanggal)) . "</h4>";
        echo "<div class='galeri-foto d-flex flex-wrap gap-3'>";

        $foto_query = "SELECT * FROM galeri_fotografi WHERE tanggal = '$tanggal'";
        $foto_result = mysqli_query($conn, $foto_query);

      while ($foto = mysqli_fetch_assoc($foto_result)) {
    $filepath = '../uploads/' . $foto['gambar'];
    $file_ext = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
    $video_extensions = ['mp4', 'webm', 'ogg'];
    $image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];

    echo "<div class='foto-container text-center'>";

    if (in_array($file_ext, $video_extensions)) {
        echo "<video width='200' controls class='mb-2'>";
        echo "<source src='" . htmlspecialchars($filepath) . "' type='video/" . $file_ext . "'>";
        echo "Browser kamu tidak mendukung video tag.";
        echo "</video>";
    } elseif (in_array($file_ext, $image_extensions)) {
        echo "<img src='" . htmlspecialchars($filepath) . "' alt='Foto Galeri' width='200' class='img-thumbnail mb-2'>";
    } else {
        echo "<p>Format file tidak didukung.</p>";
    }


    echo "<div class='foto-actions'>";
    echo "<a href='hapus_galeri_fotografi.php?id=" . $foto['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Hapus foto ini?')\">Hapus</a>";
    echo "</div>";

    echo "</div>";
}

echo "</div></div>";
      }
      ?>

<h3>Tambah Foto/Video</h3>
      <div class="my-4">
      <form class="formgaleri" action="tambah_galeri_fotografi.php" method="POST" enctype="multipart/form-data" class="mt-3">
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal:</label>
          <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label for="foto" class="form-label">Pilih file:</label>
          <input type="file" name="foto" id="foto" accept="image/*, video/*" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>
    </div>
  </div>
</section>

<?php include('footer_admin.php'); ?>
