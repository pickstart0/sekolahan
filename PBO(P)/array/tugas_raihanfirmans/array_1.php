<?php
$bahapem = ["php", "javascript", "python", "dart", "kotlin", "java", "golang"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>raihan firmansyah</title>
</head>

<body>
    <h1>soal 1</h1>
    <?php
    echo "$bahapem[0]<br>";
    echo "$bahapem[1]<br>";
    echo "$bahapem[2]<br>";
    echo "$bahapem[3]<br>";
    echo "$bahapem[4]<br>";
    echo "$bahapem[5]<br>";
    echo "$bahapem[6]<br>";
    ?>
    <hr>
    <h1>soal 2</h1>
    <?php
    echo "<ul>";
    echo "<li>$bahapem[0]</li>";
    echo "<li>$bahapem[1]</li>";
    echo "<li>$bahapem[2]</li>";
    echo "<li>$bahapem[3]</li>";
    echo "<li>$bahapem[4]</li>";
    echo "<li>$bahapem[5]</li>";
    echo "<li>$bahapem[6]</li>";
    echo "</ul>";
    ?>
    <hr>
    <h1>soal 3</h1>
    <?php
    for ($i = 0; $i < count($bahapem); $i++) {
        echo "$bahapem[$i]<br>";
    } ?>
</body>

</html>