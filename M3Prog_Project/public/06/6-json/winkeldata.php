<?php


$winkel='{
    "winkel": {
      "producten": [
        {
          "productNaam": "Laptop",
          "details": {
            "prijs": 999.99,
            "voorraad": 50
          }
        },
        {
          "productNaam": "Smartphone",
          "details": {
            "prijs": 699.99,
            "voorraad": 100
          }
        }
      ]
    }
  }
  ';

  $winkelObj = json_decode($winkel);

$smartphonePrijs = $winkelObj->winkel->producten[1]->details->prijs;
$laptopVoorraad = $winkelObj->winkel->producten[0]->details->voorraad;

echo "smartphone <br>" . $smartphonePrijs . "<br>";
echo "laptop <br>" . $laptopVoorraad . " op voorraad<br>";