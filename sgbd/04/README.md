# EDC - QUAL

| Action |
|:---:|
|(key) n°Action|
|LibelléAction|
|DateAction|
|TempsAction|
|id_Fichepanne|
|id_Operateur|

```sql
--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `n°Action` int(11) NOT NULL AUTO_INCREMENT,
  `LibelléAction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateAction` date NOT NULL,
  `TempsAction` decimal(10,0) NOT NULL,
  `id_FichePanne` int(11) NOT NULL,
  `id_Operateur` int(11) NOT NULL,
  PRIMARY KEY (`n°Action`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;
```