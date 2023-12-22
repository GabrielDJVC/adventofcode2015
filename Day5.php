<?php
include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day5.txt");


$regex = "(ab|cd|pq|xy)";
$vowels = "aeiou";

$answer1 = 0;

foreach ($arr_payload as $value) {

    $arr_nice_string = [
        "vowels"  => false,
        "letters" => false,
        "string"  => false,
    ];
    $nice    = false;

    $nb_vowels = 0;
    for ($i = 0; $i < strlen($value); $i++) {

        if (str_contains($vowels, $value[$i])) {
            $nb_vowels++;
            if($nb_vowels == 3) $arr_nice_string['vowels'] = true;
        }
        
        $arr_double_letter = [];
        $arr_double_letter[0] = $value[$i];
        $arr_double_letter[1] = $value[$i + 1];

        if($arr_double_letter[0] == $arr_double_letter[1]) $arr_nice_string['letters'] = true; 

    }
    
    if(!preg_match($regex, $value))$arr_nice_string['string']=true;

    if( $arr_nice_string['vowels'] == true && $arr_nice_string['letters'] == true && $arr_nice_string['string'] == true)  $nice=true;

    if ($nice == true) $answer1++;
    
}

echo '<pre> <strong>Partie 1</strong> : ' . $answer1 . '</pre> ';