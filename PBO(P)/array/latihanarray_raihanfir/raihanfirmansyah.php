<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
a
    <?php
    $nama = ['Andika', 'Ahmad', 'Dhana', 'Septi'];
    $bahan = ['gula', 'beras', 'minyak goreng', 'Telur', 'teh', 'kopi'];


    echo "<h1>tugasArray_1</h1>";


    echo "$nama[0] <br/>";
    echo "$nama[1] <br/>";
    echo "$nama[2] <br/>";
    echo "$nama[3] <br/>";

    
    echo "<h1>tugasArray_2</h1>";

    echo "$bahan[1] <br/>";
    echo "$bahan[3] <br/>";
    echo "$bahan[5] <br/>";




    echo "<h1>tugasArray_3</h1>";


    echo "<ul>";
    echo "<li>$nama[0]</li>";
    echo "<li>$nama[1]</li>";
    echo "<li>$nama[2]</li>";
    echo "<li>$nama[3]</li>";
    echo "</ul>";

    echo "<h1>tugasArray_4</h1>";


    echo "<ol type='1'>";
    echo "<li>$bahan[0]</li>";
    echo "<li>$bahan[1]</li>";
    echo "<li>$bahan[2]</li>";
    echo "<li>$bahan[3]</li>";
    echo "<li>$bahan[4]</li>";
    echo "<li>$bahan[5]</li>";
    echo "</ol>";



    echo "<h1>tugasArray_5</h1>";

    for ($i = 0; $i < count($nama); $i++) {
        echo "$nama[$i] <br/>";
    }


    echo "<h1>tugasArray_6</h1>";

    for ($i = 0; $i < count($bahan); $i++) {
        echo "$bahan[$i] <br/>";
    }
    ?>
</body>

</html>