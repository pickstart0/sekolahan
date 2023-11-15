<?php
$x = [2, 3, 5, 10];
$y1 = $x[0] - 2;
$y2 = $x[1] - 2;
$y3 = $x[2] - 2;
$y4 = $x[3] - 2;

echo "[$x[0], $y1]<br>";
echo "[$x[1], $y2]<br>";
echo "[$x[2], $y3]<br>";
echo "[$x[3], $y4]<br>";
echo "<hr>";
echo "<hr>";



for ($i = 0; $i <= 3; $i++) {
    $y = $x[$i] - 2;
    echo "[$x[$i], $y]<br>";
}
