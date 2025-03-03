<?php 
// Fahrenheit naar Celsius 
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = ({$fahrenheit} - 32) / 1.8 = {$celsius} graden Celsius. <br/>";

// Celsius naar Fahrenheit 
$celsius = 30;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = ({$celsius} * 1.8) + 32 = {$fahrenheit} graden Fahrenheit. <br/>";

// Celsius naar Kelvin 
$celsius = 30;
$kelvin = $celsius + 273.15;
echo "{$celsius} graden Celsius = {$celsius} + 273.15 = {$kelvin} Kelvin. <br/>";

// Fahrenheit naar Kelvin 
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
$kelvin = $celsius + 273.15;
echo "{$fahrenheit} graden Fahrenheit = ({$fahrenheit} - 32) / 1.8 = {$celsius} graden Celsius = {$celsius} + 273.15 = {$kelvin} Kelvin. <br/>"; 
?>