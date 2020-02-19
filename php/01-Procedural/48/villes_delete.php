<?php
// Récupération des arguments passés en méthode GET dans le lien
$id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;

// Si le formulaire a été soumis
if (!is_null($id) AND $id > 0) {
    try {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=test_pdo',
            'root',
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        $requete = 'DELETE FROM villes_france_free WHERE ville_id = "' . $id . '"';
        $reponse = $bdd->query($requete);

        echo "La ville a bien été supprimée.<br />";
        echo '<a href="villes.php">Retour à la liste des villes.</a>';

        $bdd = null;
    } catch (PDOException $e) {
        print 'Erreur !: ' . $e->getMessage() . '<br/>';
        die();
    }


} // Sinon on revient sur la page des villes.
else {
    header('Location: villes.php');
}
