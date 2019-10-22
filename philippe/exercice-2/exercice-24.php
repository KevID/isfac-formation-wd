<?php

// Récupération du formulaire
$genre = isset($_GET["genre"]) ? $_GET["genre"] : "";
$nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
$prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : "";
$cp = isset($_GET["cp"]) ? $_GET["cp"] : "";
$ville = isset($_GET["ville"]) ? $_GET["ville"] : "";
$paiement = isset($_GET["paiement"]) ? $_GET["paiement"] : "";
$cgv = isset($_GET["cgv"]) ? TRUE : FALSE;

$error = 0;
$genres = Array("homme", "femme", "inconnu");

if (!in_array($genre, $genres)) {
	echo "Veuillez corriger le Genre.<b>";
	$error++;
}

if (empty($cp) OR !is_int($cp)) {
	echo "Veuillez corriger le CP.<b>";
	$error++;
}

if ($cgv && $error == 0) {

	if ($genre == "homme") { echo "Bonjour Monsieur";}
	if ($genre == "femme") { echo "Bonjour Madame";}
	if ($genre == "inconnu") { echo "Bonjour Inconnu";}
	echo "<br>";

	echo $nom." ".$prenom." de ".$ville.".<br>";

	if ($paiement == "cb") { echo "Vous payez en CB"; }
	
	if ($paiement == "paypal") { echo "Vous payez par: Paypal"; }


} else {
	echo "Veuillez valider les CGU.";
}

?>