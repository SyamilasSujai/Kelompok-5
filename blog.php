<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTech Insights | Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Blog-specific styles */
        .blog-hero {
            background: linear-gradient(135deg, #1a2980, #26d0ce);
            color: white;
            padding: 5rem 2rem;
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .blog-hero h2 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .blog-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .blog-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .card-image {
            height: 200px;
            background-color: #f5f7fa;
            background-size: cover;
            background-position: center;
        }
        
        .card-content {
            padding: 1.5rem;
        }
        
        .card-category {
            display: inline-block;
            background: #1a2980;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 0.8rem;
            text-transform: uppercase;
        }
        
        .card-title {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: #2d3748;
            font-weight: 600;
        }
        
        .card-excerpt {
            color: #4a5568;
            margin-bottom: 1.2rem;
            line-height: 1.6;
        }
        
        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #718096;
            font-size: 0.9rem;
        }
        
        .card-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #e2e8f0;
            margin-right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #4a5568;
        }
        
        .read-more {
            color: #1a2980;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .read-more i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .read-more:hover i {
            transform: translateX(3px);
        }
    </style>
</head>
<body>
    <?php include './components/header.php' ?>
    
    <main>
        <div class="blog-container">
            <div class="blog-grid">
                <!-- Blog Post 1 -->
                <article class="blog-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-content">
                        <span class="card-category">Pembayaran Digital</span>
                        <h3 class="card-title">Revolusi QRIS di Indonesia</h3>
                        <p class="card-excerpt">Bagaimana QR Indonesian Standard mengubah landscape pembayaran digital di tanah air dan manfaatnya bagi UMKM.</p>
                        <div class="card-meta">
                            <div class="card-author">
                                <div class="author-avatar">A</div>
                                <span>Admin</span>
                            </div>
                            <span>2024-01-01</span>
                        </div>
                        <a href="#" class="read-more">Baca selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1639762681057-408e52192e55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-content">
                        <span class="card-category">Blockchain</span>
                        <h3 class="card-title">Masa Depan CBDC di Asia</h3>
                        <p class="card-excerpt">Analisis perkembangan mata uang digital bank sentral di kawasan Asia Tenggara dan implikasinya.</p>
                        <div class="card-meta">
                            <div class="card-author">
                                <div class="author-avatar">M</div>
                                <span>Manager</span>
                            </div>
                            <span>2024-01-02</span>
                        </div>
                        <a href="#" class="read-more">Baca selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-content">
                        <span class="card-category">Analisis Data</span>
                        <h3 class="card-title">AI untuk Deteksi Fraud</h3>
                        <p class="card-excerpt">Peran machine learning dalam mengurangi penipuan di platform keuangan berbasis teknologi.</p>
                        <div class="card-meta">
                            <div class="card-author">
                                <div class="author-avatar">S</div>
                                <span>Staff</span>
                            </div>
                            <span>2024-01-03</span>
                        </div>
                        <a href="#" class="read-more">Baca selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="blog-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1621761191319-c6fb62004040?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-content">
                        <span class="card-category">Regulasi</span>
                        <h3 class="card-title">Update POJK FinTech 2024</h3>
                        <p class="card-excerpt">Perubahan penting dalam regulasi OJK untuk industri financial technology di tahun ini.</p>
                        <div class="card-meta">
                            <div class="card-author">
                                <div class="author-avatar">A</div>
                                <span>Admin</span>
                            </div>
                            <span>2024-01-04</span>
                        </div>
                        <a href="#" class="read-more">Baca selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="blog-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-content">
                        <span class="card-category">Investasi</span>
                        <h3 class="card-title">Robo-Advisor vs Konvensional</h3>
                        <p class="card-excerpt">Perbandingan keuntungan dan risiko antara platform investasi otomatis dan manajer manusia.</p>
                        <div class="card-meta">
                            <div class="card-author">
                                <div class="author-avatar">A</div>
                                <span>Admin</span>
                            </div>
                            <span>2024-01-05</span>
                        </div>
                        <a href="#" class="read-more">Baca selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <?php include './components/footer.php' ?>
</body>
</html>