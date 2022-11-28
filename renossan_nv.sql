-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 27 nov. 2022 à 11:53
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `renossan nv`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `objet`, `message`) VALUES
(37, 'Myriam', 'Myriam@masf.aaa', 'Retard', 'dynamic');

-- --------------------------------------------------------

--
-- Structure de la table `gammes`
--

DROP TABLE IF EXISTS `gammes`;
CREATE TABLE IF NOT EXISTS `gammes` (
  `idGamme` int(11) NOT NULL AUTO_INCREMENT,
  `NomGam` varchar(30) NOT NULL,
  PRIMARY KEY (`idGamme`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gammes`
--

INSERT INTO `gammes` (`idGamme`, `NomGam`) VALUES
(1, '4x4'),
(2, 'Classiques'),
(5, 'Utilitaires');

-- --------------------------------------------------------

--
-- Structure de la table `gammoption`
--

DROP TABLE IF EXISTS `gammoption`;
CREATE TABLE IF NOT EXISTS `gammoption` (
  `opID` int(11) NOT NULL,
  `idmodel` int(11) NOT NULL,
  PRIMARY KEY (`opID`,`idmodel`),
  KEY `FK_gammeID` (`idmodel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gammoption`
--

INSERT INTO `gammoption` (`opID`, `idmodel`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `optionID` int(11) NOT NULL AUTO_INCREMENT,
  `nomoption` varchar(30) NOT NULL,
  `desc1` text NOT NULL,
  `desc2` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `btnLink` varchar(100) NOT NULL,
  PRIMARY KEY (`optionID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`optionID`, `nomoption`, `desc1`, `desc2`, `image`, `btnLink`) VALUES
(1, 'Peinture metallisée', 'La peinture métallisée, également appelée peinture polychrome, est un type de peinture a laquelle de petites particules d\'aluminium ou d\'autres métaux ont été ajoutées afin de produire un effet brillant et de profondeur sur la surface, qui s\'accentuent surtout sur les contours de la carrosserie.', 1, 'images/peinturemetalises.jpg', 'op_Peinturesmetallises.php'),
(2, 'GPS', 'Le GPS, ou Global Positioning System, est un dispositif embarqué de navigation automobile. Il utilise généralement un appareil de navigation par satellite pour obtenir ses données de position, qui sont ensuite corrélées à une position sur la route, afin de fournir la direction programmée à suivre.', 2, 'images/gpsvoiture.jpg', 'op_gps.php'),
(3, 'Toit ouvrant', 'De toutes les tailles et de toutes les formes, le toit ouvrant de voiture est une ouverture intégrée au toit du véhicule au-dessus de l’habitacle.Il en existe de toutes les tailles : du plus petit, qui apporte seulement un courant d’air léger et agréable, au plus grand, qui vous offrira une vue dégagée. Les formes peuvent être choisies à votre convenance : coulissant, inclinant, il peut être également rétractable. Il s’agit ici d’une question de préférence et de choix personnel, mais aussi de bon sens : il faut choisir en fonction de votre véhicule.', 3, 'images/toitpaneau.jpg', 'op_toit.php');

-- --------------------------------------------------------

--
-- Structure de la table `renossanmodel`
--

DROP TABLE IF EXISTS `renossanmodel`;
CREATE TABLE IF NOT EXISTS `renossanmodel` (
  `modID` int(11) NOT NULL AUTO_INCREMENT,
  `nommod` varchar(30) NOT NULL,
  `car1` mediumtext NOT NULL,
  `car2` mediumtext NOT NULL,
  `modgamID` int(11) NOT NULL,
  PRIMARY KEY (`modID`),
  KEY `FK_gammemodel` (`modgamID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `renossanmodel`
--

INSERT INTO `renossanmodel` (`modID`, `nommod`, `car1`, `car2`, `modgamID`) VALUES
(1, 'Mustang', 'images/mustang.jpg', '123,000', 2),
(2, 'Qashqai', 'images/Qashqai.jpg', '50,000', 5),
(3, 'Jeep', 'images/jeep.jpg', '99,000', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gammoption`
--
ALTER TABLE `gammoption`
  ADD CONSTRAINT `FK_ModelID` FOREIGN KEY (`idmodel`) REFERENCES `renossanmodel` (`modID`),
  ADD CONSTRAINT `Fk_optionID` FOREIGN KEY (`opID`) REFERENCES `options` (`optionID`);

--
-- Contraintes pour la table `renossanmodel`
--
ALTER TABLE `renossanmodel`
  ADD CONSTRAINT `FK_gammemodel` FOREIGN KEY (`modgamID`) REFERENCES `gammes` (`idGamme`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
