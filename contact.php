<!-- kontak.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php include './components/header.php' ?>
    
    <main>
        <div class="contact-container">
            <h1>Hubungi Kami</h1>
            
            <div class="contact-info">
                <address>
                    <strong>Alamat:</strong><br>
<<<<<<< HEAD
                    Jl.SUUUIIIII<br>
                    Jakarta Selatan, DKI Jakarta<br>
                    Kode Pos: 12345<br><br>
                    
                    <strong>Email:</strong> info@Fivesider.com<br>
=======
                    Jl. Contoh No. 123<br>
                    Jakarta Selatan, DKI Jakarta<br>
                    Kode Pos: 12345<br><br>
                    
                    <strong>Email:</strong> info@perusahaan.com<br>
>>>>>>> 416a2a5d69c6f7d6af9216d5e3b5498d5506ba1c
                    <strong>Telp:</strong> 0812-3456-7890
                </address>
            </div>

            <div id="geolocation">
                <script>
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(
                            position => {
                                document.getElementById("geolocation").innerHTML = 
                                `🌍 Lokasi Anda: ${position.coords.latitude.toFixed(4)}, ${position.coords.longitude.toFixed(4)}`;
                            },
                            error => {
                                document.getElementById("geolocation").innerHTML = 
                                "Tidak dapat mengambil lokasi (Pastikan izin lokasi diaktifkan)";
                            }
                        );
                    } else {
                        document.getElementById("geolocation").innerHTML = 
                        "Browser tidak mendukung geolokasi";
                    }
                </script>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="5" required></textarea>
                </div>

                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </main>

    <?php include './components/footer.php' ?>
</body>
</html>