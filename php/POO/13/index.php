<?php

require_once 'Ghost.php';

$ghost1 = new Ghost();
$ghost2 = new Ghost();
$ghost3 = new Ghost();

unset($ghost3);

echo 'Attention il y a ' . Ghost::getNb() . ' fantômes !';