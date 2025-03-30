<html>
<head>
    <title>Title</title>
    <style type="text/css">
    *{
        margin: 8px;
    }
    body{
        background: beige;
        font-family: italic;
        font-size: 20px;
    }
    </style>
</head>
<body>

<?php
include_once "vliegkostenfunctions.php";


$eindPrijs = berekenVliegKosten(3722, 2.05, 20, 1);
echo $eindPrijs;
echo "</br>";

$eindPrijs = berekenVliegKosten(9276, 3.11, 10, 1);
echo $eindPrijs;
echo "</br>";

$eindPrijs = berekenVliegKosten(803, 2.83, 0, 2);
echo $eindPrijs;
echo "</br>";
?>
</body>
</html>