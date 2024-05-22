<?php
$conn = mysqli_connect('localhost', 'root', '', 'sekolahcoding');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>web Portfolio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- banner -->
    <section id="banner" class="banner">
        <div class="container mt-4 py-4 ">
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-4">
                    <h2 class="display-4 fw-bold">Your Dream Carrer <br>Start With Us</h2>
                    <p>Sekolah koding menyediakan Kelas Web Development, <br>
                        Freelance, Android Development untuk pemula</p>
                    <a href="#" class="btn btn-md btn-primary">Start Now</a>
                </div>
                <div class="col-md-6 col-sm-12 ">
                    <img src="assets/img/banner.png" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- CONTEN -->
    <section id="content" class="content bg-secondary">
        <div class="container py-4">
            <h3 class="display-5 fw-bold text-center mb-3 ">Kelas Unggulan Sekolah Coding</h3>
        </div>
        <div class="row ">
            <?php
            $querycourse = mysqli_query($conn, "SELECT * FROM course");
            ?>
            <?php while ($fc = mysqli_fetch_assoc($querycourse)) : ?>
                <div class="col-md-3 col-sm-12">
                    <img src="assets/img/<?= $fc['image']; ?>" alt="" class="img-fluid rounded">
                    <h6 class="mt-3"><?= $fc['name']; ?></h6>
                    <span class="fw-bold">User Register: <?= $fc['user_regist']; ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <!-- END CONTEN -->
    <!-- contact -->
    <section class="contact" id="cntact">
        <div class="container py-4">
            <h4 class="mb-5">Hubungi Kami</h4>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                    <span class="fw-bold d-block">Telepon</span>
                    <span>082357239</span>
                </div>
                <div class="mb-3">
                    <span class="fw-bold d-block">Alamat</span>
                    <span>Jln. Flamboyan III No 70. Banjarmasin</span>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="mesege" class="form-label">Mesege</label>
                        <input type="text" id="mesege" name="mesege" class="form-control">
                    </div>
                    <button type="submit" name="Kirim" class="btn btn-md btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact -->
    <!-- footer -->
    <footer class="bg-light py-4 text-center">
        <p>&copy; Sekolah Koding</p>

    </footer>
    <!-- endfooter -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>