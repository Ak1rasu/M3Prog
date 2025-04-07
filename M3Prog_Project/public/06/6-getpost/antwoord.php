<?php
$leeftijd = isset($_GET['leeftijd']) ? $_GET['leeftijd'] : 'Onbekend';
$opleiding = isset($_GET['opleiding']) ? $_GET['opleiding'] : 'Onbekend';

echo "<h1>Ontvangen gegevens</h1>";
echo "Leeftijd: " . htmlspecialchars($leeftijd) . "<br>";
echo "Opleiding: " . htmlspecialchars($opleiding) . "<br>";

echo "<pre>";
print_r($_GET);
echo "</pre>";
?>