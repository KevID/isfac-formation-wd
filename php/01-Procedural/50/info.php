<?php
session_start();

// Si l'utilisateur n'est pas connecté, on le redirige sur l'accueil
if (!(isset($_SESSION['loged']) && $_SESSION['loged'] === true)) {
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta doctype="UTF-8">
    <title>News</title>
</head>
<body>
<div>News 1</div>
<div>News 2</div>
<div>News 3</div>
<a href="disconnect.php">Déconnexion</a>
</body>
</html>
