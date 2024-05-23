<!doctype html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .fcontainer {
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    // Periksa apakah pengguna sudah login atau belum
    $is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
    $is_admin = isset($_SESSION['role']) && $_SESSION['role'] === 'Admin';
    if (!$is_admin) {
        echo '
    <script>
Swal.fire(
{
  icon: "error",
  title: "Oops...",
  text: "ANDA BUKANLAH ADMIN !!!",
  footer: "Harap login Sebagai Admin Terlebih Dahulu !!!",
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
    <div class="fcontainer">
        <div class="sidebar">
            <?php include 'sidebar.php'; ?>
        </div>
        <div class="main menu">
            <?php require "prosesnav.php"; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>