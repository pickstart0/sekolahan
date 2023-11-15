<?php
$array = [
    ['A', 'B', 'C'],
    ['D', 'E', 'F'],
    ['G', 'H', 'I']
];

echo "<table border ='1'>";
for ($baris = 0; $baris < 3; $baris++) {
    echo "<tr>";
    for ($kolom = 0; $kolom < 3; $kolom++) {
        echo "<td>" . $array[$baris][$kolom] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
