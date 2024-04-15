<?php

$matches = [
    [
        "casa" => "Milano", 
        "ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [
        "casa" => "Juventus ", 
        "ospite" => "Varese",
        "punti_casa" => 35,
        "punti_ospite" => 40,
    ],
    [
        "casa" => "Fiorentina ", 
        "ospite" => "Napoli",
        "punti_casa" => 50,
        "punti_ospite" => 60,
    ],
    [
        "casa" => "Treviso ", 
        "ospite" => "Ancona",
        "punti_casa" => 25,
        "punti_ospite" => 30,
    ],
];

foreach ($matches as $match) {
    echo $match["casa"] . " - " . $match["ospite"] . " | " . $match["punti_casa"] . " - " . $match["punti_ospite"] . "<br>";
}

?>
