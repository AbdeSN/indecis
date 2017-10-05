-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2017 at 04:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indecis`
--

-- --------------------------------------------------------

--
-- Table structure for table `besoins`
--

DROP TABLE IF EXISTS `besoins`;
CREATE TABLE IF NOT EXISTS `besoins` (
  `idB` int(4) NOT NULL AUTO_INCREMENT,
  `datedujour` varchar(50) NOT NULL,
  `nomentreprise` varchar(50) NOT NULL,
  `nomclient` varchar(50) NOT NULL,
  `idC` int(4) NOT NULL,
  `titreticket` text NOT NULL,
  `descriptionticket` text NOT NULL,
  `factor1` varchar(50) NOT NULL,
  `factor2` varchar(50) DEFAULT NULL,
  `factor3` varchar(50) DEFAULT NULL,
  `montant` float NOT NULL,
  `statut` varchar(45) NOT NULL,
  `streetnb` varchar(50) NOT NULL,
  `street` varchar(45) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `city` text NOT NULL,
  `datedebut` varchar(50) NOT NULL,
  `datefin` varchar(50) NOT NULL,
  `nbjoursemaine` int(11) NOT NULL,
  `dateauplustard` varchar(50) NOT NULL,
  `consultantname1` varchar(50) NOT NULL,
  `consultantname2` varchar(50) DEFAULT NULL,
  `consultantname3` varchar(50) DEFAULT NULL,
  `consultantname4` varchar(50) DEFAULT NULL,
  `consultantname5` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idB`),
  KEY `id client` (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `besoins`
--

INSERT INTO `besoins` (`idB`, `datedujour`, `nomentreprise`, `nomclient`, `idC`, `titreticket`, `descriptionticket`, `factor1`, `factor2`, `factor3`, `montant`, `statut`, `streetnb`, `street`, `postalcode`, `city`, `datedebut`, `datefin`, `nbjoursemaine`, `dateauplustard`, `consultantname1`, `consultantname2`, `consultantname3`, `consultantname4`, `consultantname5`) VALUES
(3, '2000-05-12', 'zz', 'zz', 1, 'zz', '', '', '', '', 555, '', '5555', 'zz', '44', 'zz', '2000-05-12', '2000-05-12', 5, '2000-05-12', 'zz', 'zz', 'zz', 'zz', 'zz'),
(4, '', 'zz', 'zz', 1, 'test', 'test', 'f1', 'f2', 'f3', 55, '', '123123', 'zz', '44', 'zz', '10/02/2017', '10/15/2017', 0, '10/25/2017', 'zz', 'zz', 'zz', 'zz', 'zz'),
(5, '', 'zz', 'zz', 1, 'test', 'test', 'f1', 'f2', 'f3', 55, '', '123123', 'zz', '44', 'zz', '10/02/2017', '10/15/2017', 0, '10/25/2017', 'zz', 'zz', 'zz', 'zz', 'zz'),
(6, '', 'zz', 'zz', 1, 'z', 'jkmljkf', 'f1', 'f2', 'f3', 54.7, '', '21', 'zz', '44', 'zz', '10/10/2017', '11/30/2017', 6, '10/09/2017', 'zz', 'zz', 'z', 'zz', 'zz'),
(7, '', 'zz', 'zz', 1, 'test', 'zezer', 'sdfqs', 'qsdf', 'qsdf', 55, '', '45', 'zz', '44', 'zz', '10/08/2017', '10/11/2017', 4, '10/18/2017', 'zz', 'zz', 'zz', 'zz', 'zz');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idC` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `raison_sociale` varchar(45) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idC`, `nom`, `prenom`, `raison_sociale`) VALUES
(1, 'nom_client1', 'prenom_client2', 'enseignant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idU` int(4) NOT NULL AUTO_INCREMENT,
  `mail` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idU`, `mail`, `password`, `nom`, `prenom`) VALUES
(1, 'user1@gfi.fr', 'user1', 'nom_user1', 'prenom_user1'),
(2, 'user2@gfi.fr', 'user2', 'nom_user2', 'prenom_user2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `besoins`
--
ALTER TABLE `besoins`
  ADD CONSTRAINT `besoins_ibfk_1` FOREIGN KEY (`idC`) REFERENCES `client` (`idC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
