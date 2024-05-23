<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include "pages/home.page.php";
            break;
        case 'pinjam':
            include "pages/pinjam/index.php";
            break;
        case 'kembali':
            include 'pages/kembali/index.php';
            break;
        case 'editprofil':
            include 'pages/edit/index.php';
            break;
        case 'logout':
            include 'pages/logout.php';
            break;
        default:
            include "pages/index.php";
            break;
    }
} else {
    include "pages/home.page.php";
}
