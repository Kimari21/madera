-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Janvier 2017 à 22:47
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `madera`
--

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques_gamme`
--

DROP TABLE IF EXISTS `caracteristiques_gamme`;
CREATE TABLE IF NOT EXISTS `caracteristiques_gamme` (
  `Id_CaracteristiquesGamme` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Caracteristiques_Gamme` varchar(50) NOT NULL,
  `Famille_Caracteristiques_Gamme` varchar(50) NOT NULL,
  `RegleCalcul_Gamme` varchar(50) NOT NULL,
  `FinitionExterieur_Gamme` varchar(50) NOT NULL,
  `TypeIsolant_Gamme` varchar(50) NOT NULL,
  `TypeCouverture_Gamme` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_CaracteristiquesGamme`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `caracteristiques_gamme`
--

INSERT INTO `caracteristiques_gamme` (`Id_CaracteristiquesGamme`, `Nom_Caracteristiques_Gamme`, `Famille_Caracteristiques_Gamme`, `RegleCalcul_Gamme`, `FinitionExterieur_Gamme`, `TypeIsolant_Gamme`, `TypeCouverture_Gamme`) VALUES
(1, 'Gamme : luxe', 'Famille de gamme : luxe supérieur', 'connais pas', 'bois', 'papier de verre', 'couverture luxe'),
(2, 'Gamme : Moyen', 'Moyenne qualité', '...', 'moyenne', 'papier de verre', 'couverture moyenne');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `Id_Clients` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Clients` varchar(20) NOT NULL,
  `Prenom_Clients` varchar(20) NOT NULL,
  `Mail_Clients` varchar(20) NOT NULL,
  `TelephoneDomicile_Clients` varchar(20) NOT NULL,
  `TelephonePortable_Clients` varchar(20) NOT NULL,
  `Adresse_Clients` varchar(20) NOT NULL,
  `Ville_Clients` varchar(20) NOT NULL,
  `CodePostal_Clients` int(11) NOT NULL,
  PRIMARY KEY (`Id_Clients`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`Id_Clients`, `Nom_Clients`, `Prenom_Clients`, `Mail_Clients`, `TelephoneDomicile_Clients`, `TelephonePortable_Clients`, `Adresse_Clients`, `Ville_Clients`, `CodePostal_Clients`) VALUES
(1, 'Winnie', 'L''ourson', 'disney@paris.fr', '0908070605', '0605040302', '1 rue des ours', 'Marne la vallée', 99999);

-- --------------------------------------------------------

--
-- Structure de la table `composants`
--

DROP TABLE IF EXISTS `composants`;
CREATE TABLE IF NOT EXISTS `composants` (
  `Id_Composants` int(11) NOT NULL AUTO_INCREMENT,
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
  `Longueur_Composants` double NOT NULL,
  PRIMARY KEY (`Id_Composants`),
  UNIQUE KEY `Id_SousFamilleComposants` (`Id_SousFamilleComposants`,`Id_Fournisseurs`,`Id_Module`),
  UNIQUE KEY `Id_Fournisseurs` (`Id_Fournisseurs`),
  UNIQUE KEY `Id_Module` (`Id_Module`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `composants`
--

INSERT INTO `composants` (`Id_Composants`, `Nom_Composants`, `Id_SousFamilleComposants`, `Id_Fournisseurs`, `Id_Module`, `Nature_Composants`, `Caracteristiques_Composants`, `Unite_Composants`, `PrixUnitaire_Composants`, `Quantite_Composants`, `Proprietaire_Composants`, `Section_Composants`, `Epaisseur_Composants`, `Largeur_Composants`, `Longueur_Composants`) VALUES
(1, 'Vis croix modèle 6', 1, 1, 1, 'Vis en forme de croix', 'ressemble à une vis', 'cm', 0.2, 50, '', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

DROP TABLE IF EXISTS `compose`;
CREATE TABLE IF NOT EXISTS `compose` (
  `Id_Compose` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Devis` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL,
  PRIMARY KEY (`Id_Compose`),
  UNIQUE KEY `Id_Devis` (`Id_Devis`,`Id_Module`),
  UNIQUE KEY `Id_Module` (`Id_Module`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `Date_Connexion` date NOT NULL,
  `Id_Connexion` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`Id_Connexion`),
  UNIQUE KEY `Id_Utilisateurs` (`Id_Utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `Id_Devis` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Utilisateurs` int(11) NOT NULL,
  `Id_Clients` int(11) NOT NULL,
  `Id_Etat` int(11) NOT NULL,
  `DateCreation_Devis` date NOT NULL,
  `DateModification_Devis` date NOT NULL,
  `Id_Statut` int(11) NOT NULL,
  `PrixTotal_Devis` double NOT NULL,
  `RemiseCommerciale_Devis` int(11) NOT NULL,
  PRIMARY KEY (`Id_Devis`),
  UNIQUE KEY `Id_Utilisateurs` (`Id_Utilisateurs`,`Id_Clients`,`Id_Etat`,`Id_Statut`),
  UNIQUE KEY `Id_Clients` (`Id_Clients`),
  UNIQUE KEY `Id_Etat` (`Id_Etat`),
  UNIQUE KEY `Id_Statut` (`Id_Statut`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `devis`
--

INSERT INTO `devis` (`Id_Devis`, `Id_Utilisateurs`, `Id_Clients`, `Id_Etat`, `DateCreation_Devis`, `DateModification_Devis`, `Id_Statut`, `PrixTotal_Devis`, `RemiseCommerciale_Devis`) VALUES
(1, 1, 1, 2, '2017-01-11', '2017-01-21', 1, 125000, 10);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `Id_Etat` int(11) NOT NULL AUTO_INCREMENT,
  `Description_Etat` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Etat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`Id_Etat`, `Description_Etat`) VALUES
(1, 'phase 1'),
(2, 'phase 2');

-- --------------------------------------------------------

--
-- Structure de la table `famillecomposants`
--

DROP TABLE IF EXISTS `famillecomposants`;
CREATE TABLE IF NOT EXISTS `famillecomposants` (
  `Id_FamilleComposants` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_FamilleComposants` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_FamilleComposants`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `famillecomposants`
--

INSERT INTO `famillecomposants` (`Id_FamilleComposants`, `Nom_FamilleComposants`) VALUES
(1, 'Vis'),
(2, 'Ecrous');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `Id_Fournisseurs` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Fournisseurs` varchar(50) NOT NULL,
  `Mail_Fournisseurs` varchar(50) NOT NULL,
  `Adresse_Fournisseurs` varchar(50) NOT NULL,
  `CodePostal_Fournisseurs` varchar(50) NOT NULL,
  `Ville_Fournisseurs` varchar(50) NOT NULL,
  `Telephone_Fournisseurs` varchar(50) NOT NULL,
  `Fax_Fournisseurs` varchar(50) NOT NULL,
  `NumSIRET_Fournisseurs` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Fournisseurs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`Id_Fournisseurs`, `Nom_Fournisseurs`, `Mail_Fournisseurs`, `Adresse_Fournisseurs`, `CodePostal_Fournisseurs`, `Ville_Fournisseurs`, `Telephone_Fournisseurs`, `Fax_Fournisseurs`, `NumSIRET_Fournisseurs`) VALUES
(1, 'Scierie Lorraine', 'contact@scierielorraine.fr', '34, rue des bois Nancy', '54000', 'Nancy', '0102030405', '', 'SIRET 123456789'),
(2, 'Bois Alsace', 'contact@boisalasace.eu', '78 avenue des pains', '69000', 'Strasbourg', '0203040506', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `gamme`
--

DROP TABLE IF EXISTS `gamme`;
CREATE TABLE IF NOT EXISTS `gamme` (
  `Id_Gamme` int(11) NOT NULL AUTO_INCREMENT,
  `Id_CaracteristiquesGamme` int(11) NOT NULL,
  `Nom_Gamme` varchar(50) NOT NULL,
  `Prix_Gamme` int(11) NOT NULL,
  `Proprietaire_Gamme` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Gamme`),
  UNIQUE KEY `Id_CaracteristiquesGamme` (`Id_CaracteristiquesGamme`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gamme`
--

INSERT INTO `gamme` (`Id_Gamme`, `Id_CaracteristiquesGamme`, `Nom_Gamme`, `Prix_Gamme`, `Proprietaire_Gamme`) VALUES
(1, 1, 'Luxe', 50000, 'Madera'),
(2, 2, 'Moyenne', 25000, 'Madera');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `Id_Module` int(11) NOT NULL AUTO_INCREMENT,
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
  `Epaisseur_Module` double NOT NULL,
  PRIMARY KEY (`Id_Module`),
  UNIQUE KEY `Id_Gamme` (`Id_Gamme`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`Id_Module`, `Id_Gamme`, `Nom_Module`, `Nature_Module`, `Caracteristique_Module`, `Unite_Module`, `Quantite_Module`, `Proprietaire_Module`, `Hauteur_Module`, `Longueur_Module`, `AngleEntrant_Module`, `AngleSortant_Module`, `Epaisseur_Module`) VALUES
(1, 2, 'Mur interieur', 'bois traité', 'Bois - 3 mois de traitement', 'm', 1, 'Madera', 3, 5, 150, 30, 0.6),
(2, 1, 'Mur extérieur', 'Bois massif', '100% bois', 'm', 1, 'Madera', 2.5, 4, 90, 90, 0.45);

-- --------------------------------------------------------

--
-- Structure de la table `photosgammes`
--

DROP TABLE IF EXISTS `photosgammes`;
CREATE TABLE IF NOT EXISTS `photosgammes` (
  `Id_PhotosGammes` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Gamme` int(11) NOT NULL,
  `LienPhotosServeur_PhotosGammes` varchar(100) NOT NULL,
  `DateCreation_PhotosGammes` date NOT NULL,
  `Poids_PhotosGammes` double NOT NULL,
  `Legende_PhotosGammes` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_PhotosGammes`),
  UNIQUE KEY `Id_Gamme` (`Id_Gamme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photosmodules`
--

DROP TABLE IF EXISTS `photosmodules`;
CREATE TABLE IF NOT EXISTS `photosmodules` (
  `Id_PhotosModule` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Module` int(11) NOT NULL,
  `LienPhotosServeur_PhotosModule` varchar(100) NOT NULL,
  `DateCreation_PhotosModules` date NOT NULL,
  `Poids_PhotosModules` double NOT NULL,
  `Legende_PhotosModules` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_PhotosModule`),
  UNIQUE KEY `Id_Module` (`Id_Module`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `Id_Possede` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Composants` int(11) NOT NULL,
  `Id_Module` int(11) NOT NULL,
  PRIMARY KEY (`Id_Possede`),
  UNIQUE KEY `Id_Composants` (`Id_Composants`,`Id_Module`),
  UNIQUE KEY `Id_Module` (`Id_Module`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `Id_Role` int(11) NOT NULL AUTO_INCREMENT,
  `Description_Role` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`Id_Role`, `Description_Role`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, 'Visiteurs');

-- --------------------------------------------------------

--
-- Structure de la table `sousfamillecomposants`
--

DROP TABLE IF EXISTS `sousfamillecomposants`;
CREATE TABLE IF NOT EXISTS `sousfamillecomposants` (
  `Id_SousFamilleComposants` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_SousFamilleComposant` varchar(50) NOT NULL,
  `Id_FamilleComposants` int(11) NOT NULL,
  PRIMARY KEY (`Id_SousFamilleComposants`),
  UNIQUE KEY `Id_FamilleComposants` (`Id_FamilleComposants`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sousfamillecomposants`
--

INSERT INTO `sousfamillecomposants` (`Id_SousFamilleComposants`, `Nom_SousFamilleComposant`, `Id_FamilleComposants`) VALUES
(1, 'Vis croix', 1),
(2, 'Écrous plats', 2);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `Id_Statut` int(11) NOT NULL AUTO_INCREMENT,
  `Description_Statut` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Statut`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`Id_Statut`, `Description_Statut`) VALUES
(1, 'En cours'),
(2, 'Archivé');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Id_Utilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Role` int(11) NOT NULL,
  `Nom_Utilisateurs` varchar(20) NOT NULL,
  `Prenom_Utilisateurs` varchar(20) NOT NULL,
  `Mail_Utilisateurs` varchar(20) NOT NULL,
  `Telephone_Utilisateurs` varchar(20) NOT NULL,
  `LastConnexion_Utilisateurs` date NOT NULL,
  `CodePostal_Utilisateurs` varchar(20) NOT NULL,
  `Adresse_Utilisateurs` varchar(50) NOT NULL,
  `Pwd_Utilisateurs` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Utilisateurs`),
  UNIQUE KEY `Id_Role` (`Id_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id_Utilisateurs`, `Id_Role`, `Nom_Utilisateurs`, `Prenom_Utilisateurs`, `Mail_Utilisateurs`, `Telephone_Utilisateurs`, `LastConnexion_Utilisateurs`, `CodePostal_Utilisateurs`, `Adresse_Utilisateurs`, `Pwd_Utilisateurs`) VALUES
(1, 1, 'PIERRAT', 'Alexandre', 'test@hotmail.fr', '0621643898', '2017-01-01', '54520', '17 avenue sainte anne', '1234'),
(2, 2, 'BENOIT', 'Julien', 'kikimou@gmail.com', '0102030405', '2017-01-18', '12345', 'coucou l''adresse', '12345');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `composants`
--
ALTER TABLE `composants`
  ADD CONSTRAINT `Composants_ibfk_1` FOREIGN KEY (`Id_Fournisseurs`) REFERENCES `fournisseurs` (`Id_Fournisseurs`),
  ADD CONSTRAINT `Composants_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `module` (`Id_Module`),
  ADD CONSTRAINT `Composants_ibfk_3` FOREIGN KEY (`Id_SousFamilleComposants`) REFERENCES `sousfamillecomposants` (`Id_SousFamilleComposants`);

--
-- Contraintes pour la table `compose`
--
ALTER TABLE `compose`
  ADD CONSTRAINT `Compose_ibfk_1` FOREIGN KEY (`Id_Devis`) REFERENCES `devis` (`Id_Devis`),
  ADD CONSTRAINT `Compose_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `module` (`Id_Module`);

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `Connexion_ibfk_1` FOREIGN KEY (`Id_Utilisateurs`) REFERENCES `utilisateurs` (`Id_Utilisateurs`);

--
-- Contraintes pour la table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `Devis_ibfk_1` FOREIGN KEY (`Id_Utilisateurs`) REFERENCES `utilisateurs` (`Id_Utilisateurs`),
  ADD CONSTRAINT `Devis_ibfk_2` FOREIGN KEY (`Id_Clients`) REFERENCES `clients` (`Id_Clients`),
  ADD CONSTRAINT `Devis_ibfk_3` FOREIGN KEY (`Id_Etat`) REFERENCES `etat` (`Id_Etat`),
  ADD CONSTRAINT `Devis_ibfk_4` FOREIGN KEY (`Id_Statut`) REFERENCES `statut` (`Id_Statut`);

--
-- Contraintes pour la table `gamme`
--
ALTER TABLE `gamme`
  ADD CONSTRAINT `Gamme_ibfk_1` FOREIGN KEY (`Id_CaracteristiquesGamme`) REFERENCES `caracteristiques_gamme` (`Id_CaracteristiquesGamme`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `Module_ibfk_1` FOREIGN KEY (`Id_Gamme`) REFERENCES `gamme` (`Id_Gamme`);

--
-- Contraintes pour la table `photosgammes`
--
ALTER TABLE `photosgammes`
  ADD CONSTRAINT `PhotosGammes_ibfk_1` FOREIGN KEY (`Id_Gamme`) REFERENCES `gamme` (`Id_Gamme`);

--
-- Contraintes pour la table `photosmodules`
--
ALTER TABLE `photosmodules`
  ADD CONSTRAINT `PhotosModules_ibfk_1` FOREIGN KEY (`Id_Module`) REFERENCES `module` (`Id_Module`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `Possede_ibfk_1` FOREIGN KEY (`Id_Composants`) REFERENCES `composants` (`Id_Composants`),
  ADD CONSTRAINT `Possede_ibfk_2` FOREIGN KEY (`Id_Module`) REFERENCES `module` (`Id_Module`);

--
-- Contraintes pour la table `sousfamillecomposants`
--
ALTER TABLE `sousfamillecomposants`
  ADD CONSTRAINT `SousFamilleComposants_ibfk_1` FOREIGN KEY (`Id_FamilleComposants`) REFERENCES `famillecomposants` (`Id_FamilleComposants`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`Id_Role`) REFERENCES `role` (`Id_Role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
