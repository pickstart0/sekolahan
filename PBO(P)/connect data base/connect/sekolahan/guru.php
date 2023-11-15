<?php
require 'assets/connect.php';

$result = mysqli_query($conn, 'SELECT * FROM guru');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">index</a></li>
            <li><a href="guru.php">guru</a></li>
        </ul>
    </nav>
    <h1>Daftar guru</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>jenis kelamin</th>
                <th>mapel</th>
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