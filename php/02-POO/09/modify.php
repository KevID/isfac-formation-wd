<?php


require_once 'classes/Fantome.php';
require_once 'classes/FantomeManager.php';

$db = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root');
$manager = new FantomeManager($db);

$idGet = isset($_GET['id']) ? $_GET['id'] : '';
$idPost = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';

if ($idPost && $name && $color) {
    $fantome = $manager->get($idPost);
    $fantome->setName($name);
    $fantome->setColor($color);

    $manager->update($fantome);

    header('Location: index.php');
    die();
} elseif ($idGet > 0) {
    $fantome = $manager->get($idGet);
} else {

    header('Location: index.php');
    die();
}
?>

<h1>Modifier un fantôme</h1>

<form action="#" method="post">
    Name: <input type="text" name="name" value="<?= $fantome->getName() ?>">
    Color: <input type="text" name="color" value="<?= $fantome->getColor() ?>">
    <input type="hidden" name="id" value="<?= $fantome->getId() ?>">
    <button type="submit">Modifier</button>
</form>

<a href="index.php">Accueil</a>