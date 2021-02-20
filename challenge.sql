-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 fév. 2021 à 22:11
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `creneaus`
--

CREATE TABLE `creneaus` (
  `id` int(11) NOT NULL,
  `debut` varchar(11) NOT NULL,
  `fin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creneaus`
--

INSERT INTO `creneaus` (`id`, `debut`, `fin`) VALUES
(1, '07:30', '09:00'),
(2, '09:15', '11:30'),
(3, '17:30', '21:30');

-- --------------------------------------------------------

--
-- Structure de la table `creneau_edt`
--

CREATE TABLE `creneau_edt` (
  `id` int(11) NOT NULL,
  `edt_id` int(11) NOT NULL,
  `creneau_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creneau_edt`
--

INSERT INTO `creneau_edt` (`id`, `edt_id`, `creneau_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 3),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `edts`
--

CREATE TABLE `edts` (
  `id` int(11) NOT NULL,
  `Nom_etudiant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `edts`
--

INSERT INTO `edts` (`id`, `Nom_etudiant`) VALUES
(1, 'Mekou Raouf'),
(2, 'Vepouyoum Youssef');

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE `jours` (
  `id` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jours`
--

INSERT INTO `jours` (`id`, `jour`) VALUES
(1, 'LUNDI'),
(2, 'MARDI'),
(3, 'MERCREDI'),
(4, 'JEUDI'),
(5, 'VENDREDI'),
(6, 'SAMEDI'),
(7, 'DIMANCHE');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `intitule`) VALUES
(1, 'Algorithmique'),
(2, 'Genie logiciel'),
(3, 'Analyse'),
(4, 'Probabilité'),
(5, 'Anglais'),
(6, 'Langage Formel'),
(7, 'Structure de données'),
(8, 'Programmation web');

-- --------------------------------------------------------

--
-- Structure de la table `plannings`
--

CREATE TABLE `plannings` (
  `id` int(11) NOT NULL,
  `edt_id` int(11) NOT NULL,
  `jour_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `typeplanning_id` int(11) NOT NULL,
  `creneau_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plannings`
--

INSERT INTO `plannings` (`id`, `edt_id`, `jour_id`, `matiere_id`, `typeplanning_id`, `creneau_id`) VALUES
(1, 1, 2, 1, 2, 1),
(2, 1, 6, 4, 1, 1),
(3, 2, 5, 4, 3, 3),
(4, 2, 7, 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `typeplanning`
--

CREATE TABLE `typeplanning` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typeplanning`
--

INSERT INTO `typeplanning` (`id`, `type`) VALUES
(1, 'Cours'),
(2, 'Td'),
(3, 'Exos');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `creneaus`
--
ALTER TABLE `creneaus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creneau_edt`
--
ALTER TABLE `creneau_edt`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `edts`
--
ALTER TABLE `edts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jours`
--
ALTER TABLE `jours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plannings`
--
ALTER TABLE `plannings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeplanning`
--
ALTER TABLE `typeplanning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `creneaus`
--
ALTER TABLE `creneaus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `creneau_edt`
--
ALTER TABLE `creneau_edt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `edts`
--
ALTER TABLE `edts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `jours`
--
ALTER TABLE `jours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `plannings`
--
ALTER TABLE `plannings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `typeplanning`
--
ALTER TABLE `typeplanning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
