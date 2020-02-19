# La boucle FOR

<!-- TOC -->

- [Créer une boucle indiquant la création de chaque fantôme sur sa propre ligne : "création du fantôme 1", "création…](#créer-une-boucle-indiquant-la-création-de-chaque-fantôme-sur-sa-propre-ligne--création-du-fantôme-1-création)
- [Créer une boucle permettant de créer une ligne avec 10 *](#créer-une-boucle-permettant-de-créer-une-ligne-avec-10-)
- [idem mais en créant un carré de 10 * 10](#idem-mais-en-créant-un-carré-de-10--10)
- [En repartant du 3°, alterner une ligne en rouge et une en vert](#en-repartant-du-3°-alterner-une-ligne-en-rouge-et-une-en-vert)
- [Refaire ce type de construction avec une boucle](#refaire-ce-type-de-construction-avec-une-boucle)

<!-- /TOC -->

```php
// for(initialisation, condition de sortie, incrémentation) {}

for ($position = 0; $position < 5; $position++)
{
  echo $position . '<br>';
}
```

## 1. Créer une boucle indiquant la création de chaque fantôme sur sa propre ligne : "création du fantôme 1", "création…

```php
for ($i = 1; $i < 11; $i++) {
    echo "Création du fantôme " . $i . "<br />";
}
```

## 2. Créer une boucle permettant de créer une ligne avec 10 *

```php
for ($i = 0; $i < 10; $i++) {
    echo "*";
}
```

## 3. idem mais en créant un carré de 10 * 10

```php
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "*";
    }
    echo "<br />";
}
```

OR

```php
$etoiles = "";
for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    $etoiles .= "*";
  }
  $etoiles .= "<br />";
}
echo $etoiles;
```

## 4. En repartant du 3°, alterner une ligne en rouge et une en vert

```php
for ($i = 1; $i <= 10; $i++) {
  if ($i%2) {
    $color = "red";
  } else {
    $color = "green";
  }
  echo '<span style="color: '.$color.'">';
  for ($j = 1; $j <= 10; $j++) {
    echo "*";
  }
  echo "</span><br />";
}
```

OR

```php
$msg = "";
for ($i = 1; $i <= 10; $i++) {
  $color = ($i%2) ? "red" : "green";
  $msg .= '<p style="color: '.$color.'">';
  for ($j = 1; $j <= 10; $j++) {
    $msg .= "*";
  }
  $msg .= "</p>";
}
echo $msg;
```

## 5. Refaire ce type de construction avec une boucle

```php
for ($i = 1; $i <= 10; $i++)
{
  for ($j = 1; $j <= $i; $j++)
  {
    echo "*";
  }
  echo "<br />";
}
```

OR

```php
$etoiles = "";
for ($i = 1; $i <= 10; $i++)
{
  $etoiles .= "*";
  echo $etoiles."<br />";
}
```
