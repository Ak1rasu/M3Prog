<?php

$artiekel = [
    "naam" => "hello world badge",
    "prijs" => 5.99,
    "voorraad" => 200
];

$json = json_encode($artiekel);
echo "$json<br>";

$object = json_decode($json);
// $object is het decoded $artiekel

print_r($object);