<?php
session_start();

// Si l'utilisateur n'est pas connecté
if (isset($_SESSION['loged']) && $_SESSION['loged'] === true) {
    $_SESSION['loged'] = false;
}

header('Location: index.php');