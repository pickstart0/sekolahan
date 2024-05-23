<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
  if (isset($_POST['tambah'])) {
    $judul  = strtolower(stripslashes($_POST['judul']));
    $kbuku  = strtolower(stripslashes($_POST['kategori']));
    $jbuku = strtolower(stripslashes($_POST['jbuku']));
    //cek buku sudah terdaftar atau belum
    $result = mysqli_query($conn, "SELECT judul_buku FROM buku WHERE judul_buku = '$judul'");
    if (mysqli_fetch_assoc($result)) {
      echo '<script>
            Swal.fire(
              {
                icon: "error",
                title: "Oops...",
                text: "Buku Sudah Terdaftar!!!",
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


    //memberikan id secara acak
    $string = '0123456789987654321';
    $id = "bku-" . substr(str_shuffle($string), 0, 8);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO buku VALUE('$id','$judul','$kbuku', '$jbuku')");

    if (($_POST) > 0) {
      echo '
<script>
  Swal.fire(
    {
      title: "Buku Berhasil Ditambahkan!",
      text: "You clicked the button!",
      icon: "success"
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("../../../?page=buku");
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
        text: "Buku Gagal ditambahkan!",
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