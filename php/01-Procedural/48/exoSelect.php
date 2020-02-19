<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test_pdo', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                                PDO::ERRMODE_EXCEPTION]);
    /*
        $nom = 'DO';
        $prenom = 'Jone';
        $statut = 'Oncle';
        $datedenaissance = '2019-11-15';
        $query = 'INSERT INTO famille_tbl (nom, prenom, statut, dateNaissance) VALUES ("' . $nom . '","' . $prenom . '","' .
            $statut . '","' . $datedenaissance . '")';
        $execution = $bdd->query($query);
    */
    $nom = 'DOE';
    $prenom = 'John';
    $query = 'UPDATE famille_tbl SET nom = "' . $nom . '", prenom = "' . $prenom . '" WHERE id = 7';
    $execution = $bdd->query($query);


    $requete = 'SELECT * from famille_tbl LIMIT 10';
    $reponse = $bdd->query($requete);
    foreach ($reponse as $row) {
        echo $row['nom'] . ' ' . $row['prenom'] . '<br />';
    }


    $bdd = null;
} catch (PDOException $e) {
    print 'Erreur !: ' . $e->getMessage() . '<br/>';
    die();
}
?>
</html>