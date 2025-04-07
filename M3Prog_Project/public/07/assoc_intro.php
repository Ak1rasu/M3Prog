<?php

$trophiesPerGame = [
    "Demon's Souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "tetris" => 10
];

$trophiesForDS = $trophiesPerGame["Demon's Souls"];
$trophiesForMario = $trophiesPerGame["Mario wonder"];
$trophiesForRayman = $trophiesPerGame["Rayman Origins"];
$tetris = $trophiesPerGame["tetris"];

echo $trophiesForDS . "<br>";
echo $trophiesForMario . "<br>";
echo $trophiesForRayman . "<br>";
echo $tetris . "<br>";