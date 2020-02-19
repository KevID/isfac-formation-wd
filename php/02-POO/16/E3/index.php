<?php
require_once 'Personnage.php';
require_once 'Arme.php';
require_once 'Magicien.php';


$epee = new Arme('épée', 20);
$dague = new Arme('dague', 10);
$baton = new Arme('bâton', 15);

$p1 = new Magicien('Saroumane', $baton);
$p2 = new Personnage('Aragorn', $epee);
$p3 = new Guerrier('', 'epee');

$p2->attaquer($p1);
$p1->attaquer($p2);
$p1->attaquer($p2);
$p2->boirePotionDeVie(20);
$p1->changerArme($dague);
$p1->lancerSortilege($p2);
$p2->attaquer($p1);
$p1->attaquer($p2);
$p2->attaquer($p1);

echo Personnage::infos();