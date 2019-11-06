# Exercices FOREACH

## 4. Créer une liste de villes dans un tableau avec leur code postal

Afficher sous forme de liste (ul>li) en passant par une boucle, chaque li étant créé dans la boucle.

```php
$villes = array('poitiers'=>'86000','Chateauroux'=>'36000','Orléans'=>'45000','Tours'=>'37000');
echo "<ul>\n";
foreach ($villes AS $ville=>$cp)
{
  echo "<li>La ville de $ville a le code postal $cp.</li>\n";
}
echo "</ul>\n";
```

## 5. Changer la couleur de chaque ligne, 1 ligne sur 2 bleu / vert

```php
$villes = array('poitiers'=>'86000','Chateauroux'=>'36000','Orléans'=>'45000','Tours'=>'37000');
$i = 0;
echo "<ul>\n";
foreach ($villes AS $ville=>$cp)
{
  //$i = array_search($ville, array_keys($villes));
  $color = ($i%2) ? "green" : "blue";
  echo "<li style=\"$color\">La ville de $ville a le code postal $cp.</li>\n";
  $i++;
}
echo "</ul>\n";
```

## 6. Afficher la liste suivante en affichant les clés (fruits, animaux …) dans des H1 et les éléments dans des li

```php
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
```

## 7. Comment extraire la value 3

```php
$tab = array("y"=>array("ert"=>0,"po"=>1),"a"=>array("gyh"=>2,"z"=>array("xyz"=>3)));

  echo $tab['a']['z']['xyz'];
```

OR

|Niv. 1   |Niv. 1   |Niv. 2   |Niv. 2   |Niv. 3   |Niv. 3   |
|:-------:|:-------:|:-------:|:-------:|:-------:|:-------:|
| **Key** |**Value**| **Key** |**Value**| **Key** |**Value**|
|||||||
| [y]     | Array   | [ert]   | 0       |         |         |
|         |         | [po]    | 1       |         |         |
| [a]     | Array   | [gyh]   | 2       |         |         |
|         |         | [z]     | Array   | [xyz]   | 3       |

```php
$tab = array("y"=>array("ert"=>0,"po"=>1),"a"=>array("gyh"=>2,"z"=>array("xyz"=>3)));

// J'ai identifié que pour afficher la valeur "3", il me faut parcourir 3 Array imbriqués
// Il me faut aller dans la valeur de la clé "a", puis dans la valeur de la clé "z", puis dans la valeur de la clé "xyz".

// Je parcoure le Array $tab
// Je mets les clés dans $tabKeyArray1 et les valeurs dans $tabValArray1
foreach ($tab AS $tabKeyArray1=>$tabValArray1)
{
    // J'ai besoin d'aller que dans la valeur ayant pour clé "a"
    if ($tabKeyArray1 == "a")
    {
        // Ma clé "a" a pour valeur $tabValArray1 un Array qu'il me faut explorer par un nouveau Foreach
        // Je mets les clés dans $tabKeyArray2 et les valeurs dans $tabValArray2
        foreach ($tabValArray1 AS $tabKeyArray2=>$tabValArray2)
        {
            // J'ai besoin d'aller que dans la valeur ayant pour clé "z"
            if ($tabKeyArray2 == "z")
            {
                // Ma clé "z" a pour valeur $tabValArray2 un Array qu'il me faut explorer par un nouveau Foreach
                // Je mets les clés dans $tabKeyArray3 et les valeurs dans $tabValArray3
                foreach ($tabValArray2 AS $tabKeyArray3=>$tabValArray3)
                {
                    // J'ai besoin d'aller que dans la valeur ayant pour clé "xyz"
                    if ($tabKeyArray3 == "xyz")
                    {
                        // Ma clé "xyz" a pour valeur $tabValArray3 le nombre entier "3" et pas un Array, je peux donc afficher la valeur
                        echo "La valeur est ".$tabValArray3;
                    }
                }
            }
        }
    }
}
```

## 8. Créer un tableau contenant une liste de couleur puis, créer dynamiquement un tableau contenant chaque couleur comme clé et comme valeur le Résultat attendu

```txt
array("bleu"=>"bleu","rouge"=>"rouge","vert"=>"vert")
```

```php
// Je crée un Array $couleurs ayant pour valeurs bleu, rouge, vert.
$couleurs = array("bleu","rouge","vert");
// $couleurs = ["bleu","rouge","vert"];   // Est une autre notation pour faire la même chose

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
```

## 9. Vous récupérez  2 arrays, comment arriver à créer le $final

```txt
$keys = array("a"=>"prems","b"=>"deux","c"=>"trois");
$values = array("f1val"=>"veau","f2val"=>"vache","f3val"=>"cochon");
// sortie attendue
$final = array("prems"=>"veau","deux"=>"vache","trois"=>"cochon”);
```

```php
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
```

OR

```php
// Solution de David (minifiée)

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
```
