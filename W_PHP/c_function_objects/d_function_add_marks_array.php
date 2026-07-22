<?php
function addMarks($num)
{
    $sum = 0;
    foreach ($num as $value) {
        $sum += $value;
    }
    return $sum;
}

$ramMarks = [12, 34, 56, 78, 62];
$sitaMarks = [12, 74, 96, 78, 22];
$hariMarks = [2, 24, 36, 88, 52];
$sumRam = addMarks($ramMarks);
$sumSita = addMarks($sitaMarks);
$sumHari = addMarks($hariMarks);
echo "Total obtained marks by Ram = $sumRam <br>";
echo "Total obtained marks by Sita = $sumSita <br>";
echo "Total obtained marks by Hari = $sumHari";
