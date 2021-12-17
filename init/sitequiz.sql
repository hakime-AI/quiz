-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 déc. 2021 à 08:17
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitequiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `carbrand`
--

CREATE TABLE `carbrand` (
  `NumBrand` int(10) UNSIGNED NOT NULL,
  `Brand` varchar(40) NOT NULL,
  `BrandId` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carbrand`
--

INSERT INTO `carbrand` (`NumBrand`, `Brand`, `BrandId`) VALUES
(21, 'Buick', 2),
(22, 'Cadillac', 2),
(23, 'Chevrolet', 2),
(24, 'Chrysler', 2),
(25, 'Dodge', 2),
(26, 'Ford', 2),
(27, 'Jeep', 2),
(28, 'Lincoln', 2),
(29, 'Packard', 2),
(30, 'Pontiac', 2),
(31, 'Ram', 2),
(32, 'Saturn', 2),
(33, 'Audi', 1),
(34, 'BMW', 1),
(36, 'Mercedes-benz', 1),
(37, 'Opel', 1),
(38, 'Porsche', 1),
(39, 'Smart', 1),
(40, 'Volkswagen', 1),
(41, 'Alfa Roméo', 3),
(42, 'Ferrari', 3),
(43, 'Fiat', 3),
(44, 'Lamborghini', 3),
(45, 'Lancia', 3),
(46, 'Maserati', 3),
(47, 'Acura', 4),
(48, 'Daihatsu', 4),
(49, 'Datsun', 4),
(50, 'Honda', 4),
(51, 'Infiniti', 4),
(52, 'Isuzu', 4),
(53, 'Lexus', 4),
(54, 'Mazda', 4),
(55, 'Mitsubishi', 4),
(56, 'Nissan', 4),
(57, 'Subaru', 4),
(58, 'Suzuki', 4),
(59, 'Toyota', 4),
(85, 'Austin', 5),
(86, 'Hillman', 5),
(87, 'Humber', 5),
(88, 'Jaguar', 5),
(89, 'Land Rover', 5),
(90, 'LDV', 5),
(91, 'MG', 5),
(92, 'Mini', 5),
(93, 'Moke', 5),
(94, 'Rover', 5),
(95, 'Triumph', 5),
(96, 'Vauxhall', 5);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `NumCountry` int(10) UNSIGNED NOT NULL,
  `CountryId` tinyint(4) NOT NULL,
  `CountryName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`NumCountry`, `CountryId`, `CountryName`) VALUES
(1, 2, 'laquelle de ces marques vient des ETATS-UNIS ?'),
(2, 3, 'laquelle de ces marques vient de l\'ITALIE ?'),
(3, 4, 'laquelle de ces marques vient du JAPON ?'),
(4, 5, 'laquelle de ces marques vient du ROYAUME-UNI ?'),
(5, 1, 'laquelle de ces marques vient de l\'ALLEMAGNE ?');

-- --------------------------------------------------------

--
-- Structure de la table `utilis`
--

CREATE TABLE `utilis` (
  `NumUtil` int(255) UNSIGNED NOT NULL,
  `PseudoUtil` varchar(40) NOT NULL,
  `LoginUtil` varchar(40) NOT NULL,
  `PassUtil` varchar(40) NOT NULL,
  `MaxScore` tinyint(10) UNSIGNED DEFAULT NULL,
  `Compte` tinyint(10) UNSIGNED DEFAULT NULL,
  `Moyenne` float(10,2) UNSIGNED DEFAULT NULL,
  `Enchainement` tinyint(10) UNSIGNED DEFAULT NULL,
  `CompteId` tinyint(255) UNSIGNED DEFAULT NULL,
  `ComptePrio` tinyint(10) UNSIGNED DEFAULT NULL,
  `Score` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilis`
--

INSERT INTO `utilis` (`NumUtil`, `PseudoUtil`, `LoginUtil`, `PassUtil`, `MaxScore`, `Compte`, `Moyenne`, `Enchainement`, `CompteId`, `ComptePrio`, `Score`) VALUES
(1, 'hakime-AI', 'hakime', 'online', 3, 15, 0.93, NULL, NULL, NULL, 14),
(2, 'ylkx', 'steven', 'steven', 1, 2, 0.50, NULL, NULL, NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carbrand`
--
ALTER TABLE `carbrand`
  ADD PRIMARY KEY (`NumBrand`),
  ADD UNIQUE KEY `UQ_CarBrand_Brand` (`Brand`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`NumCountry`);

--
-- Index pour la table `utilis`
--
ALTER TABLE `utilis`
  ADD PRIMARY KEY (`NumUtil`),
  ADD UNIQUE KEY `PseudoUtil` (`PseudoUtil`),
  ADD UNIQUE KEY `CompteId` (`CompteId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carbrand`
--
ALTER TABLE `carbrand`
  MODIFY `NumBrand` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `NumCountry` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilis`
--
ALTER TABLE `utilis`
  MODIFY `NumUtil` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
