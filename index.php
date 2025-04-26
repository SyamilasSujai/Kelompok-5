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
        <section class="hero-section section">
            <div class="container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkmncaWqd8cTY8xDAXNgrWnriUHy4CiBfplQ&s" alt="Logo Perusahaan" class="company-logo">
                <div>
                    <h2>Selamat Datang di Five Sider</h2>
                    <p>Kami adalah perusahaan profesional yang berfokus pada penyediaan solusi teknologi inovatif. Dengan pengalaman lebih dari 10 tahun di industri ini, kami berkomitmen untuk memberikan layanan terbaik kepada klien kami.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <ul>
                <h2>Layanan Kami</h2>
                <ul>
                    <li>🖥️ Pengembangan Aplikasi Web</li>
                    <li>📱 Pengembangan Aplikasi Mobile</li>
                    <li>☁️ Solusi Cloud Computing</li>
                    <li>🔒 Konsultasi Keamanan Siber</li>
                    <li>🤖 Pengembangan AI & Machine Learning</li>
                </ul>
            </ul>
        </section>
        <section>
            <ul>
                <h2>Keunggulan Kami</h2>
                <ul>
                    <li>✅ Tim Profesional Bersertifikat</li>
                    <li>⏱️ Garansi Waktu Pengerjaan</li>
                    <li>💡 Solusi Inovatif</li>
                    <li>💰 Harga Kompetitif</li>
                    <li>🛡️ Garansi 1 Tahun</li>
                </ul>
            </ul>
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