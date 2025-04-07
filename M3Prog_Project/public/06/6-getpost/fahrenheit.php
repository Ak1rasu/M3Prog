<?php
$input = isset($_GET['celsius']) ? $_GET['celsius'] : 'Onbekend';

$celsius = floatval($input);

$fahrenheit = ($celsius * 9/5) + 32;

echo "<h1>Conversie Resultaat</h1>";
echo "Celsius: " . htmlspecialchars($celsius) . "°C<br>";
echo "Fahrenheit: " . htmlspecialchars($fahrenheit) . "°F<br>";
?>
