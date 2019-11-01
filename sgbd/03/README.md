# Exercice sur les requetes – Base MACIF

<!-- TOC -->

- [Exercice sur les requetes – Base MACIF](#exercice-sur-les-requetes--base-macif)
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

### 2.2 Afficher les informations des palettes en bois de + de 300 kg et contenant au plus 15 colis

```sql
SELECT p.*, libellétype, largeur, longueur, matière
FROM palette p, type t
WHERE p.code_type = t.code_type
    AND matière = 'bois'
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

### 2.4 Afficher les refpalette,poids et nombre de colis des palettes stockées dans l’entrepot 1

```sql
SELECT refpalette, poids, nbcolis
FROM palette p, emplacement e, rack r
WHERE p.code_emplacement = e.code_emplacement
    AND e.id_rack = r.id_rack
    AND code_entrepot = 1;
```

### 2.5 Afficher les ref et poids des palettes stockées à un emplacement ou elles depassent la charge maximum

```sql
SELECT refpalette, poids, chargemax, p.code_emplacement
FROM  palette p, emplacement e
WHERE p.code_emplacement = e.code_emplacement
    AND poids > chargemax;
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

### 3.2 Afficher le salaire moyen des preparateurs

### 3.3 Liste du nombre de palette par nombre de colis

### 3.4 Liste du nombre de palette par entrepot

### 3.5 Indiquer le nombre de palette par type classées en décroissant

### 3.6 Liste du nombre de transport par palette

### 3.7 Liste des entrepots avec capacité, nombre de palettes actuellement stockées

## Requètes parametrées

### 4.1 Afficher les informations d’une palette dont la référence est rentrée par l’utilisateur

### 4.2 Afficher les transports de palette compris dans une borne chronologique indiquée par l’utilisateur

### 4.3 Indiquer le nombre d’enlevement réalisés par un transporteur dont le code est saisi par l’utilisateur
