<?php

function ServirSucre($sucre = false)
{
    $text = ($sucre) ? 'Servi avec du sucre.' : 'Servi sans sucre.';
    return $text;
}

echo servirSucre();
echo '<br><br>';
echo servirSucre(true);
echo '<br><br>';
echo servirSucre(false);