# SQL - Cas Facturation


* Critères de restriction
    * Opérateurs de comparaison :  < > <= >= = <> !=
    * Opérateurs arithmetiques : * / - +
    * Opérateurs logiques : AND OR
    * Opérateurs spécialisés
        * BETWEEN (gestion des encadrements)
        * LIKE (recherche sur des extraits de chaînes de caractères)
        * IN (recherche une valeur à l'intérieur d'un ensemble)

# Exercices

## 1
```sql
SELECT *
FROM articles;
```

## 2
```sql
SELECT *
FROM fournisseurs;
```

## 3
```sql
SELECT rs, ville
FROM fournisseurs;
```

## 4
```sql
SELECT codefacture, datefacture
FROM factures;
```

## 5
```sql
SELECT *, DATEDIFF(datereglement, datefacture) AS délaidepaiement
FROM factures;
```

## 6
```sql
SELECT codefacture, prixunitaire, quantité
FROM lignesfactures;
```

## 7
```sql
SELECT *
FROM articles
ORDER BY designation;
```

## 8
```sql
SELECT *
FROM fournisseurs
ORDER BY ville DESC;
```

## 9
```sql
SELECT *
FROM fournisseurs
ORDER BY cp, ville;
```
## 10
```sql
SELECT *
FROM factures
ORDER BY datefacture DESC;
```

## 11
```sql
SELECT codearticle, prixunitaire, quantité, ROUND(quantité * prixunitaire, 3) AS total
FROM lignesfactures
ORDER BY prixunitaire DESC;
```

## 12
```sql
SELECT *
FROM acheteurs
ORDER BY prenomacheteur, nomacheteur;
```

## 13
```sql
SELECT *
FROM factures
WHERE codeacheteur = 'San';
```

## 14
```sql
SELECT *
FROM lignesfactures
WHERE quantité = 1;
```

## 15
```sql
SELECT *
FROM articles
WHERE désignation LIKE 'MOUSQUETON%';
```

## 16
```sql
SELECT *
FROM factures
WHERE datefacture = '2016-11-19';
```

OR

```sql
SELECT *
FROM factures
WHERE MONTH(datefacture) = 3 AND YEAR(datefacture) = 2016;
```

## 17
```sql
SELECT *
FROM factures
WHERE datefacture LIKE '2016-12%';
```

## 18
```sql
SELECT *
FROM factures
WHERE datereglement BETWEEN '2016-01-01' AND '2016-12-25'; 
```

## 19
```sql
SELECT nomacheteur
FROM acheteurs
WHERE prenomacheteur = 'Stéphane';
```

## 20
```sql
SELECT rs, adresse
FROM fournisseurs
WHERE ville = 'Concarneau';
```

## 21
```sql
SELECT *
FROM factures
WHERE DATEDIFF(datereglement, datefacture) > 45;
```

## 22
```sql
SELECT *
FROM lignesfactures
WHERE quantité > 300 AND prixunitaire <= 80;
```

## 23
```sql
SELECT *
FROM factures
WHERE codefournisseur IN (17, 25, 32, 49);
```

## 24
```sql
SELECT codefacture, datefacture, nomacheteur, prenomacheteur
FROM factures, acheteurs
WHERE factures.codeacheteur = acheteurs.codeacheteur;
```

OR

```sql
SELECT codefacture, datefacture, nomacheteur, prenomacheteur
FROM factures fa
    INNER JOIN acheteurs ac ON fa.codeacheteur = ac.codeacheteur;
```

## 25
```sql
SELECT fa.*
FROM factures fa, fournisseurs fo
WHERE fa.codefournisseur = fo.codefournisseur
    AND ville = 'honfleur';
```

OR

```sql
SELECT fa.*
FROM factures fa
    INNER JOIN fournisseurs fo ON fa.codefournisseur = fo.codefournisseur
WHERE ville = 'honfleur';
```

## 26
```sql
SELECT lf.*
FROM lignesfactures lf, factures fa
WHERE lf.codefacture = fa.codefacture
    AND MONTH(fa.datefacture) = 2;
```

OR

```sql
SELECT lf.*
FROM lignesfactures lf
    INNER JOIN factures fa ON lf.codefacture = fa.codefacture
AND MONTH(fa.datefacture) = 2;
```

## 27
```sql
SELECT DISTINCT ar.designation
FROM articles ar, lignesfactures li, factures fa, acheteurs ac
WHERE ac.codeacheteur = fa.codeacheteur
    AND fa.codefacture = li.codefacture
    AND li.codearticle = ar.codearticle
    AND ac.nomacheteur = 'COHEN'
    AND ac.prenomacheteur = 'Gerard'
ORDER BY ar.designation;
```

OR

```sql
SELECT DISTINCT ar.designation
FROM articles ar
    INNER JOIN lignesfactures li ON ar.codearticle = li.codearticle
    INNER JOIN factures fa ON li.codefacture = fa.codefacture
    INNER JOIN acheteurs ac ON fa.codeacheteur = ac.codeacheteur
WHERE ac.nomacheteur = 'COHEN'
    AND ac.prenomacheteur = 'Gerard'
ORDER BY ar.designation;
```

## 28
```sql
SELECT fa.codefacture, ac.nomacheteur, fo.rs AS fournisseur
FROM factures fa, acheteurs ac, fournisseurs fo
WHERE fa.codeacheteur = ac.codeacheteur
    AND fa.codefournisseur = fo.codefournisseur;
```

OR

```sql
SELECT fa.codefacture, nomacheteur, rs AS fournisseur
FROM factures fa, acheteurs ac, fournisseurs fo
WHERE fa.codeacheteur = ac.codeacheteur
    AND fa.codefournisseur = fo.codefournisseur;
```

OR

```sql
SELECT fa.codefacture, nomacheteur, rs AS fournisseur
FROM factures fa
    INNER JOIN acheteurs ac ON fa.codeacheteur = ac.codeacheteur
    INNER JOIN fournisseurs fo ON ac.codeacheteur = fo.codeacheteur;
```