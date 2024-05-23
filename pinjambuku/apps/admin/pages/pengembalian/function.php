<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
function konfir($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM pengembalian WHERE id_kembalian ='$id'");
    $row = mysqli_fetch_assoc($result);
    $id_pinjam  = $row['id_pinjam'];
    mysqli_query($conn, "UPDATE pengembalian SET konfirmasi='Terkonfirmasi' WHERE id_kembalian='$id'");
    mysqli_query($conn, "UPDATE peminjaman SET status='Dikembalikan' WHERE id_pinjam='$id_pinjam'");
    return mysqli_affected_rows($conn);
}


// batal
function batal($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pengembalian WHERE id_kembalian = '$id'");
}
