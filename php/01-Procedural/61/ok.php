<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

echo 'Connecté et session enregistrée';

