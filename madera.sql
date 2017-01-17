-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 11 Janvier 2017 à 03:10
-- Version du serveur :  10.0.27-MariaDB-0+deb8u1
-- Version de PHP :  5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `madera`
--

-- --------------------------------------------------------

--
-- Structure de la table `Caracteristiques_Gamme`
--

CREATE TABLE IF NOT EXISTS `Caracteristiques_Gamme` (
`Id_CaracteristiquesGamme` int(11) NOT NULL,
  `Nom_Caractéristiques_Gamme` varchar(50) NOT NULL,
  `Famille_Caractéristiques_Gamme` varchar(50) NOT NULL,
  `RegleCalcul_Gamme` varchar(50) NOT NULL,
  `FinitionExterieur_Gamme` varchar(50) NOT NULL,
  `TypeIsolant_Gamme` varchar(50) NOT NULL,
  `TypeCouverture_Gamme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Clients`
--

CREATE TABLE IF NOT EXISTS `Clients` (
`Id_Clients` int(11) NOT NULL,
  `Nom_Clients` varchar(20) NOT NULL,
  `Prenom_Clients` varchar(20) NOT NULL,
  `Mail_Clients` varchar(20) NOT NULL,
  `TelephoneDomicile_Clients` varchar(20) NOT NULL,
  `TelephonePortable_Clients` varchar(20) NOT NULL,
  `Adresse_Clients` varchar(20) NOT NULL,
  `Ville_Clients` varchar(20) NOT NULL,
  `CodePostal_Clients` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Composants`
--

CREATE TABLE IF NOT EXISTS `Composants` (
`Id_Composants` int(11) NOT NULL,
  `Nom_Composants` varchar(50) NOT NULL,
  `Id_SousFamilleComposants` int(11) NOT NULL,
  `Id_Fournisseurs` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL,
  `Nature_Composants` varchar(50) NOT NULL,
  `Caracteristiques_Composants` varchar(50) NOT NULL,
  `Unite_Composants` varchar(50) NOT NULL,
  `PrixUnitaire_Composants` double NOT NULL,
  `Quantite_Composants` int(11) NOT NULL,
  `Proprietaire_Composants` varchar(50) NOT NULL,
  `Section_Composants` double NOT NULL,
  `Epaisseur_Composants` double NOT NULL,
  `Largeur_Composants` double NOT NULL,
  `Longueur_Composants` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Compose`
--

CREATE TABLE IF NOT EXISTS `Compose` (
`Id_Compose` int(11) NOT NULL,
  `Id_Devis` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Connexion`
--

CREATE TABLE IF NOT EXISTS `Connexion` (
  `Date_Connexion` date NOT NULL,
`Id_Connexion` int(11) NOT NULL,
  `Id_Utilisateurs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Devis`
--

CREATE TABLE IF NOT EXISTS `Devis` (
`Id_Devis` int(11) NOT NULL,
  `Id_Utilisateurs` int(11) NOT NULL,
  `Id_Clients` int(11) NOT NULL,
  `Id_Etat` int(11) NOT NULL,
  `DateCreation_Devis` date NOT NULL,
  `DateModification_Devis` date NOT NULL,
  `Id_Statut` int(11) NOT NULL,
  `PrixTotal_Devis` double NOT NULL,
  `RemiseCommerciale_Devis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Etat`
--

CREATE TABLE IF NOT EXISTS `Etat` (
`Id_Etat` int(11) NOT NULL,
  `Description_Etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `FamilleComposants`
--

CREATE TABLE IF NOT EXISTS `FamilleComposants` (
`Id_FamilleComposants` int(11) NOT NULL,
  `Nom_FamilleComposants` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Fournisseurs`
--

CREATE TABLE IF NOT EXISTS `Fournisseurs` (
`Id_Fournisseurs` int(11) NOT NULL,
  `Nom_Fournisseurs` varchar(50) NOT NULL,
  `Mail_Fournisseurs` varchar(50) NOT NULL,
  `Adresse_Fournisseurs` varchar(50) NOT NULL,
  `CodePostal_Fournisseurs` varchar(50) NOT NULL,
  `Ville_Fournisseurs` varchar(50) NOT NULL,
  `Telephone_Fournisseurs` varchar(50) NOT NULL,
  `Fax_Fournisseurs` varchar(50) NOT NULL,
  `NumSIRET_Fournisseurs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Gamme`
--

CREATE TABLE IF NOT EXISTS `Gamme` (
`Id_Gamme` int(11) NOT NULL,
  `Id_CaracteristiquesGamme` int(11) NOT NULL,
  `Nom_Gamme` varchar(50) NOT NULL,
  `Prix_Gamme` int(11) NOT NULL,
  `Proprietaire_Gamme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Module`
--

CREATE TABLE IF NOT EXISTS `Module` (
`Id_Module` int(11) NOT NULL,
  `Id_Gamme` int(11) NOT NULL,
  `Nom_Module` varchar(100) NOT NULL,
  `Nature_Module` varchar(100) NOT NULL,
  `Caracteristique_Module` varchar(100) NOT NULL,
  `Unite_Module` varchar(20) NOT NULL,
  `Quantite_Module` int(11) NOT NULL,
  `Proprietaire_Module` varchar(50) NOT NULL,
  `Hauteur_Module` double NOT NULL,
  `Longueur_Module` double NOT NULL,
  `AngleEntrant_Module` double NOT NULL,
  `AngleSortant_Module` double NOT NULL,
  `Epaisseur_Module` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `PhotosGammes`
--

CREATE TABLE IF NOT EXISTS `PhotosGammes` (
`Id_PhotosGammes` int(11) NOT NULL,
  `Id_Gamme` int(11) NOT NULL,
  `LienPhotosServeur_PhotosGammes` varchar(100) NOT NULL,
  `DateCreation_PhotosGammes` date NOT NULL,
  `Poids_PhotosGammes` double NOT NULL,
  `Legende_PhotosGammes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `PhotosModules`
--

CREATE TABLE IF NOT EXISTS `PhotosModules` (
`Id_PhotosModule` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL,
  `LienPhotosServeur_PhotosModule` varchar(100) NOT NULL,
  `DateCreation_PhotosModules` date NOT NULL,
  `Poids_PhotosModules` double NOT NULL,
  `Legende_PhotosModules` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Possede`
--

CREATE TABLE IF NOT EXISTS `Possede` (
`Id_Possede` int(11) NOT NULL,
  `Id_Composants` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE IF NOT EXISTS `Role` (
`Id_Role` int(11) NOT NULL,
  `Description_Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `SousFamilleComposants`
--

CREATE TABLE IF NOT EXISTS `SousFamilleComposants` (
`Id_SousFamilleComposants` int(11) NOT NULL,
  `Nom_SousFamilleComposant` varchar(50) NOT NULL,
  `Id_FamilleComposants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Statut`
--

CREATE TABLE IF NOT EXISTS `Statut` (
`Id_Statut` int(11) NOT NULL,
  `Description_Statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
`Id_Utilisateurs` int(11) NOT NULL,
  `Id_Role` int(11) NOT NULL,
  `Nom_Utilisateurs` varchar(20) NOT NULL,
  `Prenom_Utilisateurs` varchar(20) NOT NULL,
  `Mail_Utilisateurs` varchar(20) NOT NULL,
  `Telephone_Utilisateurs` varchar(20) NOT NULL,
  `LastConnexion_Utilisateurs` date NOT NULL,
  `CodePostal_Utilisateurs` varchar(20) NOT NULL,
  `Adresse_Utilisateurs` varchar(50) NOT NULL,
  `Pwd_Utilisateurs` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Caracteristiques_Gamme`
--
ALTER TABLE `Caracteristiques_Gamme`
 ADD PRIMARY KEY (`Id_CaracteristiquesGamme`);

--
-- Index pour la table `Clients`
--
ALTER TABLE `Clients`
 ADD PRIMARY KEY (`Id_Clients`);

--
-- Index pour la table `Composants`
--
ALTER TABLE `Composants`
 ADD PRIMARY KEY (`Id_Composants`), ADD UNIQUE KEY `Id_SousFamilleComposants` (`Id_SousFamilleComposants`,`Id_Fournisseurs`,`Id_Module`), ADD UNIQUE KEY `Id_Fournisseurs` (`Id_Fournisseurs`), ADD UNIQUE KEY `Id_Module` (`Id_Module`);

--
-- Index pour la table `Compose`
--
ALTER TABLE `Compose`
 ADD PRIMARY KEY (`Id_Compose`), ADD UNIQUE KEY `Id_Devis` (`Id_Devis`,`Id_Module`), ADD UNIQUE KEY `Id_Module` (`Id_Module`);

--
-- Index pour la table `Connexion`
--
ALTER TABLE `Connexion`
 ADD PRIMARY KEY (`Id_Connexion`), ADD UNIQUE KEY `Id_Utilisateurs` (`Id_Utilisateurs`);

--
-- Index pour la table `Devis`
--
ALTER TABLE `Devis`
 ADD PRIMARY KEY (`Id_Devis`), ADD UNIQUE KEY `Id_Utilisateurs` (`Id_Utilisateurs`,`Id_Clients`,`Id_Etat`,`Id_Statut`), ADD UNIQUE KEY `Id_Clients` (`Id_Clients`), ADD UNIQUE KEY `Id_Etat` (`Id_Etat`), ADD UNIQUE KEY `Id_Statut` (`Id_Statut`);

--
-- Index pour la table `Etat`
--
ALTER TABLE `Etat`
 ADD PRIMARY KEY (`Id_Etat`);

--
-- Index pour la table `FamilleComposants`
--
ALTER TABLE `FamilleComposants`
 ADD PRIMARY KEY (`Id_FamilleComposants`);

--
-- Index pour la table `Fournisseurs`
--
ALTER TABLE `Fournisseurs`
 ADD PRIMARY KEY (`Id_Fournisseurs`);

--
-- Index pour la table `Gamme`
--
ALTER TABLE `Gamme`
 ADD PRIMARY KEY (`Id_Gamme`), ADD UNIQUE KEY `Id_CaracteristiquesGamme` (`Id_CaracteristiquesGamme`);

--
-- Index pour la table `Module`
--
ALTER TABLE `Module`
 ADD PRIMARY KEY (`Id_Module`), ADD UNIQUE KEY `Id_Gamme` (`Id_Gamme`);

--
-- Index pour la table `PhotosGammes`
--
ALTER TABLE `PhotosGammes`
 ADD PRIMARY KEY (`Id_PhotosGammes`), ADD UNIQUE KEY `Id_Gamme` (`Id_Gamme`);

--
-- Index pour la table `PhotosModules`
--
ALTER TABLE `PhotosModules`
 ADD PRIMARY KEY (`Id_PhotosModule`), ADD UNIQUE KEY `Id_Module` (`Id_Module`);

--
-- Index pour la table `Possede`
--
ALTER TABLE `Possede`
 ADD PRIMARY KEY (`Id_Possede`), ADD UNIQUE KEY `Id_Composants` (`Id_Composants`,`Id_Module`), ADD UNIQUE KEY `Id_Module` (`Id_Module`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
 ADD PRIMARY KEY (`Id_Role`);

--
-- Index pour la table `SousFamilleComposants`
--
ALTER TABLE `SousFamilleComposants`
 ADD PRIMARY KEY (`Id_SousFamilleComposants`), ADD UNIQUE KEY `Id_FamilleComposants` (`Id_FamilleComposants`);

--
-- Index pour la table `Statut`
--
ALTER TABLE `Statut`
 ADD PRIMARY KEY (`Id_Statut`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`Id_Utilisateurs`), ADD UNIQUE KEY `Id_Role` (`Id_Role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Caracteristiques_Gamme`
--
ALTER TABLE `Caracteristiques_Gamme`
MODIFY `Id_CaracteristiquesGamme` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Clients`
--
ALTER TABLE `Clients`
MODIFY `Id_Clients` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Composants`
--
ALTER TABLE `Composants`
MODIFY `Id_Composants` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Compose`
--
ALTER TABLE `Compose`
MODIFY `Id_Compose` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Connexion`
--
ALTER TABLE `Connexion`
MODIFY `Id_Connexion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Devis`
--
ALTER TABLE `Devis`
MODIFY `Id_Devis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Etat`
--
ALTER TABLE `Etat`
MODIFY `Id_Etat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `FamilleComposants`
--
ALTER TABLE `FamilleComposants`
MODIFY `Id_FamilleComposants` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Fournisseurs`
--
ALTER TABLE `Fournisseurs`
MODIFY `Id_Fournisseurs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Gamme`
--
ALTER TABLE `Gamme`
MODIFY `Id_Gamme` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Module`
--
ALTER TABLE `Module`
MODIFY `Id_Module` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `PhotosGammes`
--
ALTER TABLE `PhotosGammes`
MODIFY `Id_PhotosGammes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `PhotosModules`
--
ALTER TABLE `PhotosModules`
MODIFY `Id_PhotosModule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Possede`
--
ALTER TABLE `Possede`
MODIFY `Id_Possede` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
MODIFY `Id_Role` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SousFamilleComposants`
--
ALTER TABLE `SousFamilleComposants`
MODIFY `Id_SousFamilleComposants` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Statut`
--
ALTER TABLE `Statut`
MODIFY `Id_Statut` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `Id_Utilisateurs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Composants`
--
ALTER TABLE `Composants`
ADD CONSTRAINT `Composants_ibfk_1` FOREIGN KEY (`Id_Fournisseurs`) REFERENCES `Fournisseurs` (`Id_Fournisseurs`),
ADD CONSTRAINT `Composants_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `Module` (`Id_Module`),
ADD CONSTRAINT `Composants_ibfk_3` FOREIGN KEY (`Id_SousFamilleComposants`) REFERENCES `SousFamilleComposants` (`Id_SousFamilleComposants`);

--
-- Contraintes pour la table `Compose`
--
ALTER TABLE `Compose`
ADD CONSTRAINT `Compose_ibfk_1` FOREIGN KEY (`Id_Devis`) REFERENCES `Devis` (`Id_Devis`),
ADD CONSTRAINT `Compose_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `Module` (`Id_Module`);

--
-- Contraintes pour la table `Connexion`
--
ALTER TABLE `Connexion`
ADD CONSTRAINT `Connexion_ibfk_1` FOREIGN KEY (`Id_Utilisateurs`) REFERENCES `Utilisateurs` (`Id_Utilisateurs`);

--
-- Contraintes pour la table `Devis`
--
ALTER TABLE `Devis`
ADD CONSTRAINT `Devis_ibfk_1` FOREIGN KEY (`Id_Utilisateurs`) REFERENCES `Utilisateurs` (`Id_Utilisateurs`),
ADD CONSTRAINT `Devis_ibfk_2` FOREIGN KEY (`Id_Clients`) REFERENCES `Clients` (`Id_Clients`),
ADD CONSTRAINT `Devis_ibfk_3` FOREIGN KEY (`Id_Etat`) REFERENCES `Etat` (`Id_Etat`),
ADD CONSTRAINT `Devis_ibfk_4` FOREIGN KEY (`Id_Statut`) REFERENCES `Statut` (`Id_Statut`);

--
-- Contraintes pour la table `Gamme`
--
ALTER TABLE `Gamme`
ADD CONSTRAINT `Gamme_ibfk_1` FOREIGN KEY (`Id_CaracteristiquesGamme`) REFERENCES `Caracteristiques_Gamme` (`Id_CaracteristiquesGamme`);

--
-- Contraintes pour la table `Module`
--
ALTER TABLE `Module`
ADD CONSTRAINT `Module_ibfk_1` FOREIGN KEY (`Id_Gamme`) REFERENCES `Gamme` (`Id_Gamme`);

--
-- Contraintes pour la table `PhotosGammes`
--
ALTER TABLE `PhotosGammes`
ADD CONSTRAINT `PhotosGammes_ibfk_1` FOREIGN KEY (`Id_Gamme`) REFERENCES `Gamme` (`Id_Gamme`);

--
-- Contraintes pour la table `PhotosModules`
--
ALTER TABLE `PhotosModules`
ADD CONSTRAINT `PhotosModules_ibfk_1` FOREIGN KEY (`Id_Module`) REFERENCES `Module` (`Id_Module`);

--
-- Contraintes pour la table `Possede`
--
ALTER TABLE `Possede`
ADD CONSTRAINT `Possede_ibfk_1` FOREIGN KEY (`Id_Composants`) REFERENCES `Composants` (`Id_Composants`),
ADD CONSTRAINT `Possede_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `Module` (`Id_Module`);

--
-- Contraintes pour la table `SousFamilleComposants`
--
ALTER TABLE `SousFamilleComposants`
ADD CONSTRAINT `SousFamilleComposants_ibfk_1` FOREIGN KEY (`Id_FamilleComposants`) REFERENCES `FamilleComposants` (`Id_FamilleComposants`);

--
-- Contraintes pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`Id_Role`) REFERENCES `Role` (`Id_Role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
