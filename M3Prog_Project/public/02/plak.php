<?php

$standaardString = 'hello world<br>';
$extraString = 'extra world<br>';
$voornaam = 'Luigi';
$achternaam = 'mario';
$fullname = "$voornaam" ." ". "$achternaam" . "<br>";

$naam = 'Yoshi';
$ondertekentDoor = 'Directeur Bowser';
$enemy = "Koopa Troopa's";
$emailTekst = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";

echo $standaardString;
echo $extraString;
echo $fullname;

echo $emailTekst;
?>