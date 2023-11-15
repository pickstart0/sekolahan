<?php
require 'function.php';

if (isset($_POST['simpan'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];

      // membuat id secara acak
      $string = '0123456789abcdefghijklmnopqrstuvwxyz';
      $id = "siswa-" . substr(str_shuffle($string), 0, 16);

      // proses simpan ke database
      $query = "INSERT INTO siswa(id, nama, email, alamat) VALUES('$id', '$nama', '$email', '$alamat')";
      $result = mysqli_query($conn, $query);

      if ($result) {
            echo "
      <script>
      alert('data berhasil ditambahakan');
      document.location.href = 'index.php';
      </script>
      ";
      } else {
            echo "
      <script>
      alert('data gagal ditambahakan');
      document.location.href = 'index.php';
      </script
      ";
      }
}
