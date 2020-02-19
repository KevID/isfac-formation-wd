<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: ok.php');
}

$login = (isset($_POST['login'])) ? $_POST['login'] : null;
$pwd = (isset($_POST['pwd'])) ? $_POST['pwd'] : null;

if ($login && $pwd) {
    require_once 'bdd.php';

    $stmt = $bdd->prepare("SELECT id FROM users WHERE login=:login AND password=:pwd");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':pwd', $pwd);

    if ($stmt->execute() && $stmt->rowCount() === 1) {
        $row = $stmt->fetch();
        $_SESSION['user_id'] = $row['id'];
        header('location: ok.php');
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML/PHP/JS - Exercice 61</title>
</head>
<body>
<h1>Identification</h1>
<form method="post" action="index.php" onSubmit="return formVerif();">
    LOGIN: <input type="text" name="login" id="login"><br>
    PASSWORD: <input type="password" name="pwd" id="pwd"><br>
    <button type="submit">OK</button>
</form>

<script>
    var displayError = id => {
        var el = document.getElementById(id)
        if (el.value.length) {
            el.style.borderColor = 'black'
            return false
        } else {
            el.style.borderColor = 'red'
            return true
        }
    }

    var formVerif = () => {
        var error = false
        if (displayError('login')) error = true
        if (displayError('pwd')) error = true

        return !error
    }
</script>
</body>
</html>