<?php
$no_transaksi = $_GET['no_transaksi'] ?? '';
$nama_customer = $_GET['namacus'] ?? '';
$tanggal_transaksi = $_GET['tanggal'] ?? '';
$produk = $_GET['produk'] ?? '';
$harga = (int) $_GET['harga'] ?? 0;
$jumlah = (int) $_GET['jumlah'] ?? 0;
$total = (int) $_GET['total'] ?? 0;
$bayar = (int) $_GET['bayar'] ?? 0;
$kembalian = (int) $_GET['kembalian'] ?? 0;
var_dump($no_transaksi);
var_dump($nama_customer);
var_dump($tanggal_transaksi);
var_dump($produk);
var_dump($harga);
var_dump($jumlah);
var_dump($total);
var_dump($bayar);
var_dump($kembalian);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Invoice Transaksi</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No. Transaksi</th>
                        <td><?= $no_transaksi; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Customer</th>
                        <td><?= $nama_customer; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?= $tanggal_transaksi; ?></td>
                    </tr>
                    <tr>
                        <th>Produk</th>
                        <td><?= $produk; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>Rp <?= number_format($harga); ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td><?= $jumlah; ?></td>
                    </tr>
                    <tr>
                        <th>Total Harga</th>
                        <td>Rp. <?= number_format($total, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Bayar</th>
                        <td>Rp. <?= number_format($bayar, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Kembalian</th>
                        <td>Rp. <?= number_format($kembalian, 0, ',', '.'); ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer text-center">
                <a href="index.php" class="btn btn-success" onclick="alert('Transaksi berhasil disimpan!')">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>
