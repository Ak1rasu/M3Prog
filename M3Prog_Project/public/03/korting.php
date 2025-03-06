<?php

$totaalBesteld = 200.0;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;


if ($totaalBesteld >= 100.0)
{
    $verzendKosten = 0;
}

echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);
echo "Totaal met verzendkosten wordt het $totaal</br>";

echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";

?>