<?php
$genre = (isset($_POST['genre'])) ? $_POST['genre'] : null;
$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : null;
$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : null;

$birthYear = (isset($_POST['birth-year'])) ? $_POST['birth-year'] : null;
$birthMonth = (isset($_POST['birth-month'])) ? $_POST['birth-month'] : null;
$birthDay = (isset($_POST['birth-day'])) ? $_POST['birth-day'] : null;

$cgv = (isset($_POST['cgv'])) ? true : false;

function genreFormat($genre)
{
    if ($genre === 'mme') {
        $genreFormat = 'Madame';
    } elseif ($genre === 'mr') {
        $genreFormat = 'Monsieur';
    } else {
        $genreFormat = '';
    }
    return $genreFormat;
}

function gras($string)
{
    return '<span style="font-weight: bold">' . $string . '</span>';
}

function birthday($year, $month, $day)
{
    $month = ($month < 10) ? '0' . $month : $month;
    $day = ($day < 10) ? '0' . $day : $day;
    $birthday = new DateTime($year . '-' . $month . '-' . $day);

    $now = new DateTime('now');
    $interval = date_diff($now, $birthday);

    return $interval->format('%Y');
}

function cgvFormat($cgv)
{
    if ($cgv === true) {
        $txt = 'Vous avez coché les CGV';
    } else {
        $txt = 'Vous n\'avez pas coché les CGV';
    }
    return $txt;
}

if ($genre && $lastname && $firstname) {
    echo genreFormat($genre) . ' ' . gras($lastname) . ' ' . $firstname . '<br>';
    echo 'Vous avez ' . birthday($birthYear, $birthMonth, $birthDay) . ' ans.<br>';
    echo cgvFormat($cgv);
    echo '<br><br>';
    echo '<hr>';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire avec fonction PHP</title>
</head>
<body>
<form method="POST">
    <div>
        <span>GENRE: </span>
        <input type="radio" id="mme" name="genre" value="mme">
        <label for="mme">Mme</label>
        <input type="radio" id="mr" name="genre" value="mr">
        <label for="mr">Mr</label>
    </div>
    <div>
        <span>NOM: </span>
        <input type="text" name="lastname" placeholder="Lastname">
    </div>
    <div>
        <span>PRENOM: </span>
        <input type="text" name="firstname" placeholder="Firstname">
    </div>
    <div>
        <span>DATE DE NAISSANCE: </span>
        <select name="birth-day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo '        <option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <select name="birth-month">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '        <option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <select name="birth-year">
            <?php
            for ($i = date('Y'); $i >= 1900; $i--) {
                echo '        <option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <input type="checkbox" id="cgv" name="cgv">
        <label for="cgv">Veuillez accepter les CGV.</label>
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
