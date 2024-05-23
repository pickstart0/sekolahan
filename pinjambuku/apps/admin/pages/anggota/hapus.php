<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    require "proses/pr.hapus.php";
    $id = $_GET['id_user'];
    if (hapus($id) > 0) {
        echo '<script>Swal.fire({
        title: "Data Berhasil Di hapus!",
        text: "You clicked the button!",
        icon: "success"
    },5);
    window.setTimeout(function () {
        window.location.replace("../../?page=anggota");
      }, 2000);
    </script>';
        return false;
    } else {
        echo '<script>Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Data gagal di hapus",
          footer: "tekan tommbol diatas untuk mengulang"
        },5);
        window.setTimeout(function () {
          window.location.replace("hapus.php");
        }, 2000);
        </script>';
        return false;
    }
    ?>
</body>