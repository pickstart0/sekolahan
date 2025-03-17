<?php
require "dummy.php"; // File harus berisi array $produk dengan 'nama' dan 'harga'
session_start();

if (!isset($_SESSION['transaksi'])) {
    $_SESSION['transaksi'] = [];
}

$hargaGedung = "";
$total = null;
$diskon = 0;
$breakfast = "Tidak";
$tipeRuangan = "";
$totalBayar = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'] ?? "";
    $identitas = $_POST['identitas'];
    $tipeRuangan = $_POST['tipeGedung'];
    $tanggalPesan = $_POST['tanggalPesan'];
    $durasi = (int)$_POST['durasi'];
    $catering = isset($_POST['catering']) ? (int)$_POST['catering'] : 0;

    // Cari harga berdasarkan tipe Ruangan yang dipilih
    foreach ($produk as $p) {
        if ($p['nama'] == $tipeRuangan) {
            $hargaGedung = (int)$p['harga'];
            break;
        }
    }

    $total = $hargaGedung * $durasi;

    // Diskon 10% jika menginap lebih dari 3 hari
    if ($durasi > 2) {
        $diskon = ($total * 0.1);
        $total -= $diskon;
    }

    // Tambah biaya catering jika dipilih
    if ($catering) {
        $breakfast = "Ya";
        $total += ($catering * $durasi);
    }

    $totalBayar = number_format($total, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pemesanan Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Pemesanan Ruangan</h2>
        <form method="POST" class="p-4 border rounded bg-light">
            <div class="mb-3">
                <label class="form-label">Nama Pemesan:</label>
                <input type="text" name="nama" class="form-control" required value="<?= $_POST['nama'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki" required <?= (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan" required <?= (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Identitas (16 Digit):</label>
                <input type="text" name="identitas" maxlength="16" class="form-control" required value="<?= $_POST['identitas'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Ruangan:</label>
                <select name="tipeGedung" id="tipeGedung" class="form-select" required onchange="this.form.submit()">
                    <option value="" disabled selected>Pilih Tipe Disini</option>
                    <?php foreach ($produk as $p): ?>
                        <option value="<?= $p['nama'] ?>" <?= (isset($_POST['tipeGedung']) && $_POST['tipeGedung'] == $p['nama']) ? 'selected' : ''; ?>>
                            <?= $p['nama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Sewa:</label>
                <input type="text" class="form-control" value="<?= $hargaGedung ? 'Rp ' . number_format($hargaGedung, 0, ',', '.') : ''; ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Pesan:</label>
                <input type="date" name="tanggalPesan" class="form-control" required value="<?= $_POST['tanggalPesan'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi Sewa (Hari):</label>
                <input type="number" name="durasi" class="form-control" required value="<?= $_POST['durasi'] ?? ''; ?>">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="catering" value="1200000" onchange="this.form.submit()" <?= isset($_POST['catering']) ? 'checked' : ''; ?>>
                <label class="form-check-label">Termasuk catering (+Rp1.200.000/hari)</label>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" name="hitung" class="btn btn-primary w-50">Hitung Total Bayar</button>
                <a href="index.php" class="btn btn-secondary w-50">Cancel</a>
                <?php if (isset($total) && $total != 0) : ?>
                    <button type="button" class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">Simpan Transaksi</button>
                <?php endif; ?>
            </div>
        </form>
        <?php if (isset($total) && $total != 0) : ?>
            <div class='alert alert-success mt-3'>Total Bayar: Rp <?= number_format($total, 0, ',', '.') ?></div>
        <?php endif; ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nama: <?= $nama ?><br>
                    Jenis Kelamin: <?= $jenisKelamin ?><br>
                    Nomor Identitas: <?= $identitas ?><br>
                    Tipe Ruangan: <?= $tipeRuangan ?><br>
                    Tanggal Pesan: <?= $tanggalPesan ?><br>
                    Durasi: <?= $durasi ?> hari<br>
                    Diskon = <?= $diskon ?> <br>
                    Catering: <?= $breakfast ?><br>
                    Total Bayar: Rp <?= $totalBayar ?>
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-primary">Simpan</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>