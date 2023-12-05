<?php


include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day2.txt");

$total_paper = 0;

foreach ($arr_payload as $key => $value) {

list($l,$w,$h) = explode('x', $value);

$arr_surface = [
    0 => 2*$l*$w,
    1 => 2*$w*$h,
    2 => 2*$h*$l,
];


$min_side = min($arr_surface);

$total_paper +=  $arr_surface[0] + $arr_surface[1] + $arr_surface[2] + $min_side;
    
}

echo '<pre> ';
var_dump($total_paper);
echo '</pre>';