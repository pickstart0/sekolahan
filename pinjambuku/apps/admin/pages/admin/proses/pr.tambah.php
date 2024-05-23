<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
  if (isset($_POST['tambah'])) {
    $nama  = strtolower(stripslashes($_POST['nama']));
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['sandi']);
    $password2 = mysqli_real_escape_string($conn, $_POST['sandi2']);

    //cek username sudah terdaftar atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
      echo '<script>
    Swal.fire(
      {
        icon: "error",
        title: "Oops...",
        text: "USERNAME SUDAH TERDAFTAR",
      },
      15
    );
    window.setTimeout(function () {
      window.location.replace("../tambah.php");
    },3000);
  </script>
  ';
      return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
      echo '<script>
    Swal.fire(
      {
        icon: "error",
        title: "Oops...",
        text: "KONFIRMASI PASSWORD TIDAK SESUAI",
      },
      15
    );
    window.setTimeout(function () {
      window.location.replace("../tambah.php");
    }, 3000);
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
    mysqli_query($conn, "INSERT INTO user VALUE('$id','$nama','-', '$username', '$password','Admin')");

    if (($_POST) > 0) {
      echo '
<script>
  Swal.fire(
    {
      title: "Data Berhasil Di tambah!",
      text: "You clicked the button!",
      icon: "success"
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("../../../?page=admin");
  }, 2000);
</script>
';
      return false;
    } else {
      echo '<script>
    Swal.fire(
      {
        icon: "error",
        title: "Oops...",
        text: "Data gagal di tambah",
        footer: "tekan tommbol diatas untuk mengulang",
      },
      15
    );
    window.setTimeout(function () {
      window.location.replace("../tambah.php");
    }, 2000);
  </script>
  ';
    }

    return mysqli_affected_rows($conn);
  }
  ?>
</body>