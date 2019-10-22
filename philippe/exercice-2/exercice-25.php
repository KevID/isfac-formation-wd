<?php
    // Vérifie que le formulaire a été envoyé en GET (minimum un paramètre existe dans l'URL)
    $submit = (isset($_GET["nom"]) OR isset($_GET["prenom"])) ? TRUE : FALSE;

    // Récupération du formulaire
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";             // Retourne la valeur si elle existe ou ""
    $prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : "";    // Retourne la valeur si elle existe ou ""
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire exemple 2.5</title>
    </head>
    <body>
<?php
    // Si $nom et $prenom ne sont pas vides
    if (!empty($nom) && !empty($prenom))
    { 
        echo "Merci " . $nom . " " . $prenom . ".";
    }
    
    // Sinon on affiche le formulaire
    else
    {
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