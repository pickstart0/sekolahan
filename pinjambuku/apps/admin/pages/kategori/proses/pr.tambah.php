<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'db_pinjambuku');
  if (isset($_POST['tambah'])) {
    $nama  = strtolower(stripslashes($_POST['nama']));
    //cek buku sudah terdaftar atau belum
    $result = mysqli_query($conn, "SELECT nama_kategori FROM kategori WHERE nama_kategori = '$nama'");
    if (mysqli_fetch_assoc($result)) {
      echo '<script>
            Swal.fire(
              {
                icon: "error",
                title: "Oops...",
                text: "Kategori Buku Sudah Tercatat!!!",
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
    $id = "Ktg-" . substr(str_shuffle($string), 0, 8);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO kategori VALUE('$id','$nama')");

    if (($_POST) > 0) {
      echo '
<script>
  Swal.fire(
    {
      title: "Kategori Berhasil Ditambahkan!",
      text: "You clicked the button!",
      icon: "success"
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("../../../?page=kategori");
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
        text: "Kategori Gagal ditambahkan!",
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