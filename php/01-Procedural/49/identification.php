<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $implode[] = $_GET['firstname'];
    $implode[] = $_GET['lastname'];
    $identification = implode("|", $implode);
    setcookie('identification', $identification, time() + 60);
}
header('Location: index.php');
