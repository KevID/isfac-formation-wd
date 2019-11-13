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

## Exercices LEVEL 2

>Via phpmyadminAjoutezla table aurevoir( n°) et insérezdans celle-ci les valeurs ( 10,36,47,52,240)Ajoutezla table CODE(Codematr, libellé) et inserezdans celle-çi les valeurs(1, Marié), (2, Veuf/veuve), (3,Seul),(4, Divorcé)
>Elaborer ensuite les vues suivantes:

### 1. Nom et prénom des salariés mariés

```sql
CREATE VIEW exo1
AS
SELECT matricule, nom, prenom
FROM dump d
    INNER JOIN code c ON d.CodeMatr = c.codematr
WHERE c.libellé = 'Marié';
```

### 2. Nom, prénom, date de naissance des salariés dont l’identifiant figure dans la table aurevoir

```sql
CREATE VIEW exo2
AS
SELECT matricule, nom, prenom, date_naissance
FROM dump
WHERE matricule IN (SELECT number FROM aurevoir);
```

### 3. Liste des salariés ne faisant pas partie de la liste des id de la table aurevoir

```sql
CREATE VIEW exo3
AS
SELECT matricule, nom, prenom, date_naissance
FROM dump
WHERE matricule NOT IN (SELECT number FROM aurevoir);
```

### 4. Liste des salariés qui sont soit des niçois gagnant plus de 3000 € par mois, soit des parisiens gagnant entre 2000 et 2500 € par mois

```sql
CREATE VIEW exo4
AS
SELECT  matricule, nom, prenom, site, salaire
FROM dump
WHERE (site = 'Nice' AND salaire > 3000)
    OR (site = 'Paris' AND salaire BETWEEN 2000 AND 2500);
```

### 5. Calculer le nombre de salariés par tranche d’Age

```sql
CREATE VIEW exo5
AS
SELECT tranche_age, count(tranche_age) AS nb_salaries
FROM dump
GROUP BY tranche_age
ORDER BY tranche_age;
```

### 6. Calculer le salaire moyen, min et max par poste

```sql
CREATE VIEW exo6
AS
SELECT  poste,
        ROUND(AVG(salaire), 2) AS salaire_moyen,
        ROUND(MIN(salaire), 2) AS salaire_min,
        ROUND(MAX(salaire), 2) AS salaire_max
FROM dump
GROUP BY poste
ORDER BY poste;
```

### 7. Afficher le nombre de salariésseuls ou divorcés

```sql
CREATE VIEW exo7
AS
SELECT matricule, nom, prenom
FROM dump d
    INNER JOIN code c ON d.CodeMatr = c.codematr
WHERE c.libellé IN ('Marié', 'Seul');
```

### 8. Trouver le prénom le plus représenté dans cette entreprise

```sql
CREATE VIEW exo8
AS
SELECT prenom
FROM dump
GROUP BY prenom
HAVING COUNT(prenom) = (SELECT count(prenom)
                            FROM dump
                            GROUP BY prenom
                            ORDER BY COUNT(prenom) DESC
                            LIMIT 1
                        )
ORDER BY prenom;
```

### 9. Trouver le prénom le plus représenté dans cette entreprise

```sql
CREATE VIEW exo9
AS
SELECT matricule, nom, prenom
FROM exo1
WHERE prenom IN ('Jeanine', 'Jacques');
```

### 10. Dans la vue n°1, ne garder que les techniciens

```sql
CREATE VIEW exo10
AS
SELECT m.matricule, m.nom, m.prenom
FROM exo1 m
    INNER JOIN dump d ON m.matricule = d.matricule
WHERE poste = 'Technicien';
```

### 11. Afficher le poste qui permet, en moyenne, de gagner le plus

```sql
CREATE VIEW exo11
AS
SELECT poste, salaire_moyen
FROM exo6
ORDER BY salaire_moyen DESC
LIMIT 1;
```

### 12. Afficher le nombre de salariés par nombre d’enfants

```sql
CREATE VIEW exo12
AS
SELECT n_enfants, count(matricule) AS nb_salaries
FROM dump
GROUP BY n_enfants
ORDER BY n_enfants;
```
