-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 fév. 2022 à 23:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sunuprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) DEFAULT NULL,
  `commentaire` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `sexe` varchar(40) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `lieu_de_naissance` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwords` varchar(100) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `lieu_de_naissance`, `adresse`, `telephone`, `pseudo`, `email`, `passwords`, `code`) VALUES
(42, 'Ba', 'Boubacar', 'Homme', '2004-07-02', 'Thiaroye azur', 'Campement ', 777222, 'bouba5', 'boubacar@gmail.com', 'QLEU26', NULL),
(46, 'Ngom', 'Mbagnick', 'Homme', '1995-05-03', 'Fatick', 'SIcap', 7777777, 'Mbagnick5', 'Ngom@gmail.com', '4aaicfffg', NULL),
(47, 'Lo', 'Penda', 'Femme', '2003-05-31', 'Dakar', 'Pikine', 2147483647, 'Penda5', 'Penda@gmail.com', 'Apresatuvs2', NULL),
(50, 'Diallo', 'Moustapha', 'Homme', '2007-12-30', 'Dakar', 'Dakar', 775493217, 'amsdou5', 'ame@gmail.com', 'Afrik5', NULL),
(51, 'Ba', 'Mouhamed', 'Homme', '2017-05-03', 'Thiaroye Azur', 'Campement Nguékhoh', 2147483647, 'mouha5', 'mouhamed@gmail.com', '1234', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) DEFAULT NULL,
  `prenom` varchar(70) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(2, 'Ba', 'Amadou', 'amadou.ba2@uvs.edu.sn', 'Bonjour,\r\nje vous avertis de ce qui risque d\'arriver si vous ne me contacter pas');

-- --------------------------------------------------------

--
-- Structure de la table `initialisation_mp`
--

CREATE TABLE `initialisation_mp` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwords` varchar(500) DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `initialisation_mp`
--
ALTER TABLE `initialisation_mp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `initialisation_mp`
--
ALTER TABLE `initialisation_mp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
