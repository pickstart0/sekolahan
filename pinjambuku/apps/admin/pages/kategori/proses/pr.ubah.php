<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);




    $query = '';

    $query = "UPDATE kategori SET 
        id_kategori = '$id', 
        nama_kategori = '$nama'
        WHERE id_kategori = '$id'
        ";


    return mysqli_query($conn, $query);
}
