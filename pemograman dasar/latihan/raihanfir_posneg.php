<?php
echo "masukkan angka=";
$angka = trim(fgets(STDIN));
if($angka < 0  ){
    echo "negatif";
}elseif($angka >0 ){
    echo "positif";
}else{
    echo "0";
}
