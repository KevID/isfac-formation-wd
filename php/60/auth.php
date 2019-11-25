<?php
session_start();

if (isset($_SESSION['level'])) {    // Si déjà connecté
    unset($_SESSION['level']);
    header('Location: index.php');
    exit;
}

$login = (isset($_POST['login'])) ? $_POST['login'] : null;
$password = (isset($_POST['password'])) ? $_POST['password'] : null;

require_once 'bdd.php';
$requete = 'SELECT * from users WHERE login = "' . $login . '" AND password = "' . $password . '"';
$reponse = $bdd->query($requete);

if ($reponse->rowCount() === 1) {
    $row = $reponse->fetch();
    $_SESSION['level'] = $row['level'];
    header('Location: index.php');
    exit;
} elseif ($login || $password) {
    $error = 'Veuillez vérifier vos identifiants de connexion.';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta doctype="UTF-8">
    <title>Connexion</title>
</head>
<body>
<?php if (isset($error)): ?>
    <div style="color: red"><?= $error ?></div>
<?php endif; ?>
<form method="post">
    Login <input type="text" name="login"><br><br>
    Password <input type="text" name="password"><br><br>
    <input type="submit" value="Connexion">
</form>
</body>
</html>