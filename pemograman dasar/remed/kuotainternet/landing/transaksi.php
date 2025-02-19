<?php
require "dummy.php";

// Inisialisasi variabel transaksi
$transaksiSukses = false;
$produkDipilih = null;
$hargaProduk = 0;
$totalHarga = 0;
$pembayaran = 0;
$saku = null;
$pesanerror = '';

// Cek apakah produk_id ada di URL
if (isset($_GET['id'])) {
    $produkId = (int) $_GET['id']; // Mendapatkan ID produk dari URL
    // Menentukan produk yang dipilih berdasarkan ID produk
    foreach ($produklist as $produk) {
        if ($produk['id'] == $produkId) {
            $produkDipilih = $produk;
            $hargaProduk = $produk['harga'];
            break;
        }
    }
}

// Proses ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $jumlahProduk = isset($_POST['jumlah_produk']) ? (int)$_POST['jumlah_produk'] : 1;
    $produkId = isset($_POST['produk_id']) ? (int)$_POST['produk_id'] : 0;
    $pembayaran = isset($_POST['pembayaran']) ? (int)$_POST['pembayaran'] : 0;


    // Menghitung total harga jika tombol Hitung Total Harga ditekan
    if (isset($_POST['hitung_total_harga'])) {
        $totalHarga = $hargaProduk * $jumlahProduk;
    } elseif (isset($_POST['totalharga'])) {
        $totalHarga = (int)$_POST['totalharga']; // Mengambil nilai total harga yang sudah ada
    }

    // Menghitung kembalian jika tombol Hitung Kembalian ditekan
    if (isset($_POST['hitung_kembalian'])) {
        if (empty($pembayaran)) {
            $pesanerror = 'Pembayaran belum dimasukkan.';
        } elseif ($pembayaran < $totalHarga) {
            $pesanerror = 'Pembayaran kurang. Total yang harus dibayar: Rp ' . number_format($totalHarga, 0, ',', '.');
        } elseif ($totalHarga == 0) {
            $pesanerror = 'total harga belum di hitung';
        } else {
            $saku = $pembayaran - $totalHarga;
        }
    }

    // Simulasi menyimpan transaksi
    if (isset($_POST['simpan_transaksi'])) {
        if (empty($pembayaran)) {
            $pesanerror = 'Pembayaran belum dimasukkan.';
        } elseif ($pembayaran < $totalHarga) {
            $pesanerror = 'Pembayaran kurang.';
        } elseif ($totalHarga == 0) {
            $pesanerror = 'total harga belum di hitung';
        } else {
            // Jika tidak ada error, transaksi berhasil disimpan
            $transaksiSukses = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi | Kuota Internet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <ul class="nav">
                <li class="nav-link"><img src="../assets/img/logo.png" alt="" style="width: 40px;"></li>
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="">paket</a></li>
                <li class="nav-item"><a class="nav-link" href="">Rewards</a></li>
                <li class="nav-item"><a class="nav-link" href="">Discover</a></li>
                <li class="nav-item"><a class="nav-link" href="">Global Rank</a></li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="btn btn-primary" href="../index.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Form Transaksi</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="no_transaksi" class="form-label">No Transaksi</label>
                <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="<?= isset($_POST['no_transaksi']) ? htmlspecialchars($_POST['no_transaksi']) : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?= isset($_POST['tanggal_transaksi']) ? htmlspecialchars($_POST['tanggal_transaksi']) : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="nama_customer" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="<?= isset($_POST['nama_customer']) ? htmlspecialchars($_POST['nama_customer']) : ''; ?>" required>
            </div>

            <!-- Pilihan Produk -->
            <div class="mb-3">
                <label for="produk_id" class="form-label">Pilih Produk</label>
                <input type="text" class="form-control" id="produk_id" name="produk_id" value="<?= isset($produkDipilih) ? htmlspecialchars($produkDipilih['nama']) : ''; ?>" readonly>
            </div>

            <!-- Harga Produk -->
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="Rp <?= number_format($hargaProduk, 0, ',', '.'); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" min="1" value="<?= isset($_POST['jumlah_produk']) ? (int)$_POST['jumlah_produk'] : 1; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="hitung_total_harga">Hitung Total Harga</button>

            <?php if ($totalHarga > 0): ?>
                <div class="mt-3">
                    <input type="number" class="form-control" id="totalharga" name="totalharga" value="<?= $totalHarga; ?>" readonly> <!-- Total harga tidak reset -->
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="pembayaran" class="form-label">Pembayaran</label>
                <input type="number" class="form-control" id="pembayaran" name="pembayaran" value="<?= isset($_POST['pembayaran']) ? htmlspecialchars($_POST['pembayaran']) : 0; ?>">
            </div>

            <button type="submit" class="btn btn-success" name="hitung_kembalian">Hitung Kembalian</button>

            <?php if ($saku !== null): ?>
                <div class="mt-3 alert alert-<?= $saku > 0 ? 'success' : 'info' ?>" role="alert">
                    <p><strong>Kembalian: </strong>Rp <?= number_format($saku, 0, ',', '.'); ?></p>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-warning" name="simpan_transaksi">Simpan Transaksi</button>

            <?php if ($pesanerror): ?>
                <div class="mt-3 alert alert-danger" role="alert">
                    <p><strong>Error: </strong><?= $pesanerror; ?></p>
                </div>
            <?php endif; ?>
        </form>
    </div>

    <footer class="text-center py-3 mt-4">
        &copy; copyright RaihanFirmansyah
    </footer>

    <?php if ($transaksiSukses) {
        header("location: invoice.php?no_transaksi=" . $_POST['notransaksi'] . ",?namacus=" . $_POST['nama_customer'] . ",?tanggal=" . $_POST['tanggal_transaksi'] . ",?produk=" . $produkDipilih);
    } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>