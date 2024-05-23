<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            display: block;
        }

        .navbar {
            max-width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            display: block;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_GET['id'])) {
        $_SESSION['id'] = $_GET['id'];
    }

    // cek role
    $is_anggota = isset($_SESSION['role']) && $_SESSION['role'] === 'Anggota';
    if (!$is_anggota) {
        echo '
    <script>
Swal.fire(
{
  icon: "error",
  title: "Oops...",
  text: "ANDA BUKANLAH ANGGOTA !!!",
  footer: "Harap login Sebagai ANGGOTA Terlebih Dahulu !!!",
},
15
);
window.setTimeout(function () {
window.location.replace("../../login.php");
}, 2500);
</script>
    ';
        exit(); // Pastikan untuk keluar dari skrip setelah mengalihkan pengguna
    }

    // Periksa apakah pengguna sudah login atau belum
    $is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
    if (!$is_logged_in) {
        echo '
        <script>
  Swal.fire(
    {
      icon: "error",
      title: "Oops...",
      text: "ANDA BELUM MELAKUKAN lOGIN!!!",
      footer: "Harap login Terlebih Dahulu !!!",
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("../../login.php");
  }, 2500);
</script>
        ';
        exit(); // Pastikan untuk keluar dari skrip setelah mengalihkan pengguna
    }
    ?>

    <!-- nav -->
    <div class="navbar ">
        <?php include 'navbar.php'; ?>

    </div>
    <!--end nav  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>