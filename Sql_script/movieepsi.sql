-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Avril 2015 à 09:14
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

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `rated`, `date`, `runtime`, `plot`, `language`) VALUES
('tt3316960', 'Still Alice', 2014, 'PG-13', '2015-02-13', 101, 'Alice Howland, happily married with three grown children, is a renowned linguistics professor who starts to forget words. When she receives a devastating diagnosis, Alice and her family find their bonds tested.', 'English');

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
-- Contenu de la table `movies_countrys`
--

INSERT INTO `movies_countrys` (`id_movie`, `country`) VALUES
('tt3316960', 'USA'),
('tt3316960', 'France');

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

--
-- Contenu de la table `movies_genres`
--

INSERT INTO `movies_genres` (`id_movie`, `genre`) VALUES
('tt3316960', 'Drama');

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

--
-- Contenu de la table `movies_persons`
--

INSERT INTO `movies_persons` (`id_movie`, `id_person`) VALUES
('tt3316960', 1),
('tt3316960', 2),
('tt3316960', 3),
('tt3316960', 4),
('tt3316960', 5),
('tt3316960', 6),
('tt3316960', 7),
('tt3316960', 8),
('tt3316960', 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `gender`, `type`) VALUES
(1, 'Richard', 'Glatzer', 'M', 'Director'),
(2, 'Wash', 'Westmoreland', 'M', 'Director'),
(3, 'Lisa', 'Genova', 'F', 'Writer'),
(4, 'Richard', 'Glatzer', 'M', 'Writer'),
(5, 'Wash', 'Westmoreland', 'M', 'Writer'),
(6, 'Julianne', 'Moore', 'F', 'Actors'),
(7, 'Kate', 'Bosworth', 'F', 'Actors'),
(8, 'Shane', 'McRae', 'F', 'Actors'),
(9, 'Hunter', 'Parrish', 'M', 'Actors');

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
