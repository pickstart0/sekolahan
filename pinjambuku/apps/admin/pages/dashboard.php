<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$get = mysqli_query($conn, "SELECT * FROM user where role ='Anggota'");
$count = mysqli_num_rows($get); // menghitung jumlah anggota

$get1 = mysqli_query($conn, "SELECT * FROM buku ");
$count1 = mysqli_num_rows($get1); // menghitung jumlah buku

$get2 = mysqli_query($conn, "SELECT * FROM peminjaman ");
$count2 = mysqli_num_rows($get2); // menghitung peminjaman buku

$get3 = mysqli_query($conn, "SELECT * FROM pengembalian ");
$count3 = mysqli_num_rows($get3); // menghitung buku buku
?>
<title>DASHBOARD | PERPUS</title>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .container p {
        display: block;
        width: 1050px;
        padding-top: 10px;
        padding-left: 5px;
        padding-bottom: 10px;
        background-color: white;
        border-radius: 5px;
        border: 0.1px solid rgba(0, 0, 0, 0.3);
        font-size: 16px;
        color: grey;
    }

    .cards {
        padding: 15px 10px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .card {
        width: 230px;
        height: 130px;
        background: white;
        margin: 15px 8px;
        padding: 8px;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2) 0 6px 20px 0 rgba(0, 0, 0, 0.2);
    }

    .box {
        color: white;
        width: 150px;
    }

    .icon {
        position: absolute;
    }

    .icon svg {
        width: 50px;
        margin-left: 140px;
    }

    .lsmk {
        display: block;

    }

    .lsmk img {
        margin-left: 35%;
        margin-top: 2%;
        width: 250px;
        opacity: 0.8;
    }

    .lsmk span {
        display: block;
        text-align: center;
        opacity: 0.5;
    }
</style>
<div class="fcontainer mt-4">
    <div class="container d-block">
        <div class="judul d-flex ">
            <h1>Dashboard</h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <p>Selamat Datang Administrator Di halaman Admin</p>
        <div class="cards">
            <div class="card bg-primary bg-gradient">
                <div class="box">
                    <h1><?= $count; ?></h1>
                    <h5>Anggota</h5>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    </svg>
                </div>
            </div>
            <div class="card bg-success bg-gradient">
                <div class="box">
                    <h1><?= $count1; ?></h1>
                    <h5>Buku</h5>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-code" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708m-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708" />
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                    </svg>
                </div>
            </div>
            <div class="card bg-warning bg-gradient">
                <div class="box">
                    <h1><?= $count2; ?></h1>
                    <h5>peminjaman</h5>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                    </svg>
                </div>
            </div>
            <div class="card bg-danger">
                <div class="box">
                    <h1><?= $count3; ?></h1>
                    <h5>Pengembalian</h5>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="lsmk">
            <img src="../../asset/logo/logo.png" alt="">
            <span>Jl. Flamboyan III No.7B, Sungai Miai, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</span>
        </div>
    </div>
</div>