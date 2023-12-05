<?php


include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day1.txt");

$int_nb_opened_par = substr_count($arr_payload[0], "(");
$int_nb_closed_par = substr_count($arr_payload[0], ")");;
$int_floors = $int_nb_opened_par - $int_nb_closed_par;

$int_basement = 0;
for ($i = 0; $i < strlen($arr_payload[0]); $i++) {

    $str_new .= $arr_payload[0][$i];
    if ($arr_payload[0][$i] == "(") {
        $int_basement += 1;
    } elseif ($arr_payload[0][$i] == ")") {
        $int_basement -= 1;
    }

    if ($int_basement == -1) {
        break;
    }
}

echo '<pre> ';
var_dump($int_floors);
echo '</pre>';
echo '<pre> ';
var_dump($i + 1);
echo '</pre>';
