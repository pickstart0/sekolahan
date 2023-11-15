<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiket kreta api</title>
    <style>
        input,
        select {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form action="hasil.php" method="POST">
        <h1>pemesanan tiket kreta </h1>
        <label for='nama'>Nama pemesan :</label><br>
        <input type='text' id='nama' name='nama'><br>
        <label for='jpenumpang'>jumlah penumpang :</label><br>
        <input type='number' id='jpenumpang' name='jpenumpang'><br>
        <select name="gerbong" id="gerbong">
            <option value="ekonomi">Ekonomi</option>
            <option value="bisnis">Bisnis</option>
            <option value="eksekutif">Eksekutif</option>
        </select>
        <label for='date'>Keberangkatan :</label><br>
        <input type='date' id='date' name='date'><br>
        <button type="submit">Pesan Tiket</button>
    </form>
</body>

</html>