<?php
require "dummy.php";

$id = $_GET['id'] ?? '';
$total = null;
$jenisKelamin = "";
$selectedID = $_POST['tipeMobil'] ?? $_GET['id'] ?? '';
$hargaRental = 0;
$pesanEror = "";

// Ambil harga rental dari produk yang dipilih
foreach ($produk as $p) {
    if ($p['nama'] == $selectedID) {
        $hargaRental = (int)$p['harga'];
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'] ?? '';
    $identitas = $_POST['identitas'];
    $tipeMobil = $_POST['tipeMobil'];
    $tanggalPesan = $_POST['tanggalPesan'];
    $durasi = (int)$_POST['durasi'];
    $supir = isset($_POST['supir']) ? (int)$_POST['supir'] : 0;

    // Menghitung total harga
    $total = $hargaRental * $durasi;

    // Diskon 10% jika lebih dari 3 hari
    if ($durasi > 3) {
        $total -= ($total * 0.1);
    }
    // jika nomor identitas kurang dari 16 
    if (strlen($identitas) !== 16) {
        $pesanEror = "Nomor identitas tidak valid";
    }

    // Tambah biaya supir jika dipilih
    $total += ($supir * $durasi);

    // Simpan transaksi jika tombol "Simpan" ditekan
    if (isset($_POST['simpan']) && strlen($identitas) == 16) {
        $transaksi = "Nama : $nama\n" .
            "JK : $jenisKelamin\n" .
            "ID : $identitas\n" .
            "Mobil : $tipeMobil\n" .
            "Tgl Pesan : $tanggalPesan\n" .
            "Durasi : {$durasi}h\n" .
            "Supir : " . ($supir ? 'Ya' : 'Tidak') . "\n" .
            "Total : Rp " . number_format($total, 0, ',', '.');

        echo "<script>alert(`$transaksi`);
        window.location.href = 'index.php';
        </script>";

        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pemesanan Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-warning"> >
    <div class="container  mt-5">
        <h2 class="text-center">Form Pemesanan Mobil</h2>
        <form method="POST" class="p-4 border rounded bg-warning-subtle">
            <div class="mb-3">
                <label class="form-label">Nama Pemesan:</label>
                <input type="text" name="nama" class="form-control" required value="<?= $_POST['nama'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki" required <?= ($jenisKelamin == 'Laki-laki') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan" required <?= ($jenisKelamin == 'Perempuan') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Identitas (16 Digit):</label>
                <input type="text" name="identitas" maxlength="16" class="form-control" required value="<?= $_POST['identitas'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Mobil:</label>
                <select name="tipeMobil" class="form-select" required onchange="this.form.submit()">
                    <?php foreach ($produk as $p): ?>
                        <option value="<?= $p['nama'] ?>" <?= ($selectedID == $p['nama']) ? 'selected' : ''; ?>>
                            <?= $p['nama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Rental:</label>
                <input type="text" class="form-control" value="<?= $hargaRental ? 'Rp ' . number_format($hargaRental, 0, ',', '.') : ''; ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Pesan:</label>
                <input type="date" name="tanggalPesan" class="form-control" required value="<?= $_POST['tanggalPesan'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi Rental (Hari):</label>
                <input type="number" name="durasi" class="form-control" required value="<?= $_POST['durasi'] ?? ''; ?>">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="supir" value="100000" <?= isset($_POST['supir']) ? 'checked' : ''; ?>>
                <label class="form-check-label">Termasuk supir (+Rp100.000/hari)</label>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" name="hitung" class="btn btn-warning w-50">Hitung Total Bayar</button>
                <?php if (isset($_POST['hitung']) && strlen($_POST['identitas']) == 16): ?>
                    <button type="submit" name="simpan" class="btn btn-success w-50">Simpan Transaksi</button>
                <?php endif; ?>
                <a href="index.php" class="btn btn-danger w-50">Cancel</a>
            </div>
        </form>
        <?php if (isset($total) && $pesanEror !== ''): ?>
            <div class='alert alert-danger mt-3'><?= $pesanEror; ?></div>
        <?php endif; ?>
        <?php if (isset($total) && $total != 0 && $pesanEror == ""): ?>
            <div class='alert alert-success mt-3'>Total Bayar: Rp <?= number_format($total, 0, ',', '.') ?></div>
        <?php endif; ?>
    </div>
</body>

</html>
