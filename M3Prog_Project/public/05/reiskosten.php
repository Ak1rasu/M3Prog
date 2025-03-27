<?php



function berekenRitKosten($afstandkm, $kmPerLiter, $literPrijs){
    $kosten_euro = 0;
    $aantal_liters = $afstandkm / $kmPerLiter;
    $kosten_euro = $aantal_liters * $literPrijs;
    return $kosten_euro;
}
//$kosten = berekenRitKosten(500, 20, 2.45);
//echo $kosten;