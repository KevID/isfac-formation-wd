<?php

$villes = array('poitiers'=>'86000','Chateauroux'=>'36000','Orléans'=>'45000','Tours'=>'37000');
echo "<ul>\n";
foreach ($villes AS $ville=>$cp)
{
    echo "<li>La ville de $ville a le code postal $cp.</li>\n";
}
echo "</ul>\n";

echo "\n<br><hr><br>\n";

$villes = array('poitiers'=>'86000','Chateauroux'=>'36000','Orléans'=>'45000','Tours'=>'37000');
//$i = 0;
echo "<ul>\n";
foreach ($villes AS $ville=>$cp)
{
    //$i++;
    $i = array_search($ville, array_keys($villes)); // Remplace la technique de $i++
    $color = ($i%2) ? "green" : "blue";
    echo "<li style=\"color: $color\">La ville de $ville a le code postal $cp.</li>\n";
}
echo "</ul>\n";

echo "\n<br><hr><br>\n";

$array = array( 'fruits' => array( 'pommes', 'tomates', 'abricots' ),
                'animaux' => array( 'chats', 'chiens' ),
                'pays' => array( 'Suisse', 'France', 'Angleterre' ) );

foreach ($array AS $type=>$typeValeurs)
{
    echo "<h1>$type</h1>\n";
    echo "<ul>\n";
    foreach ($typeValeurs AS $typeValeur)
    {
        echo "<li>$typeValeur</li>\n";
    }
    echo "</ul>\n";
}

echo "\n<br><hr><br>\n";


$tab = array("y"=>array("ert"=>0,"po"=>1),"a"=>array("gyh"=>2,"z"=>array("xyz"=>3)));

var_dump($tab);

echo $tab['a']['z']['xyz'];



echo "\n<br><hr><br>\n";



$tab = array("y"=>array("ert"=>0,"po"=>1),"a"=>array("gyh"=>2,"z"=>array("xyz"=>3)));

// J'ai identifié que pour afficher la valeur "3", il me faut parcourir des Array imbriqués
// Il me faut aller dans la valeur de la clé "a", puis dans la valeur de la clé "z", puis dans la valeur de la clé "xyz".

// Je parcoure le array $tab
// Je mets les clés dans $tabKeyNiv1 et les valeurs dans $tabValNiv1
foreach ($tab AS $tabKeyNiv1=>$tabValNiv1)
{
    // J'ai besoin d'aller que dans la valeur ayant pour clé "a"
    if ($tabKeyNiv1 == "a")
    {
        // Ma clé "a" a pour valeur $tabValNiv1 un Array qu'il me faut explorer par un nouveau Foreach
        // Je mets les clés dans $tabKeyNiv2 et les valeurs dans $tabValNiv2
        foreach ($tabValNiv1 AS $tabKeyNiv2=>$tabValNiv2)
        {
            // J'ai besoin d'aller que dans la valeur ayant pour clé "z"
            if ($tabKeyNiv2 == "z")
            {
                // Ma clé "z" a pour valeur $tabValNiv2 un Array qu'il me faut explorer par un nouveau Foreach
                // Je mets les clés dans $tabKeyNiv3 et les valeurs dans $tabValNiv3
                foreach ($tabValNiv2 AS $tabKeyNiv3=>$tabValNiv3)
                {
                    // J'ai besoin d'aller que dans la valeur ayant pour clé "xyz"
                    if ($tabKeyNiv3 == "xyz")
                    {
                        // Ma clé "xyz" a pour valeur $tabValNiv3 le nombre entier "3" et pas un Array, je peux donc afficher la valeur
                        echo "La valeur est ".$tabValNiv3;
                    } 
                }
            }
        }
    }
}



echo "\n<br><hr><br>\n";



// Je crée un Array $couleurs ayant pour valeurs bleu, rouge, vert.
$couleurs = array("bleu","rouge","vert");

// Je déclare une nouvelle variable $newArray pour le moment vide qui serra un Array.
$newArray = array();

// Dans mon array $Couleurs, je vais parcourir toutes les valeurs que je mets dans la variable $couleur
foreach ($couleurs AS $couleur)
{
    // J'enregistre chaque couleur à la fois comme clé et comme valeur dans mon nouveau Array $newArray
    $newArray[$couleur] = $couleur;
}
// J'affiche mon nouveau array $newArray
print_r($newArray);



echo "\n<br><hr><br>\n";



$keys = array("a"=>"prems","b"=>"deux","c"=>"trois");
$values = array("f1val"=>"veau","f2val"=>"vache","f3val"=>"cochon");

// Je constate que seules les valeurs de $keys et $values apparaissent dans $final
// Et les clés de $keys et $values ne sont pas identiques, je ne pense donc pas les utiliser.

// Je vais parcourir chaque valeur de $keys, en me souvenant de sa position dans son Array
// Et l'enregistrer comme clé de mon nouveau array $final.

// Je vais ensuite aller chercher la valeur dans $values à la même position
// et je l'enregistre comme valeur dans mon array $final.

// J'initialise le compteur de position de $keys
$keysPosition = 0;
// Je déclare une nouvelle variable $final pour le moment vide qui serra un Array.
$newArray = array();
// Je parcoure tout mon Array $keys et mets les valeurs dans $keysValue
foreach ($keys AS $keysValue)
{
    // J'initialise le compteur de position de $values
    // Je le place ici car il doit être à 0 à chaque nouvelle boucle de $keys
    $valuesPosition = 0;
    // Je parcoure tout mon Array $values pour trouver la valeur qui est à la même position que celui de $keys
    foreach ($values AS $valuesValue)
    {
        // Si je suis à la même position entre les Array $keys et $values
        if ($keysPosition == $valuesPosition)
        {
            // J'enregistre mon nouveau Array $final
            // Je mets la valeur de $keys comme clé de $final
            // Je mets la valeur de $values comme valeur de $final
            $final[$keysValue] = $valuesValue;
        }
        // J'ai terminé la position courante dans ma boucle de $values
        // Je passe donc à la position (valeur) suivante en incrémentant mon compteur
        $valuesPosition++;
    }
    // J'ai terminé la position courante dans ma boucle de $keys
    // Je passe donc à la position (valeur) suivante en incrémentant mon compteur
    $keysPosition++;
}
// J'affiche mon nouveau array $final
print_r($final);



echo "\n<br><hr><br>\n";



$keys = array("a"=>"prems","b"=>"deux","c"=>"trois");
$values = array("f1val"=>"veau","f2val"=>"vache","f3val"=>"cochon");

$i = 0;
$final = array();
foreach ($keys AS $KeysValue)
{
  $i++;
  $final[$KeysValue] = $values["f".$i."val"];
}
print_r($final);