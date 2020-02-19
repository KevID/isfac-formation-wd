<?php

spl_autoload_register('autoloader');

function autoloader($classe)
{
    require_once 'classes/' . $classe . '.php';
}

$db = new PDO('mysql:host=localhost;dbname=biens-immobiliers', 'root', 'root');

$bienManager = new BienManager($db);
$typeBienManager = new TypeBienManager($db);
$agenceManager = new AgenceManager($db);
$proprietaireManager = new ProprietaireManager($db);
$prestationManager = new PrestationManager($db);
$bienPrestationsManager = new BienPrestationsManager($db);
$coproprietaireManager = new CoproprieteManager($db);

$bien = $bienManager->get('mand02');
$typeBien = $typeBienManager->get($bien->getIdTypeBien());
$agence = $agenceManager->get($bien->getIdAgence());
$proprietaire = $proprietaireManager->get($bien->getIdClient());
$bienPrestations = $bienPrestationsManager->getPrestationsFromBien($bien->getIdBien());
$coproprietaires = $coproprietaireManager->getProprietairesFromBien($bien->getIdBien());

//var_dump($bien, $typeBien, $agence, $proprietaire);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercice Biens-Immobiliers</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row mt-5">
        <div class="col-4 border">
            <p>Référence : <b><?= $bien->getIdBien() ?></b></p>
            <p>&nbsp;</p>
            <p>Prix : <?= $bien->getPrixBien() ?> €</p>
        </div>
        <div class="col-4 border">
            <p><b>Type de bien :<br><?= $typeBien->getNomTypeBien() ?></b></p>
            <p>Surface : <?= $bien->getSurfaceBien() ?> m<sup>2</sup></p>
            <p>Terrain : <?= $bien->getSurfaceTerrain() ?> m<sup>2</sup></p>
        </div>
        <div class="col-4 border">
            <p><b>Localisation :<br><?= $bien->getCpBien() ?>  <?= $bien->getVilleBien() ?></b></p>
            <p><?= $bien->getAdresseBien() ?></p>
            <p><?= $bien->getNombrePieces() ?> pièces</p>
        </div>
    </div>

    <div class="row">
        <div class="col-4 border">
            <p><b>Chauffage</b></p>
            <p><?= $bien->getChauffage() ?></p>
        </div>
        <div class="col-8 border">
            <p><b>Commentaires</b></p>
            <p><?= $bien->getCommentaires() ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-4 border">
            <p><b>Prestations</b></p>
            <?php foreach ($bienPrestations AS $bienPrestation): ?>
                <p>
                    <?= $prestationManager->get($bienPrestation->getIdPrestation())->getNomPrestation() ?> :
                    <?= $bienPrestation->getNombre() ?>
                </p>
            <?php endforeach ?>
        </div>
        <div class="col-4 border">
            <p><b>Taxes et charges</b></p>
            <p>Taxe foncière : <?= $bien->getTaxeFonciere() ?> €</p>
            <p>Charges : <?= $bien->getTaxeFonciere() ?> €/mois</p>
        </div>
        <div class="col-4 border">
            <p><b>Proprietaire / Coproprietaires</b></p>
            <?php foreach ($coproprietaires AS $coproprietaire): ?>
                <p>
                    <?= $proprietaireManager->get($coproprietaire->getIdClient())->getNomClient() ?>
                    <?= $proprietaireManager->get($coproprietaire->getIdClient())->getPrenomClient() ?> :
                    <?= $coproprietaire->getParts() ?> %
                </p>
            <?php endforeach ?>
        </div>
    </div>

</div>
</body>
</html>
