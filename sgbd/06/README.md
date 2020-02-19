# TP Benchmark & Optimisation

### R01

```sql
SELECT *
FROM villes
WHERE ville_id = 15761;
```

- 0,0164
- 0,0023
- 0,0018

- 0,0020
- 0,0013
- 0,0041


### R02

```sql
SELECT *
FROM villes
WHERE ville_nom = 'Amboise';
```

- 0,1003
- 0,1395
- 0,0459

- 0,0017
- 0,0016
- 0,0020


### R03

```sql
SELECT ville_id, ville_nom
FROM villes
WHERE ville_departement = 86;
```

- 0,1065
- 0,0500
- 0,1094


### R04

```sql
SELECT ville_id, ville_nom, ville_population_2012
FROM villes
ORDER BY ville_population_2012 DESC;
```

- 0,0502
- 0,0512
- 0,0582 (0,0532)

- 0,0457
- 0,0600
- 0,0444 (0,0500) -6%

### R05

```sql
SELECT ville_id, ville_nom, ville_population_2012
FROM villes
WHERE ville_departement = 86
    AND ville_population_2012 > 600;
```

- 0,1112
- 0,0621
- 0,0447 (0,0726)

- 0,0782
- 0,0564
- 0,1380 (0,0908) +25%


### R06

```sql
UPDATE villes
SET ville_slug = 'couerton-au-perche',
	ville_nom = 'COUERTON-AU-PERCHE',
    ville_nom_simple = 'couerton-au-perche',
    ville_nom_reel = 'Couerton-au perche'
WHERE ville_id = 15761;
```

- 0,0099
- 0,0138
- 0,0007 (0,0081)

- 0,0013
- 0,0007
- 0,0019 (0,0010) -88%


### R07

```sql
UPDATE villes
SET ville_population_2012 = (ville_population_2012 * 1.1);
```

- 1,8540
- 5,7757
- 5,0645 (4,2314)

- 6,5667
- 6,6380
- 2,5603 (5,2550) +23,48%


### R08

```sql
DELETE FROM villes
WHERE ville_departement IN ('37', '49', '58');
```

- 0,1218
- 0,1072
- 0,0559 (0,0949)

- 0,0030
- 0,0020
- 0,0026 (0,0025) -97%


### R09

```sql
SELECT ville_departement, ville_nom, ville_population_2012
FROM villes
WHERE ville_nom_simple LIKE '%z%';
```

- 0,0091
- 0,0047
- 0,0102 (0,0080)

- 0,0082
- 0,0093
- 0,0105 (0,0093) +16%


### R10

```sql
SELECT ville_departement, ville_nom, ville_population_2012
FROM villes
WHERE ville_nom LIKE '%z%';
```

- 0,0095
- 0,0050
- 0,0097 (0,0081)

- 0,0091
- 0,0097
- 0,0047 (0,0078) -4%


### R11

```sql
SELECT ville_departement, count(ville_id) AS nb_villes
FROM villes
GROUP BY ville_departement;
```

- 0,1772
- 0,4770
- 0,5099 (0,3680)

- 0,5867
- 0,2548
- 0,2524 (0,3645) -1%


### R12

```sql
SELECT ville_code_postal, count(ville_id) AS nb_villes
FROM villes
GROUP BY ville_code_postal;
```

- 0,3205
- 0,1747
- 0,3310 (0,2754)

- 0,0057
- 0,0117
- 0,0122 (0,0099) -96%


### R13

```sql
SELECT v.ville_nom, count(c.nom) AS nb_clients
FROM clients c
	INNER JOIN villes v ON c.id_ville = v.ville_id
GROUP BY c.id_ville;
```

- 0,0476
- 0,0162
- 0,0411 (0,0349)

- 0,0104
- 0,0057
- 0,0105 (0,0089) -75%

## Optimisation de la bd_bench

Appliquer les indes suivants:
- Index simple sur ville_nom: 1,9159 s
- Index unique sur ville_slug: 3,9892 s
- Index simple sur population_2012: 4,5700
- Index simple sur population_2010: 4,9314
- Index simple sur departement: 2,7618
- Index simple sur code_postal: 2,1544
- Index simple sur client.id_ville:


## Benchmark du déversement de données

```sql
INSERT INTO villes2 SELECT * FROM villes;
```

- Déverser les données de la table villes vers ville2: 1,1860 s
- Déverser les données de la table villes vers ville3: 2,7976 s


## Test de charge
