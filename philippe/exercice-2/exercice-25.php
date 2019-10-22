<?php
// Récupération du formulaire
$submit = (isset($_GET["nom"]) OR isset($_GET["prenom"])) ? TRUE : FALSE; // Vérifie que le formulaire a été envoyé
$nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
$prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : "";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire exemple 2.5</title>
    </head>
    <body>
<?php
    if (!empty($nom) && !empty($prenom)) { 
        echo "Merci " . $nom . " " . $prenom . ".";
    } else {
?>
        <form methode="get">
            <p>
                NOM (*):
                <input type="text" name="nom" id="nom" value="<?php echo $nom ?>">
                <?php if ($submit && empty($nom)) { echo "Veuillez remplir le nom."; } ?>
            </p>
            <p>
                PRENOM (*):
                <input type="text" name="prenom" id="prenom" value="<?php echo $prenom ?>">
                <?php if ($submit && empty($prenom)) { echo "Veuillez remplir le prénom."; } ?>
            </p>
            <p>
                <button type="submit">OK</button>
            </p>

        </form>
<?php
    }
?>
    </body>
</html>