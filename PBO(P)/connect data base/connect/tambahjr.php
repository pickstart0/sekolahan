<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <h1>Tambah Data jurusan Baru</h1>
    <form action="proses.php" method="POST">
        <div class="mb">
            <label for="nama">Nama Jurusan</label>
            <input type="text" name="nama" id="nama" required />
        </div>
        <div class="mb">
            <label for="kelas">jumlah kelas</label>
            <input type="number" name="kelas" id="kelas" required />
        </div>
        <div class="mb">
            <label for="tahun">tahun</label>
            <input type="number" name="tahun" id="tahun" required />
        </div>
        <button type="submit" class="btn" name="jurusan">Simpan</button>
    </form>

</body>

</html>