<?php
session_start();

// If user already connected
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}

$login = (isset($_POST['login'])) ? $_POST['login'] : '';
$pwd = (isset($_POST['pwd'])) ? $_POST['pwd'] : '';
$error = '';

if ($login && $pwd) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=exophp;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $sth = $bdd->prepare('SELECT id, login, password, img FROM users WHERE login = :login');
    $sth->bindValue(':login', $login, PDO::PARAM_STR);
    $sth->execute();
    $resultat = $sth->fetch();
    $hash = $resultat['password'];

    if (password_verify($pwd, $hash)) {

        $_SESSION['user_id'] = $resultat['id'];
        $_SESSION['login'] = $resultat['login'];
        $_SESSION['user_avatar'] = $resultat['img'];

        header('Location: index.php');
        exit();
    }

    $error = 'Login/Password invalide.';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login user page</title>
</head>

<body>

<p><?= $error ?></p>

<form enctype="multipart/form-data" method="POST">
    Login: <input type="text" name="login" value="<?= $login ?>"><br>
    Password: <input type="text" name="pwd"><br>
    <input type="submit" value="Connexion">
</form>

<p><a href="user_add.php" title="Créer un nouveau compte membre">Créer un nouveau compte</a></p>

</body>
</html>
