<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin: auto;
        }

        .container h1 {
            text-align: center;
            margin-top: 20px;
            padding-top: 30px;
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
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="text-secondary">
    <div class="container bg-info-subtle">
        <h1>Tambah Anggota</h1>
        <form action="proses/pr.tambah.php" method="post">
            <label for="nama">Nama Anggota</label>
            <input type="text" name="nama" id="nama" required autocomplete="off">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autocomplete="off">
            <!-- kolom kelas -->
            <label for="kelas">Kelas</label>
            <select id="kelas" name="kelas">
                <option value="" selected disabled>
                    -----Pilih Kelas-----
                </option>
                <option value="" disabled>
                    <hr>
                </option>
                <option value="X-Fkk">X-Fkk</option>
                <option value="XI-Fkk">XI-Fkk</option>
                <option value="XII-Fkk">XII-Fkk</option>

                <!-- RPl -->
                <option value="" disabled>
                    <hr>
                </option>
                <option value="X-Rpl">X-Rpl</option>
                <option value="XI-Rpl">XI-Rpl</option>
                <option value="XII-Rpl">XII-Rpl</option>
                <!-- Tkkr -->
                <option value="" disabled>
                    <hr>
                </option>
                <option value="X-Tkkr">X-Tkkr</option>
                <option value="XI-Tkkr">XI-Tkkr</option>
                <option value="XII-Tkkr">XII-Tkkr</option>
                <!-- Dkv -->
                <option value="" disabled>
                    <hr>
                </option>
                <option value="X-Dkv">X-Dkv</option>
                <option value="XI-Dkv">XI-Dkv</option>
                <option value="XII-Dkv">XII-Dkv</option>
            </select>
            <label for="sandi">Password</label>
            <input type="password" id="sandi" name="sandi" required>
            <label for="sandi2">Konfirmasi Password</label>
            <input type="password" id="sandi2" name="sandi2" required>
            <button type="submit" class="button bg-info" name="tambah" id="tambah">Tambah Anggota</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>