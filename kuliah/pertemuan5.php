<?php
// latihan 1
$hari1 = 'senin';
$hari2 = 'selasa';
$hari3 = 'rabu';
$hari4 = 'kamis';
$hari5 = 'jumat';
$hari6 = 'sabtu';
$hari7 = 'minggu';

$hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

$harii = array ('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Ahad');

$pembangkit = true;

$kereta = [
    'lokomotif',
    300.0,
    'gerbong_barang',
    [['311','322'],'penumpang_2'],
    $pembangkit,
    1
];

echo($kereta[2]);
echo '<br>';
echo($kereta[3][0][0]);

echo '<br>';
echo '<br>';

var_dump($kereta);

echo '<br>';
echo '<br>';

echo($hari[5]);

echo '<br>';
echo '<br>';

var_dump($hari7);

echo '<br>';
echo '<br>';

var_dump($hari);

echo '<br>';
echo '<br>';

var_dump($harii);
?>