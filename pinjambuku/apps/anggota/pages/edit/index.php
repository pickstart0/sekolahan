<?php
$_SESSION['is_logged_in'] === true;
// mengambil id dari url
$id = $_SESSION['id'];
// connect database


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kembalikan Buku | Perpus</title>
    <style>
        .fcontainer {
            margin-left: 280px;
            width: 1050px;
        }

        .judul {
            display: flex;
        }

        .container {
            width: 1050px;

        }

        .container label {
            margin-left: 5px;
            font-size: 20px;
            margin-top: 15px;
            margin-bottom: 10px;
            display: block;
        }

        .container input {
            width: 100%;
            height: 35px;
            display: block;
        }

        .container select {
            width: 100%;
            height: 35px;

            margin-top: 5px;
            display: block;
        }

        .container button {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .footer {
            margin-left: 250px;
            padding-top: 15px;
        }

        .footer p {
            margin-left: 10px;
        }
    </style>

<body>
    <?php
    require 'proses/pr.ubah.php';
    $id = $_SESSION['id'];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo '<script>
            alert("Perubahan berhasil disimpan!");
            window.location.href = "?page=editprofil"
            </script>';
        } else {
            echo '<script>
            alert("Perubahan gagal disimpan!");
            window.location.href = "?page=editprofil"

              </script>';
        }
        return false;
    }
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");

    ?>
    <div class="fcontainer">
        <div class="judul mt-4">
            <h1 class="">Edit Profil</h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <div class="container mt-3">
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

</body>

</html>