<?php
require_once 'components/permission.php';
$userRole = permission();   // All

// Initialisation de variables
$action = '';
$login = '';
$email = '';
$errorMessageLogin = null;
$errorMessageCreate = null;
$errorMessageEdit = null;

// Préparation de requêtes sql
require_once 'components/bdd.php';
$sqlLogin = $bdd->prepare("SELECT id_user, login, email, role FROM user WHERE login=:login AND password=:pwd");

function miniMaxi($string, $min = 1, $max = null)
{
    $error = false;
    if (strlen($string) < $min) {
        $error = true;
    }
    if ($max && strlen($string) > $max) {
        $error = true;
    }
    return !$error;
}

// Si déjà connecté
if ($userRole > 0 && isset($_SESSION['user_id']) && (int)$_SESSION['user_id'] > 0) {

    // On déconnecte l'utilisateur a sa demande en supprimant la session
    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        unset($_SESSION['user_id'], $_SESSION['user_login'], $_SESSION['user_role']);

        // On redirige l'utilisateur vers l'accueil
        header('Location: index.php');
        die();
    } // Si l'utilisateur est connecté et veut changer son mot de passe
    elseif (isset($_POST['action']) && $_POST['action'] === 'edit') {

        // Récupération des données
        $user_id = (int)$_SESSION['user_id'];
        $password1 = (isset($_POST['password1'])) ? $_POST['password1'] : '';
        $password2 = (isset($_POST['password2'])) ? $_POST['password2'] : '';

        if (miniMaxi($password1, 7, 50) && $password1 === $password2) {

            // On update le mot de passe de l'utilisateur
            $sqlEdit = $bdd->prepare("UPDATE user SET password=:pwd WHERE id_user=:user");
            $sqlEdit->bindParam(':pwd', $password1);
            $sqlEdit->bindParam(':user', $user_id);
            $sqlEdit->execute();

            header('Location: admin.php');
            die();
        } else {
            $action = 'edit';
            $errorMessageEdit = 'Veuillez vérifier votre mot de passe.';
        }
    } else {
        $action = 'edit';
    }
} // Si connexion d'un utilisateur
elseif (isset($_POST['action']) && $_POST['action'] === 'login') {

    // Récupération des données du formulaire
    $login = (isset($_POST['login'])) ? $_POST['login'] : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';

    if (miniMaxi($login, 1, 50) && miniMaxi($password, 7, 50)) {

        $sqlLogin->bindParam(':login', $login);
        $sqlLogin->bindParam(':pwd', $password);

        if ($sqlLogin->execute() && $sqlLogin->rowCount() === 1) {
            $row = $sqlLogin->fetch();
            $_SESSION['user_id'] = $row['id_user'];
            $_SESSION['user_login'] = $row['login'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_role'] = $row['role'];

            header('Location: admin.php');
            die();
        }
    } else {
        $errorMessageLogin = 'Veuillez vérifier vos identifiants de connexion.';
    }
} // Si création d'un utilisateur
elseif (isset($_POST['action']) && $_POST['action'] === 'create') {

    // Récupération des données du formulaire
    $login = (isset($_POST['login'])) ? $_POST['login'] : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $password1 = (isset($_POST['password1'])) ? $_POST['password1'] : '';
    $password2 = (isset($_POST['password2'])) ? $_POST['password2'] : '';

    $sqlLogin->bindParam(':login', $login);
    $sqlLogin->bindParam(':pwd', $password1);

    if ($sqlLogin->execute() && $sqlLogin->rowCount() === 1) {
        $errorMessageCreate = 'Vous avez déjà un compte utilisateur.';
    } elseif (miniMaxi($login, 1, 50) && miniMaxi($email, 6, 100)
        && miniMaxi($password1, 7, 50) && $password1 === $password2) {

        // On enregistre l'utilisateur avec le rôle éditeur (5)
        $sqlCreate = $bdd->prepare("INSERT INTO user (login, email, password, role)
                                    VALUES (:login, :email, :pwd, 5)");
        $sqlCreate->bindParam(':login', $login);
        $sqlCreate->bindParam(':email', $email);
        $sqlCreate->bindParam(':pwd', $password1);
        $sqlCreate->execute();

        $_SESSION['user_id'] = $bdd->lastInsertId();
        $_SESSION['user_login'] = $login;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_role'] = 5;

        header('Location: admin.php');
        die();

    } else {
        $errorMessageCreate = 'Veuillez vérifier vos informations.';
    }
}

$pageTitle = 'Utilisateur - Eco-Pratiques';
require_once 'components/header.php';
?>

<?php if ($action === 'edit'): ?>

    <h2>Edition du mot de passe :</h2>

    <?php if ($errorMessageEdit): ?>
        <div class="error"><?= $errorMessageEdit ?></div>
    <?php endif ?>

    <div>
        <form method="post" onSubmit="return verifEdit()">
            New Password : <input type="password" name="password1" id="password1"> Minimum 7 caractères<br>
            New Password : <input type="password" name="password2" id="password2"><br>
            <input type="hidden" name="action" value="edit">
            <button>Change</button>
        </form>
    </div>

<?php else: ?>

    <h2>Identification :</h2>

    <?php if ($errorMessageLogin): ?>
        <div class="error"><?= $errorMessageLogin ?></div>
    <?php endif ?>

    <div>
        <form method="post" onSubmit="return verifConnect()">
            Login : <input type="text" name="login" id="login" value="<?= $login ?>"><br>
            Password : <input type="password" name="password" id="password"> Minimum 7 caractères<br>
            <input type="hidden" name="action" value="login">
            <button>Connect</button>
        </form>
    </div>

    <hr>

    <h2>Création d'un compte utilisateur :</h2>

    <?php if ($errorMessageCreate): ?>
        <div class="error"><?= $errorMessageCreate ?></div>
    <?php endif ?>

    <div>
        <form method="post" onSubmit="return verifCreate()">
            Login : <input type="text" name="login" id="login-create" value="<?= $login ?>"><br>
            Email : <input type="text" name="email" id="email" value="<?= $email ?>"><br>
            Password : <input type="password" name="password1" id="password1"> Minimum 7 caractères<br>
            Ressaisir le password : <input type="password" name="password2" id="password2"><br>
            <input type="hidden" name="action" value="create">
            <button>Create</button>
        </form>
    </div>

<?php endif ?>

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
        var verifConnect = () => {
            var error = false;

            // Vérifie qu'une valeur est saisie et non nulle
            if (!getInput('login')) error = true;
            if (!getInput('password', 7)) error = true;

            return !error;
        }

        /* Fonction de vérification de la saisie du formulaire */
        var verifCreate = () => {
            var error = false;

            // Vérifie qu'une valeur est saisie et non nulle
            if (!getInput('login-create')) error = true;
            if (!getInput('email', 6)) error = true;

            // Vérifie que les 2 passwords sont identiques et contient minimum 7 caractères
            if (getInput('password1', 7) && document.getElementById('password1').value ===
                document.getElementById('password2').value) {
                displayError('password1', false);
                displayError('password2', false);
            } else {
                error = true;
                displayError('password1', true);
                displayError('password2', true);
            }

            return !error;
        }

        /* Fonction de vérification de la saisie du formulaire */
        var verifEdit = () => {
            var error = false;

            // Vérifie que les 2 passwords sont identiques et contient minimum 7 caractères
            if (getInput('password1', 7) && document.getElementById('password1').value ===
                document.getElementById('password2').value) {
                displayError('password1', false);
                displayError('password2', false);
            } else {
                error = true;
                displayError('password1', true);
                displayError('password2', true);
            }

            return !error;
        }
    </script>
<?php
require_once 'components/footer.php';
?>