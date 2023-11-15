<?php
$mulai = $_POST['mulai'];
$berhenti = $_POST['berhenti'];
while ($mulai <= $berhenti) {
    echo $mulai . " ";
    $mulai++;
}
