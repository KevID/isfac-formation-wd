<?php

// Récupération du formulaire
$genre = isset($_GET["genre"]) ? $_GET["genre"] : "";
$nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
$prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : "";
$cp = isset($_GET["cp"]) ? $_GET["cp"] : "";
$ville = isset($_GET["ville"]) ? $_GET["ville"] : "";
$paiement = isset($_GET["paiement"]) ? $_GET["paiement"] : "";
$cgv = isset($_GET["cgv"]) ? TRUE : FALSE;

// Déclaration des autres variables
$genreListe = Array("homme", "femme", "inconnu");
$paiementListe = Array("cb", "paypal");
$error = 0;

// Vérification du contenu du formulaire envoyé
if (!in_array($genre, $genreListe)) {
	echo "Veuillez renseigner le Genre.<br>";
	$error++;
}

if (empty($nom)) {
	echo "Veuillez renseigner votre nom.<br>";
	$error++;
}

if (empty($prenom)) {
	echo "Veuillez renseigner votre prénom.<br>";
	$error++;
}

if (empty($cp) OR !is_numeric($cp)) {
	echo "Veuillez renseigner le CP (format numérique).<br>";
	$error++;
}

if (empty($ville)) {
	echo "Veuillez renseigner votre ville.<br>";
	$error++;
}

if (!in_array($paiement, $paiementListe)) {
	echo "Veuillez choisir un mode de paiement.<br>";
	$error++;
}

if (!$cgv) {
	echo "Veuillez accepter les CGU en cochant la case.<br>";
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
}

?>