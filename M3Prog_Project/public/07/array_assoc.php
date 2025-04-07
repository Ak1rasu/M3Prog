<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php
    $weer = [
        'maandag' => 12,
        'dinsdag' => 19,
        'woensdag' => 20,
        'donderdag' => 16,
        'vrijdag' => 21,
        'zaterdag' => 20,
        'zondag' => 18,
    ];
    ?>

<table>
        <tr>
            <th>Dag</th>
            <th>Temperatuur (C)</th>
        </tr>
        <?php
        foreach ($weer as $dag => $temperatuur) {
            echo "<tr><td>$dag</td><td>$temperatuur</td></tr>";
        }
        ?>
</table>
<?php $vandaag1 = "maandag"; ?>
<?php $vandaag2 = "dinsdag"; ?>
<?php $vandaag3 = "woensdag"; ?>
<?php $vandaag4 = "donderdag"; ?>
<?php $vandaag5 = "vrijdag"; ?>
<?php $vandaag6 = "zaterdag"; ?>
<?php $vandaag7 = "zondag"; ?>
<p>Vandaag <?= $vandaag1;?> is het 12 graden</p>
<p>Morgen <?= $vandaag2;?> is het 19 graden</p>
<p>Overmorgen <?= $vandaag3;?> is het 20 graden</p>
<p>De dag daarna <?= $vandaag4;?> is het 16 graden</p>
<p>De dag daarna <?= $vandaag5;?> is het 21 graden</p>
<p>De dag daarna <?= $vandaag6;?> is het 20 graden</p>
<p>De dag daarna <?= $vandaag7;?> is het 18 graden</p>
</body>
</html>