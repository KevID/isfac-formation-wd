<?php

spl_autoload_register('autoloader');

function autoloader($classe)
{
    require_once 'classes/' . $classe . '.php';
}

$db = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root');
$manager = new FantomeManager($db);

?>

<h1>Gestion de Fantômes</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Color</td>
        <td>Velocity</td>
        <td>PV</td>
        <td>Modify</td>
        <td>Delete</td>
    </tr>
    <?php foreach ($manager->getList() as $fantome): ?>
        <tr>
            <td><?= $fantome->getId() ?></td>
            <td><?= $fantome->getName() ?></td>
            <td><?= $fantome->getColor() ?></td>
            <td><?= $fantome->getVelocity() ?></td>
            <td><?= $fantome->getPv() ?></td>
            <td><a href="modify.php?id=<?= $fantome->getId() ?>">Modify</a></td>
            <td><a href="delete.php?id=<?= $fantome->getId() ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="fantome.php">Ajouter un fantôme</a>