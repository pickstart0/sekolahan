<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="proseslogin.php" method="post">
            <div class="form-group">
                <label for="email">email :</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="login">login</button>
        </form>
    </div>
</body>

</html>