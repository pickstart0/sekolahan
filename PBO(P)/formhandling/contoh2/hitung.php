<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$jumlah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
//
echo $angka1 . '+' . $angka2 . '=' . $jumlah;
echo '<br>';
echo $angka1 . '-' . $angka2 . '=' . $kurang;
