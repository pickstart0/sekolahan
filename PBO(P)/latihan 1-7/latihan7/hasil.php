<?php
$gerbong = $_POST['gerbong'];
$ekonomi = $_POST['jpenumpang'] * 20000;
$bisnis = $_POST['jpenumpang'] * 75000;
$eksekutif = $_POST['jpenumpang'] * 150000;

echo "<h1>detail Pemesanan</h1>";
if ($gerbong == 'ekonomi') {
    echo "
    <p>Nama Pemesan : {$_POST['nama']}</p>
    <p>Jumlah Tiket : {$_POST['jpenumpang']}</p>
    <p>Kelas : Ekonomi (Rp. 20000)</p>
    <p>Keberangkatan : {$_POST['date']}</p>
    <p>Total Bayar : Rp . {$ekonomi} </p>
    ";
} elseif ($gerbong == 'bisnis') {
    echo "
    <p>Nama Pemesan : {$_POST['nama']}</p>
    <p>Jumlah Tiket : {$_POST['jpenumpang']}</p>
    <p>Kelas : Bisnis (Rp. 75000)</p>
    <p>Keberangkatan : {$_POST['date']}</p>
    <p>Total Bayar : Rp . {$bisnis} </p>
    ";
} elseif ($gerbong == 'eksekutif') {
    echo "
    <p>Nama Pemesan : {$_POST['nama']}</p>
    <p>Jumlah Tiket : {$_POST['jpenumpang']}</p>
    <p>Kelas : eksekutif (Rp. 75000)</p>
    <p>Keberangkatan : {$_POST['date']}</p>
    <p>Total Bayar : Rp . {$eksekutif} </p>
    ";
}
