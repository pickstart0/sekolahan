<?php
echo "mencari luas segitiga menggunakan rumus L=1\2 x a x t\n";
echo "masukkan nilai alas =";
$alas = trim(fgets(STDIN));
echo "masukkan nilai tinggi =";
$tinggi = trim (fgets(STDIN));
$L = 1/2 * $alas * $tinggi ;

echo "luas segitiga adalah $L";
?>