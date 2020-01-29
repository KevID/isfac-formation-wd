<?php

require_once 'Perso.php';

$gandalf = new Perso('Gandalf', 100);
$frodon = new Perso('Frodon', 2);

$gandalf->attaquer($frodon, 10);

$gandalf->info();
$frodon->info();
