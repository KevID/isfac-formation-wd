<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: user_login.php');
    exit();
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=exophp;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_FILES['file']['size']) && $_FILES['file']['size'] > 0) {
    $fileName = preg_replace('/[^a-z0-9\._-]+/', '-', date('Y-m-d') . '-' . strtolower($_FILES['file']['name']));

    if (move_uploaded_file($_FILES['file']['tmp_name'], 'avatars/' . $fileName)) {

        $sth = $bdd->prepare('UPDATE users SET img=:img WHERE id=:id ');
        $sth->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
        $sth->bindValue(':img', $fileName, PDO::PARAM_STR);
        $sth->execute();

        unlink('avatars/' . $_SESSION['user_avatar']);
        $_SESSION['user_avatar'] = $fileName;

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
    <title>User page</title>
</head>

<body>

Bonjour <?= $_SESSION['login'] ?><br>
<img src="avatars/<?= $_SESSION['user_avatar'] ?>" width="100" alt="Avatar de <?= $_SESSION['login'] ?>">

<form enctype="multipart/form-data" method="POST">
    Nouvel avatar : <input type="file" name="file" accept=".jpg,.png,.gif" multiple><br>
    <input type="submit" value="Changer mon avatar">
</form>

<p><a href="user_logout.php" title="Se déconnecter">Me déconnecter</a></p>

</body>
</html>
