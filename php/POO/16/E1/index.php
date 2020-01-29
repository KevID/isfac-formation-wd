<?php
require_once 'Ballon.php';

$b1 = new Ballon('rouge', 'Bob');
$b2 = new Ballon('bleu', 'Toby');

echo $b1->getInfos();
echo $b2->getInfos();

$b2->changeColor($b1, 'vert');

echo $b1->getInfos();
echo $b2->getInfos();