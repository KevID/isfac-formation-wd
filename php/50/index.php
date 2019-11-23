<?php
session_start();

if (isset($_SESSION['loged']) && $_SESSION['loged'] === true) {
    header('Location: info.php');
} else {
    $login = (isset($_POST['login'])) ? $_POST['login'] : null;
    $password = (isset($_POST['password'])) ? $_POST['password'] : null;
    $_SESSION['loged'] = false;

    if ($login === 'admin' && $password === 'admin') {
        $_SESSION['loged'] = true;
        header('Location: info.php');
    } elseif ($login || $password) {
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
        <span style="color: red"><?= $error ?></span>
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