<?php

$villes = array("Poitiers"=>"86000", "Tours"=>"37000", "Niort"=>"79000", "Paris"=>"75000");

$ville = isset($_GET['ville']) ? $_GET['ville'] : "";

if(array_key_exists($ville, $villes)) {
    echo "Vous habitez " . $ville . ", le code postal est " . $villes[$ville] . ".<br><br>";
} else {
    echo "veuillez sélectionner votre ville.<br><br>";
}

echo "Par la même occasion, Poiters à la code postal " . $villes['Poitiers'] . " et ";
if(array_key_exists('Nice', $villes)) {
    echo "Nice est dans le tableau.";
} else {
    echo "Nice n'est pas dans le tableau.";
}