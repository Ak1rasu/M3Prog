<?php



function berekenVliegKosten($afstandkm, $literPrijs, $KiloBagage, $WelkeClass){
    $kosten_euro = 0;
    $kosten_euro = (($literPrijs * $afstandkm) / 30);
    if ($KiloBagage > 1){
        $bagagePrijs = $KiloBagage * 5;
    }
    else{
        $bagagePrijs = 0;
    }
    $eindPrijs = $kosten_euro + $bagagePrijs;
    if ($WelkeClass === 2){
        $eindPrijs = $eindPrijs * 1.5;
        return number_format ($eindPrijs, 2, '.', '');
    }
    else{
        return number_format ($eindPrijs, 2, '.', '');
    }
}
