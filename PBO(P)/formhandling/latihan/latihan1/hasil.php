<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa baru</title>

</head>

<body>
    <!-- latihan 2 -->
    <h1>Daftar Siswa Baru</h1>
    <table>
        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><?= $_POST['namad'] . ' ' . $_POST['namab']; ?></td>
        </tr>
        <tr>
            <td>Lahir Di </td>
            <td>:</td>
            <td><?= $_POST['kotalahir']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Tahun Lahir </td>
            <td>:</td>
            <td><?= $_POST['tanggallahir']; ?></td>
        </tr>
        <tr>
            <td>Gender </td>
            <td>:</td>
            <td><?= $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>alamat </td>
            <td>:</td>
            <td><?= $_POST['alamat']; ?></td>
        </tr>
    </table>



</body>

</html>