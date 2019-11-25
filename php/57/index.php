<?php

function calculAire($longueur, $largeur)
{
    return $longueur * $largeur;
}

if (isset($_GET['longueur']) || isset($_GET['largeur'])) {
    $longueur = (isset($_GET['longueur']) && is_numeric($_GET['longueur'])) ? $_GET['longueur'] : 0;
    $largeur = (isset($_GET['largeur']) && is_numeric($_GET['largeur'])) ? $_GET['largeur'] : 0;

    if ($longueur > 0 && $largeur > 0) {
        $resultat = 'L\'air du rectangle est de : ' . calculAire($longueur, $largeur);
    } else {
        $resultat = 'Veuillez renseigner une longueur et une largeur valides.';
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<?php if (isset($resultat)): ?>
    <id><?= $resultat ?></id><br><br>
<?php endif; ?>
<form method="get" action="">
    Longueur <input type="text" name="longueur"><br>
    Largeur <input type="text" name="largeur"><br>
    <input type="submit" value="Calculer l'aire">
</form>
</body>
</html>