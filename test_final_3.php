<?php


$content[] = json_decode(file_get_contents("https://api2.binance.com/api/v3/ticker/24hr"));
$file = fopen('crypto.csv', 'w+');



$haut = max(array_column($content, 4));

foreach ($content as $key => $value) {
    for ($i=0; $i<10; $i++) {
        print_r($haut);
        fputcsv($file, $content);
    }
}