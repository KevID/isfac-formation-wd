<?php
session_start();

// Si l'utilisateur est connecté, on le déconnecte en supprimant la variable de session "loged"
if (isset($_SESSION['loged']) && $_SESSION['loged'] === true) {
    unset($_SESSION['loged']); // On supprime la variable de session "loged"
}

header('Location: index.php');