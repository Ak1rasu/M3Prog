<?php

$getal = 7.84397;
$afgerond1 = round($getal);
$getal2 = 7.84397;
$afgerond2 = floor($getal2);
$min = 1;
$max = 75;
$random1 = rand($min, $max);
$random2 = rand($min, $max);
$random3 = rand($min, $max);
$randomUitkomst = $random1+$random2;
$randomUitkomst2 = $randomUitkomst/$random3;

echo "Als je $getal afrond dan krijg je: $afgerond1";
echo '<br>';
echo "Als je $getal2 afrond dan krijg je: $afgerond2";
echo '<br>';
echo $randomUitkomst2;

?>