-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Sam 03 Septembre 2022 à 17:25
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
-- Structure de la table `Referentiel`
--

CREATE TABLE IF NOT EXISTS `Referentiel` (
  `ID` int(11) NOT NULL auto_increment,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  `description` text collate latin1_general_ci NOT NULL,
  `auteurID` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `Referentiel`
--

INSERT INTO `Referentiel` (`ID`, `nom`, `description`, `auteurID`) VALUES
(1, 'TRPM', 'construction et atelier TU', 2),
(2, 'MSPC', 'construction et atelier en maintenance', 3),
(3, 'sciences', 'math et physique en LP', 1),
(4, 'PIX', 'Compétences en informatique', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
