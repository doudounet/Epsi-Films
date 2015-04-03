-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 19:46
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
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `movies_persons`
--
ALTER TABLE `movies_persons`
  ADD CONSTRAINT `movies_persons_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `persons` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
