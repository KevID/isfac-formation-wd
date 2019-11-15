<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste des villes françaises</title>
    <style>
        td,
        th {
            border: 1px solid rgb(190, 190, 190);
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test_pdo', 'root', 'root', [PDO::ATTR_ERRMODE =>
                                                                                PDO::ERRMODE_EXCEPTION]);
    $requete = 'SELECT ville_id, ville_nom, ville_code_postal from villes_france_free LIMIT 20';
    $reponse = $bdd->query($requete);

    echo '<table>';
    echo '<tr>';
    echo '    <th>Ville</th>';
    echo '    <th>CP</th>';
    echo '    <th>Modifier</th>';
    echo '    <th>Supprimer</th>';
    echo '</tr>';

    foreach ($reponse as $value) {
        echo '<tr>';
        echo '    <td>' . $value['ville_nom'] . '</td>';
        echo '    <td>' . $value['ville_code_postal'] . '</td>';
        echo '    <td><a href="villes_update_cp.php?id=' . $value['ville_id'] . '">Modifier CP</a></td>';
        echo '    <td><a href="villes_delete.php?id=' . $value['ville_id'] . '">Supprimer</a></td>';
        echo '</tr>';
    }

    echo '</table>';

    $bdd = null;
} catch (PDOException $e) {
    print 'Erreur !: ' . $e->getMessage() . '<br/>';
    die();
}
?>
</body>
</html>