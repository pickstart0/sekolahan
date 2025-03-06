<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel XYZ</a>
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
            <h2>Kamar Yang Tersedia</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/standart.jpg" class="card-img-top" alt="Kamar Standar">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Standar</h5>
                            <p class="card-text">Kamar yang nyaman dengan fasilitas dasar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/duluxe.jpg" class="card-img-top" alt="Kamar Deluxe">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Deluxe</h5>
                            <p class="card-text">Kamar yang lebih luas dengan fasilitas premium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/executif.jpg" class="card-img-top" alt="Kamar Executive">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Executive</h5>
                            <p class="card-text">Kamar mewah dengan pelayanan eksklusif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Hotel XYZ adalah hotel bintang 3 yang terletak di pusat kota. Kami menawarkan kamar-kamar yang nyaman dengan harga terjangkau.</p>
            <ul class="list-unstyled">
                <li>Alamat: Jl. Raya No. 123, Jakarta</li>
                <li>Telepon: +62 21 1234 5678</li>
                <li>Email: info@hotelxyz.com</li>
                <li><a href="transaksi.php" class="btn btn-info mt-4">Pesan Kamar</a></li>
            </ul>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Hotel XYZ. All Rights Reserved.</p>
    </footer>

    <!-- Link ke Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>