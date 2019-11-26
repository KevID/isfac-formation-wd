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
  PRIMARY KEY (`n°Action`),
  KEY `id_FichePanne` (`id_FichePanne`),
  KEY `id_Operateur` (`id_Operateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action1` FOREIGN KEY (`id_FichePanne`) REFERENCES `fichepanne` (`n°FichePanne`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `action2` FOREIGN KEY (`id_Operateur`) REFERENCES `operateur` (`n°Operateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
```