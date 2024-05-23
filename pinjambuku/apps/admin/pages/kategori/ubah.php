<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Kategori Buku | Perpus</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            max-width: 900px;
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
            margin-left: 45px;
            margin-top: 15px;
            margin-bottom: 10px;
            display: block;
        }

        .container input {
            width: 90%;
            height: 35px;
            margin: auto;
            display: block;
        }

        .container select {
            width: 90%;
            height: 35px;
            margin: auto;
            display: block;
        }




        .container button {
            width: 90%;
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
    $id = $_GET['id_kategori'];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo '<script>Swal.fire({
                title: "Kategori Berhasil Di Ubah!",
                text: "You clicked the button!",
                icon: "success"
            },5);
            window.setTimeout(function () {
                window.location.replace("../../?page=kategori");
              }, 2000);
            </script>';
        } else {
            echo '<script>Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Kategori gagal di ubah",
                footer: "tekan tommbol diatas untuk mengulang"
              },5);
              window.setTimeout(function () {
                window.location.replace("../ubah.php");
              }, 2000);
              </script>';
        }
    }
    $result = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori ='$id'");
    ?>
    <div class="container bg-info-subtle">
        <h1>Ubah Data</h1>
        <?php while ($ktg = mysqli_fetch_assoc($result)) : ?>
            <form action="" method="post">
                <!-- kolom id -->
                <input type="hidden" id="id" name="id" value="<?= $ktg['id_kategori']; ?>">
                <!-- kolom nama -->
                <label for="nama">Nama Kategori</label>
                <input type="text" id="nama" name="nama" value="<?= $ktg['nama_kategori']; ?>">

                <button type="submit" class="button bg-info" name="ubah" id="ubah">Ubah Data</button>
            </form>
        <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>