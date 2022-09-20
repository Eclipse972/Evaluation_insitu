-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: evaluation.insitu.sql.free.fr
-- Généré le : Mer 21 Septembre 2022 à 00:25
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
-- Structure de la table `Squelette`
--

CREATE TABLE IF NOT EXISTS `Squelette` (
  `ID` int(11) NOT NULL auto_increment,
  `alpha` int(11) NOT NULL,
  `beta` int(11) NOT NULL default '0',
  `gamma` int(11) NOT NULL default '0',
  `texteMenu` varchar(99) collate latin1_general_ci NOT NULL,
  `imageMenu` varchar(99) collate latin1_general_ci NOT NULL default 'Vue/images/nom_du_fichier.png' COMMENT 'associée à la page',
  `ptiNom` varchar(99) collate latin1_general_ci NOT NULL,
  `classePage` varchar(99) collate latin1_general_ci NOT NULL default 'Page',
  `controleur` varchar(99) collate latin1_general_ci NOT NULL,
  `methode` varchar(99) collate latin1_general_ci NOT NULL default 'GET',
  `paramAutorise` varchar(99) collate latin1_general_ci NOT NULL default '[]' COMMENT 'syntaxe JSON',
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `navigation` (`alpha`,`beta`,`gamma`,`methode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`ID`, `alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePage`, `controleur`, `methode`, `paramAutorise`) VALUES
(5, 0, 0, 0, 'Accueil', '', 'home', 'Page', 'home.php', 'GET', '[]'),
(6, 1, 0, 0, 'Connexion', '', 'connecter', 'Page', 'connecter.php', 'GET', '[]'),
(7, 2, 0, 0, 'Professeur', '', 'professeur', 'Page', 'professeur.php', 'GET', '[]'),
(8, 1, 1, 0, 'Pb de connexion?', '', 'aide', 'Page', 'aideConnexion.php', 'GET', '[]'),
(9, 2, 1, 0, 'Aide professeur', '', 'aide', 'Page', 'aideProf.php', 'GET', '[]'),
(10, 3, 0, 0, 'Mode d&eacute;monstration', '', 'demonstration', 'Page', 'demo.php', 'GET', '[]'),
(11, 2, 2, 0, 'Modifier Profil', '', 'modifier', 'Page', 'modifierProfil.php', 'GET', '[]'),
(12, 4, 0, 0, 'D&eacute;connexion', '', 'deconnexion', 'Page', 'deconnecter.php', 'GET', '[]'),
(13, 5, 0, 0, 'Vos groupes/classes', '', 'classes', 'Page', 'classes.php', 'GET', '[]'),
(14, 6, 0, 0, 'Devoirs', '', 'devoirs', 'Page', 'devoirs.php', 'GET', '[]'),
(15, 7, 0, 0, 'R&eacute;f&eacute;rentiels', '', 'referentiels', 'Page', 'referentiels.php', 'GET', '[]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
