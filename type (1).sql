-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 mai 2024 à 10:49
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
-- Base de données : `type`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id_joueur` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `user_name`, `email`, `password`) VALUES
(1, 'mehdi', 'mehdi@gmail.com', 'mehdi'),
(2, 'nassim ', 'nassim@gamil.com', 'nissim'),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', 'mehdi', ''),
(9, '', 'mehdi and nassim', ''),
(10, '', 'mehdi', ''),
(11, '', 'mehdi and nassim', ''),
(12, '', 'mehdi', ''),
(13, '', 'mehdi and nassim', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', 'mehdi', ''),
(20, '', 'mehdi and nassim', ''),
(21, '', 'mehdi', ''),
(22, '', 'mehdi and nassim', ''),
(23, '', 'mehdi', ''),
(24, '', 'mehdi and nassim', ''),
(25, '', 'mehdi', ''),
(26, '', 'mehdi and nassim', ''),
(27, '', 'mehdi', ''),
(28, '', 'mehdi and nassim', ''),
(29, '', 'mehdi', ''),
(30, '', 'mehdi and nassim', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id_joueur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
