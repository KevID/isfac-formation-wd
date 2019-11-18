<?php
$villeNom = (isset($_GET['villeNom'])) ? $_GET['villeNom'] : null;
$villeCP = (isset($_GET['villeCP'])) ? $_GET['villeCP'] : null;

if ($villeNom && $villeCP) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test_pdo', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                                    PDO::ERRMODE_EXCEPTION]);
        $requete = 'INSERT INTO villes_france_free (ville_nom, ville_code_postal) VALUES (\'' . $villeNom .
            '\', \'' . $villeCP . '\')';
        $reponse = $bdd->query($requete);

        echo "La nouvelle ville a bien été enregistrée.<br />";
        echo '<a href="villes.php">Retour à la liste des villes.</a>';

        $bdd = null;
        die();
    } catch (PDOException $e) {
        print 'Erreur !: ' . $e->getMessage() . '<br/>';
        die();
    }
}
?>

<form method="GET">
    <input type="text" name="villeNom" placeholder="Nom de la ville" value="<?= $villeNom ?>">
    <input type="text" name="villeCP" placeholder="Code Postal" value="<?= $villeCP ?>">
    <input type="submit" name="Envoyer">
</form>

