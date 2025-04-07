<?php

$persoon = [
    'voornaam'=> 'Luigi', 
    'achternaam' => 'Mario', 
    'leeftijd' => 19,
    'favoriet eten' => 'pasta',
    'minst favoriet eten' => 'paddenstoelen',
    'woonplaats' => 'mushroom kingdom',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
            <tr>
                
                <td>
                    <?php foreach ($persoon as $key => $value) 
                    {
                        echo $key . "</br>";
                    }; ?>
                </td>
                <td>
                    <?php foreach ($persoon as $key => $value) 
                    {
                        echo $value . "</br>";
                    }; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>