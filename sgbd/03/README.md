# Exercice sur les requetes – Base MACIF

<!-- TOC -->

- [Projection, sélection, tri, fonctions (exercices)](#projection-sélection-tri-fonctions-exercices)
  - [Liste des noms,prenoms et ancienneté des preparateurs trié par nom croissant](#liste-des-nomsprenoms-et-ancienneté-des-preparateurs-trié-par-nom-croissant)
  - [Liste des noms,prenoms et ancienneté des preparateurs trié par ancienneté decroissante,nom croissant](#liste-des-nomsprenoms-et-ancienneté-des-preparateurs-trié-par-ancienneté-decroissantenom-croissant)
  - [Nom des preparateurs gagnant au moins 1400 € par mois, triés par nom croissant](#nom-des-preparateurs-gagnant-au-moins-1400-€-par-mois-triés-par-nom-croissant)
  - [Nom des preparateurs gagnant entre 1000 et 1400 €](#nom-des-preparateurs-gagnant-entre-1000-et-1400-€)
  - [Toutes les informations des preparateurs de plus de 8 ans d’ancienneté gagnant moins de 1400 €](#toutes-les-informations-des-preparateurs-de-plus-de-8-ans-dancienneté-gagnant-moins-de-1400-€)
  - [Nom,Salaire et ancienneté des preparateurs ayant une ancienneté de 3, 5 ou 10 ans](#nomsalaire-et-ancienneté-des-preparateurs-ayant-une-ancienneté-de-3-5-ou-10-ans)
  - [Nom des salariés ayant soit – de 5 ans d’ancienneté, soit un salaire <1500 €](#nom-des-salariés-ayant-soit--de-5-ans-dancienneté-soit-un-salaire-1500-€)
  - [Afficher le nom et les 2 premieres lettres du prénom des preparateurs (utilisation de la fonction SQL LEFT)](#afficher-le-nom-et-les-2-premieres-lettres-du-prénom-des-preparateurs-utilisation-de-la-fonction-sql-left)
- [Jointures (exercices)](#jointures-exercices)
  - [Afficher les ref palette et les types des palettes de plus de 100kg](#afficher-les-ref-palette-et-les-types-des-palettes-de-plus-de-100kg)
  - [Afficher les informations des palettes en bois de + de 300 kg et contenant au plus 15 colis](#afficher-les-informations-des-palettes-en-bois-de--de-300-kg-et-contenant-au-plus-15-colis)
  - [Afficher le nom des preparateurs qui sont intervenus sur la palette ABNS71772](#afficher-le-nom-des-preparateurs-qui-sont-intervenus-sur-la-palette-abns71772)
  - [Afficher les refpalette,poids et nombre de colis des palettes stockées dans l’entrepot 1](#afficher-les-refpalettepoids-et-nombre-de-colis-des-palettes-stockées-dans-lentrepot-1)
  - [Afficher les ref et poids des palettes stockées à un emplacement ou elles depassent la charge maximum](#afficher-les-ref-et-poids-des-palettes-stockées-à-un-emplacement-ou-elles-depassent-la-charge-maximum)
  - [RefPalette, NbColis,  Type, CodeEmplacement, CodeRack, LibelléEntrepot des palettes sur lesquelles une intervention à eu lieu en juillet 2015](#refpalette-nbcolis--type-codeemplacement-coderack-libelléentrepot-des-palettes-sur-lesquelles-une-intervention-à-eu-lieu-en-juillet-2015)
  - [Liste des palettes de plus de 100 par 100 mouvementées par un preparateur dont le nom commence par « th »](#liste-des-palettes-de-plus-de-100-par-100-mouvementées-par-un-preparateur-dont-le-nom-commence-par-«-th-»)
- [Introduction de (INNER|LEFT|RIGHT) JOIN](#introduction-de-innerleftright-join)
- [Regroupement](#regroupement)
  - [Afficher le nombre total de palette referencées](#afficher-le-nombre-total-de-palette-referencées)
  - [Afficher le salaire moyen des preparateurs](#afficher-le-salaire-moyen-des-preparateurs)
  - [Liste du nombre de palette par nombre de colis](#liste-du-nombre-de-palette-par-nombre-de-colis)
  - [Liste du nombre de palette par entrepot](#liste-du-nombre-de-palette-par-entrepot)
  - [Indiquer le nombre de palette par type classées en décroissant](#indiquer-le-nombre-de-palette-par-type-classées-en-décroissant)
  - [Liste du nombre de transport par palette](#liste-du-nombre-de-transport-par-palette)
  - [Liste des entrepots avec capacité, nombre de palettes actuellement stockées](#liste-des-entrepots-avec-capacité-nombre-de-palettes-actuellement-stockées)
- [Les requètes TRUNCATE, DELETE, INSERT INTO](#les-requètes-truncate-delete-insert-into)
- [Requètes parametrées](#requètes-parametrées)
  - [Afficher les informations d’une palette dont la référence est rentrée par l’utilisateur](#afficher-les-informations-dune-palette-dont-la-référence-est-rentrée-par-lutilisateur)
  - [Afficher les transports de palette compris dans une borne chronologique indiquée par l’utilisateur](#afficher-les-transports-de-palette-compris-dans-une-borne-chronologique-indiquée-par-lutilisateur)
  - [Indiquer le nombre d’enlevement réalisés par un transporteur dont le code est saisi par l’utilisateur](#indiquer-le-nombre-denlevement-réalisés-par-un-transporteur-dont-le-code-est-saisi-par-lutilisateur)

<!-- /TOC -->

## Projection, sélection, tri, fonctions (exercices)

### 1.1. Liste des noms,prenoms et ancienneté des preparateurs trié par nom croissant

```sql
SELECT nompreparateur, prenompreparateur, ancienneté
FROM preparateur
ORDER BY nompreparateur, prenompreparateur;
```

### 1.2 Liste des noms,prenoms et ancienneté des preparateurs trié par ancienneté decroissante,nom croissant

```sql
SELECT nompreparateur, prenompreparateur, ancienneté
FROM preparateur
ORDER BY ancienneté DESC, nompreparateur, prenompreparateur;
```

### 1.3 Nom des preparateurs gagnant au moins 1400 € par mois, triés par nom croissant

```sql
SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE salairebrut >= 1400
ORDER BY nompreparateur, prenompreparateur;
```

### 1.4 Nom des preparateurs gagnant entre 1000 et 1400 €

```sql
SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE salairebrut BETWEEN 1000 AND 1400
ORDER BY nompreparateur, prenompreparateur;
```

### 1.5 Toutes les informations des preparateurs de plus de 8 ans d’ancienneté gagnant moins de 1400 €

```sql
SELECT *
FROM preparateur
WHERE ancienneté > 8
    AND salairebrut < 1400;
```

### 1.6 Nom,Salaire et ancienneté des preparateurs ayant une ancienneté de 3, 5 ou 10 ans

```sql
SELECT nompreparateur, prenompreparateur, salairebrut, ancienneté
FROM preparateur
WHERE ancienneté IN (3, 5, 10);
```

### 1.7 Nom des salariés ayant soit – de 5 ans d’ancienneté, soit un salaire <1500 €

```sql
SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE ancienneté < 5
    OR salairebrut < 1500;
```

### 1.8 Afficher le nom et les 2 premieres lettres du prénom des preparateurs (utilisation de la fonction SQL LEFT)

```sql
SELECT nomrpeparateur, LEFT(prenompreparateur, 2)
FROM preparateur;
```

## Jointures (exercices)

### 2.1 Afficher les ref palette et les types des palettes de plus de 100kg

```sql
SELECT refpalette, libellétype
FROM palette p, type t
WHERE p.code_type = t.code_type
    AND poids < 100;
```

OR

```sql
SELECT refpalette, libellétype
FROM palette p
    INNER JOIN type t ON p.code_type = t.code_type
WHERE poids < 100;
```

### 2.2 Afficher les informations des palettes en bois de + de 300 kg et contenant au plus 15 colis

```sql
SELECT p.*, libellétype, largeur, longueur, matière
FROM palette p, type t
WHERE p.code_type = t.code_type
    AND matière = 'bois'
    AND poids > 300
    AND nbcolis <= 15;
```

OR

```sql
SELECT p.* libellétype, largeur, longueur, matière
FROM palette p
    INNER JOIN type t p.code_type = t.code_type
WHERE matière = 'bois'
    AND poids > 300
    AND nbcolis <= 15;
```

### 2.3 Afficher le nom des preparateurs qui sont intervenus sur la palette ABNS71772

```sql
SELECT nompreparateur, prenompreparateur
FROM preparateur p, intervention i
WHERE p.code_preparateur = i.code_preparateur
    AND refpalette = 'ABNS71772';
```

OR

```sql
SELECT nompreparateur, prenompreparateur
FROM preparateur p
    INNER JOIN intervention i ON p.code_preparateur = i.preparateur
WHERE refpalette = 'ABNS71772';
```

### 2.4 Afficher les refpalette,poids et nombre de colis des palettes stockées dans l’entrepot 1

```sql
SELECT refpalette, poids, nbcolis
FROM palette p, emplacement e, rack r
WHERE p.code_emplacement = e.code_emplacement
    AND e.id_rack = r.id_rack
    AND code_entrepot = 1;
```

OR

```sql
SELECT refpalette, poids, nbcolis
FROM palette p
    INNER JOIN emplacement e ON p.code_emplacement = e.code_emplacement
WHERE e.id_rack = r.id_rack
    AND code_entrepot = 1;
```

### 2.5 Afficher les ref et poids des palettes stockées à un emplacement ou elles depassent la charge maximum

```sql
SELECT refpalette, poids, chargemax, p.code_emplacement
FROM  palette p, emplacement e
WHERE p.code_emplacement = e.code_emplacement
    AND poids > chargemax;
```

OR

```sql
SELECT refpalette, poids, chargemax, p.code_emplacement
FROM  palette p
    INNER JOIN emplacement e ON p.code_emplacement = e.code_emplacement
WHERE poids > chargemax;
```

### 2.6 RefPalette, NbColis,  Type, CodeEmplacement, Code_Rack, LibelléEntrepot des palettes sur lesquelles une intervention à eu lieu en juillet 2015

```sql
SELECT p.refpalette, nbcolis, libellétype, p.code_emplacement, e.id_rack, ent.libellé
FROM palette p, type t, emplacement e, rack r, entrepot ent, intervention i
WHERE p.code_type = t.code_type
    AND p.code_emplacement = e.code_emplacement
    AND e.id_rack = r.id_rack
    AND r.code_entrepot = ent.code_entrepot
    AND i.refpalette = p.refpalette
    AND YEAR(date_inter) = 2015
    AND MONTH(date_inter) = 7;
```

OR

```sql
SELECT p.refpalette, nbcolis, libellétype, p.code_emplacement, e.id_rack, ent.libellé
FROM palette p
    INNER JOIN type t           ON p.code_type = t.code_type
    INNER JOIN emplacemen e     ON p.code_emplacement = e.code_emplacement
    INNER JOIN rack r           ON e.id_rack = r.id_rack
    INNER JOIN entrepot ent     ON r.code_entrepot = ent.code_entrepot
    INNER JOIN intervention i   ON i.refpalette = p.refpalette
WHERE YEAR(date_inter) = 2015
    AND MONTH(date_inter) = 7;
```

### 2.7 Liste des palettes de plus de 100 par 100 mouvementées par un preparateur dont le nom commence par « th »

```sql
SELECT DISTINCT pa.refpalette, nompreparateur
FROM palette pa, type t, intervention i, preparateur pr
WHERE pa.code_type = t.code_type
    AND pa.refpalette = i.refpalette
    AND i.code_preparateur = pr.code_preparateur
    AND largeur > 100
    AND longueur > 100
    AND LEFT(nompreparateur, 2) = 'th';
```

OR

```sql
SELECT DISTINCT pa.refpalette, nompreparateur
FROM palette pa
    INNER JOIN type t           ON pa.code_type = t.code_type
    INNER JOIN intervention i   ON pa.refpalette = i.refpalette
    INNER JOIN preparateur pr   ON i.code_preparateur = pr.code_preparateur
WHERE largeur > 100
    AND longueur > 100
    AND LEFT(nompreparateur, 2) = 'th';
```

## Introduction de (INNER|LEFT|RIGHT) JOIN

Documentation: <https://sql.sh/cours/jointures>

![SQL JOIN](https://sql.sh/wp-content/uploads/2014/06/sql-join-infographie-522x1024.png "SLL JOIN")

```sql
SELECT DISTINCT nompreparateur, prenompreparateur
FROM preparateur p, intervention i
WHERE p.code_preparateur = i.code_preparateur
ORDER BY nompreparateur, prenompreparateur;

SELECT *
FROM preparateur
WHERE code_preparateur IN ( SELECT code_preparateur FROM intervention )

SELECT *
FROM preparateur
WHERE code_preparateur NOT IN ( SELECT code_preparateur FROM intervention )

SELECT nompreparateur, prenompreparateur, refpalette
FROM preparateur p INNER JOIN intervention i ON p.code_preparateur = i.code_preparateur

SELECT nompreparateur, prenompreparateur, refpalette
FROM preparateur p LEFT JOIN intervention i ON p.code_preparateur = i.code_preparateur

SELECT p.refpalette, libellétype, id_lieu
FROM palette p
    INNER JOIN type t ON p.code_type = t.code_type
    INNER JOIN transport tr ON tr.refpalette = p.refpalette
WHERE
```

## Regroupement

### 3.1 Afficher le nombre total de palette referencées

```sql
SELECT count(*) AS nb_palettes
FROM palette;
```

### 3.2 Afficher le salaire moyen des preparateurs

```sql
SELECT ROUND(AVG(salairebrut), 2) AS salaire_brut_moyen
FROM preparateur;
```

### 3.3 Liste du nombre de palette par nombre de colis

```sql
SELECT nbcolis, count(*) AS nb_palettes
FROM palette
GROUP BY nbcolis;
```

### 3.4 Liste du nombre de palette par entrepot

```sql
SELECT en.code_entrepot, libellé, count(nbcolis) AS nb_colis
FROM palette pa
    INNER JOIN emplacement em   ON pa.code_emplacement = em.code_emplacement
    INNER JOIN rack ra          ON em.id_rack = ra.id_rack
    INNER JOIN entrepot en      ON ra.code_entrepot = en.code_entrepot
GROUP BY en.code_entrepot;
```

### 3.5 Indiquer le nombre de palette par type classées en décroissant

```sql
SELECT libellétype, count(nbcolis) AS nb_colis
FROM palette p
    LEFT JOIN type t ON p.code_type = t.code_type
GROUP BY p.code_type
ORDER BY nb_colis DESC;
```

### 3.6 Liste du nombre de transport par palette

```sql
SELECT refpalette, count(id_transport) AS nb_transport
FROM transport
GROUP BY refpalette;
```

### 3.7 Liste des entrepots avec capacité, nombre de palettes actuellement stockées

```sql
SELECT en.code_entrepot, libellé, capacité, count(pa.code_emplacement) AS nb_palettes
FROM entrepot en
    INNER JOIN rack ra          ON en.code_entrepot = ra.code_entrepot
    INNER JOIN emplacement em   ON ra.id_rack = em.id_rack
    INNER JOIN palette pa       ON em.code_emplacement = pa.code_emplacement
    INNER JOIN transport tr     ON pa.refpalette = tr.refpalette
    WHERE tr.refpalette NOT IN (SELECT refpalette FROM transport WHERE type = 'S')
GROUP BY en.code_entrepot;
```

OR

```sql
CREATE VIEW stock AS
SELECT refpalette
FROM transport
GROUP BY refpalette
HAVING count(id_transport) = 1
ORDER BY count(id_transport) ASC;

SELECT ent.code_entrepot, count(pa.refpalette), capacité
FROM palette pa INNER JOIN emplacement emp ON pa.code_emplacement=emp.code_emplacement
INNER JOIN rack ON emp.id_rack=rack.id_rack
INNER JOIN entrepot ent ON rack.code_entrepot=ent.code_entrepot
WHERE pa.refpalette IN ( SELECT refpalette
FROM transport
group by refpalette
HAVING count(id_transport) = 1
ORDER BY count(id_transport) ASC)
GROUP BY capacité;
```

## Les requètes TRUNCATE, DELETE, INSERT INTO

```txt
Create  -> INSERT INTO
Read    -> SELECT
Update  -> UPDATE
Delete  -> DELETE

TRUNCATE TABLE -> Vider la table des données

TRUNCATE dump2 <-> DELETE FROM dump2

DELETE
FROM table
WHERE critère(s)

INSERT INTO dump2
SELECT * FROM dump

UPDATE table
SET colonne = valeur, ...
WHERE critere(s)

UPDATE dump2
SET salaire = salaire * 2
WHERE prenom = 'Bernadette';

UPDATE dump2
SET salaire = 2500, age = 50
WHERE matricule = 4;

INSERT INTO table
VALUES

INSERT INTO dump2 (nom, prenom)
VALUES ('Nom', 'Prénom')
```

## Requètes parametrées

### 4.1 Afficher les informations d’une palette dont la référence est rentrée par l’utilisateur

```sql
SELECT *
FROM palettes
WHERE RefPalette = ':RefPalette';
```

### 4.2 Afficher les transports de palette compris dans une borne chronologique indiquée par l’utilisateur

```sql
SELECT *
FROM transport
WHERE date_trans BETWEEN ':date_min' AND ':date_max';
```

### 4.3 Indiquer le nombre d’enlevement réalisés par un transporteur dont le code est saisi par l’utilisateur

```sql
SELECT code_transporteur, COUNT(*) AS nb_transport
FROM transport
WHERE type = 'S'
GROUP BY code_transporteur
HAVING code_transporteur = ':code_transporteur';
```

## Manipulation des données

### 5.1 Augmentez les salaires de 100 € pour tout le monde

```sql
UPDATE preparateur SET salaireBrut = (salaireBrut + 100);
````

### 5.2 Augmentez en plus de 50 € pour les salariés ayant une anciennete > 8

```sql
UPDATE preparateur SET salaireBrut = (salaireBrut + 50) WHERE ancienneté > 8;
```

### 5.3 Changez le nom de l’entrepot 3 pour «Frigo 3»

```sql
UPDATE entrepot
SET libellé = 'Frigo 3'
WHERE code_entrepot = 3;
```

### 5.4 Modifiez la capacité de l’entrepôt 1 en l’augmentant de 5%

```sql
UPDATE entrepot
SET capacité = (capacité * 1.05)
WHERE code_entrepot = 1;
```

### 5.5 Insérez le type de palette «EUR/25» , largeur 123 longueur 147, en Titane

```sql
INSERT INTO type (code_type, libellétype, largeur, longueur, matière)
VALUES ('EU25','Palette Euro 25','123','147','Titane');
```

### 5.6 Insérez-vous en tant que préparateur, avec un salaire de 5 €

```sql
INSERT INTO preparateur (nomPreparateur, prenomPreparateur, ancienneté, salaireBrut)
VALUES ('PAULMIER', 'Kévin', '1', '5');
```

### 5.7 Insérez une intervention surla palette ABWG214306 à la date du jour, vous concernant

```sql
INSERT INTO intervention (refpalette, code_preparateur, date_inter) 
VALUES ('ABWG214306', 31, '2019-11-26');
```

### 5.8 Insérez les transporteurs suivant, en une requête: XPO Logistic, SCHENKER J, STEF TFE, FL Transport

```sql
INSERT INTO transporteur (nomTransporteur)
VALUES ('XPO Logistic'), ('SCHENKER J'), ('STEF TFE'), ('FL Transport']);
```

### 5.9 Copiez la table intervention en «anomaliesoct2015». Insérez dans celle-ci uniquement les interventions d’octobre 2015

```sql
INSERT INTO anomaliesoct2015 (RefPalette, code_preparateur, date_inter)
SELECT RefPalette, code_preparateur, date_inter
FROM intervention
WHERE YEAR(date_inter) = '2015'
    AND MONTH(date_inter) = '10';
```

### 5.10 Copiez la table intervention en «biginter» et copiez dans celle-ci les interventions concernant des palettes en bois de plus de 500 Kg

```sql
CREATE TABLE biginter LIKE intervention;

INSERT INTO biginter (RefPalette, code_preparateur, date_inter)
SELECT i.RefPalette, code_preparateur, date_inter
FROM intervention i
    INNER JOIN palette p ON i.refpalette = p.refpalette
    INNER JOIN type t ON p.code_type = t.code_type
WHERE matière = 'Bois'
    AND poids > 500;
```

### 5.11 Supprimez de la table intervention les interventions de 2014

```sql
DELETE FROM intervention WHERE YEAR(date_inter) = '2014';
```

### 5.12 Supprimez les préparateurs n’ayant réalisés aucune intervention

```sql
DELETE FROM preparateur
WHERE code_preparateur IN (
    SELECT code_preparateur
    FROM (
        SELECT DISTINCT p.code_preparateur
        FROM preparateur p
            LEFT JOIN intervention i ON p.code_preparateur = i.code_preparateur
        WHERE i.code_preparateur IS NULL
    ) AS a
)
```

OR

```sql
DELETE
FROM preparateur
WHERE code_preparateur NOT IN (SELECT code_preparateur FROM intervention)

-- Pas besoin de SELECT DISTINCT dans un IN / NOT IN
```

Obligé d'ajouter `SELECT * FROM (...) AS a` à cause de l'erreur:
#1093 - You can't specify target table 'palette' for update in FROM clause

### 5.13 Ne garder dans la base que les palettes encore en stock

```sql
-- Nettoyage de la table Palette et indirectement sur Intervention car la structure possède une jonction sur la clé RefPalette.

DELETE FROM palette
WHERE refPalette NOT IN (
    SELECT *
    FROM (
        SELECT p.refPalette
        FROM palette p 
            INNER JOIN transport t ON p.refPalette = t.refPalette
        WHERE t.refPalette NOT IN (
            SELECT refPalette
            FROM transport
            WHERE type = 'S'
        )
    ) AS a
)

-- Pas de clé refPalette sur la table Transport, il faut donc une autre requette sql pour nettoyer la table Transport

DELETE FROM transport
WHERE refPalette NOT IN (
    SELECT *
    FROM (
        SELECT p.refPalette
        FROM palette p 
            INNER JOIN transport t ON p.refPalette = t.refPalette
        WHERE t.refPalette NOT IN (
            SELECT refPalette
            FROM transport
            WHERE type = 'S'
        )
    ) AS a
)
```

Obligé d'ajouter `SELECT * FROM (...) AS a` à cause de l'erreur:
#1093 - You can't specify target table 'palette' for update in FROM clause