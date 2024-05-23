<?php
$_SESSION['is_logged_in'] === true;
// mengambil id dari url
$id = $_SESSION['id'];
// connect database
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
// cek apakah user tercatat di tb peminjaman
$result1 = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_user ='$id' AND status ='dipinjam'");

// mengambil nama dari username yang digunakan
$usernm = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$id'");
$row = mysqli_fetch_assoc($usernm);



// tanggal hari ini 
$tglharid = date('d-m-Y');
$tglhari = date('Y-m-d');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Kembalikan Buku | Perpus</title>
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
            <h1 class="">Pengembalian Buku</h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <div class="container">
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <p class=" text-dark  fs-4" aria-current="page">Formulir Pengembalian Buku</p>
                </li>
            </ul>
            <form class="mt-1 bg-light" method="post">
                <div class="mb-1 p-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $row['id_user']; ?>">
                    <input type="text" class="form-control" value="<?= $row['nama_lengkap']; ?>" disabled>
                </div>
                <div class="mb-1 p-1 d-flex ">
                    <div class="buku" style="width:100%; ">
                        <label for="buku" class="form-label d-block">Judul Buku</label>
                        <select name="buku" id="buku" required style="width:100%;">
                            <option value="" selected disabled>-- Pilih Buku Yang Akan DiKembalikan--</option>
                            <?php while ($idbuku  = mysqli_fetch_assoc($result1)) : ?>
                                <option value="<?= $idbuku['id_buku']; ?>"><?= $idbuku['judul_buku']; ?></option>
                                ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="jbuku mx-2" style="width:20%;">
                        <label for="jbuku" class="form-label d-block">Jumlah Buku</label>
                        <input type="number" class="form-control" id="jbuku" name="jbuku" style="width:70%;" required>
                    </div>
                </div>
                <div class="mb-1 p-1">
                    <label for="tglpinjam" class="form-label"> Tanggal Pengembalian Buku (hari ini)</label>
                    <input type="text" class="form-control" value="<?= $tglharid; ?>" disabled>
                    <input type="hidden" class="form-control" id="tglpinjam" name="tgl_pinjam" value="<?= $tglhari; ?>">
                </div>
                <div class="mb-1 p-1">
                    <label for="kbuku" class="form-label d-block">Kondisi Buku Saat Dikembalikan</label>
                    <select name="kbuku" id="kbuku" style="width:100%;">
                        <option value="" selected disabled>--Pilih Kondisi Buku--</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak (Ganti Dengan Buku Yang Baru!!!)</option>
                        <option value="Hilang">Hilang (Ganti Dengan Buku Yang Baru!!!)</option>
                    </select>
                </div>
                <div class="button p-3">
                    <button type="submit" name="pinjam" id="pinjam" class="btn btn-primary " style="width: 100%;">Kembalikan</button>
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
        $idbuku = strtolower(stripslashes($_POST['buku']));
        $jbuku = strtolower(stripslashes($_POST['jbuku']));
        $tglkembali = htmlspecialchars($_POST['tgl_pinjam']);
        $kbuku =  htmlspecialchars($_POST['kbuku']);

        //cek apakah pernah melakukan pengembalian buku yang ingin di kembalikan
        // mengambil data pengembalian
        $kembali = mysqli_query($conn, "SELECT * FROM pengembalian WHERE id_user ='$id' AND id_buku = '$idbuku' AND konfirmasi='Belum'");

        // jika ada
        if (mysqli_fetch_assoc($kembali)) {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Buku yang Anda Kembalikan Sudah Pernah Coba Anda Kembalikan",
                footer: "Silahkan Laporkan Pengembalian Ke penjaga Perpus Agar Pengembalian Terkonfirmasi" 
              });
    </script>
    ';
            return false;
        }

        // mengambil data peminjaman
        $pinjam = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_user ='$id' AND id_buku = '$idbuku'");
        $idpinjam = mysqli_fetch_assoc($pinjam);

        // mengambil id peminjaman
        $idpjm = $idpinjam['id_pinjam'];

        // mengambil tanggal max pengembalian
        $tmax = $idpinjam['tgl_wajib_kembali'];

        // mengambil jumlah buku saat di Pinjam
        $jbukup = $idpinjam['jumlah_buku'];

        // Inisialisasi variabel $dendak
        $dendak = '';
        // membuat denda jika buku rusak atau hilang 
        if ($kbuku == 'Rusak' || $kbuku == 'Hilang') {
            $dendak = ' Mengganti Ganti Buku ' . $kbuku . ' Dengan Yang Baru';
        }

        // cek apakah jumlah buku sesuai dengan jumlah saat di kembalikan
        if ($jbuku !== $jbukup) {
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Jumlah Buku Tidak Sesuai Dengan Saat Peminjaman!!",
                        footer: "Mohom Samakan Jumlah Dengan Saat Di Pinjam  "
                    });
            </script>
            ';
            return false;
        }
        // menghitung denda keterlambatan 
        $tanggal_pengembalian = $tglkembali; // Misalnya tanggal pengembalian terlambat
        // Tanggal maksimal pengembalian
        $tanggal_max_pengembalian = $tmax;
        // Denda per hari (misalnya Rp 500 per hari)
        $denda_per_hari = 500;

        // Konversi string tanggal menjadi objek DateTime
        $pengembalian = new DateTime($tanggal_pengembalian);
        $max_pengembalian = new DateTime($tanggal_max_pengembalian);

        // Menghitung selisih antara tanggal pengembalian dan tanggal maksimal pengembalian
        $selisih = $pengembalian->diff($max_pengembalian);

        // Mengambil nilai selisih hari
        $selisih_hari = $selisih->days;

        // Jika pengembalian terlambat, hitung denda
        $dendal = '';
        if ($selisih_hari > 5) {
            $jdenda = $selisih_hari * $denda_per_hari;

            $dendal = "Denda Terlambat : " . $jdenda;
        }

        // menggabungkan semua denda
        if ($dendal === '' && $dendak === '') {
            $denda = ' -';
        } elseif ($dendal !== '' && $dendak !== '') {
            $denda = '' . $dendal . ' & ' . $dendak;
        } elseif ($dendal == '' && $dendak !== '') {
            $denda = ' ' . $dendak;
        } elseif ($dendal !== '' && $dendak == '') {
            $denda = ' Rp.' . $dendal;
        }


        // memberikan id secara acak
        $string = '0123456789987654321';
        $id = "kmb-" . substr(str_shuffle($string), 0, 8);

        //tambahkan data pengembalian ke database
        mysqli_query($conn, "INSERT INTO pengembalian VALUE('$id','$idpjm','$idnama', '$idbuku','$jbuku','$kbuku', '$tglkembali', '$denda', 'Belum')");
        if (($_POST) > 0) {
            echo '<script>
            Swal.fire(
                {
                title: "Pengembalian Sedang Di Proses Harap Konfirmasi Ke Penjaga!!",
                text: "Denda: ' . $denda . '",
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
        text: "Pengembalian Gagal Di catat Silahkan Coba Lagi!",
      },
      15
    );
  </script>
  
  ';
            return false;
        }

        return mysqli_affected_rows($conn);
    }

    ?>
    <!-- end proses  -->

</body>

</html>