<?php
$bulan = ['januari', 'febuari', 'maret', 'april', 'mey', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array 2 raihan firmansyah</title>
</head>

<body>
    <!-- MENAMPILKAN SEMUA BULAN -->
    <?php
    for ($b = 0; $b < count($bulan); $b++) {
        echo "$bulan[$b]<br>";
    }

    ?>
    <hr>
    <hr>
    <!-- menampilkan dari urutan paling belakang -->
    <?php
    for ($b = 11; $b >= 0; $b--) {
        echo "$bulan[$b]<br>";
    }
    ?>
    <hr>
    <hr>
    <!-- menampilkan dari juli ke desember -->
    <?php
    for ($b = 6; $b <= 11; $b++) {
        echo "$bulan[$b]<br>";
    }
    ?>
    <hr>
    <hr>
    <!-- menampilkan dari juni sampai januari -->
    <?php
    for ($b = 5; $b >= 0; $b--) {
        echo "$bulan[$b]<br>";
    }
    ?>
    <hr>
    <hr>
    <!-- menampilkan bulan dgn urutan ganjil -->
    <?php
    for ($b = 0; $b < 12; $b++) {
        if ($b % 2 == 1) {
            echo "$bulan[$b]<br>";
        }
    }
    ?>
    <hr>
    <hr>
    <!-- menampilkan  nilai bulan yang genap-->
    <?php
    for ($b = 0; $b < 12; $b++) {
        if ($b % 2 == 0) {
            echo "$bulan[$b]<br>";
        }
    }
    ?>

</body>

</html>