<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=exophp', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                              PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    print 'Erreur !: ' . $e->getMessage() . '<br/>';
    die();
}
?>
