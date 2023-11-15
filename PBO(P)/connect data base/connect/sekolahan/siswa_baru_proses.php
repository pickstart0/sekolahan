<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];

          // membuat id secara acak
          $string = '0123456789abcdefghijklmnopqrstuvwxyz';
          $id = "siswa-" . substr(str_shuffle($string), 0, 16);

          // proses simpan ke database
          $query = "INSERT INTO siswa(id, nama, email, alamat) VALUES('$id', '$nama', '$email', '$alamat')";
          $result = mysqli_query($connect, $query);

          if ($result) {
                    header("location: index.php");
          } else {
                    header("location: siswa_tambah.php");
          }
}
