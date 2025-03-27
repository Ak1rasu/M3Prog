<?php

$announcements = [
    "a.html",
    "b.html",
    "c.html"
];

$reviews = 
[
    ["demon's souls",10, "demon's souls is een geweldige game"],
    ["mario wonder",9.5],
    ["mega man 2",8],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < ($announcements); $i++) { 
        $announcements = $announcements[$i];
        include "announcements/$announcements";
    };

    $review = $reviews[$i];

    $title = $review[0];
    $cijfer = $review[1];
    $conclusie = $review[2];

    echo $reviews;
    ?>
</body>
</html>