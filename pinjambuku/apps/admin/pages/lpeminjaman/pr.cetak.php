<html>

<head>
    <title>Laporan Peminjaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
    // mengambil tanggal yang di pilih
    $tgl = $_POST['tgl'];
    //  masuk ke dalam tabel peminjaman
    $result = mysqli_query($conn, "SELECT * FROM peminjaman WHERE tgl_pinjam ='$tgl'");

    // masuk ke table user
    $result1 = mysqli_query($conn, "SELECT * FROM user");

    ?>
    <div class="container">
        <h2>Data Peminjaman</h2>
        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table table-striped" id="mauexport">
                <thead>
                    <th>#</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Kondisi Buku</th>
                    <th>Tgl Peminjaman</th>
                    <th>Tgl wajib kembali</th>
                    <th>status</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($bku = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <?php
                            $result1 = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='" . $bku['id_user'] . "'");
                            $result2 = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku ='" . $bku['id_buku'] . "'");
                            ?>
                            <?php while ($nama = mysqli_fetch_assoc($result1)) : ?>
                                <td><?= $nama['nama_lengkap']; ?></td>
                            <?php endwhile; ?>
                            <?php while ($buku = mysqli_fetch_assoc($result2)) : ?>
                                <td><?= $buku['judul_buku']; ?></td>
                            <?php endwhile; ?>
                            <td><?= $bku['jumlah_buku']; ?></td>
                            <td><?= $bku['kondisi_buku']; ?></td>
                            <td><?= $bku['tgl_pinjam']; ?></td>
                            <td><?= $bku['tgl_wajib_kembali']; ?></td>
                            <td><?= $bku['status']; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>