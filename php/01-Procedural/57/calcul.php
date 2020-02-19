<?php

$longueur = (isset($_GET['longueur'])) ? (int)$_GET['longueur'] : 0;
$largeur = (isset($_GET['largeur'])) ? (int)$_GET['largeur'] : 0;

function calculAire($longueur, $largeur)
{
    return $longueur * $largeur;
}

if ($longueur > 0 && $largeur > 0) {
    echo 'L\'air du rectangle est de : ' . calculAire($longueur, $largeur);
} else {
    echo "Veuillez renseigner une longueur et une largeur valides.";
}
?>

<br>
<a href="index.php">Retour</a>