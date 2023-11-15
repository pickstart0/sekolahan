<?php
//  SOAL A
$jadwalbus = [
    [
        'Damri',
        'Banjarmasin-Samarinda',
        '350.000',
        'Andri'
    ],
    [
        'Logos',
        'banajrmasin-Palangkaraya',
        '150.000',
        'Heri'
    ],
    [
        'Samarinda lestari',
        'balikpapan-Bontang',
        '172.000',
        'Yudi'
    ],
    [
        'Agung Mulia',
        'PalangkaRaya-pangkalambun',
        '250.000',
        'Dani'
    ],
    [
        'kapuas Raya',
        'Pontianak-putussibau',
        '400.000',
        'Gani'
    ]
];

// soal b
echo $jadwalbus[0][0] . ' ' . $jadwalbus[0][1] . ' ' . $jadwalbus[0][2] . ' ' . $jadwalbus[0][3];
echo '<hr>';
echo '<br><br>';
// soal c
echo $jadwalbus[4][0] . ' Tujuan ' . $jadwalbus[4][1] . ' Harga ' . $jadwalbus[4][2];
echo '<hr>';
echo '<br><br>';
echo $jadwalbus[0][0] . ' Tujuan ' . $jadwalbus[0][1] . ' Harga ' . $jadwalbus[0][2];
echo '<br><br>';
echo $jadwalbus[1][0] . ' Tujuan ' . $jadwalbus[1][1] . ' Harga ' . $jadwalbus[1][2];
echo '<br><br>';
echo $jadwalbus[2][0] . ' Tujuan ' . $jadwalbus[2][1] . ' Harga ' . $jadwalbus[2][2];
echo '<br><br>';
echo $jadwalbus[3][0] . ' Tujuan ' . $jadwalbus[3][1] . ' Harga ' . $jadwalbus[3][2];
echo '<br><br>';
echo $jadwalbus[4][0] . ' Tujuan ' . $jadwalbus[4][1] . ' Harga ' . $jadwalbus[4][2];
echo '<br><br>';
echo '<br><br>';
echo '<hr>';




// SOAL E
echo "<table border ='1'>";
echo "
<tr>
<th>Nama Bus</th>
<th>Tujuan</th>
<th>Harga</th>
<th>Nama Sopir</th>
</tr>
";
for ($baris = 0; $baris < 5; $baris++) {
    echo "<tr>";
    for ($kolom = 0; $kolom < 4; $kolom++) {
        echo "<td>" . $jadwalbus[$baris][$kolom] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
