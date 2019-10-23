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
$error = FALSE;

// Vérification du contenu du formulaire envoyé
if (!in_array($genre, $genreListe)) {
	echo "Veuillez renseigner le Genre.<br>";
	$error = TRUE;
}

if (empty($nom)) {
	echo "Veuillez renseigner votre nom.<br>";
	$error = TRUE;
}

if (empty($prenom)) {
	echo "Veuillez renseigner votre prénom.<br>";
	$error = TRUE;
}

if (empty($cp) OR !is_numeric($cp)) {
	echo "Veuillez renseigner le Code Postal (format numérique).<br>";
	$error = TRUE;
}

if (empty($ville)) {
	echo "Veuillez renseigner votre ville.<br>";
	$error = TRUE;
}

if (!in_array($paiement, $paiementListe)) {
	echo "Veuillez choisir un mode de paiement.<br>";
	$error = TRUE;
}

if (!$cgv) {
	echo "Veuillez accepter les CGV en cochant la case.<br>";
	$error = TRUE;
}

// Si aucune erreur dans le formulaire alors on affiche le résultat
if (!$error) {

	// On formate le texte du genre et du paiement
	$genreFormate = strtr($genre, array("homme" => "Monsieur", "femme" => "Madame", "inconnu" => ""));
	$paiementFormate = strtr($paiement, array("cb" => "Carte Bancaire", "paypal" => "Paypal"));	

	// On termine par afficher le texte
	echo "Bonjour $genreFormate $nom $prenom de $ville ($cp).<br>";
	echo "Vous avez fait le choix de payez par $paiementFormate.";
}

?>