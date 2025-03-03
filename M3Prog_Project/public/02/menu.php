<?php


$typeGerecht = 'Na';
$naamGerecht = 'Tiramisu';
$prijs = 4.50;
$beschrijving = 'Laagjes koekjes, gedrenkt in espresso, met een rijke, zoete mascarponekaas, bestrooid met cacaopoeder en geserveerd met chocoladesaus';
$ingredientenLijst = 'suiker, eieren, mascarpone, koffie, likeur en lange vingers';
$allergenenLijst = 'Cancer';

$formaat = "
  Gerecht type: $typeGerecht<br>
  <br>
  $naamGerecht €$prijs<br>
  <br>
  $beschrijving<br>
  Ingegredientenlijst:<br>
  $ingredientenLijst<br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  $allergenenLijst<br>";

echo $formaat;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>