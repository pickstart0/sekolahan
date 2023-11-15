<?php
require 'koneksi.php';

$result = mysqli_query($conn, 'SELECT * FROM siswa');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link rel="stylesheet" href="assets/style.css">

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">index</a></li>
            <li><a href="guru.php">guru</a></li>
        </ul>
    </nav>
    <h1>Daftar siswa</h1>
    <table>
        <thead>
            <a href="siswabaru.php" class="bt">tambah siswa +</a>
            <tr>
                <th>No</th>
                <th>ID</th>
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