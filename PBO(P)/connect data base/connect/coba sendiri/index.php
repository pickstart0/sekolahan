<?php
require 'function.php';

$result = mysqli_query($conn, "SELECT * FROM siswa");
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
                    <ul>
                        <li><a href="index.php">siswa</a></li>
                        <li><a href="guru.php">guru</a></li>
                    </ul>
                </tr>
            </table>
        </nav>
    </div>
    <!-- table daftar siswa -->
    <h1>Daftar siswa</h1>
    <!-- button tambah daftar siswa -->
    <a href="tambah.php" class="bt">tambah siswa +</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
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
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>

</html>