<?php
$kota = [
    'banjarmasin', 'banjarbaru', 'martapura', 'rantau', 'kandangan', 'barabai', 'paringin', 'amuntai',
    'tanjung', 'marabahan', 'pelaihari', 'batulicin', 'kota baru'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raihan firmasnyah</title>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 20%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>


    <!-- latihan 2 -->

    <h1>Kota Di Kalimantan Selatan</h1>


    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>kota</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($k = 0; $k <= 12; $k++) : ?>
                <tr>
                    <td><?= $k + 1; ?></td>
                    <td><?= $kota[$k]; ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <form action="cari.php" method="post" style="margin-top: 20px;">
        <label for="kota">Cari Kota:</label> <br>
        <input type="text" name="kota" id="kota">
        <button type="submit" name="cari">Cari</button>
</body>

</html>