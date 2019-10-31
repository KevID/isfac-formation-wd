# Exercices sur tableaux relationnels

## A. Comment extraire la valeur 3 du Array

```php
$b = array(
          array(
              0,
              1
          ),
          array(
              2,
              array(
                  3
              )
          )
      );
```

Résultat :

```php
echo $b[1][1][0];
```

## B. Lire les docs sur les fonctions de tableaux : implode / explode / array_combine
