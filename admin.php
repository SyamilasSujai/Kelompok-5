<!-- admin.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <h1>Panel Admin</h1>
        <nav>
            <a href="#">Kelola Profil</a>
            <a href="#">Portofolio/Layanan</a>
            <a href="#">Blog</a>
            <a href="#">Kontak</a>
        </nav>
    </header>
    
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

    <footer>
        <p>&copy; 2024 Admin Panel</p>
    </footer>
</body>
</html>