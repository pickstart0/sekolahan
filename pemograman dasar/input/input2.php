<?php
echo "nama \t\t=";
$nama = trim(fgets(STDIN));
echo "tbt lahir\t=";
$ttgl = trim(fgets(STDIN));
echo  "asal sekolah\t =";
$sekolah = trim (fgets(STDIN));
echo "kelas \t\t=";
$kelas = trim (fgets(STDIN));

echo "\t+-----------------+\n";
echo "\t|    DATA DIRI    |\n";
echo "\t+-----------------+\n";
echo " nama\t:$nama\n tanggal lahir\t:$ttgl\n asal sekolah\t:$sekolah\n kelas\t\t:$kelas";
?>