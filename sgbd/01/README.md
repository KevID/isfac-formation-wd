# SQL - Cas Facturation

* Critères de restriction
  * Opérateurs de comparaison :  < > <= >= = <> !=
  * Opérateurs arithmetiques : * / - +
  * Opérateurs logiques : AND OR
  * Opérateurs spécialisés
    * BETWEEN (gestion des encadrements)
    * LIKE (recherche sur des extraits de chaînes de caractères)
    * IN (recherche une valeur à l'intérieur d'un ensemble)

## Exercices

### 1

```sql
SELECT *
FROM articles;
```

### 2

```sql
SELECT *
FROM fournisseurs;
```

### 3

```sql
SELECT rs, ville
FROM fournisseurs;
```

### 4

```sql
SELECT codefacture, datefacture
FROM factures;
```

### 5

```sql
SELECT *, DATEDIFF(datereglement, datefacture) AS délaidepaiement
FROM factures;
```

### 6

```sql
SELECT codefacture, prixunitaire, quantité
FROM lignesfactures;
```

### 7

```sql
SELECT *
FROM articles
ORDER BY designation;
```

### 8

```sql
SELECT *
FROM fournisseurs
ORDER BY ville DESC;
```

### 9

```sql
SELECT *
FROM fournisseurs
ORDER BY cp, ville;
```

### 10

```sql
SELECT *
FROM factures
ORDER BY datefacture DESC;
```

### 11

```sql
SELECT codearticle, prixunitaire, quantité, ROUND(quantité * prixunitaire, 3) AS total
FROM lignesfactures
ORDER BY prixunitaire DESC;
```

### 12

```sql
SELECT *
FROM acheteurs
ORDER BY prenomacheteur, nomacheteur;
```

### 13

```sql
SELECT *
FROM factures
WHERE codeacheteur = 'San';
```

### 14

```sql
SELECT *
FROM lignesfactures
WHERE quantité = 1;
```

### 15

```sql
SELECT *
FROM articles
WHERE désignation LIKE 'MOUSQUETON%';
```

### 16

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

### 17

```sql
SELECT *
FROM factures
WHERE datefacture LIKE '2016-12%';
```

### 18

```sql
SELECT *
FROM factures
WHERE datereglement BETWEEN '2016-01-01' AND '2016-12-25';
```

### 19

```sql
SELECT nomacheteur
FROM acheteurs
WHERE prenomacheteur = 'Stéphane';
```

### 20

```sql
SELECT rs, adresse
FROM fournisseurs
WHERE ville = 'Concarneau';
```

### 21

```sql
SELECT *
FROM factures
WHERE DATEDIFF(datereglement, datefacture) > 45;
```

### 22

```sql
SELECT *
FROM lignesfactures
WHERE quantité > 300 AND prixunitaire <= 80;
```

### 23

```sql
SELECT *
FROM factures
WHERE codefournisseur IN (17, 25, 32, 49);
```

### 24

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

### 25

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

### 26

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
WHERE MONTH(fa.datefacture) = 2;
```

### 27

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
FROM acheteurs ac
  INNER JOIN factures fa ON ac.codeacheteur = fa.codeacheteur
  INNER JOIN lignesfactures li ON fa.codefacture = li.codefacture
  INNER JOIN articles ar ON li.codearticle = ar.codearticle
WHERE ac.nomacheteur = 'COHEN'
  AND ac.prenomacheteur = 'Gerard'
ORDER BY ar.designation;
```

### 28

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
SELECT nomacheteur, fa.codefacture, rs AS fournisseur
FROM factures fa
  INNER JOIN acheteurs ac ON fa.codeacheteur = ac.codeacheteur
  INNER JOIN fournisseurs fo ON fa.codefournisseur = fo.codefournisseur
ORDER BY nomacheteur, fa.codefacture;
```

### 29. Afficher le prix unitaire le + élevé

```sql
SELECT MAX(prixunitaire)
FROM lignesfactures
```

OR

```sql
SELECT codefacture, prixunitaire
FROM lignesfactures
ORDER BY prixunitaire DESC
LIMIT 1;
```

### 30. Afficher la dernière date de facture

```sql
SELECT MAX(datefacture)
FROM factures
```

OR

```sql
SELECT codefacture, datefacture
FROM factures
ORDER BY datefacture DESC
LIMIT 1;
```

### 31. Afficher le nombre de factures par jour

```sql
SELECT datefacture, count(*)
FROM factures
GROUP BY datefacture;
```

### 32. Affichez, pour chaque article, la qte totale achetée

```sql
SELECT codearticle, SUM(quantité) AS total_acheté
FROM lignesfactures
GROUP BY codearticle;
```

### 33. Indiquez le nombre de factures passées par nom d'acheteur

```sql
SELECT nomacheteur, count(*) AS nb_factures
FROM factures fa
  RIGHT JOIN acheteurs ac ON fa.codeacheteur = ac.codeacheteur
GROUP BY fa.codeacheteur;
```

### 34. Affichez le CA total gagné par chaque fournisseur

```sql
SELECT fo.codefournisseur, rs, ROUND(SUM(prixunitaire*quantité), 2) AS ca_total
FROM fournisseurs fo
  LEFT JOIN factures fa ON fo.codefournisseur = fa.codefournisseur
  INNER JOIN lignesfactures lf ON fa.codefacture = lf.codefacture
GROUP BY fo.codefournisseur;
```

### 35. Affichez, pour chaque article, le montant total acheté et le prix unitaire moyen

```sql
SELECT codearticle, ROUND(SUM(prixunitaire*quantité), 2) AS montant_total_acheté, ROUND(AVG(prixunitaire), 2) AS prix_unitaire_moyen
FROM lignesfactures
GROUP BY codearticle;
```

### 36. Affichez le total de quantité vendues pour chaque article, uniquement si ce sont des lampes

```sql
SELECT ar.codearticle, designation, SUM(quantité) AS total_qte_vendue
FROM articles ar
  INNER JOIN lignesfactures lf ON ar.codearticle = lf.codearticle
WHERE designation LIKE '%lampe%'
GROUP BY ar.codearticle;
```

## Effectuez les opérations suivantes:

### 1. Ajoutez-vous à la liste des acheteurs

```sql
INSERT INTO acheteurs (codeacheteur, nomacheteur, prenomacheteur) VALUES ('PKe', 'PAULMIER', 'Kevin');
```

### 2. Enregistrer une facture associée à votre nom

```sql
INSERT INTO factures (codeacheteur, codefournisseur, datefacture, datereglement) VALUES ('PKe', '55', '2019-11-12', '2019-11-13');
INSERT INTO lignesfactures (codeligne, codefacture, codearticle, prixunitaire, quantité) VALUES (1, '645', '7290', '313.62', '2');
```

### 3. Ajoutez votre entreprise à la liste des fournisseurs

```sql
INSERT INTO fournisseurs (rs, adresse, cp, ville) VALUES ('KevID', '17 rue Albin Haller', '86000', 'POITIERS');
```

### 4. Calculez le total de chaque ligne facture

```sql
ALTER TABLE lignesfactures ADD total DOUBLE;
UPDATE lignesfactures SET total = ROUND((prixunitaire * quantité), 2);
```

### 5. Supprimez de la base les articles d'AQUAPAC

```sql
DELETE
FROM articles
WHERE designation LIKE '%AQUAPAC%';
```

## Répondre aux questions ouvertes suivantes

### 1. Combien d'acheteurs ont le même prénom

```sql
SELECT prenomacheteur, COUNT(prenomacheteur) AS nbSameFirstname
FROM acheteurs
GROUP BY prenomacheteur;
```

### 2. Y'a t-il des factures réglées le jour même de leur émission

```sql
SELECT codefacture, datefacture, datereglement
FROM factures
WHERE datefacture = datereglement;
```

### 3. Y'a t-il des factures de plus de 10 lignes

```sql
SELECT codefacture, COUNT(codefacture)
FROM lignesfactures
GROUP BY codefacture
HAVING COUNT(codefacture) > 10;
```

### 4. Existe-t-il des acheteurs ayant enregistré aucune facture

```sql
SELECT a.codeacheteur, nomacheteur, prenomacheteur
FROM acheteurs a
    LEFT JOIN factures f ON a.codeacheteur = f.codeacheteur
WHERE f.codefacture IS NULL;
```

### 5. Imprimer la liste des articles qui n'nont jamais été achetés

```sql
SELECT a.codearticle, designation
FROM articles a
    LEFT JOIN lignesfactures l ON a.codearticle = l.codearticle
WHERE l.codearticle IS NULL;
```