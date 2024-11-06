<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Home - Wonosobo Connect</title>
</head>
<body>
    <header>
        <div class="logo">
            <p class="wonosobo-connect">
                <span class="text-wonosobo">Wonosobo</span><br />
                <span class="text-connect">Connect</span>
            </p>            
        </div>
        <nav>
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div> 
            <ul id="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>      
    </header>
    
    <main>
        <section id="home" class="welcome-section">
            <h1>Selamat datang di Wonosobo Connect</h1>
        </section>
     
        <section id="services">
            <h2>Layanan Kami</h2>
            <button id="toggle-services" class="button">Tampilkan Layanan</button>
            <div id="services-list">
                <div class="service-card">
                    <h3>Pelayanan Administrasi Kependudukan</h3>
                    <p>Dapatkan informasi dan layanan terkait administrasi kependudukan secara online.</p>
                    <a href="layanan.php" class="button">Selengkapnya</a>
                </div>
                <div class="service-card">
                    <h3>Informasi Kesehatan</h3>
                    <p>Temukan informasi terbaru mengenai layanan kesehatan di Wonosobo.</p>
                    <a href="layanan.php" class="button">Selengkapnya</a>
                </div>
                <div class="service-card">
                    <h3>Layanan Izin Usaha</h3>
                    <p>Dapatkan izin usaha dengan mudah dan cepat melalui platform ini.</p>
                    <a href="layanan.php" class="button">Selengkapnya</a>
                </div>
            </div>
        </section>            

        <section id="news">
            <h2>Berita Terbaru</h2>
            <article class="news-item">
                <h3>Program Pengembangan Infrastruktur</h3>
                <p>Pemerintah Kabupaten Wonosobo meluncurkan program baru untuk memperbaiki infrastruktur di daerah.</p>
                <a href="berita.php" class="button">Baca Selengkapnya</a>
            </article>
            <article class="news-item">
                <h3>Kegiatan Bulan Kebersihan</h3>
                <p>Seluruh masyarakat diharapkan berpartisipasi dalam kegiatan bulan kebersihan lingkungan.</p>
                <a href="berita.php" class="button">Baca Selengkapnya</a>
            </article>
        </section>
    </main>
    <div id="toast" class="toast">Pesan Toast di sini</div>
    <script src="js/script.js"></script>
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
        <p>Kebijakan Privasi | Syarat dan Ketentuan</p>
        <p>Kontak Kami: info@wonosoboconnect.go.id</p>
    </footer>
</body>
</html>
