<?php
$pageTitle = (isset($pageTitle)) ? $pageTitle : 'Gestionnaire Eco-Pratiques';
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>

<nav>
    <span><a href="index.php" title="Accueil d'Eco-Pratiques">Accueil</a></span>

    <?php if ($userRole > 0): ?>
        | <span><a href="admin.php" title="Administration d'Eco-Pratiques">Admin</a></span>
        | <span><a href="user.php?action=logout" title="Se déconnecter">Se déconnecter</a></span>
    <?php else: ?>
        | <span><a href="user.php" title="S'identifier'">Se connecter</a></span>
    <?php endif ?>

</nav>

<main>
