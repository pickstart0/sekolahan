<?php 
echo "masukkan kelas :";
$kelas =trim (fgets(STDIN));
if ($kelas >= 7 && $kelas <=9){
	if ($kelas == 7){
	echo "1 smp";

	}elseif($kelas==8){
		echo "2smp";

	}else{
		echo "3 smp";
	}

}elseif ($kelas >= 10 && $kelas <= 12){

	if ($kelas == 10){
		echo "1 sma/k";

	}elseif($kelas==11){
		echo "2 sma/k";
		
	}else{
		echo "3 sma/k";
}
}
?>