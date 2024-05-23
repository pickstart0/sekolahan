<style>
    h6 {
        margin-top: 25px;
        margin-left: 10px;
        font-size: 18px;
        color: grey;
    }
</style>

<?php
setlocale(LC_TIME, 'id_ID');
$hari = array(
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
);
$hari_ini = strftime("%A");

?>
<h6><?= $hari[$hari_ini] . ", " . strftime("%d %B %Y"); ?></h6>