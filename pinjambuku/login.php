<?php

if (isset($_POST['daftar'])) {
  header('location: register.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Akun</title>
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
      border: 1px;
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
      margin: 0px 7% 20px 6.5%;
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 5px;
      font-size: 12px;
      padding-left: 8px;
    }

    .container .bt {
      width: 87%;
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
      background-color: orangered;
      color: white;
    }

    .container .daftar:hover {
      background-color: rgb(230, 61, 0);
    }

    .container .btakhir {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="fcontainer">
    <h1 class="judul">Masuk Perpus</h1>
    <div class="container ">
      <img src="asset/logo/logo.png" alt=" Smk ISFI" />
      <form action="proses/proseslogin.php" method="post">
        <input type="text" id="username" name="username" autocomplete="off" placeholder="User Name" required />
        <input type="password" id="password" name="password" placeholder="kata sandi" required />
        <button type="submit" name="masuk" class="bt masuk">masuk</button>
        <p>-ATAU-</p>
      </form>
      <form action="" method="post">
        <button type="submit" name="daftar" class="bt daftar btakhir">Daftar Sebagai Anggota</button>
      </form>
    </div>
  </div>
</body>

</html>