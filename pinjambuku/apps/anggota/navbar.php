<!-- navbar start -->
<style>
    .nav-item {
        margin: 5px 0px 5px 5px;
        font-size: 20px;

    }

    .nav-item p {
        font-size: 19px;
        margin-left: 5px;
        margin-bottom: -5px;
        color: grey;
    }

    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }
</style>
<nav class="container-fluid  navbar navbar-expand-lg bg-primary-subtle d-inline-block">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"><a class="navbar-brand text-dark fw-bold fs-4 mt-2 mb-2 d-inline-flex p-2" href="?page=home">PERPUS ISFI</a></li>
            <li class="nav-item">
                <p>Fiture Perpus</p>
            </li>
            <li class="nav-item"><a class="nav-link text-dark" href="?page=home">
                    <?php include '../../asset/icon/home.icon.php'; ?>
                    Dashboard</a></li>
            <li class="nav-item active"><a class="nav-link text-dark" href="?page=pinjam">
                    <?php include '../../asset/icon/pinjam.icon.php'; ?>
                    Pinjam Buku</a></li>
            <li class="nav-item active"><a class="nav-link text-dark" href="?page=kembali">
                    <?php include '../../asset/icon/pengembali.icon.php'; ?>
                    Balikkan Buku</a></li>
            <li class="nav-item">
                <p>User</p>
            </li>
            <li class="nav-item active"><a href="?page=editprofil" class="nav-link text-dark">
                    <?php include '../../asset/icon/anggota.icon.php'; ?>
                    Edit profile
                </a></li>
            <li class="nav-item activ"><a href="?page=logout" class="nav-link text-dark">
                    <?php include '../../asset/icon/logout.icon.php'; ?>
                    Log Out
                </a></li>
        </ul>
    </div>
</nav>
<!-- endnavbar -->
<?php
require 'prosesnav.php';
?>