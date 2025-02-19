<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            padding-top: 30px;
            display: table;
            margin: 0;
            width: 100%;
            text-align: center;
            background-color: #f8f9fa;
        }
        .login-box {
            display: inline-block;
            vertical-align: middle;
            margin-top: auto;
            margin-bottom: auto;
            width: 100%;
            max-width: 400px;
            text-align: left;
        }
        img {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="card p-4 mx-auto d-flex juatify-content-center">
    <img src="assets/img/logo.jpg" class="rounded mx-auto d-block">
        <h3 class="text-center">SELAMAT DATANG DI CO KREATIF</h3>
            <form method="post">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="d-flex">
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    // pw dan user yang benar
    $userTrue = 'userlsp';
    $pwTrue = 'smkisfibjm';

    // jika tombol login ditekan
    if (isset($_POST['login'])) {
        // mengambil username dan password yang dikirim
        $username = htmlspecialchars($_POST['username']);
        $pw = htmlspecialchars($_POST['password']);
        // proses pengecekan apakah username dan password benar
        if ($username === $userTrue && $pw === $pwTrue) {
            header('Location: landing/');
            exit;
        } else {
            echo '
            <script>
             alert("password atau username salah");   
            </script>
            ';
            return false;
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
