<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layanan.css">
    <title>Layanan Pendidikan - Wonosobo Connect</title>
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
        <section id="layanan-pendidikan">
            <h2>Informasi Pendidikan</h2>
            <p>Temukan informasi mengenai sekolah, pendaftaran siswa baru, dan beasiswa yang tersedia di Kabupaten Wonosobo.</p>

            <h3>Pendaftaran Siswa Baru</h3>
            <p>Daftarkan anak Anda untuk masuk sekolah dengan mengakses informasi dan prosedur pendaftaran online di sini.</p>
            <a href="form-pendaftaran-sekolah.php" class="button">Pendaftaran Sekolah</a>
        </section>
    </main>
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
