<?php
if (isset($_GET['firstname'])) {
    setcookie('firstname', $_GET['firstname'], time() + 60);
}
header('Location: index.php');
