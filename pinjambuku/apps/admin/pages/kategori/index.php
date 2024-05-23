<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM kategori");
?>
<title>Kategori Buku | Perpus</title>
<style>
    .table {
        width: 1050px;
    }
</style>
<div class="fcontainer d-block mb-4">
    <div class="judul d-flex mt-4">
        <h1>Kategori Buku </h1>
        <?php include '../../asset/tgl/tanggal.php'; ?>
    </div>
    <div class="container bg-light pb-4  d-block">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="pages/kategori/tambah.php" method="post">
                <button type="submit" name="tambah" class="btn mt-3 btn-primary me-md-2">+ Tambah Buku</button>
            </form>
        </div>
        <!-- start table -->
        <div class="table mt-5">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Id</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($ktg = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $ktg['id_kategori']; ?></td>
                            <td><?= $ktg['nama_kategori']; ?></td>
                            <td>
                                <a href="pages/kategori/ubah.php?id_kategori=<?= $ktg['id_kategori']; ?>"><?php require "icon/edite.icon.php"; ?></a> |
                                <a href="pages/kategori/hapus.php?id_kategori=<?= $ktg['id_kategori']; ?>"><?php require "icon/trash.icon.php"; ?></a>
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