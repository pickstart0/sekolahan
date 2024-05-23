<html>

<head>
    <title>Laporan Pengembalian</title>
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
    //  masuk ke dalam tabel pengembalian
    $result = mysqli_query($conn, "SELECT * FROM pengembalian WHERE tgl_kembalian ='$tgl'");

    // masuk ke table user
    $result1 = mysqli_query($conn, "SELECT * FROM user");

    ?>
    <div class="container">
        <h2>Data Pengembalian</h2>
        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table table-striped" id="mauexport">
                <thead>
                    <th>#</th>
                    <th>Nama anggota</th>
                    <th>Buku Dikembalikan</th>
                    <th>Jumlah</th>
                    <th>Kondisi Buku</th>
                    <th>Tgl wajib kembali</th>
                    <th>Denda</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($kmb = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <?php
                            // mengambil username 
                            $iduser = $kmb['id_user'];
                            $result1 = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$iduser'");
                            $name = mysqli_fetch_assoc($result1);
                            ?>
                            <td><?= $name['nama_lengkap']; ?></td>
                            <?php
                            // mengambil judul buku 
                            $idbuku = $kmb['id_buku'];
                            $result2 = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku ='$idbuku'");
                            $buku = mysqli_fetch_assoc($result2);
                            ?>
                            <td><?= $buku['judul_buku']; ?></td>
                            <td><?= $kmb['jumlah_buku']; ?></td>
                            <td><?= $kmb['kondisi_buku']; ?></td>
                            <td><?= $kmb['tgl_kembalian']; ?></td>
                            <td><?= $kmb['denda']; ?></td>
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