<?php
session_start();

if (isset($_SESSION['login_success'])) {
    $login_message = $_SESSION['login_success'];
    unset($_SESSION['login_success']);
} else {
    $login_message = "";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layanan.css">
    <title>Layanan - Wonosobo Connect</title>
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
        <section id="services">
            <h2>Layanan Publik</h2>
            <?php if ($login_message): ?>
                <p style="color: black;"><?php echo $login_message; ?></p>
            <?php endif; ?>
            <div class="service">
                <h3>Pelayanan Administrasi Kependudukan</h3>
                <p>Ajukan pembuatan KTP, KK, akta kelahiran, atau surat pindah secara online melalui layanan ini.</p>
                <a href="layanan-administrasi.php" class="button">Selengkapnya</a>
            </div>

            <div class="service">
                <h3>Pelayanan Kesehatan</h3>
                <p>Dapatkan akses ke layanan kesehatan, termasuk pendaftaran online untuk pemeriksaan kesehatan dan vaksinasi.</p>
                <a href="layanan-kesehatan.php" class="button">Selengkapnya</a>
            </div>

            <div class="service">
                <h3>Pelayanan Izin Usaha</h3>
                <p>Daftarkan usaha Anda dengan mudah dan cepat. Dapatkan informasi mengenai syarat dan prosedur pendaftaran.</p>
                <a href="layanan-izin.php" class="button">Selengkapnya</a>
            </div>

            <div class="service">
                <h3>Informasi Pendidikan</h3>
                <p>Temukan informasi mengenai sekolah, pendaftaran siswa baru, dan beasiswa yang tersedia di Kabupaten Wonosobo.</p>
                <a href="layanan-pendidikan.php" class="button">Selengkapnya</a>
            </div>

            <div class="service">
                <h3>Pelayanan Lingkungan Hidup</h3>
                <p>Lapor dan ajukan keluhan mengenai masalah lingkungan hidup melalui layanan ini. Kami siap membantu Anda.</p>
                <a href="layanan-lingkungan.php" class="button">Selengkapnya</a>
            </div>

            <div class="service">
                <h3>Pelayanan Keamanan Publik</h3>
                <p>Ajukan laporan kehilangan, pengaduan, atau permohonan informasi terkait keamanan dan ketertiban umum.</p>
                <a href="layanan-keamanan.php" class="button">Selengkapnya</a>
            </div>
        </section>
    </main>
    <script src="js/script.js"></script>
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
        <p>Kebijakan Privasi | Syarat dan Ketentuan</p>
        <p>Kontak Kami: info@wonosoboconnect.go.id</p>
    </footer>
</body>
</html>
