-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 19:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `movieepsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies_countrys`
--

DROP TABLE IF EXISTS `movies_countrys`;
CREATE TABLE IF NOT EXISTS `movies_countrys` (
  `id_movie` varchar(11) CHARACTER SET utf8 NOT NULL,
  `country` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  KEY `id_movie` (`id_movie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `movies_countrys`
--
ALTER TABLE `movies_countrys`
  ADD CONSTRAINT `movies_countrys_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
