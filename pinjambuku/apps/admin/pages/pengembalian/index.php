<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM pengembalian WHERE konfirmasi ='Belum'");
?>
<title>Pengembalian Buku</title>
<style>
    .table {
        width: 1050px;
    }
</style>

<body>
    <div class="fcontainer d-block mb-4">
        <div class="judul d-flex mt-4">
            <h1>Konfirmasi Pengembalian</h1>
            <?php include '../../asset/tgl/tanggal.php'; ?>
        </div>
        <div class="container bg-light pb-4  d-block">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <!-- start table -->
                <div class="table mt-5">
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Nama anggota</th>
                            <th>Buku Dikembalikan</th>
                            <th>Jumlah</th>
                            <th>Kondisi Buku</th>
                            <th>Tgl wajib kembali</th>
                            <th>Denda</th>
                            <th>Konfirmasi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php while ($png = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <?php
                                    // mengambil username 
                                    $iduser = $png['id_user'];
                                    $result1 = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$iduser'");
                                    $name = mysqli_fetch_assoc($result1);
                                    ?>
                                    <td><?= $name['nama_lengkap']; ?></td>
                                    <?php
                                    // mengambil judul buku 
                                    $idbuku = $png['id_buku'];
                                    $result2 = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku ='$idbuku'");
                                    $buku = mysqli_fetch_assoc($result2);
                                    ?>
                                    <td><?= $buku['judul_buku']; ?></td>
                                    <td><?= $png['jumlah_buku']; ?></td>
                                    <td><?= $png['kondisi_buku']; ?></td>
                                    <td><?= $png['tgl_kembalian']; ?></td>
                                    <td><?= $png['denda']; ?></td>
                                    <td>
                                        <a href="pages/pengembalian/proses.php?action=konfirmasi&id_kembalian=<?= $png['id_kembalian']; ?>"><?php include 'icon/berhasil.icon.php'; ?></a> |
                                        <a href="pages/pengembalian/proses.php?action=batal&id_kembalian=<?= $png['id_kembalian']; ?>"><?php include 'icon/gagal.icon.php'; ?></a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table -->
            </div>
        </div>

</body>