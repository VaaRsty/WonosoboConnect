<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layanan.css">
    <title>Formulir Layanan - Wonosobo Connect</title>
</head>
<body>
    <header>
        <div class="logo">
            <p class="wonosobo-connect">
                <span class="text-wonosobo">Wonosobo</span><br>
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
        <section>
            <h2>Formulir Pendaftaran Layanan</h2>
            <form action="proses-layanan-kesehatan.php" method="POST">
                <label for="layanan">Pilih Jenis Layanan:</label>
                <select name="layanan" id="layanan" required>
                    <option value="" disabled selected>Pilih layanan yang diinginkan</option>
                    <option value="Pendaftaran Pemeriksaan Kesehatan">Pendaftaran Pemeriksaan Kesehatan</option>
                    <option value="Vaksinasi COVID-19 dan Imunisasi Anak">Vaksinasi COVID-19 dan Imunisasi Anak</option>
                    <option value="Pelayanan Kesehatan Ibu dan Anak">Pelayanan Kesehatan Ibu dan Anak</option>
                    <option value="Konsultasi Kesehatan Jarak Jauh">Konsultasi Kesehatan Jarak Jauh</option>
                </select>

                <label for="nama">Nama Pemohon:</label>
                <input type="text" name="nama" id="nama" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="telepon">Nomor Telepon:</label>
                <input type="text" name="telepon" id="telepon" required>

                <label for="keterangan">Keterangan Tambahan:</label>
                <textarea name="keterangan" id="keterangan"></textarea>

                <button type="submit">Kirim Permohonan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
