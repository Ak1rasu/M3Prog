<?php

class Artiekel {
    public $naam;
    public $prijs;
    public $voorraad;
    public $beschrijving;
}

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150, "beschrijving":"ZEUS YOUR SON HAS RETURNED!!!"}';
$game = json_decode($json);

$artiekel = new Artiekel();
$artiekel->naam = $game->naam;
$artiekel->prijs = $game->prijs;
$artiekel->voorraad = $game->voorraad;
$artiekel->beschrijving = $game->beschrijving;

$json2 = json_encode($artiekel);
echo $json2;

?>
