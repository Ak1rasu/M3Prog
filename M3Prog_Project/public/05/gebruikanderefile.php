<?php

include_once "returncalc.php";

//vraag = ja
$getal1 = 60;
$getal2 = 40;
function add0($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

$outcome = add0($getal1, $getal2);
echo $outcome;
echo "<br>";

$getal1 = 100;
$getal2 = 10;

function subtract0($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}

$outcome = subtract0($getal1, $getal2);
echo $outcome;
echo "<br>";

$getal1 = 4;
$getal2 = 2;

function divide0($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}

$outcome = divide0($getal1, $getal2);
echo $outcome;
echo "<br>";

$getal1 = 6;
$getal2 = 6;

function multiply0($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}

$outcome = multiply0($getal1, $getal2);
echo $outcome;
echo "<br>";
echo "<br>";

include_once "macht2.php";