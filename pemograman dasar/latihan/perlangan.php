<?php
$hasil = 0;
for($i = 1; $i <= 10; $i++){
 if ($i == 10 ){
    echo "$i ";
 }else{
    echo "$i + ";
 }
 $hasil += $i;
} 
echo "= $hasil";
?>
