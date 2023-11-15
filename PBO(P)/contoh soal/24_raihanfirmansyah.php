<?php 
echo "nama : Raihan firmansyah";
echo "masukkan angka 1=";
$angka1 = trim (fgets(STDIN));

echo "masukkan angka 2=";
$angka2 = trim (fgets(STDIN));

$angka3 = $angka1 >= $angka2;
if($angka1 <= $angka2){
    while($angka1 <= $angka2){   
    echo "$angka1 ";
    $angka1++;
}
}else{
    echo"angka salah";
}
?>