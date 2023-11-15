<?php
$kapals = [
    [
        'nama' => 'KM Lawit',
        'rute' => 'Tanjung Priok - Tanjung Pandan - Pontianak - Semarang - Kumai - Karimun Jawa (PP)',
        'tipe' => 'Pax 1000',
        'tahun' => '1958'
    ],
    [
        'nama' => 'KM Bukit Raya',
        'rute' => 'Tanjung Priok - Belinyu - Kijang - Letung - Tarempa - Natuna - Midai - Serasan - Pontianak - Surabaya (PP)',
        'tipe' => 'Pax 1000',
        'tahun' => '1994'
    ],
    [
        'nama' => 'KM Ngapulu',
        'rute' => 'Tanjung Priok - Surabaya - Makassar  - Bau-Bau - Ambon - Banda - Tual - Dobo - Kaimana - Fak-Fak (PP)',
        'tipe' => 'Pax 2000',
        'tahun' => '2000'
    ],
    [
        'nama' => 'KM Dorolonda',
        'rute' => 'Tanjung Priok Jakarta- Surabaya - Makassar - Bau-Bau - Namlea - Ambon - Ternate - Bitung (PP)',
        'tipe' => 'Pax 2000',
        'tahun' => '1999'
    ],
    [
        'nama' => 'KM Sinabung',
        'rute' => 'Surabaya - Makassar - Bau-bau - Banggai - Bitung - Ternate - Bacan - Sorong - Manokwari - Biak - Jayapura (PP)',
        'tipe' => 'Cargo',
        'tahun' => '1996'
    ],
    [
        'nama' => 'KM Egon',
        'rute' => 'Waingapu Sumba - Lembar Lombok - Surabaya - Batulicin - Pare-Pare - Bontang (PP)',
        'tipe' => 'Ro-ro ',
        'tahun' => '1991'
    ],
    [
        'nama' => 'KM Lambelu ',
        'rute' => 'Bau-Bau - Makassar - Pare-Pare - Balikpapan - Tarakan - Nunukan - Pantoloan - Balikpapan - Makassar  (PP)',
        'tipe' => 'Pax-2000',
        'tahun' => '1996'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raihan firmansyah</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }

        th {
            color: white;
            background-color: green;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kapal</th>
                <th>Rute Pelayaran</th>
                <th>Tipe Kapal</th>
                <th>Tahun Dibuat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 1;
            foreach ($kapals as $kapal) : ?>
                <tr>
                    <td><?= $n++; ?></td>
                    <td><?= $kapal['nama']; ?></td>
                    <td><?= $kapal['rute']; ?></td>
                    <td><?= $kapal['tipe']; ?></td>
                    <td><?= $kapal['tahun']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="hasil.php" method="POST">
        <label for='kapal'>inputkan no kapal :</label><br>
        <input type='kapal' id='kapal' name='kapal'>
        <button type="number">cari</button>
    </form>
</body>

</html>