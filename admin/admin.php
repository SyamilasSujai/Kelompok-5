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