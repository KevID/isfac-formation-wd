<?php
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
if ($page < 1) {
    $page = 1;
}

$step = (isset($_GET['step'])) ? (int)$_GET['step'] : 10;
if ($step < 0) {
    $step = 10;
}

?>
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
    $requete = 'SELECT ville_id, ville_nom, ville_code_postal from villes_france_free LIMIT ' . (($page - 1) * $step) .
        ', ' . $step . '';
    $reponse = $bdd->query($requete);

    // Précédent
    if ($page > 1) {
        echo '<a href="?page=' . ($page - 1) . '&step=' . $step . '">Précédent</a>';
    } else {
        echo 'Précédent';
    }

    echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';

    // Suivant
    echo ' <a href="?page=' . ($page + 1) . '&step=' . $step . '">Suivant</a><br><br>';
    ?>

    <form method="GET">
        <input type="hidden" name="page" value="<?= $page; ?>">
        <select name="step">
            <?php
            for ($i = 10; $i <= 100; $i = $i + 10) {
                if ($step == $i) {
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                } else {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            }
            ?>
        </select>
        <input type="submit" value="Change">
    </form>
    <br>
    <a href="villes_add.php" title="Ajouter une nouvelle ville">Ajouter une nouvelle ville</a>
    <br><br>

    <?php

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