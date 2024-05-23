<?php
$_SESSION['is_logged_in'] === true;
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $user = htmlspecialchars($data['username']);
    $passwords = htmlspecialchars($data['passwords']);

    $query = '';

    if ($passwords != '') {
        $passwords = password_hash($passwords, PASSWORD_DEFAULT);
        $query = "UPDATE user SET 
        id_user = '$id', 
        nama_lengkap = '$nama',
        kelas = '$kelas',
        username = '$user',
        passwords = '$passwords'
        WHERE id_user = '$id'
        ";
    } else {
        $query = "UPDATE user SET 
        id_user = '$id', 
        nama_lengkap = '$nama',
        kelas = '$kelas',
        username = '$user'
        WHERE id_user = '$id'
        ";
    }


    return mysqli_query($conn, $query);
}
