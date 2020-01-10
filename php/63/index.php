<?php
$login = (isset($_GET['login'])) ? $_GET['login'] : '';
$pwd = (isset($_GET['pwd'])) ? $_GET['pwd'] : '';

if ($login && $pwd) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=exophp;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    /*

    $sth = $bdd->prepare('SELECT * FROM users WHERE login = :login AND password = :pwd');
    $sth->bindValue(':login', $login, PDO::PARAM_STR);
    $sth->bindValue(':pwd', $pwd, PDO::PARAM_STR);
    $sth->execute();

    if ($sth->fetch()) {
        echo "Connecté !";
    }
    */

    //echo password_hash($pwd, PASSWORD_ARGON2I);
    $sth = $bdd->prepare('SELECT id, login, password FROM users WHERE login = :login');
    $sth->bindValue(':login', $login, PDO::PARAM_STR);
    $sth->execute();
    $resultat = $sth->fetch();
    $hash = $resultat['password'];
    if (password_verify($pwd, $hash)) {
        echo "Connecté !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test requêtes préparées</title>
</head>

<body>

<form method="GET">
    Login: <input type="text" name="login"><br>
    Password: <input type="text" name="pwd"><br>
    <input type="submit" name="Connecter">
</form>

</body>
</html>
