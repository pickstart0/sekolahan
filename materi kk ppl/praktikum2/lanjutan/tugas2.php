<?php
session_start();
if (!isset($_SESSION['target'])) {
    $_SESSION['target'] = rand(1, 100);
}
if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];
    if ($guess == $_SESSION['target']) {
        $message = "Selamat! Anda benar. Angka yang benar adalah
{$_SESSION['target']}.";
        unset($_SESSION['target']);
    } elseif ($guess < $_SESSION['target']) {
        $message = "Tebakan terlalu rendah. Coba lagi!";
    } else {
        $message = "Tebakan terlalu tinggi. Coba lagi!";
    }
    echo $message;
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tebak Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Game Tebak Angka</h1>
        <p id="message">Masukkan angka antara 1 dan 100</p>

        <input type="text" id="guessInput">
        <button onclick="checkGuess()">Tebak</button>
    </div>
    <script>
        function checkGuess() {
            var guessInput = document.getElementById("guessInput").value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("message").innerHTML =
                        xhr.responseText;
                }
            };
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-type",
                "application/x-www-form-urlencoded");
            xhr.send("guess=" + guessInput);
        }
    </script>
</body>

</html>