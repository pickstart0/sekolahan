<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

$result = mysqli_query($conn, "SELECT * FROM user WHERE role='Anggota'");
?>
<title>Anggota | PERPUS</title>
<style>
    .table {
        width: 1050px;
    }
</style>
<div class="fcontainer d-block ">
    <div class="judul d-flex mt-4">
        <h1>Data Anggota</h1>
        <?php include '../../asset/tgl/tanggal.php'; ?>
    </div>
    <div class="container bg-light pb-4  d-block">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="pages/anggota/tambah.php" method="post">
                <button type="submit" name="tambah" class="btn mt-3 btn-primary me-md-2">+ Tambah anggota</button>
            </form>
        </div>
        <!-- start table -->
        <div class="table mt-5">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>ID</th>
                    <th>Nama lengkap</th>
                    <th>Kelas</th>
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
                            <td><?= $angg['kelas']; ?></td>
                            <td><?= $angg['username']; ?></td>
                            <td>***********</td>
                            <td>
                                <a href="pages/anggota/ubah.php?id_user=<?= $angg['id_user']; ?>"><?php require "icon/edite.icon.php"; ?></a> |
                                <a href="pages/anggota/hapus.php?id_user=<?= $angg['id_user']; ?>"><?php require "icon/trash.icon.php"; ?></a>
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