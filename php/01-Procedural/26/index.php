<?php

$genre = "M.";  // M. / Mme

switch($genre) {
    case "M.":
        echo "Bonjouer Monsieur";
        break;
    case "Mme":
        echo "Bonour Madame";
        break;
    default:
        echo "Veuillez choisir un genre";
}