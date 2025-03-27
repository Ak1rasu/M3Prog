<?php

function mijnFunction()
{
    return 1;
}

$mijnFunctionResultaat = mijnFunction();
echo $mijnFunctionResultaat;

echo "<br>";

function returnvariable()
{
    $result = rand();
    return $result;
}

$function = returnvariable();
echo $function;
echo "<br>";
echo $function;
echo "<br>";
echo $function;