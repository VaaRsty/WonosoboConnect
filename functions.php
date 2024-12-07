<?php
function getPermohonan($koneksi) {
    $query = "SELECT * FROM permohonan";
    return $koneksi->query($query);
}

function getPermohonanKesehatan($koneksi) {
    $query = "SELECT * FROM permohonan_kesehatan";
    return $koneksi->query($query);
}

function getPermohonanAdministrasi($koneksi) {
    $query = "SELECT * FROM permohonan_administrasi";
    return $koneksi->query($query);
}

function getStatistics($koneksi) {
    $stats = [];

    $result = $koneksi->query("SELECT COUNT(*) as total_pengguna FROM tb_admin");
    $stats['total_pengguna'] = $result->fetch_assoc()['total_pengguna'];

    $result = $koneksi->query("SELECT COUNT(*) as total_permohonan FROM permohonan 
                                UNION 
                                SELECT COUNT(*) FROM permohonan_kesehatan 
                                UNION 
                                SELECT COUNT(*) FROM permohonan_administrasi");
    $totalPermohonan = 0;
    while ($row = $result->fetch_assoc()) {
        $totalPermohonan += $row['total_permohonan'];
    }
    $stats['total_permohonan'] = $totalPermohonan;

    $result = $koneksi->query("SELECT COUNT(*) as total_layanan FROM layanan WHERE status = 'aktif'");
    $stats['total_layanan'] = $result->fetch_assoc()['total_layanan'];

    return $stats;
}

function deletePermohonan($id, $koneksi) {
    $query = "DELETE FROM permohonan WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('i', $id);
    return $stmt->execute();
}
?>
