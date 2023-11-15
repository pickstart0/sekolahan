<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arraysatudimensi</title>
</head>

<body>
    <?php $nilaix = [-1, 0, 1, 2, 3] ?>

    <h3>soal1</h3>
    <?php

    echo "[x, y]<br>";
    for ($i = 0; $i <= 4; $i++) {
        $y = $nilaix[$i] + 2;
        echo "[$nilaix[$i], $y]<br>";
    }
    ?>
    <h3>soal2</h3>
    <?php
    echo "[x, y]<br>";
    for ($i = 0; $i <= 4; $i++) {
        $y =  2 * $nilaix[$i] + 2;
        echo "[$nilaix[$i], $y]<br>";
    }
    ?>
    <h3>soal3</h3>
    <?php
    echo "[x, y]<br>";
    for ($i = 0; $i <= 4; $i++) {
        $y =   3 + $nilaix[$i] * $nilaix[$i];
        echo "[$nilaix[$i], $y]<br>";
    }
    ?>
    <h3>soal4</h3>
    <?php
    echo "[x, y]<br>";
    for ($i = 0; $i <= 4; $i++) {
        $y =   -2 + (4 * $nilaix[$i] * $nilaix[$i]);
        echo "[$nilaix[$i], $y]<br>";
    }
    ?>
</body>

</html>