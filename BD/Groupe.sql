-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Ven 02 Septembre 2022 à 20:44
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
-- Structure de la table `Groupe`
--

CREATE TABLE IF NOT EXISTS `Groupe` (
  `ID` int(11) NOT NULL auto_increment,
  `nom` varchar(99) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `Groupe`
--

INSERT INTO `Groupe` (`ID`, `nom`) VALUES
(1, '1-3TRPM'),
(2, '1-4TNE1'),
(3, '1-4TNE2'),
(4, '2-3MV3'),
(5, '2-4TNE1'),
(6, '2-4TNE2'),
(7, '2-5REMI'),
(8, 'T-3TRPM'),
(9, '1-1'),
(10, '2-1'),
(11, 'T-1'),
(12, '2-1PMIA1'),
(13, '2-1PMIA2'),
(14, '1-1MSPC1'),
(15, '1-1MSPC2'),
(16, 'T-1MSPC1'),
(17, 'T-1MSPC2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
