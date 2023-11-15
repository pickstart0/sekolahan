<?php
$a = $_POST['nama'];
$b = $_POST['golongan'];
if ($b == 'golongan1') {
    echo "
    <p>Nama : {$a}</p>
    <p>Golongan : 1 </p>
    <p>Gaji : 1.500.00 </p>
    ";
} elseif ($b == 'golongan2') {
    echo "
    <p>Nama : {$a}</p>
    <p>Golongan : 2 </p>
    <p>Gaji : 1.800.00 </p>
    ";
} else {
    echo "
    <p>Nama : {$a}</p>
    <p>Golongan : 3 </p>
    <p>Gaji : 2.400.00 </p>
    ";
}
