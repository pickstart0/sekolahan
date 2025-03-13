<?php require "dummy.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Website</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rental XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pesan">Pesan Kamar</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Produk -->
    <section id="produk" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Mobil Yang Tersedia</h2>
            <div class="row mt-4">
                <?php foreach ($produk as $p) : ?>
                    <div class="col-md-4">
                        <div class="card d-flex flex-column h-100">
                            <img src="../assets/img/<?= $p['gambar']; ?>" class="card-img-top" alt="Kamar Standar">
                            <div class="card-body flex-grow-1">
                                <h5 class="card-title"><?= $p['nama']; ?></h5>
                                <p class="card-text"><?= $p['deskripsi']; ?></p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <p class="card-text">Rp. <?= $p['harga']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>kami adalah tempat yang menyediakan penyewaan mobil yang murah tapi tidak murahan.</p>
            <ul class="list-unstyled">
                <li>Alamat: Jl. Raya No. 123, Jakarta</li>
                <li>Telepon: +62 21 1234 5678</li>
                <li>Email: info@hotelxyz.com</li>
                <li><a href="transaksi.php" class="btn btn-info mt-4">Rental Sekarang</a></li>
            </ul>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Rental XYZ. All Rights Reserved.</p>
    </footer>

    <!-- Link ke Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>