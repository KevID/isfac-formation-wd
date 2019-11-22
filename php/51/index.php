<?php

function bonjour()
{
    echo 'Bonjour Madame/Monsieur.';
}

bonjour();

echo '<br><br>';

function heure()
{
    return date('H\h i\m s\s', time());
}

echo 'Il est ' . heure() . ' actuellement.';

echo 999 . 888;