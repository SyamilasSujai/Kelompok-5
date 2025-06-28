<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Layanan - Five Sider</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/layanan.css" />
</head>

<body>
    <?php include './components/header.php' ?>

  <main>
    <h1 class="page-title">Layanan Kami</h1>

    <section class="cards">
      <article class="card">
        <img src="l1.png" alt="Manajemen Data Kontak" />
        <h3>Manajemen Data Kontak Pelanggan</h3>
        <p>
          Kami menyediakan sistem input data kontak yang aman dan efisien, 
          lengkap dengan validasi dan database penyimpanan untuk kebutuhan lead generation perusahaan Anda.
        </p>
      </article>

      <article class="card">
        <img src="l2.png" alt="Blog FinTech" />
        <h3>Blog Edukasi FinTech</h3>
        <p>
          Platform blog untuk membagikan artikel informatif seputar dunia teknologi keuangan, 
          dilengkapi CMS agar tim Anda bisa menulis dan menerbitkan dengan mudah.
        </p>
      </article>

      <article class="card">
        <img src="l3.png" alt="Desain Responsif" />
        <h3>Desain Website Modern & Responsif</h3>
        <p>
          Antarmuka yang menarik, modern, dan ramah mobile untuk memberikan pengalaman terbaik bagi pengguna, 
          terutama generasi muda dan pengguna digital.
        </p>
      </article>

      <article class="card">
        <img src="l4.png" alt="Simulasi dan API" />
        <h3>Simulasi FinTech & Integrasi API</h3>
        <p>
          Fitur kalkulator pinjaman, bunga, dan integrasi API untuk sistem verifikasi, 
          pembayaran, atau layanan FinTech lainnya.
        </p>
      </article>
    </section>
  </main>

  <?php include './components/footer.php'; ?>
</body>
</html>
