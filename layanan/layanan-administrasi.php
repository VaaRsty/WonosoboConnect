<?php
include('../koneksi.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $layanan = $_POST['layanan'];
    $dokumen = $_POST['dokumen'];

    $sql = "INSERT INTO permohonan_administrasi (nama, layanan, dokumen) VALUES ('$nama', '$layanan', '$dokumen')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Permohonan berhasil diajukan.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Permohonan Layanan Administrasi</title>
    <link rel="stylesheet" href="../css/layanan.css">
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
        <section id="layanan-administrasi">
            <h2>Ajukan Permohonan Layanan Administrasi</h2>
            <form method="POST" action="">
                <label for="nama">Nama Pemohon:</label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="layanan">Layanan:</label>
                <select id="layanan" name="layanan">
                    <option value="KTP">KTP</option>
                    <option value="KK">KK</option>
                    <option value="Akta Kelahiran">Akta Kelahiran</option>
                    <option value="Surat Pindah">Surat Pindah</option>
                </select>
                
                <label for="dokumen">Dokumen:</label>
                <input type="text" id="dokumen" name="dokumen" required>
                
                <button type="submit" name="submit">Ajukan Permohonan</button>
            </form>
        </section>
    </main>
    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
