<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
</head>

<body>
    <?php
    $arr_nama = ["hendra", "yudishtira", "tika", "devi", "agus"];
    echo "$arr_nama[0]<br>";
    echo "$arr_nama[2]<br>";
    echo "$arr_nama[3]<br>";

    echo "<hr>";

    //! MENMAPILKAN ARRAY DENGAN PERULANGAN

    for ($i = 0; $i < 4; $i++) {
        echo "$arr_nama[$i]<br>";
    }
    echo "<hr>";
    for ($a = 0; $a < count($arr_nama); $a++) {
        echo "$arr_nama[$a]<br>";
    }
    ?>
</body>

</html>