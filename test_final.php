<?php

$fileCSV = fopen("carre.csv","w") or die ("impossible d'ouvrir le ficher");
$array = [];


for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $array[$i][] = "X";
    }
}


for ($i = 1; $i < 10; $i +=2) {
    unset($array[$i]);
    for ($j = 0; $j < 10; $j++) {
        $array[$i][] = "0";
    }
}

ksort($array);

foreach ($array as $value) {
    fputcsv($fileCSV, $value);
}
