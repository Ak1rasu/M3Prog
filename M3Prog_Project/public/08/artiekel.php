<?php

class Artiekel
{
    public $naam;
    public $prijs;
    public $voorraad;
};

$game = new Artiekel();
$game->naam = "Assassin's Creed Odyssey";
$game->prijs = 59.99;
$game->voorraad = 77;

echo "<br>";
print_r($game);