<?php

class student
{
    public $name;
    public $gemiddeldeCijfer;
    public $klas;
}

class dataObject
{
    public $studenten;
}

$mario = new student();
$mario->name="mario";
$mario->gemiddeldeCijfer=8;
$mario->klas="flower";

$wario = new student();
$wario->name="wario";
$wario->gemiddeldeCijfer=6;
$wario->klas="castle";

$peach = new student();
$peach->name="peach";
$peach->gemiddeldeCijfer=9;
$peach->klas="castle";

$bowser = new student();
$bowser->name="bowser";
$bowser->gemiddeldeCijfer=8;
$bowser->klas="coin";


$dataObject = new dataObject();
$dataObject->studenten = [$mario,$bowser,$peach,$wario];

$jsonString = json_encode($dataObject);
header('Content-Type: application/json');
echo $jsonString;