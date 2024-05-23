<?php
// luas tabung
function luastabung($jari, $tinggi)
{
    $luastabung = 2 * 3.14 * $jari * ($jari + $tinggi);
    echo 'Luas tabung dengan ' . $jari . ' dan ' . $tinggi . ' adalah ' . $luastabung;
}
function volumetabung($jari, $tinggi)
{
    $luastabung = 3.14 * $jari * $jari * $tinggi;
    echo 'Volume tabung dengan ' . $jari . ' dan ' . $tinggi . ' adalah ' . $luastabung;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>
    <h1>luas tabung</h1>
    <?php luastabung(10, 20); ?>

    <h1>volume tabung</h1>
    <?php volumetabung(10, 20); ?>
</body>

</html>