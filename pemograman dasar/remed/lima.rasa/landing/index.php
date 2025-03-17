<?php require "dummy.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lima Rasa</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- img banner -->
    <section>
        <div class="carousel-inner d-flex justify-content-center bg-light">
            <?php foreach ($produk as $p) : ?>
                <img src="../assets/img/<?= $p['gambar']; ?>" class="d-block m-3" style="width: 400px" alt="...">
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Produk -->
    <section id="produk" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Ruangan Yang Tersedia</h2>
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
                                <p class="card-text"><?= $p['harga']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-5 bg-light">
        <div class="d-flex justify-content-center mb-5">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/eLs5BUit2wI" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Lima rasa adalah restourant ter enak yang ada di banjarmasin dengan harga terjangkau.</p>
            <ul class="list-unstyled">
                <li>Jl. A. Yani No.Km. 3,5, RW.No.279, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70345</li>
                <li>Telepon: +62 8xxxxxx</li>
                <li>Email: info@limarasa.com</li>
                <li><a href="transaksi.php" class="btn btn-info mt-4">Booking tempat</a></li>
            </ul>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Lima Rasa. All Rights Reserved.</p>
    </footer>

    <!-- Link ke Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>