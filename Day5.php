<?php
include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day5.txt");

$nb_vowels = 0;

$vowels = "aeiou";

$two_letters = "";

foreach ($arr_payload as $value) {

    for ($i = 0; $i < strlen($value); $i++) {

        if (str_contains($vowels, $value[$i])) {
            $nb_vowels++;
        }

        echo '<pre> ';
        var_dump($arr_payload[0][$i]);
        echo '</pre>';
    }

    exit;
}
