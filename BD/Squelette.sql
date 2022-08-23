-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: c.hervi.sql.free.fr
-- Généré le : Mar 23 Août 2022 à 11:23
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
-- Structure de la table `Squelette`
--

DROP TABLE IF EXISTS `Squelette`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `Squelette`
--

INSERT INTO `Squelette` (`ID`, `alpha`, `beta`, `gamma`, `texteMenu`, `imageMenu`, `ptiNom`, `classePage`, `controleur`, `methode`, `paramAutorise`) VALUES
(1, -1, 500, 0, 'Serveur satur&eacute;', '', 'Serveur_sature', 'PEUNC\\Erreur', 'erreur_serveur.php', 'GET', '[]'),
(2, -1, 404, 0, 'Cette page n&apos;existe pas', '', 'Page_inexistante', 'PEUNC\\Erreur', 'erreur_serveur.php', 'GET', '[]'),
(3, -1, 403, 0, 'Acc&egrave;s interdit', '', 'Acces_interdit', 'PEUNC\\Erreur', 'erreur_serveur.php', 'GET', '[]'),
(4, -1, 0, 0, 'Erreur inconnue', '', 'Erreur', 'PEUNC\\Erreur', 'erreur_serveur.php', 'GET', '[]'),
(5, 0, 0, 0, 'Page d&apos;accueil', '', 'home', 'PEUNC\\Page', 'home.php', 'GET', '[]'),
(6, 1, 0, 0, 'Connexion', '', 'connecter', 'PEUNC\\Page', 'connecter.php', 'GET', '[]'),
(7, 2, 0, 0, 'Professeur', '', 'professeur', 'PEUNC\\Page', 'professeur.php', 'GET', '[]'),
(8, 1, 1, 0, 'aide connexion', '', 'aide', 'PEUNC\\Page', 'aideConnexion.php', 'GET', '[]'),
(9, 2, 1, 0, 'Aide prof', '', 'aide', 'PEUNC\\Page', 'aideProf.php', 'GET', '[]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
