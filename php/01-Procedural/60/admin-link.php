<?php
session_start();

// Si l'utilisateur n'est pas connecté comme admin, on le renvoie vers l'accueil
if (!(isset($_SESSION['level']) && (int)$_SESSION['level'] === 9)) {     // 9 -> Admin
    header('Location: index.php');
    exit;
}

// Récupération de l'id si on fait un update
$linkPostId = (isset($_POST['id'])) ? (int)$_POST['id'] : 0;

// Récupération de l'id et des données d'un lien si on veut faire un update
$linkGetId = (isset($_GET['id'])) ? (int)$_GET['id'] : 0;
$linkGetAction = (isset($_GET['action'])) ? $_GET['action'] : '';

$link = '';
$title = '';
$description = '';

if ($linkGetId > 0) {
    if ($linkGetAction === 'update-view') { // On récupère les valeurs pour les placer dans le formulaire
        require_once 'bdd.php';
        $requete = 'SELECT * FROM links WHERE id = ' . $linkGetId;
        $reponse = $bdd->query($requete);

        if ($reponse->rowCount() === 1) {
            $row = $reponse->fetch();
            $link = $row['link'];
            $title = $row['title'];
            $description = $row['description'];
        }
    } elseif ($linkGetAction === 'del') {   // On supprime
        require_once 'bdd.php';
        $requete = 'DELETE FROM links WHERE id = ' . $linkGetId;
        $reponse = $bdd->exec($requete);

        // La suppression faite, on retourne sur la liste des liens.
        header('Location: admin.php');
        exit;
    }
} elseif ($linkPostId > 0) {
    $action = 'update';
} else {
    $action = 'add';
}

// Si on fait un ajout ou un update
if (isset($action) && ($action === 'add' OR ($action === 'update' AND $linkPostId > 0))) {
    $link = (isset($_POST['link'])) ? $_POST['link'] : null;
    $title = (isset($_POST['title'])) ? $_POST['title'] : null;
    $description = (isset($_POST['description'])) ? $_POST['description'] : null;

    if ($link && $title && $description) {
        require_once 'bdd.php';

        if ($action === 'add') {    // Si ajout
            $requete = 'INSERT INTO links (link, title, description)' .
                'VALUES ("' . $link . '", "' . $title . '", "' . $description . '")';
        } else {                    // Sinon update
            $requete = 'UPDATE links SET link = "' . $link . '", title = "' . $title . '", description = "' .
                $description . '"WHERE id = ' . $linkPostId;
        }

        $exec = $bdd->exec($requete);

        // L'enregistrement fait, on retourne sur la liste des liens.
        header('Location: admin.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta doctype="UTF-8">
    <title>Connexion</title>
</head>
<body>
<?php if (isset($error)): ?>
    <div style="color: red"><?= $error ?></div>
<?php endif; ?>
<form method="post" action="admin-link.php">
    Lien <input type="text" name="link" value="<?= $link ?>"><br><br>
    Titre <input type="text" name="title" value="<?= $title ?>"><br><br>
    Description <input type="text" name="description" value="<?= $description ?>"><br><br>
    <input type="hidden" name="id" value="<?= $linkGetId ?>"><br><br>
    <input type="submit" value="Enregistrer">
</form>
</body>
</html>
