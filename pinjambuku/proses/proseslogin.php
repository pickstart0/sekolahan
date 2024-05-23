<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
  require 'function.php';
  session_start();
  if (isset($_POST['masuk'])) {
    $username  = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result) == 1) {
      //cek password
      $row = mysqli_fetch_assoc($result);
      $id = $row['id_user'];
      if (password_verify($password, $row['passwords'])) {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['role'] = $row['role'];
        if ($row['role'] == 'Anggota') {
          header("location: ../apps/anggota/index.php?id=" . $id);

          exit();
        } elseif ($row['role'] == 'Admin') {
          header("location: ../apps/admin/index.php");

          exit();
        }
      }
    }
    $error = true;
  }
  // jika pass dan user salah
  if (isset($error)) {
    echo '
<script>
  Swal.fire(
    {
      icon: "error",
      title: "Oops...",
      text: "User name atau password yang anda masukkan salah !!",
      footer: "tekan tommbol diatas untuk mengulang",
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("../login.php");
  }, 2500);
</script>
';
    return false;
  }

  ?>
</body>