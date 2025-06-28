<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
</head>

<body>
    <?php include './components/header.php' ?>

    <main>
        <h1>Portofolio Kami</h1>

        <div class="portfolio-grid">
            <div class="project-card">
                <img src="proyek1.png" alt="Proyek 1" class="project-image">
                <div class="project-content">
                    <h3>Proyek Website E-Commerce</h3>
                    <p>Pengembangan platform e-commerce dengan fitur pembayaran terintegrasi dan sistem manajemen inventori canggih.</p>
                    <a href="#" class="project-link">Lihat Detail</a>
                </div>
            </div>

            <div class="project-card">
                <img src="proyek2.png" alt="Proyek 2" class="project-image">
                <div class="project-content">
                    <h3>Sistem Pembayaran Online (Payment Gateway)</h3>
                    <p>Solusi pembayaran digital yang mendukung berbagai metode seperti QRIS, kartu kredit, transfer bank otomatis, dan e-wallet. Cocok untuk UMKM dan startup.</p>
                    <a href="#" class="project-link">Lihat Detail</a>
                </div>
            </div>

            <div class="project-card">
                <img src="proyek 3.png" alt="Proyek 3" class="project-image">
                <div class="project-content">
                    <h3>Sistem Notifikasi Transaksi</h3>
                    <p>Integrasi sistem notifikasi real-time melalui WhatsApp, SMS, dan email setiap kali terjadi transaksi atau aktivitas penting di akun pengguna.</p>
                    <a href="#" class="project-link">Lihat Detail</a>
                </div>
            </div>

            <div class="project-card">
                <img src="proyek4.png" alt="Proyek 4" class="project-image">
                <div class="project-content">
                    <h3>Aplikasi Manajemen Keuangan</h3>
                    <p>Aplikasi mobile dan web yang membantu pengguna mengatur keuangan pribadi, budgeting, dan mencatat pengeluaran dengan visualisasi data interaktif.</p>
                    <a href="#" class="project-link">Lihat Detail</a>
                </div>
            </div>
        </div>
    </main>

  <?php include './components/footer.php'; ?>
</body>
</html>
