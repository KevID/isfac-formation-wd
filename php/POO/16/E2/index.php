<?php
require_once 'Personnage.php';
require_once 'Arme.php';

$epee = new Arme('épée', 20);
$dague = new Arme('dague', 10);

$p1 = new Personnage('Hercule', $epee);
$p2 = new Personnage('Clovis', $epee);

$p1->frappe($p2);           // Clovis 80 PV
$p2->frappe($p1);           // Hercule 80 PV
$p1->changeArme($dague);
$p1->frappe($p2);           // Clovis 70 PV

echo $p1->getInfos();
echo $p2->getInfos();