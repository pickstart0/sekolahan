<?php

require 'connect1.php';

session_start();

if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    //proses pencarian email
    $query = "SELECT * FROM users WHERE email='$email'";
    $result =  mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        //cek password
        $item = mysqli_fetch_assoc($result);
        if (password_verify($password, $item['password'])) {
            $_SESSION['id'] = $item['id'];
            $_SESSION['fullname'] = $item['fullname'];
            header('location: home.php');
            exit;
        } else {
            echo "
            <script>
            alert('login gagal');
            window.location= 'login.php'
            </script>";
        }
    } else {
        echo "
        <script>
        alert('login gagal');
        window.location= 'login.php'
        </script>";
    }
}
