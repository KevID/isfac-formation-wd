<?php
session_start();

function permission($level = 0)
{
    // Récupère le rôle enregistré en session ou sinon définit le rôle à 0
    $userRole = (isset($_SESSION['user_role'])) ? (int)$_SESSION['user_role'] : 0;

    // Si le rôle n'est pas suffisant on retourne à la page d'accueil
    if ((int)$level > 0 && $userRole < (int)$level) {
        header('Location: index.php');
        die();
    }
    return $userRole;
}

