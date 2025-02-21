<?php require "dummy.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            width: 98%;
            margin: auto;
        }
    </style>
</head>

<body class="container" style="background-color: rgb(211, 106, 26);">
    <!-- NAVBAR -->
    <nav class="navbar" style="background-color: #522807;">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link link-light active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link link-light" href="transaksi.php">Transaksi</a></li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link link-light" href="../index.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- banner -->
    <div class="d-flex justify-content-center w-100 mt-5 ">
        <div class="col-lg-6 ">
            <img src="../assets/img/banner1.jpg" class="banner d-block" alt="...">
        </div>
        <div class="col-lg-6 ">
            <img src="../assets/img/banner2.jpg" class="banner d-block" alt="...">
        </div>
    </div>
    <div class="container">
        <h2 class="text-center text-white">Daftar Menu Coffe Shop</h2>
        <div class="row">
            <?php foreach ($produklist as $produk) : ?>
                <div class="col-md-4">
                    <div class="card mt-3 bg-transparent border border-0">
                        <div class="card-body text-center mb-2" style="background-color: #9e5d2b;">
                            <h5 class="card-title text-white"><?= $produk['nama']; ?></h5>
                            <p class="card-text text-white"><?= $produk['deskripsi']; ?></p>
                            <p class="card-text text-white"><strong>Rp<?= number_format($produk['harga'], 0, ',', '.'); ?></strong></p>
                        </div>
                        <a href="transaksi.php?id=<?= $produk['id']; ?>" class="btn text-white" style="background-color:rgb(105, 57, 19);">Pilih produk</a>
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