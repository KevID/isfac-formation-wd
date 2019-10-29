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
`SELECT *
FROM articles;`

## 2
`SELECT *
FROM fournisseurs;`

## 3
`SELECT rs, ville
FROM fournisseurs;`

## 4
`SELECT codefacture, datefacture
FROM factures;`

## 5
`SELECT *, DATEDIFF(datereglement, datefacture) AS délaidepaiement
FROM factures;`

## 6
`SELECT codefacture, prixunitaire, quantité
FROM lignesfactures;
`

## 7
`SELECT *
FROM articles
ORDER BY designation;
`

## 8
`SELECT *
FROM fournisseurs
ORDER BY ville DESC;
`

## 9
`SELECT *
FROM fournisseurs
ORDER BY cp, ville;
`
## 10
`SELECT *
FROM factures
ORDER BY datefacture DESC;
`

## 11
`SELECT codearticle, prixunitaire, quantité, ROUND(quantité * prixunitaire, 3) AS total
FROM lignesfactures
ORDER BY prixunitaire DESC;
`

## 12
`SELECT *
FROM acheteurs
ORDER BY prenomacheteur, nomacheteur;
`

## 13
`SELECT *
FROM factures
WHERE codeacheteur = 'San';
`

## 14
`SELECT *
FROM lignesfactures
WHERE quantité = 1;
`

## 15
`SELECT *
FROM articles
WHERE désignation LIKE 'MOUSQUETON%';
`

## 16
`SELECT *
FROM factures
WHERE datefacture = '2016-11-19';
`

OR

`SELECT *
FROM factures
WHERE MONTH(datefacture) = 3 AND YEAR(datefacture) = 2016;
`

## 17
`SELECT *
FROM factures
WHERE datefacture LIKE '2016-12%';
`

## 18
`SELECT *
FROM factures
WHERE datereglement BETWEEN '2016-01-01' AND '2016-12-25'; 
`

## 19
`SELECT nomacheteur
FROM acheteurs
WHERE prenomacheteur = 'Stéphane';
`

## 20
`SELECT rs, adresse
FROM fournisseurs
WHERE ville = 'Concarneau';
`

## 21
`SELECT *
FROM factures
WHERE DATEDIFF(datereglement, datefacture) > 45;
`

## 22
`SELECT *
FROM lignesfactures
WHERE quantité > 300 AND prixunitaire <= 80;
`

## 23
`SELECT *
FROM factures
WHERE codefournisseur IN (17, 25, 32, 49);
`

## 24
`SELECT codefacture, datefacture, nomacheteur, prenomacheteur
FROM factures a, acheteurs b
WHERE a.codeacheteur = b.codeacheteur;
`

OR

`SELECT codefacture, datefacture, nomacheteur, prenomacheteur
FROM factures a
LEFT JOIN acheteurs b ON a.codeacheteur = b.codeacheteur;
`

## 25
`SELECT a.*
FROM factures a, fournisseurs b
WHERE a.fournisseurs = b.fournisseurs
    AND ville = 'honfleur';
`

## 26
`SELECT a.*
FROM lignesfactures a, factures b
WHERE a.codefacture = b.codefacture
    AND MONTH(b.datefacture) = 2;
`
