-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: c.hervi.sql.free.fr
-- Généré le : Dim 21 Août 2022 à 03:51
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `c_hervi`
--

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

DROP TABLE IF EXISTS `Utilisateur`;
CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `ID` int(11) NOT NULL auto_increment,
  `pseudo` varchar(99) collate latin1_general_ci NOT NULL,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  `prenom` varchar(99) collate latin1_general_ci NOT NULL,
  `MDP` text collate latin1_general_ci NOT NULL COMMENT 'hash dans le futur',
  `courriel` varchar(99) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`ID`, `pseudo`, `nom`, `prenom`, `MDP`, `courriel`) VALUES
(1, 'Démo', 'Arnaud', 'Nyme', 'mot2passe', 'arnaud.nyme@free.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
