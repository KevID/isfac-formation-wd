<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id > 0) {
    require_once 'classes/Fantome.php';
    require_once 'classes/FantomeManager.php';

    $db = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root');
    $manager = new FantomeManager($db);

    $manager->delete($id);
}

header('Location: index.php');
die();
