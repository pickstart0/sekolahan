<!-- PROSES -->

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    require 'function.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_kembalian'])) {
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        $id = $_GET['id_kembalian'];
        if ($action === 'konfirmasi') {
            if (konfir($id) > 0) {
                echo '<script>Swal.fire({
                    title: "Data Berhasil Di hapus!",
                    text: "You clicked the button!",
                    icon: "success"
                },5);
                window.setTimeout(function () {
                    window.location.replace("../../?page=kembalian");
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
                      window.location.replace("index.php");
                    }, 2000);
                    </script>';
                return false;
            }
        } elseif ($action === 'batal') {
            if (batal($id) > 0) {
                echo '<script>Swal.fire({
                    title: "Data Berhasil Di hapus!",
                    text: "You clicked the button!",
                    icon: "success"
                },5);
                window.setTimeout(function () {
                    window.location.replace("../../?page=kembalian");
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
                      window.location.replace("index.php");
                    }, 2000);
                    </script>';
                return false;
            }
        }
    }
    ?>
</body>