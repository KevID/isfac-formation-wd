<?php
session_start();

// If user already connected
if (isset($_SESSION['login'])) {
    session_destroy();
}

header('Location: user_login.php');
exit();
