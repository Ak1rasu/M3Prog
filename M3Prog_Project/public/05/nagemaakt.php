<?php

function mijnPrint($printText)
{
    print($printText);
    print("</br>");
}

mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint("omdat 'printText' geen argument heeft");

$dezeGaatMee = "deze waarde wordt meegenomen";
print($dezeGaatMee);

//vraag 1, omdat $printText geen argument heeft