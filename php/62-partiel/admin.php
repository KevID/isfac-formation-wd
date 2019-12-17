<?php
require_once 'components/permission.php';
$userRole = permission(1);   // Loged

$pageTitle = 'Admin Eco-Pratiques';
require_once 'components/header.php';
?>

    <h1>Admin :</h1>

    <div><a href="admin-articles.php" title="Create article">Créer une nouvelle pratique</a></div>

    <h2>Articles :</h2>
<?php
require_once 'components/bdd.php';

if ($userRole === 9) { // Si Admin, peut traiter tous les articles
    $sqlSelect = 'SELECT * FROM article ORDER BY id_article DESC';
} else { // Sinon que ceux de l'éditeur
    $sqlSelect = 'SELECT * FROM article WHERE id_user=\'' . $_SESSION['user_id'] . '\' ORDER BY id_article DESC';
}

$articles = $bdd->query($sqlSelect);

echo '<table>';
foreach ($articles AS $article) {
    echo '<tr>';
    echo '<td>' . $article['titre'] . '</td>';
    echo '<td><a href="admin-articles.php?action=edit&article_id=' . $article['id_article'] . '" title="modify">Modifier</a></td>';
    echo '<td><a href="admin-articles.php?action=dell&article_id=' . $article['id_article'] . '" title="delete">Supprimer</a></td>';
    echo '</tr>';
}
echo '</table>';
?>


    <hr>

    <h2>Paramètres du compte :</h2>

    <div><a href="user.php?action=edit" title="Change password">Modifier mon mot de passe</a></div>

<?php
require_once 'components/footer.php';
?>