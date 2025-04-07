<?php

header("Content-Type: application/json");

$mario = ["name"=>"mario","gemiddeldeCijfer"=> 7.5,"klas"=>"mushroom"];
$wario = ["name"=>"wario","gemiddeldeCijfer"=> 4.5,"klas"=>"W"];
$bowser = ["name"=>"bowser","gemiddeldeCijfer"=> 8.5,"klas"=>"shell"];
$peach = ["name"=>"peach","gemiddeldeCijfer"=> 6.5,"klas"=>"mushroom"];

$dataObject = ["studenten"=> [$mario,$wario,$bowser,$peach]];

$serialize = json_encode($dataObject);
echo $serialize;