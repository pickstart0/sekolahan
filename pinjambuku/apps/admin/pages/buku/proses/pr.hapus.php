<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = '$id'");

    return mysqli_affected_rows($conn);
}
