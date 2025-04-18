<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM kategori");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku | Perpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin: auto;
        }

        .container h1 {
            text-align: center;
            margin-top: 70px;
            padding-top: 50px;
            margin-left: 20px;
            font-size: 50px;
        }

        .container label {
            font-size: 20px;
            margin-left: 53px;
            margin-top: 15px;
            margin-bottom: 10px;
            display: block;
        }

        .container input {
            width: 80%;
            height: 35px;
            margin: auto;
            display: block;
        }

        .container select {
            width: 80%;
            height: 35px;
            margin: auto;
            display: block;
        }

        .container button {
            width: 80%;
            height: 40px;
            margin: auto;
            margin-top: 20px;
            margin-left: 45px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body class="text-secondary">
    <div class="container bg-info-subtle">
        <h1>Tambah Buku</h1>
        <form action="proses/pr.tambah.php" method="post">
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" id="judul" required>
            <label for="kategori">kategori Buku</label>
            <select name="kategori" id="kategori" required>
                <option value="" selected disabled>
                    -----Pilih Kategori-----
                </option>
                <?php while ($ktg = mysqli_fetch_assoc($result)) : ?>
                    <option value="<?= $ktg['nama_kategori']; ?>"><?= $ktg['nama_kategori']; ?></option>
                <?php endwhile; ?>
            </select>
            <label for="bbaik">Jumlah Buku</label>
            <input type="number" id="jbuku" name="jbuku" required>
            <button type="submit" class="button bg-info" name="tambah" id="tambah">Tambah Admin</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>