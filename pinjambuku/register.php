</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Akun</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background-color: #DFF4FF;
    }

    .fcontainer {
      margin-top: 50px;
    }

    .judul {
      font-size: 25px;
      margin-top: 15px;
      text-align: center;
      text-transform: uppercase;
      font-weight: 700;

    }

    .container {
      width: 320px;
      margin: auto;
      margin-top: 35px;
      background-color: white;
      border: 1px transparent;
      border-radius: 5px;
      box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.3);
    }

    .container img {
      width: 100px;
      display: flex;
      margin: auto;
      padding-top: 8px;
      margin-bottom: 20px;
    }

    .container input {
      width: 85%;
      height: 30px;
      display: block;
      margin: 0px 7% 20px 7%;
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 5px;
      font-size: 12px;
      padding-left: 8px;
    }

    .container select {
      width: 85%;
      height: 30px;
      margin: 0px 7% 20px 7%;
    }

    .container .bt {
      width: 85%;
      height: 30px;
      font-size: 15px;
      margin: 0px 7% 0px 7%;
      text-transform: capitalize;
      border: 1px solid rgba(0, 0, 0, 0.3);
      border-radius: 3px;
    }

    .container .masuk {
      background-color: rgb(0, 119, 255);
      color: white;
    }

    .container .masuk:hover {
      background-color: rgb(6, 82, 168);
    }

    .container p {
      text-align: center;
      font-size: 10px;
      margin-bottom: 5px;
      margin-top: 5px;
    }

    .container .daftar {
      background-color: rgb(0, 196, 0);
      color: white;
    }

    .container .daftar:hover {
      background-color: green;
    }

    .container .btakhir {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <!-- proses -->
  <?php
  require 'proses/prosesregis.php';

  if (isset($_POST['daftarr'])) {
    if (regis($_POST) == 1) {
      echo '
<script>
  Swal.fire(
    {
      title: "Akun Berhasil Di dibuat!",
      text: "You clicked the button!",
      icon: "success",
    },
    15
  );
  window.setTimeout(function () {
    window.location.replace("login.php");
  }, 2000);
</script>
';
      return false;
    }
  }
  ?>
  <div class="fcontainer">
    <h1 class="judul">Daftar Akun Perpus</h1>
    <div class="container">
      <img src="asset/logo/logo.png" alt=" Smk ISFI" />
      <form action="" method="POST">
        <input type="text" id="nama" name="nama" placeholder="Nama Pengguna" autocomplete="off" required>
        <select id="kelas" name="kelas" required>
          <option selected disabled>Pilik Kelas</option>
          <!-- fkk -->
          <option value="" disabled>
            <hr>
          </option>
          <option value="X-Fkk">X-Fkk</option>
          <option value="XI-Fkk">XI-Fkk</option>
          <option value="XII-Fkk">XII-Fkk</option>
          <!-- RPl -->
          <option value="" disabled>
            <hr>
          </option>
          <option value="X-Rpl">X-Rpl</option>
          <option value="XI-Rpl">XI-Rpl</option>
          <option value="XII-Rpl">XII-Rpl</option>
          <!-- Tkkr -->
          <option value="" disabled>
            <hr>
          </option>
          <option value="X-Tkkr">X-Tkkr</option>
          <option value="XI-Tkkr">XI-Tkkr</option>
          <option value="XII-Tkkr">XII-Tkkr</option>
          <!-- Dkv -->
          <option value="" disabled>
            <hr>
          </option>
          <option value="X-Dkv">X-Dkv</option>
          <option value="XI-Dkv">XI-Dkv</option>
          <option value="XII-Dkv">XII-Dkv</option>
        </select>
        <input type="text" id="username" name="username" autocomplete="off" placeholder="User name" required />
        <input type="password" id="sandi" name="sandi" placeholder="kata sandi" required />
        <input type="password" id="sandi2" name="sandi2" placeholder="konfirmasi sandi" required />

        <button type="submit" name="daftarr" id="daftarr" class="bt daftar">daftar</button>
        <p>-ATAU-</p>
      </form>
      <form action="proses/prosesregis.php" method="post">
        <button type="submit" name="masuk" class="bt masuk btakhir">masuk</button>
      </form>
    </div>
  </div>
</body>

</html>