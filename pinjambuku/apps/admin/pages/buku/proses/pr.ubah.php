<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $kategori = htmlspecialchars($data['kategori']);
    $jbuku = htmlspecialchars($data['jbuku']);


    $query = '';

    $query = "UPDATE buku SET 
        id_buku = '$id', 
        judul_buku = '$judul',
        kategori = '$kategori',
        jumlah_buku = '$jbuku'
        WHERE id_buku = '$id'
        ";


    return mysqli_query($conn, $query);
}
