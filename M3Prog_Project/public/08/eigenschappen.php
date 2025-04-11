<?php

class LunchItem
{
    public $naam;
    public $prijs;
    public $beschrijving;
};

$broodjeBal = new LunchItem();
$broodjeBal->naam = "Broodje bal";
$broodjeBal->prijs = "4.50 euro";
$broodjeBal->beschrijving = "Een broodje met een gehaktbal";

$broodjeFrikandel = new LunchItem();
$broodjeFrikandel->naam = "Broodje frikandel";
$broodjeFrikandel->prijs = "3.50 euro";
$broodjeFrikandel->beschrijving = "Een broodje met een frikandel";

$lunchmenu = [
    $broodjeBal,
    $broodjeFrikandel
];

foreach ($lunchmenu as $item) {
    echo "<br>";
    echo "Naam: " . $item->naam . "<br>";
    echo "Prijs: " . $item->prijs . "<br>";
    echo "Beschrijving: " . $item->beschrijving . "<br>";
}
