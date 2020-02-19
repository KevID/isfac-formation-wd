<?php

$ville = $_GET['ville'] ?? false;

if ($ville and strlen($ville) > 2) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=exophp;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                                               PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        print 'Erreur !: ' . $e->getMessage() . '<br/>';
        die();
    }
    $ville .= '%';

    $requete = $bdd->prepare('SELECT ville_nom_reel AS ville FROM villes WHERE ville_nom_reel LIKE :ville LIMIT 10');
    $requete->bindParam(':ville', $ville, PDO::PARAM_STR);
    $requete->execute();

    if ($requete->rowCount() > 0) {
        $villes = $requete->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($villes);
    } else {
        echo 'false';
    }

} else {
    echo 'false';
}
