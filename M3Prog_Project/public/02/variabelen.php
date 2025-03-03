<?php

$stad = 'Amsterdam';
$hetWeer = 'zonnig';
$aantalMensen = 500000;
$huidigeTemp = 9.6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        In <?= $stad;?> leven <?= $aantalMensen;?> mensen. Het is <?= $hetWeer;?>. De temperatuur is nu <?= $huidigeTemp;?> graden.
    </h2>
</body>
</html>