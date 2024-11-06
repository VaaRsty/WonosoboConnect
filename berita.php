<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/berita.css">
    <title>Berita - Wonosobo Connect</title>
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
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="news">
            <h2>Berita Terbaru</h2>
            <article>
                <h3 class="news-title" data-modal="modal1">Pemerintah Kabupaten Wonosobo Gelar Sosialisasi e-Government</h3>
                <p>Acara sosialisasi sistem pemerintahan berbasis elektronik dilaksanakan untuk meningkatkan efisiensi pelayanan publik.</p>
            </article>
            <article>
                <h3 class="news-title" data-modal="modal2">Pelayanan Publik Berbasis Digital Mulai Diterapkan</h3>
                <p>Pemerintah setempat mulai menerapkan sistem pelayanan publik berbasis digital untuk mempermudah akses layanan bagi masyarakat.</p>
            </article>
            <article>
                <h3 class="news-title" data-modal="modal3">Wonosobo Kenalkan Aplikasi Cerdas untuk Masyarakat</h3>
                <p>Peluncuran aplikasi cerdas untuk membantu masyarakat dalam mengakses informasi dan layanan pemerintah.</p>
            </article>
            <article>
                <h3 class="news-title" data-modal="modal4">Inovasi Teknologi dalam Pelayanan Kesehatan</h3>
                <p>Pemerintah daerah memperkenalkan inovasi teknologi terbaru dalam pelayanan kesehatan untuk meningkatkan kualitas hidup masyarakat.</p>
            </article>
        </section>
    </main>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Pemerintah Kabupaten Wonosobo Gelar Sosialisasi e-Government</h3>
            <p>Dalam acara ini, pemerintah kabupaten menjelaskan pentingnya penggunaan sistem e-Government untuk memberikan pelayanan yang lebih cepat dan transparan. Dengan sistem ini, diharapkan masyarakat dapat lebih mudah mengakses informasi dan layanan yang diperlukan.</p>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Pelayanan Publik Berbasis Digital Mulai Diterapkan</h3>
            <p>Implementasi pelayanan publik berbasis digital diharapkan dapat mengurangi waktu tunggu dan meningkatkan kepuasan masyarakat dalam mendapatkan layanan pemerintah.</p>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Wonosobo Kenalkan Aplikasi Cerdas untuk Masyarakat</h3>
            <p>Aplikasi ini dirancang untuk memberikan informasi terkini mengenai layanan publik dan berbagai kegiatan pemerintah yang berlangsung di Wonosobo.</p>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Inovasi Teknologi dalam Pelayanan Kesehatan</h3>
            <p>Pemerintah daerah berkomitmen untuk terus berinovasi dalam bidang kesehatan dengan memanfaatkan teknologi untuk meningkatkan kualitas pelayanan kepada masyarakat.</p>
        </div>
    </div>
    <script src="js/berita.js" defer></script> 
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
        <p>Kebijakan Privasi | Syarat dan Ketentuan</p>
        <p>Kontak Kami: info@wonosoboconnect.go.id</p>
    </footer>
</body>
</html>
