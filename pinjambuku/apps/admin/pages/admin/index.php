<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM user WHERE role='Admin'");
?>
<title>ADMIN | PERPUS</title>
<style>
    .table {
        width: 1050px;
    }
</style>
<div class="fcontainer d-block mb-4">
    <div class="judul d-flex mt-4">
        <h1>Data Admin</h1>
        <?php include '../../asset/tgl/tanggal.php'; ?>
    </div>
    <div class="container bg-light pb-4  d-block">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="pages/admin/tambah.php" method="post">
                <button type="submit" name="tambah" class="btn mt-3 btn-primary me-md-2">+ Tambah Admin</button>
            </form>
        </div>
        <!-- start table -->
        <div class="table mt-5">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>ID</th>
                    <th>Nama lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($angg = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $angg['id_user']; ?></td>
                            <td><?= $angg['nama_lengkap']; ?></td>
                            <td><?= $angg['username']; ?></td>
                            <td>***********</td>
                            <td>
                                <a href="pages/admin/ubah.php?id_user=<?= $angg['id_user']; ?>"><?php require "icon/edite.icon.php"; ?></a> |
                                <a href="pages/admin/hapus.php?id_user=<?= $angg['id_user']; ?>"><?php require "icon/trash.icon.php"; ?></a>
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