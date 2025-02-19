<?php
require "dummy.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="transaksi.php">Transaksi</a></li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="../index.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- banner -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/banner.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">Daftar Produk klinik kecantikan</h2>
        <div class="row">
            <?php foreach ($produklist as $produk) : ?>
                <div class="col-md-3">
                    <div class="card mt-3">
                        <img src="../assets/img/<?= $produk['gambar']; ?>" class="card-img-top" style="height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produk['nama']; ?></h5>
                            <p class="card-text"><?= $produk['deskripsi']; ?></p>
                            <p class="card-text"><strong>Rp<?= number_format($produk['harga'], 0, ',', '.'); ?></strong></p>
                            <a href="transaksi.php?id=<?= $produk['id']; ?>" class="btn btn-primary">Pilih produk</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-center py-3 mt-4">
        &copy; copyright RaihanFirmansyah
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>