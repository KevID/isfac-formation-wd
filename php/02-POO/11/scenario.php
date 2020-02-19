<?php

require_once 'Quadrilatere.php';
require_once 'Carre.php';

$rectangle = new Quadrilatere(20, 10);
echo 'Périmètre: ' . $rectangle->getPerimetre() . '</br>';
echo 'Aire: ' . $rectangle->getAire() . '</br>';

echo '<hr>';

$carre = new Carre(10);
echo 'Périmètre: ' . $carre->getPerimetre() . '</br>';
echo 'Aire: ' . $carre->getAire() . '</br>';