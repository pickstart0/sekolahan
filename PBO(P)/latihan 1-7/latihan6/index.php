<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penghitung gaji</title>
    <style>
        input,
        select {
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="hitung.php" method="POST">
        <h1>program penghitungan gaji</h1>
        <label for='nama'>nama :</label><br>
        <input type='text' id='nama' name='nama'><br>

        <select name="golongan" id="golongan">
            <option value="golongan1">Golongan 1</option>
            <option value="golongan2">Golongan 2</option>
            <option value="golongan3">Golongan 3</option>
        </select>
        <button type="submit">hitung</button>
    </form>
</body>

</html>