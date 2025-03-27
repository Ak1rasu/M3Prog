<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pokemons = ["<h1>Miraidon", "Umbreon", "Mewtwo", "Ceruledge", "Zamazenta</h1>"];
    $images = ["https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/1008.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/197.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/150.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/937.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/889.png"];
    for ($i=0; $i < count($pokemons); $i++) { 
        echo $pokemons[$i] . "<br>";
        echo "<img src='$images[$i]' alt='pokemon'><br>";
    }
    ?>
</body>
</html>