<?php
$_SESSION['is_logged_in'] === true;
// mengambil id yang sudah di kirim
$id = $_SESSION['id'];
// connect data base
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
// mencari data dengan user id yang sesuai dengan yang di terima
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$id'");
// jika data ditemukan masukkan ke dalam array assosiative
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Perpus</title>
    <style>
        .fcontainer {
            margin-left: 280px;
            width: 1050px;
        }

        .judul {
            display: flex;
        }

        .ucapan {
            margin-left: -5px;
            width: 98%;
        }

        .lsmk {

            display: block;
        }

        .lsmk img {
            margin-top: 5%;
            margin-left: 35%;
            width: 250px;
            opacity: 0.5;
        }

        .lsmk p {
            text-align: center;
            opacity: 0.5;
        }

        .footer {
            margin-left: 250px;
            padding-top: 15px;
        }

        .footer p {
            margin-left: 10px;
        }
    </style>

<body>
    <div class="fcontainer">
        <div class="judul  mt-5">
            <h1>Dashboard </h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <div class="ucapan shadow-sm p-3 mb-3 bg-body-tertiary  text-secondary-emphasis">Selamat Datang <?= $row['nama_lengkap']; ?> Di Perpus Online ISFI</div>
        <div class="lsmk">
            <img src="../../asset/logo/logo.png" alt="">
            <p>Jl. Flamboyan III No.7B, Sungai Miai, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
        </div>
        <div class="footer fixed-bottom bg-primary-subtle">
            <p>&copy; 2024 Pinjam buku. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>

</body>

</html>