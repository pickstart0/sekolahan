<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");

    return mysqli_affected_rows($conn);
}
