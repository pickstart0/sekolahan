<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require "proses/pr.hapus.php";
    $id = $_GET['id_kategori'];
    if (hapus($id) > 0) {
        echo '<script>Swal.fire({
            title: "Kategori Berhasil Di hapus!",
            text: "You clicked the button!",
            icon: "success"
        },15);
        window.setTimeout(function () {
            window.location.replace("../../?page=kategori");
          }, 2000);
        </script>';
        return false;
    } else {
        echo '<script>Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Kategori gagal di hapus",
              footer: "tekan tommbol diatas untuk mengulang"
            },15);
            window.setTimeout(function () {
              window.location.replace("../../?page=kategori");
            }, 2000);
            </script>';
        return false;
    }
    ?>

</body>