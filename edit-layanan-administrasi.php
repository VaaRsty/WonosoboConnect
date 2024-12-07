<?php
session_start();
include('koneksi.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); 

    $stmt = $koneksi->prepare("SELECT * FROM permohonan_administrasi WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $layanan = $row['layanan'];
        $dokumen = $row['dokumen'];
        $status = $row['status'];
    } else {
        echo "Data tidak ditemukan untuk ID: $id";
        exit;
    }
    $stmt->close();
} else {
    echo "Parameter ID tidak ditemukan di URL.";
    exit;
}

if (isset($_POST['update'])) {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $layanan = htmlspecialchars(trim($_POST['layanan']));
    $dokumen = htmlspecialchars(trim($_POST['dokumen']));
    $status = htmlspecialchars(trim($_POST['status']));

    $valid_status = ['Pending', 'Diterima', 'Proses', 'Selesai'];
    if (!in_array($status, $valid_status)) {
        echo "Status tidak valid.";
        exit;
    }

    $stmt = $koneksi->prepare("UPDATE permohonan_administrasi SET nama = ?, layanan = ?, dokumen = ?, status = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nama, $layanan, $dokumen, $status, $id);

    if ($stmt->execute()) {
        header("Location: dashboard.php?status=updated");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Edit Permohonan Administrasi - Wonosobo Connect</title>
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
                <li><a href="kelola-layanan.php">Kelola Layanan</a></li>
                <li><a href="pengguna.php">Pengguna</a></li>
                <li><a href="laporan.php">Laporan</a></li>
                <li><a href="logout.php">Keluar</a></li> 
            </ul>
        </nav>
    </header>

    <main>
        <section id="edit-layanan-administrasi">
            <h2>Edit Permohonan Administrasi</h2>
            <form action="edit-layanan-administrasi.php?id=<?php echo $id; ?>" method="POST">
                <label for="nama">Nama Pemohon:</label>
                <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($nama); ?>" required>

                <label for="layanan">Layanan:</label>
                <input type="text" name="layanan" id="layanan" value="<?= htmlspecialchars($layanan); ?>" required>

                <label for="dokumen">Dokumen:</label>
                <input type="text" name="dokumen" id="dokumen" value="<?= htmlspecialchars($dokumen); ?>" required>

                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="Pending" <?= $status == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                    <option value="Diterima" <?= $status == 'Diterima' ? 'selected' : ''; ?>>Diterima</option>
                    <option value="Proses" <?= $status == 'Proses' ? 'selected' : ''; ?>>Proses</option>
                    <option value="Selesai" <?= $status == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                </select>

                <div class="buttons-container">
                    <button type="submit" class="btn-update" name="update">Update</button>
                    <button type="button" class="btn-cancel" onclick="window.history.back()">Batal</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
        <p>Kebijakan Privasi | Syarat dan Ketentuan</p>
        <p>Kontak Kami: info@wonosoboconnect.go.id</p>
    </footer>
</body>
</html>
