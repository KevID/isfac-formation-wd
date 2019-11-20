<?php
$method = (isset($_GET['method'])) ? $_GET['method'] : null;
$id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;

if ($method === 'fetchdata') {
    try {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=test_pdo',
            'root',
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $requete = 'SELECT ville_id, ville_nom, ville_code_postal from villes_france_free LIMIT 20';
        $reponse = $bdd->query($requete);
        /*
                foreach ($reponse as $value) {
                    echo '<tr>';
                    echo '    <td>' . $value['ville_nom'] . '</td>';
                    echo '    <td>' . $value['ville_code_postal'] . '</td>';
                    echo '    <td><a href="villes_update_cp.php?id=' . $value['ville_id'] . '">Modifier CP</a></td>';
                    echo '    <td><a href="villes_delete.php?id=' . $value['ville_id'] . '">Supprimer</a></td>';
                    echo '</tr>';
                }
        */
        $json = [];
        foreach ($reponse as $value) {
            $json[] = [
                'ville_id'          => $value['ville_id'],
                'ville_nom'         => $value['ville_nom'],
                'ville_code_postal' => $value['ville_code_postal']
            ];
        }
        $json = json_encode($json);

        return $json;
    } catch
    (PDOException $e) {
        return false;
    }
}