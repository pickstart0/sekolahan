<?php

// Mendapatkan informasi halaman yang sedang dibuka
$current_page = isset($_GET['page']) ? $_GET['page'] : 'dahsboard.php'; // Jika tidak ada parameter page, defaultnya adalah halaman home

// Fungsi untuk menampilkan konten halaman
function displayPageContent($page)
{
    switch ($page) {
        case 'dashboard':
            include('pages/dashboard.php');
            break;

        case 'anggota':
            include('pages/anggota/index.php');
            break;

        case 'admin':
            include('pages/admin/index.php');
            break;

        case 'kembalian':
            include('pages/pengembalian/index.php');
            break;

        case 'buku':
            include('pages/buku/index.php');
            break;

        case 'kategori':
            include('pages/kategori/index.php');
            break;

        case 'lpeminjaman':
            include('pages/lpeminjaman/index.php');
            break;

        case 'lpengembalian':
            include('pages/lpengembalian/index.php');
            break;
        case 'logout':
            include('pages/logout.php');
            break;
        default:
            include('pages/dashboard.php'); // Halaman default jika tidak ditemukan
            break;
    }
}
?>

<style>
    .isi {
        margin-left: 280px;
    }
</style>
<!-- Konten halaman -->
<main class="isi">
    <?php displayPageContent($current_page); ?>
</main>