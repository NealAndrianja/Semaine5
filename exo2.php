<?php
//une liste de voiture sur exel => csv => JSON
// pour JSON, utiliser file_put_contents

$carFile = fopen("voitures.csv", "r");
$voitures = [];
while(($line = fgetcsv($carFile,1000,","))){
    
    $voitures[] = [
        "marque" => $line[0],
        "modele" => $line[1],
        "moteur" => $line[2],
        "energie" => $line[3],
        "transmission" => $line[4],
    ];
}

array_shift($voitures);

file_put_contents("test.json",json_encode($voitures));