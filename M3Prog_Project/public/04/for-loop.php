<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prijzen = [2.50, 1.50, 6.78, 9.89, 10.25];

    for ($i=0; $i < count($prijzen); $i++) { 
        echo $i ." : ". $prijzen[$i] . "<br>";
    }
    ?>
</body>
</html>