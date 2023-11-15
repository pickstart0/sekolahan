<?php
$kota = [
    'banjarmasin',
    'banjarbaru',
    'martapura',
    'rantau',
    'kandangan',
    'barabai',
    'paringin',
    'amuntai',
    'tanjung',
    'marabahan',
    'pelaihari',
    'batulicin',
    'kota baru'
];

$a = $_POST['nomor'] - 1;
if ($a <= 12) {
    echo $kota[$a] . ' berada di indexke-' . $a;
} else {
    echo "Kota tidak Ditemukan";
}
