<?php
$hoeLangIsDitWoord = "scrabbleWoord";
$woordLengte = strlen($hoeLangIsDitWoord);

print($woordLengte);
print "</br>";

//vraag 1, het is een function
//vraag 2, het is een unsigned integer type
//vraag 3, de hoeveelheid tekens in het woord inclusief spaties

$woord = "Pneumonoultramicroscopicsilicovolcanoconiosis";
$lengteWoord = strlen($woord);

print($lengteWoord);

//vraag 4, 2x

print "</br>";

$tweeMacht2 = pow(2,10);

print($tweeMacht2);
print "</br>";
print(pow(2,10));
print "</br>";

//vraag 1, door print
//https://www.php.net/manual/en/function.strtoupper.php

$naam = "wario";
print($naam);

print "</br>";

$naamGroot = strtoupper($naam);
print($naamGroot);

print "</br>";

$naamKlein = strtolower($naamGroot);
print($naamKlein);