<?php
if (isset($_COOKIE['firstname'])) {
    echo "Hello " . $_COOKIE['firstname'];
} else {
    ?>
    <form action="identification.php" method="GET">
        <input type="text" name="firstname">
        <input type="submit" name="Connecter">
    </form>
    <?php
}
?>