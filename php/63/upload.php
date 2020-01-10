<?php

if ($_FILES) {

    $total = count($_FILES['file']['name']);

    // Loop through each file
    for ($i = 0; $i < $total; $i++) {
        $file_name = preg_replace('/[^a-z0-9\._-]+/', '-', strtolower($_FILES['file']['name'][$i]));
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], date('Y-m-d') . '-' . $file_name)) {
            echo 'Le fichier est valide, et a été téléchargé avec succès.';
        } else {
            echo 'Attaque potentielle par téléchargement de fichiers.';
        }

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
    Envoyez ce fichier : <input type="file" name="file[]" accept=".jpg,.png" multiple><br>
    <input type="submit" value="Envoyer le fichier">
</form>

</body>
</html>
