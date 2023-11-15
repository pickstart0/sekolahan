<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>

</head>

<body>
    <!-- latihan 1 -->
    <h1>pendaftaran siswa baru smk isfi</h1>
    <form action="hasil.php" method="POST">
        <table>
            <tr>
                <td><label for='namad'>nama depan :</label></td>
                <td><input type='text' id='namad' name='namad' required></td><br>
            </tr>
            <tr>
                <td><label for='namab'>nama belakang :</label></td>
                <td><input type='text' id='namab' name='namab' required></td><br>
            </tr>
            <tr>
                <td><label for='kotalahir'>kotalahir :</label></td>
                <td><input type='text' id='kotalahir' name='kotalahir' required></td><br>
            </tr>
            <tr>
                <td><label for='tanggallahir'>tanggal lahir :</label></td>
                <td><input type='date' id='tanggallahir' name='tanggallahir' required></td><br>
            </tr>
            <tr>
                <td><label for="gender">Jenis Kelamin :</label></td>
                <td><input type="radio" id="gender" name="gender" value="laki-laki">Laki-laki<br>
                    <input type="radio" id="gender" name="gender" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat :</label></td>
                <td><textarea name="alamat" id="alamat" cols="20" rows="5" required></textarea></td>
            </tr>
        </table>
        <button type="submit">Kirim</button>
        <br><br>






</body>

</html>