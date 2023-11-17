<?php
require "function.php";
$result = mysqli_query($conn, "SELECT * FROM jurusan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar jurusan</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="navbar">
        <nav>
            <table>
                <tr>
                    <?php include 'navbar.php' ?>
                </tr>
            </table>
        </nav>
    </div>
    <!-- table jurusan -->
    <h1>Daftar jurusan</h1>
    <a href="tambahjr.php" class="bt">tambah Jurusan +</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Jumlah Kelas</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jumlah_kelas']; ?></td>
                    <td><?= $row['tahun']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
</body>

</html>