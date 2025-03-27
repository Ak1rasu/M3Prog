<?php

$games = ["Call of Duty", "Assassin's Creed", "Minecraft", "Battlefield", "Grand Theft Auto"];

array_push($games, "Outerwilds");

print_r($games);
echo "<br>";
echo count($games);
echo "<br>";
sort($games);
echo implode(' ,<br> ', $games);