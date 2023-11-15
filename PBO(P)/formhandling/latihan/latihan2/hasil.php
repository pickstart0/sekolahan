<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- latihan2 -->

    <?php
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $panjang * $lebar;
    $keliling = $panjang + $lebar + $panjang + $lebar;
    ?>
    <h1>hasil perhitungan<br>keliling dan Luas segitiga</h1><br>
    <table>
        <tr>
            <td>Panjang</td>
            <td> = </td>
            <td><?= $panjang; ?></td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td> = </td>
            <td><?= $lebar; ?></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td>keliling</td>
            <td> = </td>
            <td><?= $keliling; ?></td>
        </tr>
        <tr>
            <td>luas</td>
            <td> = </td>
            <td><?= $luas; ?></td>
        </tr>

    </table>


</body>

</html>