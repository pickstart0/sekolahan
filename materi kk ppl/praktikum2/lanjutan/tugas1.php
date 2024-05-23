<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 80px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        h3 {
            color: #333;
        }
    </style>
</head>

<body>
    <h2>Aplikasi Kasir Sederhana</h2>
    <form method="post" action="">
        Produk 1 (Rp. 10,000): <input type="number" name="produk1" min="0"><br>
        Produk 2 (Rp. 15,000): <input type="number" name="produk2" min="0"><br>
        <input type="submit" name="hitung" value="hitung Total">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hitung"])) {
        $hargaProduk1 = 10000;
        $hargaProduk2 = 15000;
        $jumlahProduk1 = isset($_POST["produk1"]) ? $_POST["produk1"] : 0;
        $jumlahProduk2 = isset($_POST["produk2"]) ? $_POST["produk1"] : 0;
        $totalHarga = ($hargaProduk1 * $jumlahProduk1) + ($hargaProduk2 *
            $jumlahProduk2);
        echo "<h3>Total Harga Belanjaan Anda: Rp. " .
            number_format($totalHarga, 2) . "</h3>";
    }
    ?>
</body>

</html>