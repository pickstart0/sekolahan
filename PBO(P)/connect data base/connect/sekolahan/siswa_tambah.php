<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Data Siswa</title>

          <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
          <h1>Tambah Data Siswa Baru</h1>

          <form action="siswa_tambah_proses.php" method="POST">
                    <div class="mb">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" name="nama" id="nama" />
                    </div>

                    <div class="mb">
                              <label for="email">Email</label>
                              <input type="email" name="email" id="email" />
                    </div>

                    <div class="mb">
                              <label for="alamat">Alamat</label>
                              <input type="text" name="alamat" id="alamat" />
                    </div>

                    <button type="submit" class="btn" name="simpan">Simpan</button>
          </form>

</body>

</html>