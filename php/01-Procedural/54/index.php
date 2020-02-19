<?php
function afficheJour($jourNb)
{
    $semaine = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
    if ($semaine[$jourNb] === 'lundi') {
        $message = 'C\'est lundi, c\'est ravioli.';
    } else {
        $message = 'Bonjour, nous sommes aujourd\'hui ' . $semaine[$jourNb];
    }
    return $message;
}

echo afficheJour(date('w'));

echo '<br><br>';

