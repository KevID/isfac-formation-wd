<?php
session_start();

// Si l'utilisateur n'est pas connecté comme admin, on le renvoie vers l'accueil
if (!(isset($_SESSION['level']) && (int)$_SESSION['level'] === 9)) {     // 9 -> Admin
    header('Location: index.php');
    exit;
}

require_once 'bdd.php';
$requete = 'SELECT * FROM links';
$reponse = $bdd->query($requete);


?>
<!DOCTYPE html>
<html>
<head>
    <meta doctype="UTF-8">
    <title>Backoffice</title>
</head>
<body>

<h2><a href="admin-link.php">Ajouter un link</a></h2>

<h2>Modifier / Supprimer un link</h2>
<ul>
    <?php foreach ($reponse AS $rowLink): ?>
        <li>
            <?= $rowLink['title'] ?>
            <a href="admin-link.php?action=update-view&id=<?= $rowLink['id'] ?>">Modifier</a>
            /
            <a href="admin-link.php?action=del&id=<?= $rowLink['id'] ?>">Supprimer</a>
            <br><br>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
