<?php
require_once 'components/permission.php';
$userRole = permission();   // All

$pageTitle = 'Accueil Eco-Pratiques';
require_once 'components/header.php';

$articleId = (isset($_GET['id'])) ? (int)$_GET['id'] : 0;
$idBefore = $idAfter = 0;
if ($articleId === 0) {
    // On redirige l'utilisateur vers l'accueil si pas précisé d'id article
    header('Location: index.php');
    die();
}
?>

    <h1>Vos bonnes pratiques :</h1>

<?php
require_once 'components/bdd.php';
$sqlSelect = 'SELECT id_article, titre, description, date, login 
                FROM article a
                INNER JOIN user u ON a.id_user = u.id_user';

$articles = $bdd->query($sqlSelect);

echo '<figure>';
foreach ($articles AS $article) {
    if ($article['id_article'] == $articleId) {
        echo '<h2>' . $article['titre'] . '</h2>';
        echo '<figcaption>' . $article['description'] . '</figcaption><br>';
        echo '<div>Publié par ' . $article['login'] . '<br>Le ' . $article['date'] . '</div>';
        echo '</tr>';
    } else {
        // Récupération id précédant et suivant
    }
}
echo '</figure>';

if ($idBefore > 0) echo '<a href="article.php?id=' . $idBefore . '">Précédent</a>';
if ($idAfter > 0) echo '<a href="article.php?id=' . $idAfter . '">Suivant</a>';
?>

<?php
require_once 'components/footer.php';
?>