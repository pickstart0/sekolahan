<?php
session_start();
// menghapus semua variabel session
session_unset();
// menghacurkan sesstion
session_destroy();

// Mengarahkan ke halaman login atau halaman utama
header("Location: ../index.php");
exit;
