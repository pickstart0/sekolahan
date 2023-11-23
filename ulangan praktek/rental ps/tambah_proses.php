<?php
// proses siswa
require 'function.php';

if (isset($_POST['simpan'])) {
  $paket = htmlspecialchars($_POST['paket']);
  $tanggal = htmlspecialchars($_POST['tanggal']);
  $keterangan = htmlspecialchars($_POST['keterangan']);
  $harga = htmlspecialchars($_POST['harga']);
  $nama = htmlspecialchars($_POST['nama']);
  $alamat = htmlspecialchars($_POST['alamat']);

  // membuat id secara acak
  $string = '0123456789987654321';
  $id = "paket-" . substr(str_shuffle($string), 0, 4);

  // proses simpan ke database
  $query = "INSERT INTO paket(id, nama_paket, tanggal, keterangan, harga, nama_penyewa, alamat_penyewa) VALUES('$id', '$paket', '$tanggal', '$keterangan','$harga', '$nama', '$alamat')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "
      <script>
      alert('data berhasil ditambahakan');
      document.location.href = 'index2.php/#';
      </script>
      ";
  } else {
    echo "
      <script>
      alert('data gagal ditambahakan');
      document.location.href = 'tambah_proses.php';
      </script
      ";
  }
}
