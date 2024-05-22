<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>StayCation</title>
    <style>
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">StayCation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#banner">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#content">Browse by</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#from">Contact</a>
                    </li>
                    <li>
                        <a href="#from" class="btn btn-secondary">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- banner -->
    <section id="banner" class="banner mb-3">
        <div class="container mt-4   ">
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-5">
                    <h2 class="display-4 fw-bold">Find your next stay</h2>
                    <p>We provide what you need to enjoy your <br> holiday with family. Time to make another <br> memoriable moment</p>
                    <a href="#from" class="btn btn-md btn-primary">Book Now</a>
                </div>
                <div class="col-md-6 col-sm-12 ">
                    <img src="asset/img/grand-orchardz.jpg" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end  banner -->

    <!-- list hotels -->
    <section id="content" class="content mb-5">
        <div class="container py4">
            <h3 class=" fw-bold  mb-3 ">Stay at our unique properties</h3>
        </div>
        <div class="row mx-5 mb-5">
            <?php $conn = mysqli_connect('localhost', 'root', '', 'staycation');
            $result = mysqli_query($conn, "SELECT * FROM tb_hotel");
            ?>
            <?php while ($hotels = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-4 col-sm-12">
                    <div class="card h-100 " style="border: none;">
                        <img src="asset/img/<?= $hotels['image']; ?>" alt="..." class="img-fluid rounded">
                        <h6 class="mt-3"><?= $hotels['name']; ?></h6>
                        <span class="fw-bold"><?= $hotels['location']; ?></span><br>
                        <span class="d-flex justify-content-end">Rp.<?= $hotels['price']; ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <!-- end list -->
    <!-- from -->
    <section id="from" class="from mt-5 mb-5">
        <div class="container mt-4 ">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="asset/img/grand-orchardz.jpg" alt="banner" class="img-fluid">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4 class="display-6 fw-bold">Subcribe Now</h4>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="send"> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end from -->
    <!-- proses -->
    <div>
        <?php
        if (isset($_POST['send'])) {
            $name = htmlspecialchars($_POST['fullname']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $query = mysqli_query($conn, "INSERT INTO tb_message (fullname, email, message) VALUES ('$name', '$email', '$message')");

            if (($query) > 0) {
                echo '
<script>
  Swal.fire(
    {
      title: "Pesan Berhasil Di Kirim!",
      text: "You clicked the button!",
      icon: "success"
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("#from");
  }, 2000);
</script>
';
                return false;
            } else {
                echo '<script>
    Swal.fire(
      {
        icon: "error",
        title: "Oops...",
        text: "Pesan Gagal Di Kirim!",
        footer: "Press the button above to repeat!",
      },
      15
    );
    window.setTimeout(function () {
      window.location.replace("#from");
    }, 2000);
  </script>
  ';
            }

            return mysqli_affected_rows($conn);
        }
        ?>
    </div>
    <!-- endproses -->
    <!-- footer -->
    <footer>
        <div class="row ms-auto border-top">
            <div class="col-sm-4  mb-sm-0">
                <div class="card " style="border: none;">
                    <div class="card-body">
                        <h2 class="card-title">StayCation</h2>
                        <p class="card-text">We kaboom your beauty holiday <br>instanly and memorable</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <h5 class="card-title">For beginners</h5>
                        <a href="#" class="card-text text-decoration-none text-secondary">New Account</a><br>
                        <a href="#" class="card-text text-decoration-none text-secondary">Start Booking a Room</a><br>
                        <a href="#" class="card-text text-decoration-none text-secondary">Use Payments</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <h5 class="card-title">Explore Us</h5>
                        <p class="card-text text-decoration-none text-secondary">Our Carees</p><br>
                        <p class="card-text text-decoration-none text-secondary">Privacy</p><br>
                        <p class="card-text text-decoration-none text-secondary">Terms & Conditions</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <a href="#" class="card-text text-decoration-none text-secondary">suport@staycation.id</a><br>
                        <a href="#" class="card-text text-decoration-none text-secondary">021-2208-1996</a><br>
                        <a href="#" class="card-text text-decoration-none text-secondary">StayCation, Kemang, Jakarta</a>
                    </div>
                </div>
            </div>

        </div>

        <p class="text-center">&copy; 2024 StayCation. </p>
    </footer>

    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB<div class=" row">