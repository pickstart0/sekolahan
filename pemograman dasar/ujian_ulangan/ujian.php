<?php
echo "masukkan nama anda =";
$nama = trim(fgets(STDIN));

echo "hallo $nama,\nSelamat Datang di Aplikasi Penghitung Harga BBM\n";

echo "Silahkan Masukkan Berapa Liter BBM yang ingin di Beli =";
$lbbm = trim(fgets(STDIN));

$hasil1 = $lbbm * 10000;
$hasil2 = $lbbm * 15000;

echo "Masukkan Angka pilihan  jenis BBm(1.pertalite, 2.Pertamax) =";
$menu = trim(fgets(STDIN));
if($menu == 1 ){
    echo "Total Harga = $lbbm x 10000 = $hasil1\n";
}elseif($menu == 2){
    echo "Total Harga = $lbbm x 15000 = $hasil2\n";

}else{
    echo "angka yang anda masukkan salah";
}
    



?>