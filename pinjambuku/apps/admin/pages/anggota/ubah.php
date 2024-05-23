<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Anggota</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            margin-top: 5px;
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
    <?php
    require 'proses/pr.ubah.php';
    $id = $_GET['id_user'];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo '<script>Swal.fire({
                title: "Data Berhasil Di Ubah!",
                text: "You clicked the button!",
                icon: "success"
            },5);
            window.setTimeout(function () {
                window.location.replace("../../?page=anggota");
              }, 2000);
            </script>';
        } else {
            echo '<script>Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Data gagal di ubah",
                footer: "tekan tommbol diatas untuk mengulang"
              },5);
              window.setTimeout(function () {
                window.location.replace("../ubah.php");
              }, 2000);
              </script>';
        }
        return false;
    }
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");

    ?>
    <div class="container bg-info-subtle">
        <h1>Ubah Data</h1>
        <?php while ($angg = mysqli_fetch_assoc($result)) : ?>

            <form action="" method="post">
                <!-- kolom id -->
                <input type="hidden" id="id" name="id" value="<?= $angg['id_user']; ?>">
                <!-- kolom nama -->
                <label for="nama">Nama Pengguna</label>
                <input type="text" id="nama" name="nama" value="<?= $angg['nama_lengkap']; ?>" autocomplete="off">
                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas">
                    <!-- fkk -->
                    <option value="<?= $angg['kelas']; ?>"><?= $angg['kelas'] . ' (dipilih sebelumnya)'; ?></option>
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
                <!-- kolom username -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?= $angg['username']; ?>" autocomplete="off">
                <!-- kolom pass -->
                <label for="password">password</label>
                <input type="password" id="password" name="passwords">
                <button type="submit" class="button bg-info" name="ubah" id="ubah">Ubah Data</button>

            </form>
        <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>