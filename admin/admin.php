<<<<<<< HEAD
<?php
// Contoh data sementara
$data = [
  ["id" => 1, "judul" => "Portofolio Website", "kategori" => "Portofolio"],
  ["id" => 2, "judul" => "Layanan Desain UI", "kategori" => "Layanan"],
  ["id" => 3, "judul" => "Tips FinTech", "kategori" => "Blog"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Panel Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    header {
      background-color: #6c5b7b;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    nav {
      margin-top: 10px;
    }
    nav a {
      margin: 0 10px;
      color: #f8b195;
      text-decoration: none;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }
    main {
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      margin-bottom: 20px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #eee;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
    }
    input[type="text"] {
      padding: 10px;
      margin: 5px 0 15px 0;
      width: 100%;
      box-sizing: border-box;
    }
    button {
      padding: 10px 20px;
      background: #6c5b7b;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #ddd;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Header Admin -->
  <header>
    <h1>Panel Admin</h1>
    <nav>
      <a href="#">Kelola Profil</a>
      <a href="#">Portofolio / Layanan</a>
      <a href="#">Blog</a>
      <a href="#">Kontak</a>
    </nav>
  </header>

  <!-- Konten Utama -->
  <main>
    <h2>Data Konten</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Judul</th>
          <th>Kategori</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['kategori'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <h3>Tambah / Edit Data</h3>
    <form method="POST" action="#">
      <label>Judul:</label>
      <input type="text" name="judul" placeholder="Masukkan judul..." required>
      
      <label>Kategori:</label>
      <input type="text" name="kategori" placeholder="Contoh: Layanan, Portofolio, Blog" required>

      <button type="submit">Simpan</button>
    </form>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; <?= date('Y') ?> Five Sider. All rights reserved.</p>
  </footer>

</body>
</html>
=======
<!-- admin.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include './components/header.php' ?>
    
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data from database -->
                <tr>
                    <td>1</td>
                    <td>Contoh Post</td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <form>
            <input type="text" placeholder="Judul">
            <input type="text" placeholder="Konten">
            <input type="date">
            <button type="submit">Simpan</button>
        </form>
    </main>

    <?php include './components/footer.php' ?>
</body>
</html>
>>>>>>> 416a2a5d69c6f7d6af9216d5e3b5498d5506ba1c
