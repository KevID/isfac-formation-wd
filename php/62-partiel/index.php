<?php
require_once 'components/permission.php';
$userRole = permission();   // All

$pageTitle = 'Accueil Eco-Pratiques';
require_once 'components/header.php';
?>

    <h1>Vos bonnes pratiques :</h1>

<?php
require_once 'components/bdd.php';
$sqlSelect = 'SELECT * FROM article ORDER BY date DESC LIMIT 3';

$articles = $bdd->query($sqlSelect);

echo '<figure>';
foreach ($articles AS $article) {
    echo '<h2>' . $article['titre'] . '</h2>';
    echo '<figcaption>' . $article['description'] . '</figcaption>';
    echo '<span><a href="article.php?id=' . $article['id_article'] . '" title="Read">LIRE</a></span>';
    echo '</tr>';
}
echo '</figure>';
?>

<?php
require_once 'components/footer.php';
?>