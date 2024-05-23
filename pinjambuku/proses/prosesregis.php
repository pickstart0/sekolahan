<body>
  <?php
  require 'function.php';
  function regis($data)
  {
    global $conn;
    $nama = strtolower(stripslashes($data['nama']));
    $kelas = strtolower(stripslashes($data['kelas']));
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['sandi']);
    $password2 = mysqli_real_escape_string($conn, $data['sandi2']);


    //cek username sudah terdaftar atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
      echo '
<script>
  Swal.fire(
    {
      icon: "error",
      title: "Oops...",
      text: "username sudah terdaftar!!",
      footer: "tekan tommbol diatas untuk mengulang",
    },
    15
  );
</script>
';
      return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
      echo '
<script>
  Swal.fire(
    {
      icon: "error",
      title: "Oops...",
      text: "konfirmasi password tidak sesuai !!",
      footer: "tekan tommbol diatas untuk mengulang",
    },
    15
  );

</script>
';
      return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //memberikan id secara acak
    $string = '0123456789987654321';
    $id = "usr-" . substr(str_shuffle($string), 0, 8);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUE('$id','$nama','$kelas', '$username', '$password','Anggota')");

    return mysqli_affected_rows($conn);
  }
  if (isset($_POST['masuk'])) {
    header("location: ../");
  }
  ?>
</body>