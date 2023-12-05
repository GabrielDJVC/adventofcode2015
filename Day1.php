<?php


include_once("Utilities/Utilities.php");


$arr_payload = openFile("Files/day1.txt");



$int_nb_opened_par = substr_count($arr_payload[0],"(");

$int_nb_closed_par = substr_count($arr_payload[0],")");;

$int_floors = $int_nb_opened_par - $int_nb_closed_par;


echo '<pre> ';
var_dump($int_floors);
echo '</pre>';

