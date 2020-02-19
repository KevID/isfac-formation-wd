<?php
if (isset($_COOKIE['identification'])) {
    $identification = explode("|", $_COOKIE['identification']);
    echo "Hello " . $identification['0'] . ' ' . $identification['1'];
} else {
    ?>
    <form action="identification.php" method="GET">
        <input type="text" name="firstname" spaceholder="Firstname">
        <input type="text" name="lastname" spaceholder="Lastname">
        <input type="submit" name="Connecter">
    </form>
    <?php
}
?>