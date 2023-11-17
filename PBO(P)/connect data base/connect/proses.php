<?php
// proses siswa
require 'function.php';

if (isset($_POST['simpan'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $email = htmlspecialchars($_POST['email']);
      $alamat = htmlspecialchars($_POST['alamat']);

      // membuat id secara acak
      $string = '0123456789abcdefghijklmnopqrstuvwxyz';
      $id = "siswa-" . substr(str_shuffle($string), 0, 16);

      // proses simpan ke database
      $query = "INSERT INTO siswa(id, nama, email, alamat) VALUES('$id', '$nama', '$email', '$alamat')";
      $result = mysqli_query($conn, $query);

      if ($result) {
            echo "
      <script>
      alert('siswa berhasil ditambahakan');
      document.location.href = 'index.php';
      </script>
      ";
      } else {
            echo "
      <script>
      alert('siswa gagal ditambahakan');
      document.location.href = 'index.php';
      </script
      ";
      }
}
// proses guru 
if (isset($_POST['simpanguru'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $gender = htmlspecialchars($_POST['gender']);
      $mapel = htmlspecialchars($_POST['mapel']);

      // membuat id secara acak
      $string = '0123456789abcdefghijklmnopqrstuvwxyz';
      $id = "guru-" . substr(str_shuffle($string), 0, 16);

      // proses simpan ke database
      $query = "INSERT INTO guru (id, nama, jenis_kelamin, mapel) VALUES('$id', '$nama', '$gender', '$mapel')";
      $result = mysqli_query($conn, $query);

      if ($result) {
            echo "
    <script>
    alert('guru berhasil ditambahakan');
    document.location.href = 'guru.php';
    </script>
    ";
      } else {
            echo "
    <script>
    alert('guru gagal ditambahakan');
    document.location.href = 'guru.php';
    </script
    ";
      }
}
// proses jurusan 
if (isset($_POST['jurusan'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $kelas = htmlspecialchars($_POST['kelas']);
      $tahun = htmlspecialchars($_POST['tahun']);

      // membuat id secara acak
      $string = '0123456789abcdefghijklmnopqrstuvwxyz';
      $id = "jurusan-" . substr(str_shuffle($string), 0, 16);

      // proses simpan ke database
      $query = "INSERT INTO jurusan (id, nama, jumlah_kelas, tahun) VALUES('$id', '$nama', '$kelas', '$tahun')";
      $result = mysqli_query($conn, $query);

      if ($result) {
            echo "
    <script>
    alert('guru berhasil ditambahakan');
    document.location.href = 'jurusan.php';
    </script>
    ";
      } else {
            echo "
    <script>
    alert('guru gagal ditambahakan');
    document.location.href = 'jurusan.php';
    </script
    ";
      }
}
