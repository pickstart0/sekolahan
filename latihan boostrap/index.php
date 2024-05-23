<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- bosstratp css -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <img src="asset/img/logo.svg" alt="Bootstrap" width="100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link" href="#">Testimoni</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- Banner -->
    <div id="banner" class="bg-body-tertiary">
        <div class="container">
            <div class="pt-5 text-center">
                <h1>Search Engine Optimisation & <br> Marketing.</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas atque soluta, aperiam ab cupiditate ratione!</p>
                <img src="asset/img/banner.svg" alt="baner">

            </div>
        </div>
    </div>
    <!-- end banner -->
    <!-- start feature -->
    <section id="feature">
        <div class="container pt-5 ">
            <h2 class="text-center">How does it works</h2>
            <p class="mb-4 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, <br> Lorem ipsum dolor sit amet. </p>
            <div class="row">
                <div class="col">
                    <img src="asset/img/feature-1.svg" alt="feature">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dolore?</p>
                </div>
                <div class="col">
                    <img src="asset/img/feature-2.svg" alt="feature">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dolore?</p>
                </div>
                <div class="col">
                    <img src="asset/img/feature-3.svg" alt="feature">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dolore?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature -->
    <!-- bootstrap js -->
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>