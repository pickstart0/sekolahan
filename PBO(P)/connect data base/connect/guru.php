<?php
require 'function.php';

$result = mysqli_query($conn, "SELECT * FROM guru");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect to database</title>
</head>
<link rel="stylesheet" href="assets/style.css">

<body>
    <!-- navbar -->
    <div class="navbar">
        <nav>
            <table>
                <tr>
                    <?php include 'navbar.php' ?>

                </tr>
            </table>
        </nav>
    </div>
    <!-- table guru -->
    <h1>Daftar guru</h1>
    <!-- button tambah -->
    <a href="tambahgr.php" class="bt">tambah Guru +</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Mata pelajaran</th>
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
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['mapel']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>

</html>