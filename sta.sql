-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 nov. 2024 à 16:18
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ges_sta`
--

-- --------------------------------------------------------

--
-- Structure de la table `stagiaires`
--

CREATE TABLE `stagiaires` (
  `matStagiaire` int(11) NOT NULL,
  `nomStagiaire` varchar(50) DEFAULT NULL,
  `prenomStagiaire` varchar(40) DEFAULT NULL,
  `filiereStagiaire` varchar(100) DEFAULT NULL,
  `anneeEtude` int DEFAULT NULL,
  `typeBac` varchar(100) DEFAULT NULL,
  `anneeBac` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD PRIMARY KEY (`matStagiaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  MODIFY `matStagiaire` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
