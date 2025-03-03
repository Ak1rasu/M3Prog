<?php

$bonus1 = '+60-70% Enhanced Damage';
$bonus2 = '+8 To Minimum Damage';
$bonus3 = '15% Bonus to Attack Rating (Hit Blinds Target)';
$bonus4 = '+4 points of Mana after each kill';
$imageURL = 'https://diablo2.wiki.fextralife.com/file/Diablo-2/deathspade_weapons_diablo_2_resurrected_wiki_guide.png';
$alternatieveText = 'Deathspade';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Deathspade
    </h1>
    <img src="<?php echo $imageURL;?>" alt="<?php echo $alternatieveText;?>">
    <h2>
        <ul>
            <li><?= $bonus1;?></li>
            <li><?= $bonus2;?></li>
            <li><?= $bonus3;?></li>
            <li><?= $bonus4;?></li>
        </ul>
    </h2>
</body>
</html>