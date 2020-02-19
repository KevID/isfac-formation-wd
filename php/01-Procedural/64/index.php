<?php

$monFichier = fopen('visites.txt', 'a+');

fseek($monFichier, 0);
$nbBefore = (int)fgets($monFichier);

$nbAfter = $nbBefore + 1;

ftruncate($monFichier, 0);     // Effacer le contenu
fwrite($monFichier, $nbAfter);      // Écriture du nouveau compteur

fclose($monFichier);

echo '"Hello world" pour la ' . $nbAfter . 'ème fois !!!';