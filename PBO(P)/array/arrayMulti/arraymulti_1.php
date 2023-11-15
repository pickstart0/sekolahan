<!DOCTYPE html>
<html lang="en">

<head>
    <title>array multidimensi</title>
</head>
<!-- ARRAY DUA DIMENSI ADALAH ARRAY YANG MEMILIKI INDEX LEBIH DARI 1 -->

<body>
    <?php
    $siswa = [
        ['Rina', 'X'],
        ['Alphin', 'XI'],
        ['Febry', 'XII'],
        ['Indra', 'X']
    ];
    ?>
    <?php
    echo $siswa[0][0] . "-" . $siswa[0][1] . '<br>';
    echo $siswa[1][0] . "-" . $siswa[1][1] . '<br>';
    echo $siswa[2][0] . "-" . $siswa[2][1] . '<br>';
    ?>

</body>

</html>