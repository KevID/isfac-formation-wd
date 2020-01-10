<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}

$login = (isset($_POST['login'])) ? $_POST['login'] : '';
$pwd = (isset($_POST['pwd'])) ? $_POST['pwd'] : '';

if ($login && $pwd && isset($_FILES['file']['size']) && $_FILES['file']['size'] > 0) {

    $fileName = preg_replace('/[^a-z0-9\._-]+/', '-', date('Y-m-d') . '-' . strtolower($_FILES['file']['name']));
    if (move_uploaded_file($_FILES['file']['tmp_name'], 'avatars/' . $fileName)) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=exophp;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

        $sth = $bdd->prepare('INSERT INTO users (login, password, img) VALUES (:login, :pwd, :img)');
        $sth->bindValue(':login', $login, PDO::PARAM_STR);
        $sth->bindValue(':pwd', $pwdHash, PDO::PARAM_STR);
        $sth->bindValue(':img', $fileName, PDO::PARAM_STR);
        $sth->execute();

        $_SESSION['user_id'] = $sth->lastInsertId();
        $_SESSION['login'] = $login;
        $_SESSION['user_avatar'] = $fileName;
        
        header('Location: index.php');
        exit();

    } else {
        echo 'Une erreur est intervenue, veuillez recommencer ou informer un administrateur.';
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

<form enctype="multipart/form-data" method="POST">
    Login: <input type="text" name="login" value="<?= $login ?>"><br>
    Password: <input type="text" name="pwd"><br>
    Votre image avatar : <input type="file" name="file" accept=".jpg,.png,.gif" multiple><br>
    <input type="submit" value="Créer mon compte">
</form>

</body>
</html>
