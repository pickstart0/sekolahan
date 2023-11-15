<?php $jadwalbus = [
    [
        'bus' => 'Damri',
        'tujuan' => 'Banjarmasin-Samarinda',
        'harga' => '350.000',
        'sopir' => 'Andri'
    ],
    [
        'bus' => 'Logos',
        'tujuan' => 'banajrmasin-Palangkaraya',
        'harga' => '150.000',
        'sopir' => 'Heri'
    ],
    [
        'bus' => 'Samarinda lestari',
        'tujuan' => 'balikpapan-Bontang',
        'harga' => '172.000',
        'sopir' => 'Yudi'
    ],
    [
        'bus' => 'Agung Mulia',
        'tujuan' => 'PalangkaRaya-pangkalambun',
        'harga' => '250.000',
        'sopir' => 'Dani'
    ],
    [
        'bus' => 'kapuas Raya',
        'tujuan' => 'Pontianak-putussibau',
        'harga' => '400.000',
        'sopir' => 'Gani'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan raihan FIrmnasyah</title>
</head>

<body>
    <h2>soal B</h2>
    <?php echo $jadwalbus[0]['bus'] . ' ' . $jadwalbus[0]['tujuan'] . ' ' . $jadwalbus[0]['harga'] . ' ' . $jadwalbus[0]['sopir']; ?>
    <h2>soal c</h2>
    <?php echo $jadwalbus[4]['bus'] . ' Tujuan ' . $jadwalbus[4]['tujuan'] . ' Harga ' . $jadwalbus[4]['harga']; ?>
    <h2>soal D</h2>
    <?php
    echo "Nama Bus : " . $jadwalbus[0]['bus'] . "<br>";
    echo "Tujuan : " . $jadwalbus[0]['tujuan'] . "<br>";
    echo "Harga : " . $jadwalbus[0]['harga'] . "<br>";
    echo "Sopir : " . $jadwalbus[0]['sopir'] . "<br>";
    ?><br><br>
    <?php
    echo "Nama Bus : " . $jadwalbus[1]['bus'] . "<br>";
    echo "Tujuan : " . $jadwalbus[1]['tujuan'] . "<br>";
    echo "Harga : " . $jadwalbus[1]['harga'] . "<br>";
    echo "Sopir : " . $jadwalbus[1]['sopir'] . "<br>";
    ?><br><br>
    <?php
    echo "Nama Bus : " . $jadwalbus[2]['bus'] . "<br>";
    echo "Tujuan : " . $jadwalbus[2]['tujuan'] . "<br>";
    echo "Harga : " . $jadwalbus[2]['harga'] . "<br>";
    echo "Sopir : " . $jadwalbus[2]['sopir'] . "<br>";
    ?><br><br>
    <?php
    echo "Nama Bus : " . $jadwalbus[3]['bus'] . "<br>";
    echo "Tujuan : " . $jadwalbus[3]['tujuan'] . "<br>";
    echo "Harga : " . $jadwalbus[3]['harga'] . "<br>";
    echo "Sopir : " . $jadwalbus[3]['sopir'] . "<br>";
    ?><br><br>
    <?php
    echo "Nama Bus : " . $jadwalbus[4]['bus'] . "<br>";
    echo "Tujuan : " . $jadwalbus[4]['tujuan'] . "<br>";
    echo "Harga : " . $jadwalbus[4]['harga'] . "<br>";
    echo "Sopir : " . $jadwalbus[4]['sopir'] . "<br>";
    ?><br><br><br>


    <h2>soal e</h2>

    <?php foreach ($jadwalbus as $bus) : ?>
        <?php
        echo "Nama Bus : " . $bus['bus'] . "<br>";
        echo "Tujuan : " . $bus['tujuan'] . "<br>";
        echo "Harga : " . $bus['harga'] . "<br>";
        echo "<br><br>";
        ?>
    <?php endforeach; ?>
    <h2>soal F</h2>
    <table border="1">

        <tr>
            <th>Nama Bus</th>
            <th>Tujuan</th>
            <th>Harga</th>
            <th>Sopir</th>
        </tr>
        <?php foreach ($jadwalbus as $jbus) : ?>
            <tr>
                <td><?= $jbus['bus']; ?></td>
                <td><?= $jbus['tujuan']; ?></td>
                <td><?= $jbus['harga']; ?></td>
                <td><?= $jbus['sopir']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>