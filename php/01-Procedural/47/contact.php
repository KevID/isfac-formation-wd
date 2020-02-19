<?php
    $title = "Page contact";
    require_once "header.php";
?>

        <main>
            <h1>Ceci est le contenu de ma page  <?= basename($_SERVER['SCRIPT_NAME']); ?></h1>
        </main>

<?php
    require_once "footer.php";
?>