<?php
session_start();
if (!isset($_SESSION['transaksi']) || empty($_SESSION['transaksi'])) {
    echo "<script>alert('Tidak ada transaksi yang disimpan.'); window.location.href = 'index.php';</script>";
    exit();
}

// Ambil transaksi terbaru
$transaksiTerbaru = end($_SESSION['transaksi']);

// Hitung diskon jika durasi lebih dari 3 hari
if ($transaksiTerbaru['durasi'] > 3) {
    $diskon = 10;
} else {
    $diskon = 0;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Terbaru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Transaksi Terbaru</h2>
        <div class="card p-4 shadow-sm mx-auto" style="max-width: 500px;">
            <table class="table table-borderless">
                <tr>
                    <th class="text-start">Nama</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['nama']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Jenis Kelamin</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['jenisKelamin']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Nomor Identitas</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['identitas']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Tipe Kamar</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['tipeKamar']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Tanggal Pesan</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['tanggalPesan']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Durasi</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['durasi']); ?> Hari</td>
                </tr>
                <tr>
                    <th class="text-start">Breakfast</th>
                    <td class="text-start">:</td>
                    <td><?php echo htmlspecialchars($transaksiTerbaru['breakfast']); ?></td>
                </tr>
                <tr>
                    <th class="text-start">Diskon</th>
                    <td class="text-start">:</td>
                    <td> <?php echo $diskon . '%'; ?> </td>
                </tr>
                <tr>
                    <th class="text-start">Total Bayar</th>
                    <td class="text-start">:</td>
                    <td><strong>Rp <?php echo htmlspecialchars($transaksiTerbaru['totalBayar']); ?></strong></td>
                </tr>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>

</html>
