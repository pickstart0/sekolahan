<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas3</title>
</head>

<body>
    <h1>tugas ke 1</h1>
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<h$i>Ini adalah heading $i</h$i>";
    }
    ?>
    <h1>tugas ke 2</h1>
    <?php
        echo "<h2>Daftar barang</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Daftar barang ke-$i</li>";
    }
    ?>
    <h1>tugas3</h1>
    <?php
    for ($i = 1; $i <= 4; $i++) {
        echo '<img src="esfei.png" width="100px"><br>
        <h3>SMK ISFI</h3><br>';
    }
    ?>

    <h1> tugas 4</h1>
    <table border="1">
        <thead>
            <th>no</th>
            <th>Nama</th>
            <th>Kelas</th>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 20; $i++) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>Nama Siswa Ke- <?= $i; ?></td>
                    <td>XI RPL</td>
                </tr>
            <?php } ?>
            </tbody>
    </table>
</body>

</html>