<?php
session_start();
$username = $_SESSION['name'];
$produklist =  [
    [
        "id" => 1,
        "nama" => "JaheXpress",
        "deskripsi" => "isi deskripsi produk JaheXpress",
        "harga" => 3000,
        "gambar" => "jahe.jpg"
    ],
    [
        "id" => 2,
        "nama" => "Bunga Telang",
        "deskripsi" => "isi deskripsi produk Bunga Telang",
        "harga" => 5000,
        "gambar" => "bungatelang.jpg"
    ],
    [
        "id" => 3,
        "nama" => "Lulur Kopi",
        "deskripsi" => "isi deskripsi produk Lulur Kopi",
        "harga" => 4500,
        "gambar" => "lulurkopi.jpg"
    ],
    [
        "id" => 4,
        "nama" => "Lulur Sari Intan",
        "deskripsi" => "isi deskripsi produk Sari Intan",
        "harga" => 3500,
        "gambar" => "lulurintan.jpg"
    ]
];

// Inisialisasi variabel transaksi
$transaksiSukses = false;
$produkDipilih = null;
$hargaProduk = 0;
$totalHarga = 0;
$pembayaran = 0;
$kembalian = 0;

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

    // Menentukan produk yang dipilih berdasarkan ID produk
    foreach ($produklist as $produk) {
        if ($produk['id'] == $produkId) {
            $produkDipilih = $produk;
            $hargaProduk = $produk['harga'];
            break;
        }
    }

    // Menghitung total harga jika tombol Hitung Total Harga ditekan
    if (isset($_POST['hitung_total_harga'])) {
        // Menghitung total harga
        $totalHarga = $hargaProduk * $jumlahProduk;
    }

    // Menghitung kembalian jika tombol Hitung Kembalian ditekan
    if (isset($_POST['hitung_kembalian'])) {
        // Menghitung kembalian jika pembayaran dilakukan
        if ($pembayaran > 0) {
            $kembalian = $pembayaran - $hargaProduk;
        }
    }

    // Simulasi menyimpan transaksi
    if (isset($_POST['simpan_transaksi'])) {
        $transaksiSukses = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi | Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="../index.php">Logout</a></li>
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
                <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="<?= $username; ?>" readonly>
            </div>

            <!-- Pilihan Produk -->
            <div class="mb-3">
                <label for="produk_id" class="form-label">Pilih Produk</label>
                <input type="text" class="form-control" id="produk_id" name="produk_id" value="<?= isset($produkDipilih) ? htmlspecialchars($produkDipilih['nama']) : ''; ?>" readonly>
            </div>

            <!-- Harga Produk -->
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="Rp <?= $hargaProduk; ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" min="1" value="<?= isset($_POST['jumlah_produk']) ? (int)$_POST['jumlah_produk'] : 1; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="hitung_total_harga">Hitung Total Harga</button>

            <?php if ($totalHarga > 0): ?>
                <div class="mt-3">
                    <p><strong>Total Harga: </strong>Rp <?= $totalHarga; ?></p>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="pembayaran" class="form-label">Pembayaran</label>
                <input type="number" class="form-control" id="pembayaran" name="pembayaran" value="<?= isset($_POST['pembayaran']) ? (int)$_POST['pembayaran'] : 0; ?>" required>
            </div>

            <button type="submit" class="btn btn-success" name="hitung_kembalian">Hitung Kembalian</button>

            <?php if ($kembalian > 0): ?>
                <div class="mt-3">
                    <p><strong>Kembalian: </strong>Rp <?= number_format($kembalian, 0, ',', '.'); ?></p>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-warning" name="simpan_transaksi">Simpan Transaksi</button>
        </form>
    </div>

    <footer class="text-center py-3 mt-4">
        &copy; copyright RaihanFirmansyah
    </footer>

    <!-- jika button simpan transaksi di -->
    <?php if ($transaksiSukses) { ?>
        <script>
            alert("Transaksi berhasil! Kembali ke halaman utama.");
            window.location.href = 'index.php'; // Redirect setelah alert ditutup
        </script>
    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!-- mengambil ototmatis username login dan di masukkan ke dalam halaman transaksi  -->