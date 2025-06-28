<?php
$current = basename($_SERVER['REQUEST_URI']);
?>

<<<<<<< HEAD
<header class="site-header">
  <div class="container header-center">
    <a href="index.php" class="logo">
      <h1>Five Sider</h1>
    </a>
    <nav class="nav-menu">
      <a class="<?= $current == 'index.php' ? 'active' : '' ?>" href="index.php">Beranda</a>
      <a class="<?= $current == 'portfolio.php' ? 'active' : '' ?>" href="portfolio.php">Portofolio</a>
      <a class="<?= $current == 'layanan.php' ? 'active' : '' ?>" href="layanan.php">Layanan</a>
      <a class="<?= $current == 'contact.php' ? 'active' : '' ?>" href="contact.php">Kontak</a>
      <a class="<?= $current == 'blog.php' ? 'active' : '' ?>" href="blog.php">Blog</a>
    </nav>
  </div>
</header>
=======
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
>>>>>>> 416a2a5d69c6f7d6af9216d5e3b5498d5506ba1c
