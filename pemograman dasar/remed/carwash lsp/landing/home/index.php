<?php
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
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-1 ps-3 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Transaksi</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="" class="nav-link">logout</a>
        </form>
      </div>
    </div>
  </nav>
  <!-- image banner -->
  <div class="container d-flex justify-content-center">
    <img src="../../assets/img/logo.jpg" style="height: 210px;">
  </div>
  <!-- daftar paket  -->
  <div class="m-2 menu">
    <h4 class="m-3">Daftar Paket Pencucian Mobil</h4>
    <div class="cards d-flex justify-content-center">
      <?php
      foreach ($pakett as $paket) : ?>
        <div class="card mx-3 border border-0">
          <div class="card-body bg-secondary text-white rounded-top" style="width: 15rem; height: 12rem;">
            <h5 class="card-title mb-4"><?= $paket['title']; ?></h5>
            <p class="card-text mb-4"><?= $paket['mobil']; ?></p>
            <p class="card-text mb-2"><?= $paket['harga']; ?></p>
          </div>
          <form action="../transaction/index.php" method="get">
            <input type="hidden" name="id" value="<?= $paket['id']; ?>">
            <button type="submit" name="pesanpaket" class="btn btn-primary mt-4 rounded-bottom" style="width: 100%;">Pilih Paket</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- footer -->
  <footer class="bg-light text-center py-3">
    <p class="mb-0">&copy;copyright RaihanFirmansyah</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>