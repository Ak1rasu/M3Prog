
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
    function berekenRitKosten($afstandkm, $kmPerLiter, $literPrijs){
        $kosten_euro = 0;
        $aantal_liters = $afstandkm / $kmPerLiter;
        $kosten_euro = $aantal_liters * $literPrijs;
        return $kosten_euro;
    }
    $kosten = berekenRitKosten(663, 15, 1.90);
    echo "berlijn: $kosten";
    echo '</br>';

    function berekenRitKosten1($afstandkm, $kmPerLiter, $literPrijs){
        $kosten_euro = 0;
        $aantal_liters = $afstandkm / $kmPerLiter;
        $kosten_euro = $aantal_liters * $literPrijs;
        return $kosten_euro;
    }
    $kosten = berekenRitKosten1(1438, 20, 1.46);
    echo "stockholm: $kosten";
    echo '</br>';

    function berekenRitKosten2($afstandkm, $kmPerLiter, $literPrijs){
        $kosten_euro = 0;
        $aantal_liters = $afstandkm / $kmPerLiter;
        $kosten_euro = $aantal_liters * $literPrijs;
        return number_format ($kosten_euro, 2, '.', '');
    }
    $kosten = berekenRitKosten2(1991, 18.47, 2.23);
    echo "Kiev: $kosten";
    echo '</br>';
?>

</body>
</html>