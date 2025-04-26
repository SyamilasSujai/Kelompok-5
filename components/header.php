<?php
$current = basename($_SERVER['REQUEST_URI']);
?>

<header>
    <a href="index.php">
        <h1>
            Five Sider</h1>
    </a>
    <nav>
        <a class="<?= $current == 'index.php' ? 'active' : '' ?>" href="index.php">Beranda</a>
        <a class="<?= $current == 'portfolio.php' ? 'active' : '' ?>" href="portfolio.php">Portofolio</a>
        <a class="<?= $current == 'layanan.php' ? 'active' : '' ?>" href="layanan.php">Layanan</a>
        <a class="<?= $current == 'contact.php' ? 'active' : '' ?>" href="contact.php">Kontak</a>
        <a class="<?= $current == 'blog.php' ? 'active' : '' ?>" href="blog.php">Blog</a>
    </nav>
</header>