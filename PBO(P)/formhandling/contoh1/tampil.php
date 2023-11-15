    <?php
    if ($_POST['nama'] == 'udin') {
        echo "Selamat datang {$_POST['nama']}";
    } else {
        echo "<script>
        window.location.href = 'index.php';
    </script>";
    }
    ?>