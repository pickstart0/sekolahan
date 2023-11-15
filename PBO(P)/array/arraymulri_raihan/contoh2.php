<?php
$array = [
    ['A', 'B', 'C'],
    ['E', 'D', 'F']
];
// ? perulangan
for ($baris = 0; $baris < 2; $baris++) {
    for ($kolom = 0; $kolom < 3; $kolom++) {
        echo $array[$baris][$kolom];
    }
    echo "<br/>";
}
