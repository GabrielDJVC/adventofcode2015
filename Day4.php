<?php

include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day4.txt");

$counter = 0;
$answer1 = "";

$found = true;
$val_to_compare = "000000";

foreach ($arr_payload as $value) {

    while ($found) {
        $hash = md5($value . $counter);

        $hash_occurences = substr($hash, 0, 6);

        if (strcmp($hash_occurences,$val_to_compare) == 0 ) {
            $answer1 = $counter;
            $found = false;
        }
        $counter++;
    }
}

echo '<pre> <strong>Partie 1</strong> : ' . $answer1 . '</pre> ';
