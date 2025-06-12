<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include('header_admin.php'); ?>

  <section class="profil-section">
  <div class="profil-card">
    <div class="profil-header">
      <h2>Profil Sanggar</h2>
    </div>
    <div class="profil-body">
      <div class="profil-text">
        <p>
      Sanggar SEKAR KEMUNING adalah sebuah wadah seni tari yang berlokasi di Desa Pandankrajan Kecamatan 
      Kemlagi Kabupaten Mojokerto Jawa Timur. Sanggar tari tersebut secara resmi didirikan pada tanggal 
      14 Oktober 2020 dengan maksud untuk membuat wadah bagi anak-anak desa Pandankrajan yang ingin mengembangkan 
      bakat dibidang seni tari sekaligus melestarikan seni dan budaya peninggalan nenek moyang yang ada sejak jaman 
      dulu dan sebagai filter budaya asing yang masuk ke Indonesia. Sebelum resmi didirikan wadah tersebut hanya sebuah 
      kelompok (komunitas) penari saja. dikarenakan banyaknya peminat yang ingin belajar tari akhirnya dibentuklah sanggar 
      SEKAR KEMUNING.
    </p>
    <p>
      Nama Sekar Kemuning diambil dari salah satu nama tokoh sejarah yang ada di desa Pandankrajan yaitu RORO KEMUNING. 
      Sekar artinya Bunga dan Kemuning adalah Keemasan / kejayaan. Tokoh RORO KEMUNING hidup pada masa Kerajaan Majapahit 
      akhir tahun 1400 masehi. Siswi sanggar Sekar Kemuning dibagi menjadi 2 kelompok.Dan hingga saat ini mempunyai anggota 
      tetap sebanyak 30 anak.
    </p>
      </div>
      <div class="profil-image">
        <img src="aset/img/sanggar.jpg" alt="Foto Sanggar">
      </div>
    </div>
    <div class="profil-header">
      <h2>Visi & Misi</h2>
      <ul class="visi-misi">
        <li>Mengenalkan Kembali Seni dan Budaya Nusantara kepada generasi muda sebagai salah satu warisan Nenek Moyang yang mempunyai nilai-nilai luhur.</li>
        <li>Menjaga, melestarikan serta membangkitkan Kembali minat para generasi muda terhadap Seni dan Budaya Nusantara agar tidak punah diera modern dan digitalisasi.</li>
        <li>Mengembangkan Seni dan Budaya Nusantara sebagai media hiburan yang positif kepada Masyarakat ditengah gempuran budaya asing yang masuk.</li>
        <li>Membangun generasi muda berjiwa seni dan budaya dimulai dari anak-anak.</li>
        <li>Wadah kreatifitas untuk menuangkan bakat untuk meningkatkan skill dibidang seni.</li>
    </ul>
  </div>
  <div class="profil-header">
      <h2>Susunan Pengurus</h2>
      <ul class="pengurus-list">
      <li>Penasehat: Bp. Syafi'an (Kepala Desa Pandankrajan)</li>
      <li>Penasehat: Suhartono, S.pdi</li>
      <li>Ketua: Supardi</li>
      <li>Sekretaris: Tutik Anggareni</li>
      <li>Bendahara: Isbudi Aryawati</li>
      <li>Pelatih Tari: Affita Metha Ovilio</li>
    </ul>
  </div>
  <div class="profil-header">
      <h2>Sambutan Ketua Sanggar</h2>
    </div>
    <div class="profil-body">
      <div class="profil-text">
        <p>
      Selamat datang disitus website resmi Sanggar Seni “ SEKAR KEMUNING “ Desa Pandankrajan Kecamatan Kemlagi Kabupaten Mojokerto Jawa Timur.
    </p>
    <p>
      Sanggar SEKAR KEMUNING merupakan sebuah wadah baru untuk generasi mulai dari anak-anak, remaja hingga dewasa untuk Kembali mengenal, mencintai 
      dan melestarikan Kesenian Nusantara diantaranaya : Seni Tari, Seni Karawitan, Seni Photography dan Videgraphy dll. Agar tidak punah ditengah 
      masuknya budaya asing ke Indonesia. 
    </p>
    <p>
      Melalui wadah seni diharapkan mampu melahirkan generasi muda yang handal dan siap menjunjung tinggi nilai-nilai luhur seni dan budaya Nusantara 
      dan mampu melahirkan maestro-maestro seni khususnya di wilayah Mojokerto yang terkenal dengan kebesaran Kerajaan Majapahit.
    </p>
      </div>
</div>
</section>

<?php include('footer_admin.php'); ?>
