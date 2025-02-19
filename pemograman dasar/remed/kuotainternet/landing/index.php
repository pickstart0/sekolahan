<?php include "dummy.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Kuota Internet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
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
    <!-- home -->
    <div class="d-flex justyfy-content-center-align-items-center col-lg-12">
        <div class="col-lg-6  p-5">
            <p>Halo, Guys</p>
            <h2>Kartu Internet Dengan <br>Sinyal terbaik</h2>
            <p>Nikmati berbagai paket yang kami tawarkan</p>
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary">Liat paket</a>
                <a href="#" class="ms-2">Learn More</a>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="../assets/img/hero-img.png" style="height: 400px;" class="m-2">
        </div>

    </div>
    <!-- daftar produk -->

    <div class="container">
        <h2>Daftar Paket Kuota</h2>
        <p>pilih paket interne yang sesuai dengan kebutuhanmu</p>
        <div class="row">
            <?php foreach ($produklist as $paket) : ?>
                <div class="col-md-3"> <!-- Update: Use col-md-4 for 3 items per row -->
                    <div class="card mt-3">
                        <img src="../assets/img/<?= $paket['gambar']; ?>" class="card-img-top" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $paket['nama']; ?></h5>
                            <p class="card-text"><b><?= $paket['deskripsi']; ?> | </b><?= $paket['masa']; ?></p>
                            <p class="card-text"><strong>Rp<?= number_format($paket['harga'], 0, ',', '.'); ?></strong></p>
                            <a href="transaksi.php?id=<?= $paket['id']; ?>" class="btn btn-primary">Pilih paket</a>
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