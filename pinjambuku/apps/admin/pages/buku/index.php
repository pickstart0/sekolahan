<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM buku");
?>
<title>BUKU | PERPUS</title>
<style>
    .table {
        width: 1050px;
    }
</style>
<div class="fcontainer d-block mb-4">
    <div class="judul d-flex mt-4">
        <h1>Data Buku</h1>
        <?php include '../../asset/tgl/tanggal.php'; ?>
    </div>
    <div class="container bg-light pb-4  d-block">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="pages/buku/tambah.php" method="post">
                <button type="submit" name="tambah" class="btn mt-3 btn-primary me-md-2">+ Tambah Buku</button>
            </form>
        </div>
        <!-- start table -->
        <div class="table mt-5">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Jumlah Buku</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($bku = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $bku['id_buku']; ?></td>
                            <td><?= $bku['judul_buku']; ?></td>
                            <td><?= $bku['kategori']; ?></td>
                            <td><?= $bku['jumlah_buku']; ?></td>
                            <td>
                                <a href="pages/buku/ubah.php?id_buku=<?= $bku['id_buku']; ?>"><?php require "icon/edite.icon.php"; ?></a> |
                                <a href="pages/buku/hapus.php?id_buku=<?= $bku['id_buku']; ?>"><?php require "icon/trash.icon.php"; ?></a>
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