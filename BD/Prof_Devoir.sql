-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Sam 03 Septembre 2022 à 14:56
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
-- Structure de la table `Prof_Devoir`
--

CREATE TABLE IF NOT EXISTS `Prof_Devoir` (
  `profID` int(11) NOT NULL,
  `devoirID` int(11) NOT NULL,
  UNIQUE KEY `unicité` (`profID`,`devoirID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `Prof_Devoir`
--

INSERT INTO `Prof_Devoir` (`profID`, `devoirID`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
