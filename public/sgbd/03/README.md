# Exercice sur les requetes – Base MACIF 
 
    Projection, Selection, tri, fonctions

    1. Liste des noms,prenoms et ancienneté des preparateurs trié par nom croissant
    2. Liste des noms,prenoms et ancienneté des preparateurs trié par ancienneté decroissante,nom croissant
    3. Nom des preparateurs gagnant au moins 1400 € par mois, triés par nom croissant
    4. Nom des preparateurs gagnant entre 1000 et 1400 €
    5. Toutes les informations des preparateurs de plus de 8 ans d’ancienneté gagnant moins de 1400 €
    6. Nom,Salaire et ancienneté des preparateurs ayant une ancienneté de 3, 5 ou 10 ans
    7. Nom des salariés ayant soit – de 5 ans d’ancienneté, soit un salaire <1500 €
    8. Afficher le nom et les 2 premieres lettres du prénom des preparateurs ( utilisation de la fonction SQL LEFT) 
    
    Jointures

    1. Afficher les ref palette et les types des palettes de plus de 100kg
    2. Afficher les informations des palettes en bois de + de 300 kg et contenant au plus 15 colis
    3. Afficher le nom des preparateurs qui sont intervenus sur la palette ABNS71772
    4. Afficher les refpalette,poids et nombre de colis des palettes stockées dans l’entrepot 1 
    5. Afficher les ref et poids des palettes stockées à un emplacement ou elles depassent la charge maximum
    6. RefPalette, NbColis,  Type, CodeEmplacement, Code_Rack, LibelléEntrepot des palettes sur lesquelles une intervention à eu lieu en juillet 2015
    7. Liste des palettes de plus de 100 par 100 mouvementées par un preparateur dont le nom commence par « th » 
    
    Regroupement

    1. Afficher le nombre total de palette referencées
    2. Afficher le salaire moyen des preparateurs
    3. Liste du nombre de palette par nombre de colis
    4. Liste du nombre de palette par entrepot
    5. Indiquer le nombre de palette par type classées en décroissant
    6. Liste du nombre de transport par palette
    7. Liste des entrepots avec capacité, nombre de palettes actuellement stockées 
    
    Requètes parametrées

    1. Afficher les informations d’une palette dont la référence est rentrée par l’utilisateur
    2. Afficher les transports de palette compris dans une borne chronologique indiquée par l’utilisateur
    3. Indiquer le nombre d’enlevement réalisés par un transporteur dont le code est saisi par l’utilisateur

# Projection, sélection, tri, fonctions (exercices)

## 1
`SELECT nompreparateur, prenompreparateur, ancienneté
FROM preparateur
ORDER BY nompreparateur, prenompreparateur;
`

## 2
`SELECT nompreparateur, prenompreparateur, ancienneté
FROM preparateur
ORDER BY ancienneté DESC, nompreparateur, prenompreparateur;
`

## 3
`SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE salairebrut >= 1400
ORDER BY nompreparateur, prenompreparateur;
`

## 4
`SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE salairebrut BETWEEN 1000 AND 1400
ORDER BY nompreparateur, prenompreparateur;
`

## 5
`SELECT *
FROM preparateur
WHERE ancienneté >= 8
    AND salairebrut < 1400;
`

## 6
`SELECT nompreparateur, prenompreparateur, salairebrut, ancienneté
FROM preparateur
WHERE ancienneté IN (3, 5, 10);
`

## 7
`SELECT nompreparateur, prenompreparateur
FROM preparateur
WHERE ancienneté < 5
    OR salairebrut < 1500;
`

## 8
`SELECT nomrpeparateur, LEFT(prenompreparateur, 2)
FROM preparateur;
`

# Jointures (exercices)

## 1
`SELECT refpalette, libellétype
FROM palette p, type t
WHERE p.code_type = t.code_type
    AND poids < 100;
`
## 2
`SELECT *
FROM palette p, type t
WHERE p.code_type = t.code_type
    AND matière = 'bois'
    AND poids > 300
    AND nbcolis <= 15;
`

## 3
`SELECT nompreparateur, prenompreparateur
FROM preparateur p, intervention i
WHERE p.code_preparateur = i.code_preparateur
    AND refpalette = 'ABNS71772';
`

## 4
`SELECT refpalette, poids, nbcolis
FROM palette p, emplacement e, rack r
WHERE p.code_emplacement = e.code_emplacement
    AND e.id_rack = r.id_rack
    AND code_entrepot = 1;
`

## 5
`SELECT refpalette, poids, chargemax, p.code_emplacement
FROM  palette p, emplacement e
WHERE p.code_emplacement = e.code_emplacement
    AND poids > chargemax;
`

## 6
`SELECT p.refpalette, nbcolis, libellétype, p.code_emplacement, e.id_rack, ent.libellé
FROM palette p, type t, emplacement e, rack r, entrepot ent, intervention i
WHERE p.code_type = t.code_type
    AND p.code_emplacement = e.code_emplacement
    AND e.id_rack = r.id_rack
    AND r.code_entrepot = ent.code_entrepot
    AND i.refpalette = p.refpalette
    AND YEAR(date_inter) = 2015
    AND MONTH(date_inter) = 7;
`

## 7
`SELECT pa.refpalette, nompreparateur
FROM palette pa, type t, intervention i, preparateur pr
WHERE pa.code_type = t.code_type
    AND pa.refpalette = i.refpalette
    AND i.code_preparateur = pr.code_preparateur
    AND largeur > 100
    AND longueur > 100
    AND LEFT(nompreparateur, 2) = 'th';
`

