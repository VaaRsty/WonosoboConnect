<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layanan.css">
    <title>Layanan Lingkungan Hidup - Wonosobo Connect</title>
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../layanan/layanan.php">Layanan</a></li>
                <li><a href="../berita.php">Berita</a></li>
                <li><a href="../tentang.php">Tentang Kami</a></li>
                <li><a href="../login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="layanan-lingkungan">
            <h2>Pelayanan Lingkungan Hidup</h2>
            <p>Lapor dan ajukan keluhan mengenai masalah lingkungan hidup melalui layanan ini. Kami siap membantu Anda.</p>

            <h3>Jenis Laporan yang Dapat Diajukan</h3>
            <ul>
                <li>Keluhan Kebersihan dan Sampah</li>
                <li>Pencemaran Udara atau Air</li>
                <li>Perusakan Alam dan Hutan</li>
                <li>Penyalahgunaan Sumber Daya Alam</li>
            </ul>

            <p>Jika Anda ingin mengajukan keluhan atau laporan, klik tombol di bawah ini untuk memulai.</p>
            <a href="form-laporan-lingkungan.php" class="button">Ajukan Laporan</a>
        </section>
    </main>
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
