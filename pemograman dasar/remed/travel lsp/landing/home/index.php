<?php 
$datapaket =  [
    [
    "id" => 1,
    "nama" => "Sumatra Utara",
    "rute" => "Tur 3 Tempat Medan, Danau Toba dan Samosir 4 Hari 3 Malam",
    "harga" => 4000000,
    "gambar" => "sumatra.jfif"
    ],
    [
    "id" => 2,
    "nama" => "Kalimantan Selatan",
    "rute" => "Tur 2 Tempat Lokbaintan dan KotaBaru 2 Hari 2 Malam",
    "harga" => 1500000,
    "gambar" => "kalsel.jfif"
    ],
    [
    "id" => 3,
    "nama" => "Laboan Bajo",
    "rute" => "Tur Laboan Bajo selama 3 Hari",
    "harga" => 2500000,
    "gambar" => "bajo.jfif"
    ],
    [
    "id" => 4,
    "nama" => "Jawa Timur",
    "rute" => "Tur Jawa Timur, Jatim Park 1 dan Bromo selama 2 Malam 1 Hari",
    "harga" => 2000000,
    "gambar" => "jatim.jfif"
    ]
];

$selectedPaket = null;
if (isset($_GET['id'])) {
    foreach ($datapaket as $paket) {
        if ($paket['id'] == $_GET['id']) {
            $selectedPaket = $paket;
            break;
        }
    }
}

// membuat variabel kosong
$totalHarga = null;
$namaCustomer = "";
$jumlahOrang = 1;
$menuTambahan = 0;
$kembalian = null;
$transaksiSukses = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $namaCustomer = isset($_POST['nama_customer']) ? $_POST['nama_customer'] : "";
    $jumlahOrang = isset($_POST['jumlah_orang']) ? (int)$_POST['jumlah_orang'] : 1;
    $menuTambahan = isset($_POST['menu_tambahan']) ? (int)$_POST['menu_tambahan'] : 1;
    $pembayaran = isset($_POST['pembayaran']) ? (int)$_POST['pembayaran'] : 0;
    
    // Calculate total price
    $totalHarga = ($selectedPaket['harga'] * $jumlahOrang) + $menuTambahan;
    
    // Calculate the change if payment is provided
    if ($pembayaran > 0) {
        $kembalian = $pembayaran - $totalHarga;
    }
    
    // Simulate saving the transaction (you can replace this with your actual save logic)
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
    <title>HOME | TRAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../assets/img/travellogo.jpg" alt="Bootstrap" width="40" height="40">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- DAFTAR PAKET -->
        <div class="daftarmenu mt-4">
            <h2 class="text-center">Daftar Paket Travel</h2>
            <div class="row">
                <?php foreach ($datapaket as $paket) : ?>
                <div class="col-md-3">
                    <div class="card mt-3">
                        <img src="../../assets/img/<?= $paket['gambar']; ?>" class="card-img-top" style="height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $paket['nama']; ?></h5>
                            <p class="card-text"><?= $paket['rute']; ?></p>
                            <p class="card-text"><strong>Rp<?= number_format($paket['harga'], 0, ',', '.'); ?>/org</strong></p>
                            <a href="?id=<?= $paket['id']; ?>" class="btn btn-primary">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 mt-4">
        &copy; copyright RaihanFirmansyah
    </footer>

    <!-- MODAL BOOTSTRAP -->
    <?php if ($selectedPaket) : ?>
    <div class="modal fade show d-block" id="transaksiModal" tabindex="-1" aria-labelledby="transaksiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transaksiModalLabel">Transaksi Paket</h5>
                    <a href="index.php" class="btn-close"></a>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <!-- nama paket -->
                        <div class="mb-3">
                            <label for="nama_paket" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?= $selectedPaket['nama']; ?>" readonly>
                        </div>
                        <!-- harga paket -->
                        <div class="mb-3">
                            <label for="harga_paket" class="form-label">Harga Paket</label>
                            <input type="text" class="form-control" id="harga_paket" name="harga_paket" value="Rp<?= number_format($selectedPaket['harga'], 0, ',', '.'); ?>" readonly>
                        </div>
                        <!-- nama pelanggan -->
                        <div class="mb-3">
                            <label for="nama_customer" class="form-label">Nama Customer</label>
                            <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="<?= htmlspecialchars($namaCustomer); ?>" required>
                        </div>
                        <!-- jumlah orang -->
                        <div class="mb-3">
                            <label for="jumlah_orang" class="form-label">Jumlah Orang</label>
                            <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang" min="1" value="<?= $jumlahOrang; ?>" required>
                        </div>

                        <!-- Menu tambahan -->
                        <div class="mb-3">
                            <label for="menu_tambahan" class="form-label">Pilih Menu Tambahan</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="no_tambahan" name="menu_tambahan" value="0" <?= $menuTambahan == 0 ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="no_tambahan">Tidak ada tambahan</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="fotografer" name="menu_tambahan" value="500000" <?= $menuTambahan == 500000 ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="fotografer">Fotografer (Rp 500.000)</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="drone" name="menu_tambahan" value="1000000" <?= $menuTambahan == 1000000 ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="drone">Drone (Rp 1.000.000)</label>
                            </div>
                        </div>
                        <!-- jumlah pembayaran  -->
                        <div class="mb-3">
                            <label for="pembayaran" class="form-label">Pembayaran</label>
                            <input type="number" class="form-control" id="pembayaran" name="pembayaran" value="<?= $pembayaran; ?>" >
                        </div>
                        <!-- menghitung total -->
                        <button type="submit" class="btn btn-primary">Hitung total</button>

                        <!-- menampilkan total harga -->
                        <?php if ($totalHarga !== null): ?>
                        <div class="mt-3">
                            <p><strong>Total Harga: </strong>Rp <?= number_format($totalHarga, 0, ',', '.'); ?></p>
                        </div>
                        <?php endif; ?>

                        <!-- menampilkan kembalian yang telah di hitung -->
                        <?php if ($kembalian !== null): ?>
                        <div class="mt-3">
                            <p><strong>Kembalian: </strong>Rp <?= number_format($kembalian, 0, ',', '.'); ?></p>
                        </div>
                        <?php endif; ?>
                        <!-- tombol simpan transaksi -->
                        <button type="submit" class="btn btn-success" name="simpan_transaksi">Simpan Transaksi</button>
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- SweetAlert2  -->
    <?php if ($transaksiSukses): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Transaksi berhasil disimpan!',
            showConfirmButton: true,
            confirmButtonText: 'Kembali ke Beranda'
        }).then(function() {
            
            window.location.href = 'index.php';
        });
    </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
