<?php

include_once("Utilities/Utilities.php");

$arr_payload = openFile("Files/day2.txt");

$total_paper = 0;
$total_ribbon = 0;

foreach ($arr_payload as $value) {

list($l,$w,$h) = explode('x', $value);

$arr_area = [
    0 => 2 * $l * $w,
    1 => 2 * $w * $h,
    2 => 2 * $h * $l,
];

$min_area = min($arr_area) / 2;

$total_paper +=  $arr_area[0] + $arr_area[1] + $arr_area[2] + $min_area;

$arr_dims = array($l,$w,$h);
sort($arr_dims);

$total_ribbon += (2*$arr_dims[0]) + (2*$arr_dims[1]) + ($l*$w*$h);

}

echo '<pre> ';
var_dump($total_paper);
echo '</pre>';
echo '<pre> ';
var_dump($total_ribbon);
echo '</pre>';