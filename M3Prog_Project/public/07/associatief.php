<?php
$verbruik = [
    'wasmachine' => 345,
    'tv' => 20,
    'koelkast' => 365,
    'magnetron' => 255,
    'elektrische oven' => 410,
];

foreach ($verbruik as $apparaat => $kwh) {
    echo "Apparaat: $apparaat<br>";
    echo "Verbruik: $kwh kWh<br><br>";
}

$totaal = 0;

foreach ($verbruik as $apparaat => $kwh) {
    $totaal += $kwh;
}

echo "<strong>Totaal verbruik: $totaal kWh</strong><br>";
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Apparaat Verbruik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        h1 {
            color: #005c99;
            font-size: 26px;
        }

        .apparaten-lijst {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            max-width: 400px;
            list-style-type: square;
        }

        .apparaten-lijst li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .apparaat {
            color: #cc0000;
            text-transform: uppercase;
        }

        .verbruik {
            color: #006600;
            font-weight: bold;
        }

        small {
            color: #888;
            font-size: 12px;
        }
    </style>
</head>
<body>

</body>
</html>