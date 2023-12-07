<?php

include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day3.txt");

$total_presents = 0;

foreach ($arr_payload as $value) {
    for ($i = 0; $i < strlen($value); $i++) {

        echo '<pre> ';
        var_dump($arr_payload[0][$i]);
        echo '</pre>';
    }
}
