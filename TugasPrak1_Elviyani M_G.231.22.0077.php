<?php

$jsonData = '{"Nama":"Elvi","NIM":"G.231.22.0077","Progdi":"Teknik Informatika","Hobi":["Tidur","NontonDrakor","Kulineran"]}';

// Decode JSON ke dalam array PHP
$arrayData = json_decode($jsonData); 

echo "Data dalam format Array PHP: ";

// Loop melalui array dan cetak key-value tanpa tanda panah
foreach ($arrayData as $key => $value) {
    // Jika value adalah array (misalnya, Hobi), cetak item satu per satu
    if (is_array($value)) {
        echo $key . ": " . implode(", ", $value) . " ";
    } else {
        echo $key . ": " . $value . " ";
    }
}
?>
