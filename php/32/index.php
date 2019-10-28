<?php

$var = array('fifi', 'riri', 'loulou');

var_dump($var);
echo "<br>";

$var[] = 'donald'; // Ajoute donald à la fin du tableau

var_dump($var);
echo "<br>";

echo $var[2]; // loulou
echo "<br>";

print_r($var);

// Tableau associatif

$var_asso = array("prenom"=>"Bob", "age"=>"26", "ville"=>"Poitiers", "cp"=>"86000");

var_dump($var_asso);
echo "<br>";

