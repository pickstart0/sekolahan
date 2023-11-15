<?php
$arr_asoc = [
    [
        "nama" => "raihan",
        "umur" => 12,
        "jenis_kelamin" => "laki-laki",
        "kota_tinggal" => "Banjarmasin"
    ],
    [
        "nama" => "firmans",
        "umur" => 13,
        "jenis_kelamin" => "laki-laki",
        "kota_tinggal" => "Banjarmasin"
    ],
    [
        "nama" => "udin",
        "umur" => 18,
        "jenis_kelamin" => "laki-laki",
        "kota_tinggal" => "surabaya"
    ],
];
foreach ($arr_asoc as $arr) {
    echo 'Nama : ' . $arr["nama"] . "<br>";
    echo 'Umur : ' . $arr["umur"] . "<br>";
    echo 'jenis_kelamin : ' . $arr["jenis_kelamin"] . "<br>";
    echo 'kota_tinggal : ' . $arr["kota_tinggal"] . "<br>";
    echo "<hr>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>jenis Kelamin</th>
            <th>Kota tinggal</th>
        </tr>
        <tr>

        </tr>
    </table>
</body>

</html>