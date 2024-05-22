-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 mai 2024 à 11:58
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
(33, '', 'mehdi2.@gmail.com', 'mehdi'),
(34, 'aouragh omar mehdi', 'mehdi2.@gmail.com', 'mehdi'),
(35, 'omar mehdi', 'omarmehdi@gmail.com', '1234'),
(36, 'omar mehdi', 'omarmehdi@gmail.com', '1234'),
(37, 'omar mehdi', 'omarmehdi@gmail.com', '1234'),
(38, 'nassim', 'nassim@gmail.com', '1234'),
(39, 'nassim', 'nassim@gmail.com', '1234'),
(40, 'nassim', 'nassim@gmail.com', '1234'),
(41, 'nassim', 'nassim@gmail.com', '1234'),
(42, 'nassim', 'nassim@gmail.com', '1234'),
(43, 'nassim', 'nassim@gmail.com', '1234'),
(44, 'nassim', 'nassim@gmail.com', '1234'),
(45, 'nassim', 'nassim@gmail.com', '1234'),
(46, 'nassim', 'nassim@gmail.com', '1234'),
(47, 'nassim', 'nassim@gmail.com', '1234'),
(48, 'nassim', 'nassim@gmail.com', '1234'),
(49, 'nassim', 'nassim@gmail.com', '1234'),
(50, 'nassim', 'nassim@gmail.com', '1234'),
(51, 'nassim', 'nassim@gmail.com', '1234'),
(52, 'nassim', 'nassim@gmail.com', '1234'),
(53, 'nassim', 'nassim@gmail.com', '1234'),
(54, '', '', ''),
(55, 'nassim', 'nassim@gmail.com', '1234'),
(56, 'nassim', 'nassim@gmail.com', '1234'),
(57, 'nassim', 'nassim@gmail.com', '1234'),
(58, 'nassim', 'nassim@gmail.com', '1234'),
(59, 'nassim', 'nassim@gmail.com', '1234'),
(60, 'nassim', 'nassim@gmail.com', '1234'),
(61, 'nassim', 'nassim@gmail.com', '1234'),
(62, 'nassim', 'nassim@gmail.com', '1234'),
(63, 'nassim', 'nassim@gmail.com', '1234'),
(64, 'nassim', 'nassim@gmail.com', '1234'),
(65, 'nassim', 'nassim@gmail.com', '1234'),
(66, 'nassim', 'nassim@gmail.com', '1234'),
(67, 'nassim', 'nassim@gmail.com', '1234'),
(68, 'nassim', 'nassim@gmail.com', '1234'),
(69, 'nassim', 'nassim@gmail.com', '1234'),
(70, 'nassim', 'nassim@gmail.com', '1234'),
(71, 'nassim', 'nassim@gmail.com', '1234'),
(72, 'nassim', 'nassim@gmail.com', '1234'),
(73, 'nassim', 'nassim@gmail.com', '1234'),
(74, 'nassim', 'nassim@gmail.com', '1234');

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
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
