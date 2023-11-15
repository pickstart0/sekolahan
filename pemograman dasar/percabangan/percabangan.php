<?php
echo "sudut A =";
$A = trim (fgets(STDIN));
echo "sudut B =";
$B = trim (fgets(STDIN));
echo "sudut C =";
$C = trim (fgets(STDIN));
if ($A + $B + $C == 180){
	echo " segitiga falid";
	
}else{
	echo "segitiga tidak falid";
}
?>