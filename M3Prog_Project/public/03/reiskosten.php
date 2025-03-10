<?php

$afstand = 1152.00;
$benzine = 1.89;
$treinRit = 60.00;
$tankInhoud = 50;

echo "De totale afstand van Nederland naar Bordeaux is $afstand</br>";

$verbruik = $afstand / 15;

echo "Hoeveel liter je verbruikt = $verbruik</br>";

$XTanken = $verbruik / $tankInhoud;

echo "Aantal x tanken = $XTanken </br>";

$kosten = $verbruik * $benzine;
echo "De kosten in totaal = $kosten </br>";

if ($kosten > $treinRit)
{
    echo "treinrit is goedkoper";
}
else
{
    echo "auto is goedkoper";
}
?>