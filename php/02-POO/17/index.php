<?php

/*
require_once 'iAnimal.php';
require_once 'Chien.php';
require_once 'Oiseau.php';
*/

spl_autoload_register('autoloader');

function autoloader($class)
{
    require $class . '.php';
}

$chien1 = new Chien;
$oiseau1 = new Oiseau;

print $chien1->manger() . '<br>';
print $oiseau1->respirer() . '<br>';
print $chien1->aboyer() . '<br>';