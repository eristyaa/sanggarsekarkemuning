<?php  
include('header.php'); 
include('koneksi.php'); 
?>
<section class="kegiatan-section">
  <div class="kegiatan-card">
    <div class="kegiatan-header">
      <h2>Galeri Seni Tari</h2>
    </div>

    <div class="kegiatan-body">
      <div class="kegiatan-text">
        <p>
          Sanggar SEKAR KEMUNING Bidang Seni Tari dilatih oleh Affita Metha Ovilio, lulusan Sarjana Seni Universitas Negeri Yogyakarta. 
          Selain sebagai penari, beliau juga merupakan seorang koreografer. Materi yang diajarkan mencakup Tari Klasik Tradisional dan dibagi dalam 2 kelas sebagai berikut:
        </p>
        <ul>
          <li><strong>Kelas A:</strong> Siswa TK - SD</li>
          <li><strong>Kelas B:</strong> Siswa SMP, SMA, dan Dewasa</li>
        </ul>
        <p>
          Setiap tahun, Sanggar SEKAR KEMUNING menampilkan siswa didiknya dalam berbagai kegiatan, seperti Sedekah Desa Pandankrajan, Gebyar Pentas Seni, dan kerja sama dengan Event Organizer.
        </p>
        <br>
      <?php
      $query = "SELECT tanggal FROM galeri_tari GROUP BY tanggal ORDER BY tanggal DESC";
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $tanggal = $row['tanggal'];
        echo "<div class='galeri-item'>";
        echo "<h4 class='mt-4'>" . date("d/m/Y", strtotime($tanggal)) . "</h4>";
        echo "<div class='galeri-foto d-flex flex-wrap gap-3'>";

        $foto_query = "SELECT * FROM galeri_tari WHERE tanggal = '$tanggal'";
        $foto_result = mysqli_query($conn, $foto_query);

      while ($foto = mysqli_fetch_assoc($foto_result)) {
    $filepath = 'uploads/' . $foto['gambar'];
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

    echo "</div>";
}

echo "</div></div>";
      }
      ?>
      
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
