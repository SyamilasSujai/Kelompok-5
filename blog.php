<!-- blog.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include './components/header.php' ?>
    
    <main>
        <section>
            <h2>Blog Kami</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Post Pertama</td>
                        <td>2024-01-01</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>Post Kedua</td>
                        <td>2024-01-02</td>
                        <td>Manager</td>
                    </tr>
                    <tr>
                        <td>Post Ketiga</td>
                        <td>2024-01-03</td>
                        <td>Staff</td>
                    </tr>
                    <tr>
                        <td>Post Keempat</td>
                        <td>2024-01-04</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>Post Kelima</td>
                        <td>2024-01-05</td>
                        <td>Admin</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php include './components/footer.php' ?>
</body>
</html>