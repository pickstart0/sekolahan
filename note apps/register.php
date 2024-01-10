<?php
$fullname = '';
$email = '';
$password = '';

session_start();
if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
}
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Apps</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="prosesregis.php" method="post">
            <div class="form-group">
                <label for="fullname">full name :</label>
                <input type="text" name="fullname" id="fullname">
                <small><?= $fullname ?></small>
            </div>
            <div class="form-group">
                <label for="email">email :</label>
                <input type="email" name="email" id="email">
                <small><?= $email ?></small>
            </div>
            <div class="form-group">
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
                <small><?= $password ?></small>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>

</html>