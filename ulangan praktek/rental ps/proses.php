<?php
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == 'admin' && $pass == 'admin123') {
    header('location: index2.php');
} elseif ($user !== 'admin' && $pass !== 'admin123') {
    header('location: index.php');
}
