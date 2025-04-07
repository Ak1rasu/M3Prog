<?php

$verbruik = [
    'wasmachine' => 345,
    'tv' => 20,
    'koelkast' => 365,
    'magnetron' => 255,
    'elektrische oven' => 410,
];

$weer = [
    'maandag' => 12,
    'dinsdag' => 19,
    'woensdag' => 20,
    'donderdag' => 16,
    'vrijdag' => 21,
    'zaterdag' => 20,
    'zondag' => 18,
];

$persoon = [
    'Voornaam' => 'Luigi',
    'Achternaam' => 'Mario',
    'Leeftijd' => 19,
    'Favoriet eten' => 'Pasta',
    'Minst favoriet eten' => 'Paddenstoelen',
    'Woonplaats' => 'Mushroom Kingdom'
];

$trophiesPerGame = [
    "Demon's Souls" => 11,
    "Mario" => 0,
    "Rayman Origins" => 9,
    "Tetris" => 10,
];

$jsonArray = [
    'verbruik' => $verbruik,
    'weer' => $weer,
    'persoon' => $persoon,
    'trophiesPerGame' => $trophiesPerGame
];

echo json_encode($jsonArray);
header('Content-Type: application/json');