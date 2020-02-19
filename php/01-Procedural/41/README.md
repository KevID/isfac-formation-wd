# La boucle FOREACH

<!-- TOC -->

- [Afficher cette liste de couleurs en ligne rouge  bleu vert](#afficher-cette-liste-de-couleurs-en-ligne-rouge--bleu-vert)
- [Afficher cette liste de couleurs dans un li (sans oublier le ul)](#afficher-cette-liste-de-couleurs-dans-un-li-sans-oublier-le-ul)

<!-- /TOC -->

```php
$villes = array("Poitiers", "Paris", "Brest");

foreach ($villes AS $ville)
{
  echo $ville."<br";
}
```

## 1. Afficher cette liste de couleurs en ligne rouge  bleu vert

```php
$couleurs = array("rouge", "bleu", "vert");
foreach ($couleurs as $couleur)
{
  echo $couleur . " ";
}
```

## 2. Afficher cette liste de couleurs dans un li (sans oublier le ul)

```php
$couleurs = array("red", "blue", "green");
echo "<ul>";
foreach ($couleurs as $couleur)
{
  echo "<li>" . $couleur . "</li>";
}
echo "</ul>";
```

Afficher cette liste de couleurs en ligne rouge, bleu, vert

```php
$couleurs = array("red", "blue", "green");
echo "<ul>";
foreach ($couleurs as $couleur)
{
  echo "<li style=\"color: " . $couleur . "\">" . $couleur . "</li>";
}
echo "</ul>";
```

OR

```php
$couleurs = array("red"=>"Rouge", "blue"=>"Bleu", "green"=>"Vert");
echo "<ul>";
foreach ($couleurs as $key => $couleur)
{
  echo "    <li style=\"color: " . $key . "\">" . $couleur . "</li>";
}
echo "</ul>";
```

OR

```php
$couleurs = array("Rouge", "Bleu", "Vert");
echo "<ul>";
foreach ($couleurs as $couleur)
{
  if ($couleur === "Rouge")
  {
    $color = "red";
  }
  else if ($couleur === "Bleu")
  {
    $color = "blue";
  }
  else if ($couleur === "Vert")
  {
    $color = "green";
  }
  echo "<li style=\"color: " . $color . "\">" . $couleur . "</li>";
}
echo "</ul>";
```