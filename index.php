<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Perusahaan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include './components/header.php' ?>

  <main>
 <!-- Hero Section -->
<section class="hero-section">
  <div class="container hero-content">
    <div class="hero-text">
      <h1><span class="highlight">Five Sider</span></h1>
      <p>Platform pinjaman digital yang aman, cepat, dan cocok untuk gaya hidup Gen Z.</p>
      <a href="layanan.php" class="btn-cta">Lihat Layanan</a>
    </div>
    <img src="logo.png" alt="Logo Perusahaan" class="hero-image">
  </div>
</section>


    <!-- Layanan Kami -->
    <section class="section layanan-section">
      <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="grid-box">
          <div class="card">
            <span>🏢</span>
            <h3>Manajemen Data Kontak Pelanggan</h3>
            <p>Sistem input kontak aman dan efisien dengan validasi dan database untuk keperluan lead generation.</p>
          </div>
          <div class="card">
            <span>📱</span>
            <h3>Blog Edukasi FinTech </h3>
            <p>Blog informatif tentang FinTech dengan CMS untuk kemudahan publikasi oleh tim Anda.</p>
          </div>
          <div class="card">
            <span>🖥️</span>
            <h3>Desain Website Modern & Responsif</h3>
            <p>Tampilan modern, responsif, dan ramah pengguna, cocok untuk generasi digital.</p>
          </div>
          <div class="card">
            <span>🔒</span>
            <h3>Simulasi FinTech & Integrasi API</h3>
            <p>Kalkulator pinjaman, bunga, dan integrasi API untuk layanan verifikasi dan pembayaran.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Keunggulan -->
    <section class="section keunggulan-section">
      <div class="container">
        <h2 class="section-title">Kenapa Memilih Kami?</h2>
        <div class="grid-box">
          <div class="card accent">✅ Tim Bersertifikat & Berpengalaman</div>
          <div class="card accent">🚀 Proses Cepat & Transparan</div>
          <div class="card accent">💡 Teknologi Fintech Terkini</div>
          <div class="card accent">🎯 Tepat Sasaran untuk Anak Muda</div>
        </div>
      </div>
    </section>
  </main>

    <?php include './components/footer.php' ?>

    <script>
        function goToNextMenu() {
            window.location.href = "portfolio.html"; // Ganti dengan halaman yang diinginkan
        }
    </script>
</body>

</html>