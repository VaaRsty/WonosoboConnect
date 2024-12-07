<?php
session_start();
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $koneksi->prepare("SELECT * FROM permohonan_kesehatan WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $layanan = $row['layanan'];
        $status = $row['status'];
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
    $stmt->close();
}

if (isset($_POST['update'])) {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $layanan = htmlspecialchars(trim($_POST['layanan']));
    $status = htmlspecialchars(trim($_POST['status']));

    $valid_status = ['Pending', 'Diterima', 'Proses', 'Selesai'];
    if (!in_array($status, $valid_status)) {
        echo "Status tidak valid.";
        exit;
    }

    $stmt = $koneksi->prepare("UPDATE permohonan_kesehatan SET nama = ?, layanan = ?, status = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nama, $layanan, $status, $id);

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
    <title>Edit Layanan Kesehatan - Wonosobo Connect</title>
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
                <li><a href="kelola-layanan.php">Kelola Layanan</a></li>
                <li><a href="pengguna.php">Pengguna</a></li>
                <li><a href="laporan.php">Laporan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="edit-layanan-kesehatan">
            <h2>Edit Layanan Kesehatan</h2>
            <form action="edit-layanan-kesehatan.php?id=<?= $id; ?>" method="POST">
                <label for="nama">Nama Pemohon:</label>
                <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($nama); ?>" required>

                <label for="layanan">Layanan:</label>
                <input type="text" name="layanan" id="layanan" value="<?= htmlspecialchars($layanan); ?>" required>

                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="Pending" <?= $status == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                    <option value="Diterima" <?= $status == 'Diterima' ? 'selected' : ''; ?>>Diterima</option>
                    <option value="Proses" <?= $status == 'Proses' ? 'selected' : ''; ?>>Proses</option>
                    <option value="Selesai" <?= $status == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                </select>

                <button type="submit" name="update">Update Layanan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
