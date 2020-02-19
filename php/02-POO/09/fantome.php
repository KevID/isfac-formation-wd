<?php


require_once 'classes/Fantome.php';
require_once 'classes/FantomeManager.php';

$db = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root');
$manager = new FantomeManager($db);

$name = isset($_POST['name']) ? $_POST['name'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';

if ($name && $color) {
    $fantome = new Fantome(['name' => $name, 'color' => $color]);

    $manager->add($fantome);

    header('Location: index.php');
    die();
}
?>

<h1>Ajouter un fantôme</h1>

<form action="#" method="post">
    Name: <input type="text" name="name" value="<?= $name ?>">
    Color: <input type="text" name="color" value="<?= $color ?>">
    <button type="submit">Ajouter</button>
</form>

<a href="index.php">Accueil</a>