<?php
include('koneksi.php');

require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'kesehatan';  

$html = '<h2 style="text-align: center;">Laporan Permohonan ' . ucfirst($jenis) . '</h2>';
$html .= '<table border="1" cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="text-align: center; width: 30%;">ID</th>
                    <th style="text-align: center; width: 30%;">Nama Pemohon</th>
                    <th style="text-align: center; width: 30%;">Layanan</th>
                    <th style="text-align: center; width: 30%;">Status</th>
                </tr>
            </thead>
            <tbody>';

if ($jenis == 'kesehatan') {
    $query = "SELECT * FROM permohonan_kesehatan";
    $result = $koneksi->query($query);

    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                    <td style="text-align: center;">' . htmlspecialchars($row['id']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['nama']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['layanan']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['status']) . '</td>
                  </tr>';
    }
} elseif ($jenis == 'administrasi') {
    $query = "SELECT * FROM permohonan_administrasi";
    $result = $koneksi->query($query);

    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                    <td style="text-align: center;">' . htmlspecialchars($row['id']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['nama']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['layanan']) . '</td>
                    <td style="text-align: center;">' . htmlspecialchars($row['status']) . '</td>
                  </tr>';
    }
}

$html .= '</tbody></table>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');  

$dompdf->render();

$dompdf->stream('laporan_permohonan_' . $jenis . '.pdf');
?>
