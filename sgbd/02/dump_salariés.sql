-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Septembre 2017 à 15:15
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salariés`
--

-- --------------------------------------------------------

--
-- Structure de la table `dump`
--

CREATE TABLE `dump` (
  `NOM` varchar(17) DEFAULT NULL,
  `PRENOM` varchar(14) DEFAULT NULL,
  `TELEPHONE` varchar(4) DEFAULT NULL,
  `Filiale` varchar(7) DEFAULT NULL,
  `SITE` varchar(10) DEFAULT NULL,
  `Etage` varchar(6) DEFAULT NULL,
  `salaire` float DEFAULT NULL,
  `SEXE` varchar(10) DEFAULT NULL,
  `POSTE` varchar(24) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `AGE` int(2) DEFAULT NULL,
  `CodeMatr` int(1) DEFAULT NULL,
  `tranche_age` int(2) DEFAULT NULL,
  `n_enfants` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dump`
--

INSERT INTO `dump` (`NOM`, `PRENOM`, `TELEPHONE`, `Filiale`, `SITE`, `Etage`, `salaire`, `SEXE`, `POSTE`, `date_naissance`, `AGE`, `CodeMatr`, `tranche_age`, `n_enfants`) VALUES
('SAPIENCE', 'Pierre', '3035', 'AGL', 'Lille', '1', 2756.77, 'homme', 'Comptable', '1970-03-07', 42, 2, 5, 3),
('BENSIMON', 'Elisabeth', '3287', 'FSC', 'Lille', '3', 2193.37, 'femme', 'Technicien', '1951-04-20', 61, 4, 9, 4),
('TANG', 'Armelle', '3733', 'FSC', 'Lille', '1', 1547.41, 'femme', 'Technicien', '1960-10-01', 52, 4, 7, 2),
('SONG', 'Aline', '3980', 'AGL', 'Lille', '2', NULL, 'femme', 'Comptable', '1964-03-13', 48, 1, 6, 2),
('BRELEUR', 'Jacques', '3002', 'AG', 'Nice', '1', 3168.2, 'homme', 'Commercial', '1981-12-23', 31, 2, 3, 4),
('REBY-FAYARD', 'Luc', '3004', 'AG', 'Nice', '2', 2230.68, 'homme', 'Technicien', '1959-11-14', 53, 1, 7, 3),
('BEDO', 'Jean', '3008', 'ONF', 'Nice', '3', 1748.23, 'homme', 'Technicien', '1982-08-30', 30, 1, 3, 4),
('LEKA', 'Bernadette', '3010', 'FSC', 'Nice', '2', 2791.97, 'femme', 'Technicien', '1973-03-01', 39, 1, 5, 3),
('BERTOLO', 'Claudie', '3012', 'CO', 'Nice', '2', 1926.01, 'femme', 'Technicien', '1957-04-14', 55, 1, 8, 0),
('POUYADOU', 'Josette', '3015', 'AG', 'Nice', '1', 3059.68, 'femme', 'Commercial', '1965-01-04', 47, 4, 6, 1),
('VIDON', 'Marie-Louise', '3018', 'FSC', 'Nice', '2', 1920.25, 'femme', 'Technicien', '1949-12-12', 63, 1, 9, 7),
('CAILLOT', 'Jocelyne', '3021', 'FSC', 'Nice', '3', 2838.86, 'femme', 'Technicien', '1960-01-20', 52, 2, 7, 1),
('BINET', 'Jacques', '3023', 'CO', 'Nice', '2', 2469.69, 'homme', 'Technicien', '1985-07-20', 27, 1, 2, 4),
('SCHUSTER', 'Bernadette', '3031', 'FSC', 'Nice', '3', 2686.97, 'femme', 'Technicien', '1957-03-25', 55, 2, 8, 2),
('AGAPOF', 'Brigitte', '3033', 'CO', 'Nice', '1', 1169.19, 'femme', 'Technicien', '1980-03-21', 32, 3, 3, 2),
('SINSEAU', 'Annie', '3051', 'AG', 'Nice', '3', 2562.24, 'femme', 'Technicien', '1960-03-03', 52, 1, 7, 4),
('KTORZA', 'Juliette', '3056', 'FSC', 'Nice', '2', 2074.34, 'femme', 'Technicien', '1987-03-05', 25, 3, 2, 3),
('MERLAUD', 'Jacqueline', '3057', 'AG', 'Nice', '1', 1107.17, 'femme', 'Technicien', '1957-11-22', 55, 3, 8, 0),
('CHEHMAT', 'Jocelyne', '3062', 'FSC', 'Nice', '1', 2199.82, 'femme', 'Technicien', '1951-03-10', 61, 3, 9, 3),
('VASSEUR', 'Christiane', '3064', 'FSC', 'Nice', '2', NULL, 'femme', 'Technicien', '1964-04-26', 48, 4, 6, 0),
('PAVARD', 'Annie', '3073', 'FSC', 'Nice', '1', 2852.01, 'femme', 'Commercial', '1968-02-02', 44, 1, 6, 0),
('HARAULT', 'Armelle', '3078', 'FSC', 'Nice', '3', 2014.99, 'femme', 'Technicien', '1962-04-18', 50, 4, 7, 3),
('BOUN', 'Jeanine', '3080', 'FSC', 'Nice', '2', 2626.74, 'femme', 'Technicien', '1968-12-31', 44, 1, 5, 1),
('VIAND', 'Monique', '3081', 'FSC', 'Nice', '1', 1771, 'femme', 'Technicien', '1951-02-13', 61, 1, 9, 1),
('DEAUCOURT', 'Christine', '3082', 'CO', 'Nice', '1', 3466.33, 'femme', 'Assistant', '1958-09-28', 54, 4, 7, 3),
('GIRON', 'Anne-Marie', '3085', 'AG', 'Nice', '1', 3343.02, 'femme', 'Assistant', '1964-03-19', 48, 2, 6, 3),
('MARTAUD', 'Daniel', '3086', 'FSC', 'Nice', '1', 1187.11, 'homme', 'Technicien', '1963-07-28', 49, 4, 6, 4),
('BLANCHOT', 'Guy', '3089', 'FSC', 'Nice', '1', 2908.33, 'homme', 'Technicien', '1958-05-30', 54, 4, 8, 2),
('BOULLICAUD', 'Jean-Paul', '3095', 'FSC', 'Nice', '1', 2860.15, 'homme', 'Technicien', '1979-10-27', 33, 1, 3, 0),
('ZAOUI', 'Liliane', '3096', 'FSC', 'Nice', '3', 1543.44, 'femme', 'Technicien', '1953-10-06', 59, 1, 8, 1),
('TAMBURRINI', 'Marie-Claire', '3102', 'FSC', 'Nice', '2', 1859.35, 'femme', 'Technicien', '1978-11-18', 34, 1, 3, 0),
('LEBAS', 'Eliane', '3105', 'CO', 'Nice', '2', 2597.77, 'femme', 'Technicien', '1956-03-14', 56, 4, 8, 0),
('DELAMARRE', 'Jean-Luc', '3108', 'CO', 'Nice', '2', 1192.09, 'homme', 'Technicien', '1976-05-11', 36, 4, 4, 1),
('MIANET', 'Georges', '3110', 'FSC', 'Nice', '1', 3189.36, 'homme', 'Commercial', '1954-04-22', 58, 4, 8, 3),
('BOUSLAH', 'Fabien', '3111', 'AG', 'Nice', '2', 1590.5, 'homme', 'Technicien', '1962-05-12', 50, 2, 7, 1),
('FRISA', 'Brigitte', '3112', 'FSC', 'Nice', '1', 1135.08, 'femme', 'Technicien', '1979-06-15', 33, 4, 3, 0),
('DOUCOURE', 'Jean-Jacques', '3114', 'ONF', 'Nice', '2', 1238.46, 'homme', 'Technicien', '1980-12-28', 32, 2, 3, 4),
('MERCIER', 'Evelyne', '3117', 'AG', 'Nice', '2', 3605.91, 'femme', 'Assistant', '1951-10-18', 61, 1, 9, 3),
('FAVRE', 'Dany', '3118', 'AG', 'Nice', '2', 2301.48, 'femme', 'Technicien', '1957-03-07', 55, 2, 8, 4),
('MARTIN', 'Franz', '3120', 'CO', 'Nice', '2', 2101.97, 'homme', 'Technicien', '1954-07-26', 58, 2, 8, 3),
('ROSAR', 'Georgette', '3121', 'CO', 'Nice', '3', 2352.81, 'femme', 'Technicien', '1964-06-12', 48, 2, 6, 0),
('FERRAND', 'Danielle', '3122', 'AG', 'Nice', '3', 2339.17, 'femme', 'Technicien', '1985-07-10', 27, 3, 2, 0),
('LY', 'Jean-Claude', '3123', 'ONF', 'Nice', '1', 2380.46, 'homme', 'Technicien', '1980-01-13', 32, 1, 3, 3),
('REVERDITO', 'Marie-Jeanne', '3125', 'SNPO', 'Nice', '1', 1636.59, 'femme', 'Technicien', '1962-04-11', 50, 1, 7, 0),
('GOYER', 'Brigitte', '3126', 'FSC', 'Nice', '3', 2080.72, 'femme', 'Technicien', '1964-01-27', 48, 4, 6, 0),
('AZOURA', 'Marie-France', '3127', 'DXO', 'Nice', '1', 3502.16, 'femme', 'Assistant', '1965-04-10', 47, 4, 6, 4),
('PERRUCHON', 'Fabrice', '3128', 'CO', 'Nice', '1', 1298.85, 'homme', 'Technicien', '1978-02-17', 34, 2, 4, 4),
('CHARDON', 'Annick', '3129', 'AG', 'Nice', '3', 2917.03, 'femme', 'Commercial', '1982-08-18', 30, 2, 3, 0),
('LADD', 'Claude', '3130', 'CO', 'Nice', '2', 1937.18, 'femme', 'Technicien', '1963-11-07', 49, 2, 6, 0),
('MARINIER', 'Marcel', '3131', 'FSC', 'Nice', '3', 2826.19, 'homme', 'Technicien', '1967-04-30', 45, 3, 6, 4),
('AMELLAL', 'Henri', '3132', 'CO', 'Nice', '2', 3725.87, 'homme', 'Sous-Directeur', '1951-12-23', 61, 1, 9, 2),
('POTRIQUET', 'Claudette', '3139', 'CO', 'Nice', '1', 2240.31, 'femme', 'Technicien', '1956-09-22', 56, 3, 8, 3),
('GUITTON', 'Francis', '3140', 'CO', 'Nice', '3', 1571.31, 'homme', 'Technicien', '1983-04-26', 29, 4, 3, 0),
('PESNOT', 'Laurent', '3142', 'CO', 'Nice', '1', 1380.55, 'homme', 'Technicien', '1949-07-01', 63, 1, 9, 4),
('GUILLE', 'Jean', '3143', 'ONF', 'Nice', '2', 1845.75, 'homme', 'Technicien', '1956-01-22', 56, 4, 8, 2),
('KONGOLO', 'Bernard', '3144', 'FSC', 'Nice', '3', 1143.38, 'homme', 'Technicien', '1980-09-11', 32, 4, 3, 5),
('GEIL', 'Dominique', '3145', 'CO', 'Nice', '2', 3366.62, 'homme', 'Assistant', '1967-05-04', 45, 3, 6, 3),
('BACH', 'Ginette', '3147', 'CO', 'Nice', '1', 3208.89, 'femme', 'Assistant', '1963-01-18', 49, 2, 7, 2),
('JOLY', 'Daniel', '3156', 'CO', 'Nice', '2', 3478.79, 'homme', 'Assistant', '1985-07-11', 27, 1, 2, 1),
('FEDON', 'Marie-Claude', '3157', 'DXO', 'Nice', '2', 1310.71, 'femme', 'Technicien', '1958-01-19', 54, 4, 8, 3),
('CAPRON', 'Claude', '3162', 'CO', 'Nice', '1', 2467.72, 'homme', 'Technicien', '1949-08-21', 63, 1, 9, 4),
('ROGUET', 'Daniel', '3166', 'AG', 'Nice', '1', 2780.5, 'homme', 'Technicien', '1980-01-09', 32, 2, 3, 0),
('CLAVERIE', 'Chantal', '3168', 'CO', 'Nice', '3', 2437.64, 'femme', 'Technicien', '1963-05-26', 49, 1, 7, 0),
('KAC', 'Christine', '3169', 'CO', 'Nice', '2', 1705.18, 'femme', 'Technicien', '1960-04-30', 52, 1, 7, 1),
('CHAUBEAU', 'Louis', '3171', 'FSC', 'Nice', '1', 3201.33, 'homme', 'Commercial', '1986-10-30', 26, 1, 2, 2),
('COHEN', 'Christian', '3173', 'FSC', 'Nice', '2', 2346.89, 'homme', 'Technicien', '1974-09-28', 38, 1, 4, 2),
('GOUILLON', 'Chantal', '3175', 'FSC', 'Nice', '1', 2102.69, 'femme', 'Technicien', '1969-08-23', 43, 3, 5, 2),
('ZOUC', 'Fred', '3185', 'CO', 'Nice', '3', 3318.48, 'homme', 'Commercial', '1961-10-06', 51, 2, 7, 4),
('ROULET', 'Christiane', '3185', 'FSC', 'Nice', '3', 1628.2, 'femme', 'Technicien', '1979-04-16', 33, 3, 3, 0),
('RAMBEAUD', 'Christian', '3198', 'CO', 'Nice', '2', 3254.44, 'homme', 'Assistant', '1965-12-22', 47, 1, 6, 2),
('CROMBEZ', 'Katherine', '3200', 'FSC', 'Nice', '3', 3032.25, 'femme', 'Commercial', '1981-09-14', 31, 1, 3, 1),
('GARCIA', 'Ghyslaine', '3243', 'CO', 'Nice', '1', 2885.42, 'femme', 'Technicien', '1950-09-05', 62, 3, 9, 4),
('CHHUOR', 'Anne-Marie', '3247', 'AG', 'Nice', '1', 3786.12, 'femme', 'Assistant', '1954-08-30', 58, 3, 8, 3),
('KARSENTY', 'Christian', '3248', 'FSC', 'Nice', '3', 1170.64, 'homme', 'Technicien', '1978-02-15', 34, 2, 4, 2),
('BARRANDON', 'Margaret', '3280', 'FSC', 'Nice', '1', 2092.73, 'femme', 'Technicien', '1989-01-23', 23, 3, 1, 2),
('VANNAXAY', 'Francis', '3333', 'CO', 'Nice', '3', 3417.98, 'homme', 'Assistant', '1965-07-07', 47, 4, 6, 5),
('PENALVA', 'Isabelle', '3413', 'ONF', 'Nice', '1', 3066.83, 'femme', 'Commercial', '1967-05-29', 45, 2, 6, 3),
('CHIFFLET', 'Ingrid', '3417', 'CO', 'Nice', '3', 3581.7, 'femme', 'Assistant', '1980-03-18', 32, 4, 3, 0),
('ANGONIN', 'Jean-Pierre', '3419', 'FSC', 'Nice', '2', 2706.82, 'homme', 'Technicien', '1962-09-17', 50, 4, 7, 1),
('GIRAUDO', 'Jean', '3448', 'ONF', 'Nice', '1', 1460.46, 'homme', 'Technicien', '1969-08-25', 43, 4, 5, 1),
('BOVERO', 'Gilbert', '3456', 'CO', 'Nice', '1', 3136.81, 'homme', 'Commercial', '1963-11-24', 49, 1, 6, 0),
('BENHAMOU', 'Jeanine', '3486', 'CO', 'Nice', '1', NULL, 'femme', 'Technicien', '1974-07-22', 38, 2, 4, 3),
('SCOTTI', 'Georgette', '3502', 'CO', 'Nice', '2', 2569.51, 'femme', 'Technicien', '1978-11-15', 34, 4, 3, 0),
('PIDERIT', 'Claude', '3552', 'FSC', 'Nice', '3', 3485.35, 'femme', 'Assistant', '1982-12-13', 30, 3, 3, 2),
('MONTFORT', 'Huong', '3584', 'ONF', 'Nice', '2', 2047.36, 'homme', 'Technicien', '1960-07-13', 52, 2, 7, 4),
('LE BARBANCHON', 'Jeanine', '3590', 'CO', 'Nice', '1', 3789.09, 'femme', 'Responsable du personnel', '1959-05-10', 53, 3, 7, 2),
('MARTEL', 'Jean-Claude', '3591', 'ONF', 'Nice', '3', 2278.63, 'homme', 'Technicien', '1977-10-04', 35, 1, 4, 2),
('DURAND', 'Jean-Pierre', '3592', 'CO', 'Nice', '1', 2073.22, 'homme', 'Technicien', '1977-05-16', 35, 3, 4, 1),
('BEAUMIER', 'Isabelle', '3595', 'AG', 'Nice', '1', 1475.67, 'femme', 'Technicien', '1975-12-07', 37, 1, 4, 3),
('MARTI', 'Anne', '3596', 'CHE', 'Nice', '3', 3539.04, 'homme', 'Assistant', '1975-01-25', 37, 2, 4, 1),
('TAN', 'Joelle', '3608', 'FSC', 'Nice', '1', 1754.08, 'femme', 'Technicien', '1985-06-25', 27, 3, 2, 0),
('GILLINGHAM', 'Magdeleine', '3617', 'FSC', 'Nice', '3', 1677.35, 'femme', 'Technicien', '1962-11-06', 50, 2, 7, 4),
('MOITA', 'Jeanne-Marie', '3626', 'Onconnu', 'Nice', '2', 1728.29, 'femme', 'Technicien', '1962-04-25', 50, 1, 7, 0),
('COUDERC', 'Marie-Louise', '3627', 'CO', 'Nice', '1', 3390.38, 'femme', 'Assistant', '1968-08-10', 44, 2, 5, 2),
('SAYAVONG', 'Henriette', '3628', 'FSC', 'Nice', '2', 2455.06, 'femme', 'Technicien', '1948-09-20', 64, 2, 9, 2),
('PEDRO', 'Francis', '3630', 'CO', 'Nice', '3', 2105.82, 'homme', 'Technicien', '1962-10-03', 50, 1, 7, 2),
('BAUDET', 'Arlette', '3632', 'FSC', 'Nice', '3', 3262.17, 'femme', 'Assistant', '1963-12-09', 49, 2, 6, 0),
('DURAND', 'Ginette', '3637', 'CO', 'Nice', '2', 3496.06, 'femme', 'Assistant', '1962-02-16', 50, 2, 7, 1),
('MARTIN', 'Laurent', '3638', 'ONF', 'Nice', '3', 1181.62, 'homme', 'Technicien', '1987-08-22', 25, 4, 2, 0),
('NAIMI', 'Chantal', '3644', 'FSC', 'Nice', '3', 1494.71, 'femme', 'Technicien', '1945-12-06', 67, 2, 10, 1),
('DONG', 'Huguette', '3647', 'ONF', 'Nice', '3', 2841.8, 'femme', 'Technicien', '1980-06-11', 32, 2, 3, 1),
('GHAFFAR', 'Ghislaine', '3657', 'CO', 'Nice', '3', 2768.25, 'femme', 'Technicien', '1964-05-28', 48, 4, 6, 3),
('ROLLAIS-LARROUSSE', 'Colette', '3663', 'AG', 'Nice', '2', 2531.22, 'femme', 'Technicien', '1967-12-09', 45, 1, 6, 1),
('CALVET', 'Christine', '3666', 'FSC', 'Nice', '2', 2958.14, 'femme', 'Commercial', '1979-03-31', 33, 3, 3, 4),
('DENIS', 'Claudine', '3669', 'AG', 'Nice', '2', 1441.93, 'femme', 'Technicien', '1968-12-09', 44, 2, 5, 2),
('ZIHOUNE', 'Christiane', '3671', 'FSC', 'Nice', '3', 1117.77, 'femme', 'Technicien', '1964-05-29', 48, 3, 6, 2),
('GUTFREUND', 'Dominique', '3675', 'CO', 'Nice', '1', 1269.05, 'femme', 'Technicien', '1967-06-10', 45, 2, 6, 3),
('KRIEF', 'Arlette', '3676', 'FSC', 'Nice', '1', 2470.96, 'femme', 'Technicien', '1965-11-30', 47, 2, 6, 1),
('HEURAUX', 'Catherine', '3685', 'FSC', 'Nice', '2', 3047.01, 'femme', 'Technicien', '1959-03-26', 53, 3, 7, 2),
('HUSETOWSKI', 'Franca', '3691', 'CO', 'Nice', '2', 1677.55, 'femme', 'Technicien', '1961-10-30', 51, 4, 7, 3),
('LANLO', 'Catherine', '3695', 'FSC', 'Nice', '2', 1442.89, 'femme', 'Technicien', '1979-10-06', 33, 1, 3, 3),
('BINET', 'Emmanuel', '3703', 'CO', 'Nice', '3', 2207.72, 'homme', 'Technicien', '1960-08-20', 52, 2, 7, 0),
('BERDUGO', 'Bernadette', '3710', 'FSC', 'Nice', '3', 2607.82, 'femme', 'Technicien', '1950-03-29', 62, 2, 9, 0),
('DEDIEU', 'Josselaine', '3712', 'FSC', 'Nice', '3', 3081.16, 'femme', 'Commercial', '1983-02-01', 29, 2, 3, 5),
('FABRE', 'Didier', '3717', 'CO', 'Nice', '2', 3557.7, 'homme', 'Directeur Financier', '1966-06-20', 46, 3, 6, 2),
('LEDOUX', 'Madeleine', '3722', 'FSC', 'Nice', '2', 1187.11, 'femme', 'Technicien', '1966-12-29', 46, 3, 6, 3),
('BARNAUD', 'Janine', '3725', 'ONF', 'Nice', '1', 2317.97, 'femme', 'Technicien', '1951-10-21', 61, 4, 9, 0),
('COUGET', 'Denis', '3730', 'ONF', 'Nice', '1', 2709.15, 'femme', 'Technicien', '1978-11-07', 34, 3, 3, 4),
('BIDAULT', 'Marie-Reine', '3733', 'FSC', 'Nice', '1', 1987.05, 'femme', 'Technicien', '1946-06-24', 66, 1, 10, 0),
('POISSON', 'Daniel', '3733', 'FSC', 'Nice', '2', 1641.49, 'homme', 'Technicien', '1959-02-27', 53, 4, 7, 4),
('ONG', 'Daniel', '3764', 'FSC', 'Nice', '2', 3316.47, 'homme', 'Assistant', '1963-04-10', 49, 4, 7, 4),
('AMELLAL', 'Jean-Marc', '3766', 'CO', 'Nice', '2', 1898.38, 'homme', 'Technicien', '1963-01-17', 49, 2, 7, 2),
('DEGRENDEL', 'Hubert', '3780', 'ONF', 'Nice', '1', 2911.46, 'homme', 'Technicien', '1982-09-22', 30, 1, 3, 1),
('CUCIT', 'Marie-Louise', '3794', 'CO', 'Nice', '3', 2122.25, 'femme', 'Technicien', '1977-11-12', 35, 1, 4, 0),
('DUROC', 'Annie', '3819', 'FSC', 'Nice', '3', 2614.4, 'femme', 'Technicien', '1955-12-22', 57, 3, 8, 1),
('DESHAYES', 'Isabelle', '3822', 'AG', 'Nice', '3', 1466.75, 'femme', 'Technicien', '1964-04-24', 48, 4, 6, 2),
('GONDOUIN', 'Bernard', '3824', 'FSC', 'Nice', '2', 2352.35, 'homme', 'Technicien', '1963-02-13', 49, 3, 7, 3),
('THOQUENNE', 'Lydia', '3864', 'CO', 'Nice', '3', 1315.41, 'femme', 'Technicien', '1956-08-03', 56, 2, 8, 0),
('PARINET', 'Jean-Louis', '3881', 'FSC', 'Nice', '2', 1090.57, 'homme', 'Technicien', '1980-01-05', 32, 2, 3, 4),
('SAILLANT', 'Marie-Claude', '3890', 'SNPO', 'Nice', '1', 2302.36, 'femme', 'Technicien', '1981-02-25', 31, 2, 3, 3),
('MARTIN', 'France', '3913', 'CO', 'Nice', '3', 1234.32, 'femme', 'Technicien', '1959-10-04', 53, 4, 7, 0),
('MARTIN', 'Jacqueline', '3943', 'AG', 'Nice', '3', 2202.93, 'femme', 'Technicien', '1946-06-11', 66, 1, 10, 0),
('FRETTE', 'Daniel', '3969', 'ONF', 'Nice', '3', 1340.26, 'homme', 'Technicien', '1978-10-14', 34, 2, 3, 1),
('UNG', 'Janick', '3982', 'FSC', 'Nice', '2', 1853.93, 'femme', 'Technicien', '1961-09-22', 51, 2, 7, 0),
('MARINIER', 'Christiane', '3986', 'FSC', 'Nice', '3', 3307.37, 'homme', 'Commercial', '1960-07-02', 52, 1, 7, 1),
('HERSELIN', 'Brigitte', '3991', 'FSC', 'Nice', '3', 1554.07, 'femme', 'Technicien', '1953-03-02', 59, 3, 9, 0),
('HERMANT', 'Jean-Pierre', '3998', 'CO', 'Nice', '1', 2786.03, 'homme', 'Technicien', '1954-11-17', 58, 3, 8, 1),
('DEFRANCE', 'Sylvanna', '3005', 'OGT', 'Paris', '2', NULL, 'femme', 'Technicien', '1959-05-25', 53, 1, 7, 0),
('BEETHOVEN', 'Michele', '3013', 'SNPO', 'Paris', '2', 1244.92, 'femme', 'Technicien', '1961-02-20', 51, 4, 7, 2),
('JOLIBOIS', 'Michele', '3022', 'SNPO', 'Paris', '3', 3421.28, 'femme', 'Technicien', '1970-05-18', 42, 3, 5, 3),
('ROTENBERG', 'Michel', '3024', 'DXO', 'Paris', '2', 2778.7, 'homme', 'Technicien', '1950-07-17', 62, 2, 9, 2),
('IMMEUBLE', 'Sylvie', '3040', 'OGT', 'Paris', '2', 1656, 'femme', 'Technicien', '1962-05-09', 50, 3, 7, 4),
('COMTE', 'Martin', '3054', 'AFO', 'Paris', '3', 1114.21, 'homme', 'Technicien', '1970-09-04', 42, 2, 5, 2),
('LEE', 'Monique', '3055', 'SNPO', 'Paris', '2', 1743.65, 'femme', 'Technicien', '1982-03-29', 30, 4, 3, 3),
('AZRIA', 'Maryse', '3060', 'SNPO', 'Paris', '3', 1954.11, 'femme', 'Technicien', '1964-01-20', 48, 1, 6, 2),
('LOBJOY', 'Patrick', '3063', 'AGL', 'Paris', '2', 1987.69, 'homme', 'Technicien', '1985-06-15', 27, 4, 2, 3),
('DELUC', 'Pascal', '3068', 'DXO', 'Paris', '1', 3531.83, 'homme', 'Technicien', '1960-08-30', 52, 1, 7, 1),
('BARRACHINA', 'Monique', '3070', 'SNPO', 'Paris', '1', 1879.18, 'femme', 'Technicien', '1971-06-02', 41, 3, 5, 1),
('ILARDO', 'Sylvie', '3071', 'SNPO', 'Paris', '2', 3374.94, 'femme', 'Technicien', '1979-05-14', 33, 3, 3, 1),
('ROLLAND', 'Nathalie', '3077', 'AGL', 'Paris', '1', 3130.04, 'femme', 'Technicien', '1982-06-16', 30, 2, 3, 2),
('RIEGERT', 'Raymonde', '3079', 'DXO', 'Paris', '1', 3007.81, 'femme', 'Technicien', '1955-02-05', 57, 1, 8, 4),
('QUINTIN', 'Martine', '3083', 'DXO', 'Paris', '1', 1399.29, 'femme', 'Technicien', '1978-09-10', 34, 1, 3, 1),
('AMARA', 'Nicolas', '3098', 'AGL', 'Paris', '2', 4790.22, 'homme', 'PDG', '1953-10-18', 59, 4, 8, 4),
('GEORGET', 'Philippe', '3099', 'AGL', 'Paris', '1', 1968.92, 'homme', 'Technicien', '1962-02-20', 50, 4, 7, 2),
('LE LOCH', 'Nicole', '3104', 'AGL', 'Paris', '2', 3639.7, 'femme', 'Comptable', '1955-02-28', 57, 1, 8, 1),
('DESROSES', 'Martine', '3119', 'AFO', 'Paris', '1', 3335.36, 'femme', 'Technicien', '1975-05-25', 37, 4, 4, 1),
('LEBRETON', 'Olivier', '3124', 'SNPO', 'Paris', '2', 1236.97, 'homme', 'Technicien', '1967-03-05', 45, 3, 6, 2),
('LOUAPRE', 'Louisette', '3135', 'SNPO', 'Paris', '2', 3231.57, 'femme', 'Technicien', '1953-05-17', 59, 3, 9, 4),
('FILLEAU', 'Sylvie', '3137', 'OGT', 'Paris', '2', 3291.84, 'femme', 'Technicien', '1965-12-14', 47, 2, 6, 1),
('DESTAIN', 'Roseline', '3152', 'DXO', 'Paris', '3', 2108.98, 'femme', 'Technicien', '1963-02-25', 49, 3, 7, 1),
('SOK', 'Myriam', '3155', 'SNPO', 'Paris', '3', 3541.04, 'femme', 'Sous-Directeur', '1980-03-22', 32, 3, 3, 4),
('SENILLE', 'Marthe', '3160', 'DXO', 'Paris', '1', 2783.17, 'femme', 'Technicien', '1965-06-20', 47, 2, 6, 0),
('ZANOTI', 'Monique', '3161', 'SNPO', 'Paris', '1', 2562.63, 'femme', 'Technicien', '1950-08-02', 62, 3, 9, 0),
('ROSSO', 'Robert', '3165', 'OGT', 'Paris', '2', 1564.68, 'homme', 'Technicien', '1967-08-18', 45, 2, 6, 3),
('BOUCHET', 'Micheline', '3170', 'DXO', 'Paris', '1', 2514.52, 'femme', 'Technicien', '1963-12-18', 49, 1, 6, 4),
('EL KAABI', 'Nicole', '3172', 'AGL', 'Paris', '2', 2220.73, 'femme', 'Technicien', '1964-02-23', 48, 4, 6, 3),
('RIDEAU', 'Paul', '3174', 'AGL', 'Paris', '2', 2979.86, 'homme', 'Technicien', '1979-10-30', 33, 3, 3, 4),
('FOURNOL', 'Michele', '3182', 'DXO', 'Paris', '1', 3372.12, 'femme', 'Technicien', '1977-10-24', 35, 1, 4, 1),
('REMUND', 'Marie-Marthe', '3182', 'AFO', 'Paris', '1', 1556.23, 'femme', 'Technicien', '1960-10-06', 52, 2, 7, 3),
('TAIEB', 'Michel', '3185', 'DXO', 'Paris', '2', 2722.07, 'homme', 'Technicien', '1954-09-22', 58, 4, 8, 2),
('ABSCHEN', 'Paul', '3186', 'AGL', 'Paris', '1', 2853.87, 'homme', 'Technicien', '1978-11-09', 34, 4, 3, 2),
('RENIER', 'Monique', '3208', 'DXO', 'Paris', '3', 1097.79, 'femme', 'Technicien', '1964-08-02', 48, 4, 6, 0),
('ALEMBERT', 'Jean', '3408', 'DXO', 'Paris', '1', 1366.01, 'homme', 'Technicien', '1978-01-10', 34, 1, 4, 4),
('POINSOT', 'Pierre', '3409', 'DXO', 'Paris', '1', 2181.76, 'homme', 'Technicien', '1984-01-30', 28, 1, 2, 3),
('FAUQUIER', 'Mireille', '3417', 'AGL', 'Paris', '3', 2070.95, 'femme', 'Technicien', '1957-10-09', 55, 4, 8, 0),
('PERFETTO', 'Pascal', '3420', 'AGL', 'Paris', '1', 3012.36, 'homme', 'Technicien', '1961-05-11', 51, 1, 7, 4),
('LAIGUILLON', 'Michelle', '3551', 'DXO', 'Paris', '2', 3443.78, 'femme', 'Technicien', '1984-01-22', 28, 1, 2, 0),
('FITOUSSI', 'Samuel', '3554', 'OGT', 'Paris', '3', 3790.92, 'homme', 'Comptable', '1963-04-15', 49, 2, 7, 1),
('FAUCHEUX', 'Michel', '3557', 'AGL', 'Paris', '3', 1770.58, 'homme', 'Technicien', '1968-02-25', 44, 2, 6, 1),
('SAADA', 'Martine', '3563', 'AGL', 'Paris', '1', 1788.72, 'femme', 'Technicien', '1974-03-20', 38, 4, 4, 2),
('SURENA', 'Adrienne', '3569', 'AGL', 'Paris', '3', 2964.33, 'femme', 'Technicien', '1953-11-11', 59, 1, 8, 4),
('GENTIL', 'Michelle', '3581', 'DXO', 'Paris', '3', 1804.96, 'femme', 'Technicien', '1964-02-15', 48, 3, 6, 0),
('ZHOU', 'Philippe', '3585', 'AGL', 'Paris', '3', 2556.05, 'homme', 'Technicien', '1987-06-11', 25, 1, 2, 4),
('BOUDART', 'Martine', '3586', 'DXO', 'Paris', '1', 3469.36, 'femme', 'Commercial', '1982-05-26', 30, 3, 3, 2),
('GORZINSKY', 'Odette', '3589', 'AGL', 'Paris', '1', 3586.89, 'femme', 'Technicien', '1976-07-21', 36, 1, 4, 3),
('KILBURG', 'Sylvie', '3593', 'SNPO', 'Paris', '1', 3268.2, 'femme', 'Technicien', '1981-02-02', 31, 4, 3, 3),
('MILLET', 'Pasquale', '3618', 'AGL', 'Paris', '2', 2139.11, 'homme', 'Technicien', '1965-01-17', 47, 2, 6, 1),
('MARQUEZ', 'Marie-Cecile', '3626', 'SNPO', 'Paris', '2', 3370.98, 'femme', 'Technicien', '1963-07-22', 49, 1, 6, 0),
('LEMAIRE', 'Philippe', '3626', 'AGL', 'Paris', '1', 2941.78, 'homme', 'Technicien', '1961-08-16', 51, 4, 7, 1),
('BERTRAND', 'Roger', '3626', 'OGT', 'Paris', '1', 2300.6, 'homme', 'Technicien', '1963-01-09', 49, 2, 7, 1),
('DEIXONNE', 'Nadine', '3631', 'DXO', 'Paris', '3', 1316.97, 'femme', 'Technicien', '1968-01-31', 44, 3, 6, 2),
('DANIEL', 'Marie-Louise', '3633', 'FSC', 'Paris', '1', 2107.93, 'femme', 'Technicien', '1977-08-05', 35, 4, 4, 4),
('BENSIMHON', 'Pascal', '3636', 'AGL', 'Paris', '3', 2835.68, 'homme', 'Technicien', '1960-08-26', 52, 3, 7, 0),
('TARDIF', 'Marie-Paule', '3641', 'SNPO', 'Paris', '2', 1657.5, 'femme', 'Technicien', '1958-08-22', 54, 1, 7, 1),
('CHAMBLAS', 'Paule', '3657', 'AGL', 'Paris', '3', 1854.39, 'femme', 'Technicien', '1978-03-03', 34, 3, 4, 0),
('PARTOUCHE', 'Robert', '3670', 'OGT', 'Paris', '3', 3368.89, 'homme', 'Technicien', '1973-03-17', 39, 3, 5, 0),
('FALZON', 'Patricia', '3673', 'AGL', 'Paris', '1', 1665.9, 'femme', 'Technicien', '1961-11-05', 51, 3, 7, 0),
('UNG', 'Martine', '3703', 'DXO', 'Paris', '1', 2355.86, 'femme', 'Technicien', '1977-06-23', 35, 4, 4, 1),
('ZENOU', 'Robert', '3703', 'OGT', 'Paris', '2', 1960.94, 'homme', 'Technicien', '1959-05-24', 53, 3, 7, 0),
('GUYOT', 'Pierre', '3711', 'DXO', 'Paris', '3', 1944.48, 'homme', 'Technicien', '1982-05-18', 30, 1, 3, 2),
('LAM', 'Pierrette', '3718', 'DXO', 'Paris', '3', 1446.31, 'femme', 'Technicien', '1963-09-07', 49, 4, 6, 1),
('OBEL', 'Rolande', '3723', 'SNPO', 'Paris', '1', 1833.25, 'femme', 'Technicien', '1964-07-29', 48, 4, 6, 3),
('DI', 'Nadine', '3727', 'DXO', 'Paris', '2', 1546.15, 'femme', 'Technicien', '1962-04-23', 50, 3, 7, 4),
('TAN', 'Nathalie', '3733', 'AFO', 'Paris', '1', 2176.73, 'femme', 'Technicien', '1978-11-08', 34, 1, 3, 3),
('LAUB', 'Nicole', '3733', 'AGL', 'Paris', '3', 2042.41, 'femme', 'Technicien', '1953-08-23', 59, 3, 8, 5),
('PONTALIER', 'Thierry', '3765', 'DXO', 'Paris', '2', 1518.88, 'homme', 'Technicien', '1967-03-26', 45, 4, 6, 1),
('BSIRI', 'Marie-Rose', '3769', 'AFO', 'Paris', '3', 2696.11, 'femme', 'Technicien', '1978-08-30', 34, 2, 3, 3),
('CHI', 'Nicole', '3778', 'AGL', 'Paris', '2', 3048.39, 'femme', 'Technicien', '1966-03-30', 46, 1, 6, 1),
('THAO', 'Sylvain', '3779', 'AGL', 'Paris', '2', 3530.73, 'homme', 'Commercial', '1961-01-27', 51, 1, 7, 2),
('BAH', 'Paule', '3795', 'AGL', 'Paris', '2', 1301.36, 'femme', 'Technicien', '1963-11-27', 49, 3, 6, 4),
('GUELT', 'Monique', '3874', 'AGL', 'Paris', '1', 2929.04, 'femme', 'Technicien', '1959-07-14', 53, 1, 7, 3),
('CHAVES', 'Thierry', '3879', 'AFO', 'Paris', '1', 2133.1, 'homme', 'Technicien', '1975-04-30', 37, 2, 4, 3),
('BAUDET', 'Michele', '3880', 'DXO', 'Paris', '1', 3393.17, 'femme', 'Technicien', '1971-04-02', 41, 1, 5, 4),
('GHIBAUDO', 'Nicole', '3882', 'AGL', 'Paris', '3', 1555.33, 'femme', 'Technicien', '1959-11-22', 53, 3, 7, 0),
('RAGEUL', 'Marielle', '3917', 'AFO', 'Paris', '3', 1246.41, 'femme', 'Technicien', '1960-01-29', 52, 2, 7, 4),
('HERCLICH', 'Myriam', '3954', 'DXO', 'Paris', '1', 3395.14, 'femme', 'Technicien', '1980-07-23', 32, 4, 3, 1),
('SARFATI', 'Pascal', '3963', 'SNPO', 'Paris', '1', 1175.54, 'homme', 'Technicien', '1951-10-26', 61, 3, 9, 2),
('FAURE', 'Simone', '3983', 'OGT', 'Paris', '1', 1069.97, 'femme', 'Technicien', '1954-04-22', 58, 2, 8, 1),
('CARRERA', 'Victor', '3016', 'DPO', 'Strasbourg', '3', 1244.99, 'homme', 'Technicien', '1953-03-20', 59, 1, 9, 0),
('CHICHE', 'Vincent', '3041', 'DPO', 'Strasbourg', '3', 3499.11, 'homme', 'Comptable', '1963-10-05', 49, 3, 6, 1),
('BASS', 'Thierry', '3090', 'DPO', 'Strasbourg', '1', 2000, 'homme', 'Technicien', '1968-02-02', 44, 2, 6, 2),
('RAMOND', 'Vincent', '3092', 'DPO', 'Strasbourg', '3', 1535.26, 'homme', 'Technicien', '1958-12-30', 54, 2, 7, 1),
('SUON', 'William', '3133', 'DPO', 'Strasbourg', '2', 3638.22, 'homme', 'Sous-Directeur', '1975-12-05', 37, 2, 4, 4),
('AMELLAL', 'Viviane', '3421', 'DPO', 'Strasbourg', '3', 3147.89, 'femme', 'Comptable', '1966-05-18', 46, 1, 6, 1),
('ROBERT', 'Viviane', '3531', 'DPO', 'Strasbourg', '1', 1739.07, 'femme', 'Technicien', '1967-06-25', 45, 4, 6, 2),
('LACIRE', 'Vincent', '3607', 'DPO', 'Strasbourg', '2', 2895.27, 'homme', 'Comptable', '1963-05-10', 49, 2, 7, 2),
('RAMOS', 'Yvan', '3703', 'DPO', 'Strasbourg', '2', 2823.32, 'homme', 'Technicien', '1984-02-21', 28, 3, 2, 3),
('FERNANDEZ', 'Yvette', '3736', 'AGL', 'Strasbourg', '2', 2851.41, 'femme', 'Comptable', '1964-04-01', 48, 3, 6, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
