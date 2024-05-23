<?php
$panjangrusuk1 = 10;
$volumekubus1 = $panjangrusuk1 * $panjangrusuk1 * $panjangrusuk1;

$panjangrusuk2 = 7;
$volumekubus2 = $panjangrusuk2 * $panjangrusuk2 * $panjangrusuk2;

$panjangrusuk3 = 13;
$volumekubus3 = $panjangrusuk3 * $panjangrusuk3 * $panjangrusuk3;

echo ("volume kubus dengan panjang rusuknya $panjangrusuk1 adalah $volumekubus1 <br>");
echo ("volume kubus dengan panjang rusuknya $panjangrusuk2 adalah $volumekubus2 <br>");
echo ("volume kubus dengan panjang rusuknya $panjangrusuk3 adalah $volumekubus3 <br>");
?>
<hr>
<?php
function volumekubus($panjangrusuk)
{
    $volumekubus = $panjangrusuk * $panjangrusuk * $panjangrusuk;
    echo ("volume kubus dengan panjang rusuknya $panjangrusuk adalah $volumekubus <br>");
}
volumekubus(10);
volumekubus(7);
volumekubus(13);
?>