<?php
echo "masukkan nama pengguna  =";
$nama = trim (fgets(STDIN));
echo "untuk mencari volume tabung\n";
echo "rumus volume tabung adalah V=3.14*r*r*t\n";
echo "masukkan nilai r = ";
$r = trim(fgets(STDIN));
echo "masukkan nilai t =";
$t = trim (fgets(STDIN));
$hasil = 3.14 * $r * $r * $t;
echo " nama pengguna $nama";
echo "jadi volume tabung nya adalah $hasil";
?>