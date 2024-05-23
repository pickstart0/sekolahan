<?php
$_SESSION['is_logged_in'] === true;
// mengambil id dari url
$id = $_SESSION['id'];
// connect database
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
// mengambil nama dari username yang digunakan
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$id'");
$row = mysqli_fetch_assoc($result);
// mrngambil data buku
$sltbuku = mysqli_query($conn, "SELECT * FROM buku");

// menghitung jumlah buku yang di pinjam dan belum dikembalikan
$hjpinjam =  mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_user ='$id' AND status='dipinjam'");
// menghitung jumlah buku yang masih di pinjam
$hj = mysqli_num_rows($hjpinjam);

// tanggal display
$tgld = date('d-m-y');
// tanggal max display
$tglmd = date('d-m-y', strtotime('+5 days'));
//tanggal peminjaman 
$tgl = date('Y-m-d');
// tanggal maximal Pengembalian 
$tglmp = date('Y-m-d', strtotime($tgl . '+5 days'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Pinjam Buku | Perpus</title>
    <style>
        .fcontainer {
            margin-left: 280px;
            width: 1050px;
        }

        .judul {
            display: flex;
        }

        select {
            width: 70%;
            height: 35px;
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
    <div class="fcontainer">
        <div class="judul ">
            <h1 class="">Pinjam Buku</h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <div class="container">
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <p class=" text-dark  fs-4" aria-current="page">Formulir peminjaman buku</p>
                </li>
            </ul>
            <form class="mt-1 bg-light" method="post">
                <div class="m-1 p-1 d-flex">
                    <?php if ($hj >= 1) { ?>
                        <input type="text" class="form-control bg-danger text-light" disabled value="<?= 'Kamu saat ini telah meminjam sebanyak ' . $hj . ' Buku'; ?>">
                    <?php } ?>
                </div>
                <div class="mb-1 p  -1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $row['id_user']; ?>">
                    <input type="text" class="form-control" value="<?= $row['nama_lengkap']; ?>" disabled>
                </div>
                <div class="mb-1 p-1 d-flex ">
                    <div class="buku" style="width:100%; ">
                        <label for="buku" class="form-label d-block">Judul Buku</label>
                        <select name="id_buku" id="buku" required style="width:100%;">
                            <option value="" selected disabled>-- Pilih Buku Yang Akan Di-Pinjam -- </option>
                            <?php while ($buku  = mysqli_fetch_assoc($sltbuku)) : ?>
                                <option value="<?= $buku['id_buku']; ?>"><?= $buku['judul_buku']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="jbuku mx-2" style="width:20%;">
                        <label for="jbuku" class="form-label d-block">Jumlah Buku</label>
                        <input type="number" class="form-control" id="jbuku" name="jbuku" style="width:70%;" required>
                    </div>
                </div>
                <div class="mb-1 p-1">
                    <label for="tglpinjam" class="form-label">Tanggal Peminjaman (hari ini)</label>
                    <input type="text" class="form-control" value="<?= $tgld; ?>" disabled>
                    <input type="hidden" class="form-control" id="tglpinjam" name="tgl_pinjam" value="<?= $tgl; ?>">
                </div>
                <div class="mb-1 p-1">
                    <label for="tglmax" class="form-label">Tanggal Maximal Pengembalian ( wajib pengembalikan buku)</label>
                    <input type="text" class="form-control" value="<?= $tglmd; ?>" disabled>
                    <input type="hidden" class="form-control" id="tglmax" name="tgl_max" value="<?= $tglmp; ?>">
                </div>
                <div class="mb-1 p-1">
                    <label for="kbuku" class="form-label d-block">Kondisi Buku Saat Dipinjam</label>
                    <select name="kbuku" id="kbuku" style="width:100%;">
                        <option value="" selected disabled>--Pilih Kondisi Buku--</option>
                        <option value="Baik">Baik</option>
                    </select>
                </div>
                <div class="button p-3">
                    <button type="submit" name="pinjam" id="pinjam" class="btn btn-primary" style="width: 100%;">Pinjam</button>
                </div>
            </form>
        </div>
        <div class="footer fixed-bottom bg-primary-subtle">
            <p>&copy; 2024 Pinjam buku. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>

    </div>
    <!-- proses simpan start -->
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
    if (isset($_POST['pinjam'])) {
        $idnama  = strtolower(stripslashes($_POST['nama']));
        $idbuku = strtolower(stripslashes($_POST['id_buku']));
        $jbuku = strtolower(stripslashes($_POST['jbuku']));
        $tglpinjam = htmlspecialchars($_POST['tgl_pinjam']);
        $tglmax =  strtolower(stripslashes($_POST['tgl_max']));
        $kbuku =  htmlspecialchars($_POST['kbuku']);


        // cek apakah anggota pernah meinam buku dengan judul yang sama jika ada cek apakah sudah di kembalikan atau belum
        $result2 = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_buku ='$idbuku' AND id_user = '$idnama' AND status ='dipinjam' ");
        if (mysqli_fetch_assoc($result2)) {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Buku Yang anda Pilih Telah Anda Pinjam Sebelumnya!!",
                footer: "Silahkan Pilih Buku Lain Untuk Di Pinjam" 
              });
    </script>
    ';
            return false;
        }

        // cek jumlah buku
        if ($jbuku < 1) {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Jumlah Buku Tidak Masuk Akal!!",
                footer: "Silahkan Isi Jumlah Yang masuk akal" 
              });
    </script>
    ';
            return false;
        }

        //mengambil judul buku sesuai dengan id yang diterima
        $result = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku ='$idbuku'");
        $row = mysqli_fetch_assoc($result);
        $jdl_buku = $row['judul_buku'];

        //memberikan id secara acak
        $string = '0123456789987654321';
        $idpinjam = "pjm-" . substr(str_shuffle($string), 0, 8);
        //tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO peminjaman VALUE('$idpinjam','$idnama', '$idbuku','$jdl_buku','$jbuku', '$tglpinjam','$tglmax','$kbuku','dipinjam')");
        if (($_POST) > 0) {
            echo '
<script>
var tglmax = "' . $tglmax . '"; 
  Swal.fire(
    {
      title: "Peminjaman Berhasil Di Lakukan!!",
      text: "Tanggal Maximal Pengembalian Buku : " + tglmax ,
      icon: "success"
    },
    15
  );
</script>
';
            return false;
        } else {
            echo '<script>
    Swal.fire(
      {
        icon: "error",
        title: "Oops...",
        text: "Gagal Melakukan Peminjaman Silahkan Coba Lagi!",
      },
      15
    );
  </script>
  ';
        }

        return mysqli_affected_rows($conn);
    }
    ?>
    <!-- end proses  -->

</body>

</html>