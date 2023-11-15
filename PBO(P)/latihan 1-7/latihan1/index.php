<?php
$kota = [
    'Banjarmasin', 'Banjarbaru', 'Martapura', 'Rantau', 'Kandangan', 'Barabai', 'Paringin', 'Amuntai',
    'Tanjung', 'Marabahan', 'Pelaihari', 'Batulicin', 'Kota Baru'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raihan firmasnyah</title>
</head>

<body>
    <!-- latihan 1  -->
    <h1>menampilkan data menggunakan perulangan</h1>
    <?php
    for ($a = 0; $a <= 12; $a++) {
        echo $kota[$a] . ' ';
    }
    ?>
    <h1>menampilkan urutan ganjil</h1>
    <?php
    for ($b = 0; $b < 12; $b++) {
        if ($b % 2 == 1) {
            echo "$kota[$b]<br>";
        }
    }
    ?>
    <hr>
    <hr>
    menampilkan urutan genap
    <?php
    for ($b = 0; $b < 12; $b++) {
        if ($b % 2 == 0) {
            echo "$kota[$b]<br>";
        }
    }
    ?>
</body>

</html>