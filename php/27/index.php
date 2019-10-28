<form methode="get">
    <label for="age">Quel age as-tu ?</label>
    <input type="text" name="age" id="age">
    <br>
    <button type="submit">Envoyer</button>
</form>

<?php
    $age = $_GET['age'];
    switch($age) {
        case NULL :
            echo "Veuillez renseigner votre age ci-dessus.";
            break;
        case ($age == 0) :
            echo "Veuillez renseigner votre age ci-dessus.";
            break;
        case ($age < 15):
            echo "Désolé accès interdit";
            break;
        case ($age > 65):
            echo "Désolé ceci n'est pas un thé dansant";
            break;
        default:
            echo "Welcome";
    }
?>