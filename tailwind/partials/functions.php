<?php
function calculateArea($length, $width){
    $area = $length * $width;
    return $area;
}

$result = calculateArea(3, 10);
echo "The result is " .$result;

