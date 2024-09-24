-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 sep. 2024 à 10:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `albums`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `idAlb` int(3) UNSIGNED NOT NULL,
  `nomAlb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`idAlb`, `nomAlb`) VALUES
(1, 'Chiens'),
(2, 'Chats'),
(3, 'Oiseaux');

-- --------------------------------------------------------

--
-- Structure de la table `comporter`
--

CREATE TABLE `comporter` (
  `idAlb` int(3) UNSIGNED NOT NULL,
  `idPh` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `comporter`
--

INSERT INTO `comporter` (`idAlb`, `idPh`) VALUES
(1, 1),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 11),
(1, 13),
(2, 2),
(2, 4),
(2, 5),
(2, 7),
(2, 9),
(2, 10),
(2, 17),
(3, 2),
(3, 3),
(3, 12),
(3, 14),
(3, 15),
(3, 16);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `idPh` int(3) UNSIGNED NOT NULL,
  `nomPh` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`idPh`, `nomPh`) VALUES
(1, 'ph_01.jpg'),
(2, 'ph_02.jpg'),
(3, 'ph_03.jpg'),
(4, 'ph_04.jpg'),
(5, 'ph_05.jpg'),
(6, 'ph_06.jpg'),
(7, 'ph_07.jpg'),
(8, 'ph_08.jpg'),
(9, 'ph_09.jpg'),
(10, 'ph_10.jpg'),
(11, 'ph_11.jpg'),
(12, 'ph_12.jpg'),
(13, 'ph_13.jpg'),
(14, 'ph_14.jpg'),
(15, 'ph_15.jpg'),
(16, 'ph_16.jpg'),
(17, 'ph_17.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`idAlb`);

--
-- Index pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD PRIMARY KEY (`idAlb`,`idPh`),
  ADD KEY `idPh` (`idPh`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`idPh`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `idAlb` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `idPh` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD CONSTRAINT `comporter_ibfk_1` FOREIGN KEY (`idAlb`) REFERENCES `albums` (`idAlb`),
  ADD CONSTRAINT `comporter_ibfk_2` FOREIGN KEY (`idPh`) REFERENCES `photos` (`idPh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
