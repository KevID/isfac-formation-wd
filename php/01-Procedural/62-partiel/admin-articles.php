<?php
require_once 'components/permission.php';
$userRole = permission(1);   // Loged

// Initialisation de variables
$action = 'add';
$actionButton = 'Ajouter';
$errorMessage = '';
$articleId = 0;
$title = '';
$description = '';
$date = '';

// Si l'action vient d'un lien admin
if (isset($_POST['action'])) {
    $articleId = (isset($_POST['article_id'])) ? (int)$_POST['article_id'] : 0;
    $title = (isset($_POST['title'])) ? $_POST['title'] : '';
    $description = (isset($_POST['description'])) ? $_POST['description'] : '';
    $date = (isset($_POST['date'])) ? $_POST['date'] : '';

    // Si action ajouter
    if ($_POST['action'] === 'add') {
        if ($title && $description && $date) {
            // On enregistre l'article
            require_once 'components/bdd.php';
            $sqlAdd = $bdd->prepare("INSERT INTO article (id_user, titre, description, date)
                                    VALUES (:user, :title, :desc, :date)");
            $sqlAdd->bindParam(':user', $_SESSION['user_id']);
            $sqlAdd->bindParam(':title', $title);
            $sqlAdd->bindParam(':desc', $description);
            $sqlAdd->bindParam(':date', $date);
            $sqlAdd->execute();

            header('Location: admin.php');
            die();

        } else {
            $errorMessage = 'Tous les champs doivent être renseignés';
        }

    } // Sinon si action modifier
    elseif ($_POST['action'] === 'edit' && $articleId > 0) {
        if ($title && $description && $date) {
            // On met à jour l'article
            require_once 'components/bdd.php';

            if ($userRole === 9) { // Si Admin, peut modifier tous les articles
                $sqlAdd = $bdd->prepare("UPDATE article SET titre=:title, description=:desc, date=:date WHERE id_article=:article");
            } else {
                $sqlAdd = $bdd->prepare("UPDATE article SET titre=:title, description=:desc, date=:date WHERE id_article=:article AND id_user=:user");
                $sqlAdd->bindParam(':user', $_SESSION['user_id']);
            }

            $sqlAdd->bindParam(':article', $articleId);
            $sqlAdd->bindParam(':title', $title);
            $sqlAdd->bindParam(':desc', $description);
            $sqlAdd->bindParam(':date', $date);
            $sqlAdd->execute();

            header('Location: admin.php');
            die();

        } else {
            $action = 'edit';
            $actionButton = 'Modifier';
            $errorMessage = 'Tous les champs doivent être renseignés';
        }
    }
} // Sinon si l'action vient du formulaire
elseif (isset($_GET['action'])) {
    $articleId = (isset($_GET['article_id'])) ? (int)$_GET['article_id'] : 0;

    // On affiche le formulaire en mode edit
    if ($_GET['action'] === 'edit' && $articleId > 0) {
        require_once 'components/bdd.php';

        if ($userRole === 9) { // Si Admin, peut modifier tous les articles
            $sqlEdit = $bdd->prepare("SELECT * FROM article WHERE id_article=:article");
        } else {
            $sqlEdit = $bdd->prepare("SELECT * FROM article WHERE id_article=:article AND id_user=:user");
            $sqlEdit->bindParam(':user', $_SESSION['user_id']);
        }
        $sqlEdit->bindParam(':article', $articleId);

        if ($sqlEdit->execute() && $sqlEdit->rowCount() === 1) {
            $row = $sqlEdit->fetch();
            $title = $row['titre'];
            $description = $row['description'];
            $date = $row['date'];

            $action = 'edit';
            $actionButton = 'Modifier';

        } // Sinon l'article pas trouvé, on revient à l'admin
        else {
            header('Location: admin.php');
            die();
        }

    } // Sinon si l'action est delete, on supprime l'article
    elseif ($_GET['action'] === 'dell' && $articleId > 0) {
        // On supprime l'article
        require_once 'components/bdd.php';

        if ($userRole === 9) { // Si Admin, peut supprimer tous les articles
            $sqlAdd = $bdd->prepare("DELETE FROM article WHERE id_article=:article");
        } else {
            $sqlAdd = $bdd->prepare("DELETE FROM article WHERE id_article=:article AND id_user=:user");
            $sqlAdd->bindParam(':user', $_SESSION['user_id']);
        }

        $sqlAdd->bindParam(':article', $articleId);
        $sqlAdd->execute();

        header('Location: admin.php');
        die();
    }
}

$pageTitle = 'Admin Eco-Pratiques - Gestion articles';
require_once 'components/header.php';
?>

<?php if ($errorMessage): ?>
    <div class="error"><?= $errorMessage ?></div>
<?php endif ?>

    <div>
        <form method="post" onSubmit="return verifConnect()">
            Titre : <input type="text" name="title" id="title" value="<?= $title ?>"><br>
            Description : <textarea name="description" id="description"><?= $description ?></textarea><br>
            Date : <input type="date" name="date" id="date" value="<?= $date ?>"
                          pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"><br>
            <input type="hidden" name="article_id" value="<?= $articleId ?>">
            <input type="hidden" name="action" value="<?= $action ?>">
            <button><?= $actionButton ?></button>
        </form>
    </div>

    <script>
        /* Fonction pour afficher les erreurs */
        var displayError = (idName, isError = true) => {
            if (isError) {
                document.getElementById(idName).style.outline = '1px solid red';
            } else {
                document.getElementById(idName).style.outline = null;
            }
        }

        /* Fonction pour vérifier qu'un champ contient une valeur et en option un nombre de caractères minimum */
        var getInput = (idName, nbCharMini = 1) => {
            if (document.getElementById(idName).value.length < nbCharMini) {
                displayError(idName, true);
                return false;
            } else {
                displayError(idName, false);
                return true;
            }
        }

        /* Fonction de vérification de la saisie du formulaire */
        var verifForm = () => {
            var error = false;

            // Vérifie qu'une valeur est saisie et non nulle
            if (!getInput('title')) error = true;
            if (!getInput('description')) error = true;
            if (!getInput('date', 10)) error = true;

            return !error;
        }
    </script>

<?php
require_once 'components/footer.php';
?>