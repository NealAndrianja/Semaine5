<?php
$file = fopen("test.csv", "r");
//voici comment lire un fichier csv:
while(false !== ($line = fgetcsv($file,1000,"|"))){
    var_dump($line);
}