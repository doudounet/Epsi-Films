-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 19:47
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
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` varchar(11) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `rated` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `date` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `runtime` int(11) DEFAULT NULL,
  `plot` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `language` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `movies_genres`
--

DROP TABLE IF EXISTS `movies_genres`;
CREATE TABLE IF NOT EXISTS `movies_genres` (
  `id_movie` varchar(11) CHARACTER SET utf8 NOT NULL,
  `genre` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  KEY `id_movie` (`id_movie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `movies_persons`
--

DROP TABLE IF EXISTS `movies_persons`;
CREATE TABLE IF NOT EXISTS `movies_persons` (
  `id_movie` varchar(11) CHARACTER SET utf8 NOT NULL,
  `id_person` int(11) NOT NULL,
  KEY `id_movie` (`id_movie`),
  KEY `id_person` (`id_person`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `movies_countrys`
--
ALTER TABLE `movies_countrys`
  ADD CONSTRAINT `movies_countrys_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`);

--
-- Contraintes pour la table `movies_genres`
--
ALTER TABLE `movies_genres`
  ADD CONSTRAINT `movies_genres_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`);

--
-- Contraintes pour la table `movies_persons`
--
ALTER TABLE `movies_persons`
  ADD CONSTRAINT `movies_persons_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `persons` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
