<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Siswa</title>
      <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
      <h1>Tambah Data guru Baru</h1>
      <form action="proses.php" method="POST">
            <div class="mb">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" id="nama" required />
            </div>
            <div class="mb">
                  <label for="gender">jenis kelamin :</label>
                  <input type="text" name="gender" id="gender" required />
            </div>
            <div class="mb">
                  <label for="mapel">mata pelajaran</label>
                  <input type="text" name="mapel" id="mapel" required />
            </div>
            <button type="submit" class="btn" name="simpanguru">Simpan</button>
      </form>

</body>

</html>