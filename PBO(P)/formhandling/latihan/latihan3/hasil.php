<?php
$i = $_POST['number'];

if ($i % 2 == 0) {
    echo $i . " adalah bilangan genap";
} else {
    echo $i . " adalah bilangan ganjil";
}
