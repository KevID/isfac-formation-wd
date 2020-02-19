<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=facturation', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $requete = 'SELECT * from acheteurs LIMIT 10';
    $reponse = $dbh->query($requete);
    foreach ($reponse as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print 'Erreur !: ' . $e->getMessage() . "<br/>";
    die();
}
?>