-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Sam 03 Septembre 2022 à 14:45
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `evaluation_insitu`
--

-- --------------------------------------------------------

--
-- Structure de la table `Devoir`
--

CREATE TABLE IF NOT EXISTS `Devoir` (
  `ID` int(11) NOT NULL auto_increment,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  `description` text collate latin1_general_ci NOT NULL,
  `auteurID` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `Devoir`
--

INSERT INTO `Devoir` (`ID`, `nom`, `description`, `auteurID`) VALUES
(1, 'série TP N°1 analyse structurelle - TTRPM', 'extrait de sujet de bac TU', 2),
(2, 'série TP N°1 analyse système - 1TRPM', 'extrait de sujets de certification intermédiaire', 2),
(3, 'devoir 1', 'description', 1),
(4, 'devoir 2', '-', 0),
(5, 'devoir A', '', 2),
(6, 'devoir B', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
