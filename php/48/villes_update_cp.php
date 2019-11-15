<?php
// Récupération des arguments passés en méthode GET dans le lien
$id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;
$new_cp = (isset($_GET['new_cp'])) ? $_GET['new_cp'] : null;

// Si le formulaire a été soumis
if (!is_null($id) AND $id > 0 AND !is_null($new_cp)) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test_pdo', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                                    PDO::ERRMODE_EXCEPTION]);
        $requete = 'UPDATE villes_france_free SET ville_code_postal = "' . $new_cp . '" WHERE ville_id = "' . $id . '"';
        $reponse = $bdd->query($requete);

        echo "La modification du CP a bien été enregistrée.<br />";
        echo '<a href="villes.php">Retour à la liste des villes.</a>';

        $bdd = null;
    } catch (PDOException $e) {
        print 'Erreur !: ' . $e->getMessage() . '<br/>';
        die();
    }
} // Sinon, si l'ID de la ville a bien été soumise, on affiche le formulaire
elseif
(!is_null($id) AND $id > 0) {

    echo '<form methode="GET">';
    echo 'New CP: <input type="text" name="new_cp">';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<button type="submit">Modifier</button>';
    echo '</form>';
} // Sinon on revient sur la page des villes
else {
    header('Location: villes.php');
}