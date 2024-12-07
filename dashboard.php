<?php
session_start();
include('koneksi.php');
include('functions.php');

$permohonanResult = getPermohonan($koneksi);
$permohonanKesehatanResult = getPermohonanKesehatan($koneksi);
$permohonanAdministrasiResult = getPermohonanAdministrasi($koneksi);
$statistics = getStatistics($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard Admin - Wonosobo Connect</title>
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
        <section id="dashboard">
            <h2>Dashboard Admin</h2>
            <div class="dashboard-container">
                <aside class="sidebar">
                    <h3>Menu Admin</h3>
                    <ul>
                        <li><a href="#">Statistik Pengguna</a></li>
                        <li><a href="#">Riwayat Permohonan</a></li>
                        <li><a href="#">Kelola Akun</a></li>
                        <li><a href="#">Pengaturan Layanan</a></li>
                    </ul>
                </aside>

                <div class="dashboard-content">
                    <h3>Selamat datang, Admin!</h3>
                    <p>Berikut adalah ringkasan statistik layanan:</p>

                    <div class="dashboard-widgets">
                        <div class="widget">
                            <h4>Total Pengguna Terdaftar</h4>
                            <p><?php echo $statistics['total_pengguna']; ?></p>
                        </div>
                        <div class="widget">
                            <h4>Total Permohonan Layanan</h4>
                            <p><?php echo $statistics['total_permohonan']; ?></p>
                        </div>
                        <div class="widget">
                            <h4>Total Layanan Aktif</h4>
                            <p><?php echo $statistics['total_layanan']; ?></p>
                        </div>
                    </div>

                    <h4>Layanan Kesehatan</h4>
                    <div class="recent-transactions">
                        <h4>Riwayat Permohonan Kesehatan Terbaru</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pemohon</th>
                                    <th>Layanan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($permohonanKesehatanResult->num_rows > 0) {
                                    while ($row = $permohonanKesehatanResult->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['layanan']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                                        echo "<td>
                                            <a href='edit-layanan-kesehatan.php?id=" . urlencode($row['id']) . "' class='btn-edit'>Edit</a> | 
                                            <a href='dashboard.php?delete=" . urlencode($row['id']) . "' onclick=\"return confirm('Yakin ingin menghapus?')\" class='btn-delete'>Hapus</a>
                                        </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada permohonan layanan kesehatan.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h4>Layanan Administrasi</h4>
                    <div class="recent-transactions">
                        <h4>Riwayat Permohonan Administrasi Terbaru</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pemohon</th>
                                    <th>Layanan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($permohonanAdministrasiResult->num_rows > 0) {
                                    while ($row = $permohonanAdministrasiResult->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['layanan']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                                        echo "<td>
                                            <a href='edit-layanan-administrasi.php?id=" . urlencode($row['id']) . "' class='btn-edit'>Edit</a> | 
                                            <a href='dashboard.php?delete=" . urlencode($row['id']) . "' onclick=\"return confirm('Yakin ingin menghapus?')\" class='btn-delete'>Hapus</a>
                                        </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada permohonan layanan administrasi.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <a href="cetak-pdf.php?jenis=administrasi" class="btn-print">Cetak PDF Layanan Administrasi</a>
                    <a href="cetak-pdf.php?jenis=kesehatan" class="btn-print">Cetak PDF Layanan Kesehatan</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Wonosobo Connect. Semua Hak Cipta Dilindungi.</p>
        <p>Kebijakan Privasi | Syarat dan Ketentuan</p>
        <p>Kontak Kami: info@wonosoboconnect.go.id</p>
    </footer>
</body>
</html>
