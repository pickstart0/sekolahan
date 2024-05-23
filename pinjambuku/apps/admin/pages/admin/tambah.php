<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Tambah Admin</title>

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
        <h1>Tambah Admin</h1>
        <form action="proses/pr.tambah.php" method="post">
            <label for="nama">Nama Admin</label>
            <input type="text" name="nama" id="nama" required autocomplete="off">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autocomplete="off">
            <label for="sandi">Password</label>
            <input type="password" id="sandi" name="sandi" required>
            <label for="sandi2">Konfirmasi Password</label>
            <input type="password" id="sandi2" name="sandi2" required>
            <button type="submit" class="button bg-info" name="tambah" id="tambah">Tambah Admin</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>