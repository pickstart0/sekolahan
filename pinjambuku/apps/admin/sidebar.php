<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dasboard';
?>
<style>
  .sd {
    z-index: 1;
    width: 270px;
    height: 100vh;
  }

  .nav-item p {
    font-size: 20px;
    margin-left: 5px;
    margin-top: 10px;
    margin-bottom: -2px;
    color: grey;
  }

  .nav-link:hover {
    background-color: rgba(0, 0, 0, 0.3);
  }
</style>
<!-- stars menu -->
<div class="sd d-flex position-fixed fixed  flex-column flex-shrink-0 p-4 text-bg-dark">
  <a class="d-flex align-items-center mb-2 mb-md-0 me-md-auto text-white text-decoration-none">
    <?php include '../../asset/icon/perpus.icon.php'; ?>
    <span class="fs-4 px-2">Perpustakaan</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column">

    <li class="nav-item mt-1">
      <a href="?page=dashboard" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'dashboard') ? 'active text-bg-dark border-start border-3 border-light ' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/home.icon.php'; ?>
        Dashboard
      </a>
    </li>
    <li class="nav-item">
      <p>Master Data</p>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=anggota" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'anggota') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/anggota.icon.php'; ?>
        Data Anggota
      </a>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=admin" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'admin') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/admin.icon.php'; ?>
        Administrator
      </a>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=kembalian" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'kembalian') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/pengembali.icon.php'; ?>
        Pengembalian
      </a>
    </li>
    <li class="nav-item">
      <p>Katalog Buku</p>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=buku" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'buku') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/buku.icon.php'; ?>
        Data Buku
      </a>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=kategori" class="nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'kategori') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/kategori.icon.php'; ?>
        Kategori Buku
      </a>
    </li>
    <li class="nav-item">
      <p>Laporan Perpustakaan</p>
    </li>
    <li>
      <a href="?page=lpeminjaman" class="mt-1 nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'lpeminjaman') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/laporan.icon.php'; ?>
        Laporan Peminjaman
      </a>
    </li>
    <li>
      <a href="?page=lpengembalian" class="mt-1 nav-link d-flex text-white align-item-center gap-2 <?= ($page == 'lpengembalian') ? 'active text-bg-dark border-start border-3 border-light' : ''; ?>" arial-current="page">
        <?php include '../../asset/icon/laporan.icon.php'; ?>
        laporan Pengembalian
      </a>
    </li>
    <li class="nav-item">
      <p>User</p>
    </li>
    <li class="nav-item mt-1">
      <a href="?page=logout" class="nav-link d-flex text-white align-item-center gap-2" arial-current="page">
        <?php include '../../asset/icon/logout.icon.php'; ?>
        Logout
      </a>
    </li>
</div>