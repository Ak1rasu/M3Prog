<?php

$totaalBesteld = 1000.0;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;
$cadeauWaarde = false;


if ($totaalBesteld >= 100.0)
{
    $verzendKosten = 0;
}
if ($totaalBesteld >= 250.0)
{
    $korting = 0.05;
}

echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);
echo "Totaal met verzendkosten wordt het $totaal</br>";


if ($totaalBesteld >= 400.0 == $totaalBesteld < 1000.0)
{
    $cadeautje = true;
    echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";

}
if ($totaalBesteld >= 1000.0)
{
    $korting = 0.075;
    $cadeauWaarde = true;
    echo "U krijgt ook een cadeautje ter waarde van 40euro</br>";
}
?>