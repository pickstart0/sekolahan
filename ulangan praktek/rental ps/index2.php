<?php
require 'function.php';
$result = mysqli_query($conn, 'SELECT * FROM paket')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rental ps</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="beranda">
        <h1 id="beranda">Selamat Datang DI <br> Aplikasi Rental PS</h1>
        <img src="asset/logo.png" alt="">
    </div>



    <!-- paket -->
    <div id="paket"></div>
    <div class="paket">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama paket</th>
                    <th>tanggal</th>
                    <th>keterangan</th>
                    <th>harga</th>
                    <th>nama penyewa</th>
                    <th>alamat penyewa</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nama_paket']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td><?= $row['harga']; ?></td>
                        <td><?= $row['nama_penyewa']; ?></td>
                        <td><?= $row['alamat_penyewa']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="tambah" id="tambah">
        <form action="tambah_proses.php" method="post">
            <!-- paket -->
            <label for="paket">nama paket</label><br>
            <input type="text" name="paket" id='paket' class="p"><br>


            <!-- tanggal -->
            <label for="tanggal">tanggal</label><br>
            <input type="date" name="tanggal" id="tanggal" class="p"><br>


            <!-- keterangan -->
            <label for="keterangan">keterangan</label><br>
            <input type="radio" name="keterangan" id="keterangan" value="bawa pulang">
            bawa pulang <br>
            <br>
            <input type="radio" name="keterangan" id="keterangan" value=" main di tempat">
            main di tempat<br>

            <!-- harga -->
            <label for="harga">harga </label><br>
            <input type="text" name="harga" id="harga" class="p"><br>


            <!-- nama penyewa  -->
            <label for="nama">nama penyewa</label><br>
            <input type="text" name="nama" id="nama" class="p"><br>


            <!-- alamat penyewa -->
            <label for="alamat"> alamat penyewa</label><br>
            <input type="text" name="alamat" id="alamat" class="p"><br>


            <button type="submit" name="simpan" class="buton">simpan</button>
        </form>
    </div>
</body>

</html>