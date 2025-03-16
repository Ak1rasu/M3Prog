<?php

function convertCurrency($amount, $fromCurrency, $toCurrency)
{
    echo $amount;
    echo '</br>';
    echo $fromCurrency;
    echo '</br>';
    echo $toCurrency;
    echo '</br>';
}

function sendEmail($to, $from, $subject, $message)
{
    echo $to;
    echo '</br>';
    echo $from;
    echo '</br>';
    echo $subject;
    echo '</br>';
    echo $message;
    echo '</br>';
}

function generateRandomString($length)
{
    echo $length;
    echo '</br>';
}

function calculateArea($length, $width)
{
    echo $length;
    echo '</br>';
    echo $width;
    echo '</br>';
}

convertCurrency(100, "euro", "yen");

generateRandomString(10);

calculateArea(10, 20);

sendEmail("leraar@college.nl", "student@college.nl", "huiswerk", "voor volgende week");
