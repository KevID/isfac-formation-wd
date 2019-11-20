<?php
session_start();
$login = (isset($_POST['login'])) ? $_POST['login'] : null;
$password = (isset($_POST['password'])) ? $_POST['password'] : null;

if (($login === 'admin' && $password === 'admin') || (isset($_SESSION['loged']) && $_SESSION['loged'] === true)) {
    $_SESSION['loged'] = true;
    //    echo 'Tu es connecté ' . $login;
    header('Location: info.php');

} else {
    $_SESSION['loged'] = false;

    if (($login || $password)) {
        $error = 'Veuillez vérifier vos identifiants de connexion.';
    }
    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta doctype="UTF-8">
        <title>Connexion</title>
    </head>
    <body>
    <?php if (isset($error)): ?>
        <span><?= $error ?></span>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="login" value="<?= $login ?>" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">OK</button>
    </form>
    </body>
    </html>

    <?php
}
?>