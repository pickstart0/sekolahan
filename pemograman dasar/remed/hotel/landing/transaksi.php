<?php
require "dummy.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pemesanan Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Pemesanan Kamar</h2>
        <form method="POST" class="p-4 border rounded bg-light">
            <div class="mb-3">
                <label class="form-label">Nama Pemesan:</label>
                <input type="text" name="nama" class="form-control" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki" required <?php echo (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan" required <?php echo (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Identitas (16 Digit):</label>
                <input type="text" name="identitas" maxlength="16" class="form-control" required value="<?php echo isset($_POST['identitas']) ? $_POST['identitas'] : ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Tipe Kamar:</label>
                <select name="tipeKamar" id="tipeKamar" class="form-select">
                    <option value="" disabled selected>Pilih Tipe Disini</option>
                    <?php foreach ($produk as $p): ?>
                        <option value="<?= $p['harga'] ?>"><?= $p['nama'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga Kamar:</label>
                <input type="text" id="hargaKamar" class="form-control" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Pesan:</label>
                <input type="date" name="tanggalPesan" class="form-control" required value="<?php echo isset($_POST['tanggalPesan']) ? $_POST['tanggalPesan'] : ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Durasi Menginap (Hari):</label>
                <input type="number" name="durasi" class="form-control" required value="<?php echo isset($_POST['durasi']) ? $_POST['durasi'] : ''; ?>">
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="breakfast" value="80000" <?php echo (isset($_POST['breakfast'])) ? 'checked' : ''; ?>>
                <label class="form-check-label">Termasuk Breakfast (+Rp80.000)</label>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" name="hitung" class="btn btn-primary w-50">Hitung Total Bayar</button>
                <?php if (isset($_POST['hitung']) && strlen($_POST['identitas']) == 16): ?>
                    <button type="submit" name="simpan" class="btn btn-success w-50">Simpan Transaksi</button>
                <?php endif; ?>
                <a href="index.php" class="btn btn-secondary w-50">Cancel</a>
            </div>
        </form>

        <?php
        session_start();
        if (!isset($_SESSION['transaksi'])) {
            $_SESSION['transaksi'] = [];
        }

        if (isset($_POST['hitung']) || isset($_POST['simpan'])) {
            $identitas = $_POST['identitas'];
            if (strlen($identitas) < 16) {
                echo "<div class='alert alert-danger mt-3'>Nomor Identitas harus 16 digit.</div>";
            } else {
                $hargaKamar = (int)$_POST['tipeKamar'];
                $durasi = (int)$_POST['durasi'];
                $total = $hargaKamar * $durasi;

                if ($durasi > 3) {
                    $diskon = $total * 0.1; // Hitung diskon 10%
                    $total -= $diskon;
                }
                if (isset($_POST['breakfast'])) {
                    $total += (int)$_POST['breakfast'];
                }
                echo "<div class='alert alert-success mt-3'>Total Bayar: Rp " . number_format($total, 0, ',', '.') . "</div>";

                if (isset($_POST['simpan'])) {
                    $_SESSION['transaksi'][] = [
                        'nama' => $_POST['nama'],
                        'jenisKelamin' => $_POST['jenisKelamin'],
                        'identitas' => $_POST['identitas'],
                        'tipeKamar' => $_POST['tipeKamar'],
                        'tanggalPesan' => $_POST['tanggalPesan'],
                        'durasi' => $_POST['durasi'],
                        'breakfast' => isset($_POST['breakfast']) ? 'Ya' : 'Tidak',
                        'totalBayar' => number_format($total, 0, ',', '.')
                    ];
                    header("Location: simpan.php");
                    exit();
                }
            }
        }
        ?>
    </div>

    <script>
    document.getElementById("tipeKamar").onchange = function() {
        document.getElementById("hargaKamar").value = "Rp " + new Intl.NumberFormat("id-ID").format(this.value);
    };
    </script>
</body>

</html>
