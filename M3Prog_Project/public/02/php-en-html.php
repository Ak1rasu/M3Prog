<?php
$titel = 'Een php html voorbeeld pagina';
$imageURL = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCu0NJ8Cuo8fTdeshz5AAzhft8YeVm67hfwg&s';
$alternatieveText = 'The game';
$auteur = 'BlackNyteJr';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $imageURL;?>" alt="<?php echo $alternatieveText;?>">
    <section>
        <h1>
            Auteur: <?= $auteur;?>
</h1>
    </section>
</body>
</html>