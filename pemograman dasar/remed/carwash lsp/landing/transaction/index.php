<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- proses -->
    <?php
    $tambahan = 0;
    $totalHarga = 0;
    $pembayaran = 0;
    $kembalian = 0;
    $hargaPaket = 0;
    $pilihanPaket = "";
    $noTransaksi = "";
    $tanggalTransaksi = "";
    $namaCustomer = "";

    // Daftar paket
    $pakett = [
        [
            "id" => "paket1",
            "title" => "Cuci Mobil Kecil",
            "mobil" => "suzuki karimun, toyota agya, swift, ayla, jazz",
            "harga" => "40000"
        ],
        [
            "id" => "paket2",
            "title" => "Cuci Mobil Sedang",
            "mobil" => "Crv, Hrv, Mobillio, Civic",
            "harga" => "45000"
        ],
        [
            "id" => "paket3",
            "title" => "Cuci Mobil Besar",
            "mobil" => "fortuner, pajero, robicorn",
            "harga" => "50000"
        ],
        [
            "id" => "paket4",
            "title" => "Cuci Mobil Sangat Besar",
            "mobil" => "alpard, Lexus, Vellfire",
            "harga" => "55000"
        ]
    ];

    // Menangkap form yang dikirim dari home
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pilihanPaket = null;
        foreach ($pakett as $paket) {
            if ($paket['id'] === $id) {
                $pilihanPaket = $paket['title']; // Ambil title
                $hargaPaket = $paket['harga'];
                break;
            }
        }
    }

    // Proses form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $noTransaksi = $_POST['noTransaksi'];
        $tanggalTransaksi = $_POST['tanggalTransaksi'];
        $namaCustomer = $_POST['namaCustomer'];
        $tambahan = (float)$_POST['tambahan'];
        $totalHarga = $hargaPaket + $tambahan;

        // Menghitung kembalian jika pembayaran diisi
        if (isset($_POST['pembayaran'])) {
            $pembayaran = (float)$_POST['pembayaran'];
        }
        if (isset($_POST['hkembalian'])) {
            $kembalian = $pembayaran - $totalHarga;
        }

        // Kembali ke home dan tampilkan SweetAlert jika tombol "Simpan Transaksi" ditekan
        if (isset($_POST['backhome'])) {
            echo "
            <script>
            document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Transaksi Berhasil!',
                text: 'Transaksi Anda telah disimpan.',
                icon: 'success'
            });
            });
            </script>
            ";
            header('location: ../home');
            exit;
        }
    }
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Home</a>
            <a class="navbar-brand fw-bold" href="#">Transaksi</a>
            <a class="btn btn-outline-danger" href="#">Logout</a>
        </div>
    </nav>

    <!-- form -->
    <div class="container my-4">
        <div class="card shadow-sm p-4">
            <form method="POST" action="">
                <div class="row g-3">
                    <!-- No Transaksi -->
                    <div class="col-md-6">
                        <label for="noTransaksi" class="form-label fw-bold">No Transaksi</label>
                        <input type="text" class="form-control" name="noTransaksi" id="noTransaksi" value="<?= htmlspecialchars($noTransaksi); ?>" placeholder="Masukkan No Transaksi" required>
                    </div>
                    <!-- Tanggal Transaksi -->
                    <div class="col-md-6">
                        <label for="tanggalTransaksi" class="form-label fw-bold">Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggalTransaksi" id="tanggalTransaksi" value="<?= htmlspecialchars($tanggalTransaksi); ?>" required>
                    </div>
                    <!-- Nama Customer -->
                    <div class="col-md-6">
                        <label for="namaCustomer" class="form-label fw-bold">Nama Customer</label>
                        <input type="text" class="form-control" name="namaCustomer" id="namaCustomer" value="<?= htmlspecialchars($namaCustomer); ?>" placeholder="Masukkan Nama Customer" required>
                    </div>
                    <!-- Pilihan Paket -->
                    <div class="col-md-6">
                        <label for="pilihanPaket" class="form-label fw-bold">Pilihan Paket</label>
                        <input type="text" class="form-control" id="pilihanPaket" value="<?= htmlspecialchars($pilihanPaket); ?>" readonly>
                    </div>
                    <!-- Harga Paket -->
                    <div class="col-md-6">
                        <label for="hargaPaket" class="form-label fw-bold">Harga Paket</label>
                        <input type="text" class="form-control" id="hargaPaket" value="<?= htmlspecialchars(number_format($hargaPaket, 0, ',', '.')); ?>" readonly>
                    </div>
                    <!-- Tambahan -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tambahan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tambahan" id="noTambah" value="0" <?= ($tambahan == 0) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="noTambah">Tidak ada tambahan - Rp. 0</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tambahan" id="wax" value="10000" <?= ($tambahan == 10000) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="wax">Wax - Rp 10.000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tambahan" id="fogging" value="20000" <?= ($tambahan == 20000) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="fogging">Fogging - Rp 20.000</label>
                        </div>
                    </div>
                    <!-- Total Harga -->
                    <div class="col-md-6">
                        <label for="totalHarga" class="form-label fw-bold">Total Harga</label>
                        <input type="text" class="form-control" id="totalHarga" value="<?= htmlspecialchars(number_format($totalHarga, 0, ',', '.')); ?>" readonly>
                    </div>
                    <!-- Pembayaran -->
                    <div class="col-md-6">
                        <label for="pembayaran" class="form-label fw-bold">Pembayaran</label>
                        <input type="number" class="form-control" name="pembayaran" id="pembayaran" value="<?= htmlspecialchars($pembayaran); ?>" placeholder="Masukkan jumlah uang" required>
                    </div>
                    <!-- Kembalian -->
                    <div class="col-md-6">
                        <label for="kembalian" class="form-label fw-bold">Kembalian</label>
                        <input type="text" class="form-control" id="kembalian" value="<?= htmlspecialchars($kembalian >= 0 ? number_format($kembalian, 0, ',', '.') : 'Pembayaran kurang'); ?>" readonly>
                    </div>
                </div>

                <!-- Buttons hitung total harga-->
                <div class="mt-4">
                    <button type="submit" name="totalHarga" class="btn btn-primary">Hitung Harga</button>
                    <button type="submit" name="hkembalian" class="btn btn-success">Hitung Kembalian</button>
                    <button type="submit" name="backhome" class="btn btn-info">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center py-3 mt-4">
        &copy; copyright namapeserta
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>