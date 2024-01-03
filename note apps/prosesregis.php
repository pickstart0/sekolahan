<?php
session_start();
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$error = false;

// validasi inputan tidak boleh kosong
if (empty($fullname)) {
    $_SESSION['fullname'] = 'fullname wajib diisi';
    $error = true;
}
if (empty($email)) {
    $_SESSION['email'] = 'email wajib diisi';
    $error = true;
}
if (empty($password)) {
    $_SESSION['password'] = 'password wajib diisi';
    $error = true;
}


//validasi panjang password
if (strlen($password) < 8) {
    $_SESSION['password'] = 'password minimal 8 karakter';
}

// apabila validasi gagal kembali ke register.php2
if ($error == true) {
    header('location: register.php');
}
