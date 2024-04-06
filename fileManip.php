<?php
$tableau = [
    [
        "nom" => "rakoto",
        "prenom"  => "Rasoa",
        "age" => 36,
    ],
    [
        "nom" => "rabe",
        "prenom"  => "zety",
        "age" => 35,
    ],
    [
        "nom" => "andry",
        "prenom"  => "be",
        "age" => 26,
    ],
    [
        "nom" => "hasina",
        "prenom"  => "zo",
        "age" => 19,
    ]
];

$resultat = [];

// foreach ($tableau as $tab) {
//     $resultat["nom"][] = $tab["nom"];
//     $resultat["prenom"][] = $tab["prenom"];
//     $resultat["age"][] = $tab["age"];
// }

foreach ($tableau as $tab) {
   foreach ($tab as $key => $value) {
    $resultat[$key][]=$value;
   }
}


//creation stream
//mode: r, w, w+, a, a+
$stream = fopen("test.csv","w");
//mampiditra données anaty fichier csv
fputcsv($stream,["nom","prenom","age"],"|");

foreach ($tableau as $tab) {
    fputcsv($stream,$tab,"|");
 }

