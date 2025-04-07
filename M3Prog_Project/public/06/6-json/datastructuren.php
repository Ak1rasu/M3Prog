<?php

$bioscoop = [
    "bioscoop"=> [
        "films" => [

                "titel"=> "Angry Birds 2",
                "details"=> [
                    "regisseur"=> "Thurop Van Orman",
                    "jaar"=> 2019,
                    "genre"=> "Animatie"
                ]

        ]
    ]
];

$jsonString = json_encode($bioscoop);
header('Content-Type: application/json');
echo $jsonString;