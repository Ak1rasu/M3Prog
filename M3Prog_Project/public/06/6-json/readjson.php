<?php


$steden = [
    "amsterdam",
    "rotterdam",
    "utrecht"
];

$jsonString = json_encode($steden);

$stedenRead = json_decode($jsonString);

print_r ($stedenRead);

$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';
  echo "</br>";
  $dataObject = json_decode($json);
  print_r($dataObject);

  echo "</br>";
  echo $dataObject ->studenten[0]->name;
  echo "</br>";
  echo $dataObject ->studenten[1]->gemiddeldCijfer;