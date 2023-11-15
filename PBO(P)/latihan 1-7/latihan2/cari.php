<?php
$kota = [
    'Banjarmasin', 'Banjarbaru', 'Martapura', 'Rantau', 'Kandangan', 'Barabai', 'Paringin', 'Amuntai',
    'Tanjung', 'Marabahan', 'Pelaihari', 'Batulicin', 'Kota Baru'
];
$keyword = $_POST['kota'];
if (in_array($keyword, $kota)) {
    echo "kota " . $keyword . "ada di daftar kota kalimantan";
} else {
    echo "kota " . $keyword . "tidak  terdaftar kota kalimantan";
}
