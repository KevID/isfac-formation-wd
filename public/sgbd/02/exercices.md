# Titre DWWM - Table Salariés

**Elaborer les requêtes suivantes et mémoriser leur définition :**
1. Trier les salariés par poste et par nom 
2. Trier les salariés par Age décroissant et nom croissant 
3. Afficher uniquement le nom, le prénom et le nombre d'enfants pour les femmes 
4. Afficher les salariés de la filiale "FSC"
5. Afficher les salariés des tranches d'âge de 3 à 6 
6. Afficher le nom et le prénom des salariés gagnant entre 1000 et 1500 € 
7. Qui sont les salariés de Paris travaillant au deuxième étage ? 
8. Existe-t-il des salariés de Paris gagnant plus de 3000 € ? 
9. Afficher les salaires des "Olivier" de cette entreprise.
10. Y'a-t-il des salariés ayant le même prénom que vous ou le même nom que vous?<br> 
Afficher les salariés ayant un "Z" comme deuxième lettre du nom 
11. Le salaire moyen en France étant de 1632 €, afficher le nom, prénom, salaire et différence avec le salaire moyen pour chaque salarié 
12. Afficher le nom, prénom, numéro de téléphone, âge des femmes dont le prénom fini par "A" 
13. Afficher la liste des salariés dont l'anniversaire tombe ce mois 
14. Y'a t - il des salariés dont l'anniversaire tombe en même temps que vous ?

# Exercices

## 1
`SELECT *
FROM dump
ORDER BY poste, nom;
`

## 2
`SELECT *
FROM dump
ORDER BY age DESC, nom;
`

## 3
`SELECT nom, prénom, n_enfants
FROM dump
WHERE sexe = 'femme';
`

## 4
`SELECT *
FROM dump
WHERE filiale = 'FSC';
`

## 5
`SELECT *
FROM dump
WHERE tranche_age BETWEEN 3 AND 6;
`

## 6
`SELECT nom, prenom
FROM dump
WHERE salaire BETWEEN 1000 AND 1500;
`

## 7
`SELECT nom, prenom
FROM dump
WHERE site = 'Paris'
    AND etage = 2;
`

## 8
`SELECT *
FROM dump
WHERE site = 'Paris'
    AND salaire > 3000;
`

## 9
`SELECT nom, prenom, salaire
FROM dump
WHERE prenom = 'olivier';
`

## 10
`SELECT *
FROM dump
WHERE prenom = 'k_vin'
    OR nom = 'paulmier';
`

## 10 bis
`SELECT *
FROM dump
WHERE nom LIKE '_Z%';
`

## 11
`SELECT nom, prenom, salaire, ROUND(salaire - 1632, 2) AS diff_salaire_moyen
FROM dump;
`

## 12
`SELECT nom, prenom, telephone, age
FROM dump
WHERE sexe = 'femme'
    AND prenom LIKE '%A';
`

## 13
`SELECT *
FROM dump
WHERE MONTH(date_naissance) = MONTH(NOW());
`

## 14
`SELECT *
FROM dump
WHERE date_naissance = '2000-01-01';
`