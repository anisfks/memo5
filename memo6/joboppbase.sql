-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 mai 2024 à 14:40
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
-- Base de données : `joboppbase`
--

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(20) NOT NULL,
  `id_recruteure` int(20) NOT NULL,
  `nom-entreprise` varchar(40) NOT NULL,
  `tel-entreprise` int(20) NOT NULL,
  `email-entreprise` varchar(100) NOT NULL,
  `détaille-offre` varchar(1000) NOT NULL,
  `type-de-contrat` enum('CDI (Contrat à Durée Indéterminée)','CDD (Contrat à Durée Déterminée)','Contrat en alternance','studentjob') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `id_postuler` int(20) NOT NULL,
  `id_utilisateur` int(20) NOT NULL,
  `id_offre` int(20) NOT NULL,
  `id_recruteure` int(20) NOT NULL,
  `niveau_etude` enum('Niveau Secondaire','Niveau Terminal','Baccalauréat','TS Bac +2','Licence (LMD), Bac + 3','Master 1, Licence  Bac + 4','Master 2, Ingéniorat, Bac + 5','Magistère Bac + 7','Doctorat','Non Diplômante','Formation Professionnelle','Certification') NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

CREATE TABLE `recruteur` (
  `id_recruteure` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisatuer`
--

CREATE TABLE `utilisatuer` (
  `id_utilisateur` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `sexe` enum('homme','femme','','') NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mot de passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `fk_recruteure_offre` (`id_recruteure`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id_postuler`),
  ADD KEY `fk_etulisatuer_postuler` (`id_utilisateur`),
  ADD KEY `fk_recruteur_postuler` (`id_recruteure`),
  ADD KEY `fk_offre_postuler` (`id_offre`);

--
-- Index pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`id_recruteure`);

--
-- Index pour la table `utilisatuer`
--
ALTER TABLE `utilisatuer`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id_postuler` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `id_recruteure` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisatuer`
--
ALTER TABLE `utilisatuer`
  MODIFY `id_utilisateur` int(20) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `fk_recruteure_offre` FOREIGN KEY (`id_recruteure`) REFERENCES `recruteur` (`id_recruteure`) ON DELETE CASCADE;

--
-- Contraintes pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD CONSTRAINT `fk_etulisatuer_postuler` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisatuer` (`id_utilisateur`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_offre_postuler` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_recruteur_postuler` FOREIGN KEY (`id_recruteure`) REFERENCES `recruteur` (`id_recruteure`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
