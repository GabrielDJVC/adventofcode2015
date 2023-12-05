<?php

function openFile($pFile)
{
    $file = fopen($pFile, "r");
    $arra_lines = [];

    while (($ligne = fgets($file)) != false) {
        $arra_lines[] = $ligne;
    } 
 
    return $arra_lines;
}


