<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
