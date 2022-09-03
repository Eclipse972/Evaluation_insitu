-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Sam 03 Septembre 2022 à 17:34
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
-- Structure de la table `Prof_Referentiel`
--

CREATE TABLE IF NOT EXISTS `Prof_Referentiel` (
  `profID` int(11) NOT NULL,
  `referentielID` int(11) NOT NULL,
  UNIQUE KEY `unicité` (`profID`,`referentielID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Prof_Referentiel`
--

INSERT INTO `Prof_Referentiel` (`profID`, `referentielID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
