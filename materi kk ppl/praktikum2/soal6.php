<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator sederhana </title>
</head>

<body>
    <h2>kalkulator sederhana</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operator = $_POST['operator'];

        //validasi input
        if (!empty($angka1) && !empty($angka2)) {
            //melakukann operasi sesuai operator
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    //memastikan tidak melakukan pembagian dengan angka 0 
                    $hasil = ($angka2 != 0) ? $angka1 / $angka2 : "eror, pembagian dengan 0";
                    break;
                default:
                    "operator tidak falid";
                    break;
            }
            echo "<p>Hasil : $hasil</p>";
        } else {
            echo "<p>Silahkan isi kedua angka terlebih dahulu</p>";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="angka1">angka1: </label>
        <input type="text" name="angka1" required>
        <label for="operator">operator:</label>
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <label for="angka2">angka2: </label>
        <input type="text" name="angka2" required>
        <button type="submit">hitung</button>
    </form>
    <p>anggota kelompok : raihan firmansyah <br>alvindo <br>viyana <br>ridho nur ikhsan</p>
</body>

</html>