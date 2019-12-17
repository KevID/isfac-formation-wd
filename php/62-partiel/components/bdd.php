<?php
// Connection to database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=eco-pratiques', 'root', 'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    print 'Error : ' . $e->getMessage() . '<br/>';
    die();
}
?>
