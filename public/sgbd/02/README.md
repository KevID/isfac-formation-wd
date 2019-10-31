# Titre DWWM - Table Salariés

**Elaborer les requêtes suivantes et mémoriser leur définition :**

<!-- TOC -->

- [Exercices](#exercices)
  - [Trier les salariés par poste et par nom](#trier-les-salariés-par-poste-et-par-nom)
  - [Trier les salariés par Age décroissant et nom croissant](#trier-les-salariés-par-age-décroissant-et-nom-croissant)
  - [Afficher uniquement le nom, le prénom et le nombre d'enfants pour les femmes](#afficher-uniquement-le-nom-le-prénom-et-le-nombre-denfants-pour-les-femmes)
  - [Afficher les salariés de la filiale "FSC"](#afficher-les-salariés-de-la-filiale-fsc)
  - [Afficher les salariés des tranches d'âge de 3 à 6](#afficher-les-salariés-des-tranches-dâge-de-3-à-6)
  - [Afficher le nom et le prénom des salariés gagnant entre 1000 et 1500 €](#afficher-le-nom-et-le-prénom-des-salariés-gagnant-entre-1000-et-1500-€)
  - [Qui sont les salariés de Paris travaillant au deuxième étage ?](#qui-sont-les-salariés-de-paris-travaillant-au-deuxième-étage-)
  - [Existe-t-il des salariés de Paris gagnant plus de 3000 € ?](#existe-t-il-des-salariés-de-paris-gagnant-plus-de-3000-€-)
  - [Afficher les salaires des "Olivier" de cette entreprise](#afficher-les-salaires-des-olivier-de-cette-entreprise)
  - [Y'a-t-il des salariés ayant le même prénom que vous ou le même nom que vous ?](#ya-t-il-des-salariés-ayant-le-même-prénom-que-vous-ou-le-même-nom-que-vous-)
  - [bis. Afficher les salariés ayant un "Z" comme deuxième lettre du nom](#bis-afficher-les-salariés-ayant-un-z-comme-deuxième-lettre-du-nom)
  - [Le salaire moyen en France étant de 1632 €, afficher le nom, prénom, salaire et différence avec le salaire moyen pour chaque salarié](#le-salaire-moyen-en-france-étant-de-1632-€-afficher-le-nom-prénom-salaire-et-différence-avec-le-salaire-moyen-pour-chaque-salarié)
  - [Afficher le nom, prénom, numéro de téléphone, âge des femmes dont le prénom fini par "A"](#afficher-le-nom-prénom-numéro-de-téléphone-âge-des-femmes-dont-le-prénom-fini-par-a)
  - [Afficher la liste des salariés dont l'anniversaire tombe ce mois](#afficher-la-liste-des-salariés-dont-lanniversaire-tombe-ce-mois)
  - [Y'a t - il des salariés dont l'anniversaire tombe en même temps que vous ?](#ya-t---il-des-salariés-dont-lanniversaire-tombe-en-même-temps-que-vous-)

<!-- /TOC -->

## Exercices

### 1. Trier les salariés par poste et par nom

```sql
SELECT *
FROM dump
ORDER BY poste, nom;
```

### 2. Trier les salariés par Age décroissant et nom croissant

```sql
SELECT *
FROM dump
ORDER BY age DESC, nom;
```

### 3. Afficher uniquement le nom, le prénom et le nombre d'enfants pour les femmes

```sql
SELECT nom, prénom, n_enfants
FROM dump
WHERE sexe = 'femme';
```

### 4. Afficher les salariés de la filiale "FSC"

```sql
SELECT *
FROM dump
WHERE filiale = 'FSC';
```

### 5. Afficher les salariés des tranches d'âge de 3 à 6

```sql
SELECT *
FROM dump
WHERE tranche_age BETWEEN 3 AND 6;
```

### 6. Afficher le nom et le prénom des salariés gagnant entre 1000 et 1500 €

```sql
SELECT nom, prenom
FROM dump
WHERE salaire BETWEEN 1000 AND 1500;
```

### 7. Qui sont les salariés de Paris travaillant au deuxième étage ?

```sql
SELECT nom, prenom
FROM dump
WHERE site = 'Paris'
    AND etage = 2;
```

### 8. Existe-t-il des salariés de Paris gagnant plus de 3000 € ?

```sql
SELECT *
FROM dump
WHERE site = 'Paris'
    AND salaire > 3000;
```

### 9. Afficher les salaires des "Olivier" de cette entreprise

```sql
SELECT nom, prenom, salaire
FROM dump
WHERE prenom = 'olivier';
```

### 10. Y'a-t-il des salariés ayant le même prénom que vous ou le même nom que vous ?

```sql
SELECT *
FROM dump
WHERE prenom = 'k_vin'
    OR nom = 'paulmier';
```

### 10 bis. Afficher les salariés ayant un "Z" comme deuxième lettre du nom

```sql
SELECT *
FROM dump
WHERE nom LIKE '_Z%';
```

### 11. Le salaire moyen en France étant de 1632 €, afficher le nom, prénom, salaire et différence avec le salaire moyen pour chaque salarié

```sql
SELECT nom, prenom, salaire, ROUND(salaire - 1632, 2) AS diff_salaire_moyen
FROM dump;
```

### 12. Afficher le nom, prénom, numéro de téléphone, âge des femmes dont le prénom fini par "A"

```sql
SELECT nom, prenom, telephone, age
FROM dump
WHERE sexe = 'femme'
    AND prenom LIKE '%A';
```

### 13. Afficher la liste des salariés dont l'anniversaire tombe ce mois

```sql
SELECT *
FROM dump
WHERE MONTH(date_naissance) = MONTH(NOW());
```

### 14. Y'a t - il des salariés dont l'anniversaire tombe en même temps que vous ?

```sql
SELECT *
FROM dump
WHERE date_naissance = '2000-01-01';
```
