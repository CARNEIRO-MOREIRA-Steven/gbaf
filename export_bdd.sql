-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 fév. 2023 à 12:55
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gbaf2`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_user`, `nom`, `prenom`, `username`, `password`, `question`, `reponse`) VALUES
(1, 'CARNEIRO MOREIRA', 'STEVEN', 'Squaad6z', '$2y$10$s42xQgxtOOgdNFAuqOa6GOgmtkGfcW5xBCEW4Df7qGTo4SFMnh/oa', 'père', 'Thierry'),
(25, 'Million', 'Lindsay', 'ML', '$2y$10$NlZiVuj0RiIDTWXSRZd7j.AtBGTY5DzoFKIijHTIhDUNV9KOj9RbK', 'père', 'John'),
(28, 'ROLLET', 'Alexis', 'Zurtak', '$2y$10$zSztxid3Uxb68XBCw6I3qeO3YQF2sZuQiIcEEbTkU.BUummoq1NOS', 'père', 'Cyril'),
(31, 'Carneiro', 'Thierry', 'Thierry', '$2y$10$jE8EgCNXp.vxo3c1hGwqVOHBGj2XsxfBcSdsmcq1qthUkGCaZ1MWu', 'ville', 'Noyon');

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int NOT NULL AUTO_INCREMENT,
  `acteur` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `acteur`, `description`, `logo`) VALUES
(1, 'Formation_co', 'Formation&co est une association française présente sur tout le territoire.\r\n                \r\nNous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.\r\n\r\nNotre proposition :\r\nUn financement jusqu\'à 30 000€ ;\r\nun suivi personnalisé et gratuit ;\r\nune lutte acharnée contre les freins sociétaux et les stéréotypes.\r\n        \r\nLe financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… .\r\n\r\nNous collaborons avec des personnes talentueuses et motivées.\r\n\r\nVous n\'avez pas de diplômes ? Ce n\'est pas un problème pour nous ! Nos financements s\'adressent à tous.', 'img/formation_co.png'),
(2, 'Protectpeople', 'Protectpeople finance la solidarité nationale.\n              Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier\n              d\'une protection sociale.\n      \n              Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.\n              Proectecpeople est ouvert à tous, sans considération d\'âge ou d\'état de santé.\n              Nous garantissons un accès aux soins et une retraite.\n              Chaque année, nous collectons et répartissons 300 milliards d\'euros.\n              Notre mission est double :\n              sociale : nous garantissons la fiabilité des données sociales.    \n              économique : nous apportons une contribution aux activités économiques.', 'img/protectpeople.png'),
(3, 'Dsa_france', 'Dsa France accélère la croissance du territoire et s\'engage avec les collectivités territoriales.\n              Nous accompagnons les entreprises dans les étapes clés de leur évolution.\n              Notre philosophie : s\'adapter à chaque entreprise.\n              Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à\n              chaque étape de la vie des entreprises', 'img/dsa_france.png'),
(4, 'CDE', 'La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.\n              Son président est élu pour 3 ans par ses pairs, chefs d\'entreprises et présidents des CDE.', 'img/cde.png');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_acteur` int NOT NULL,
  `date_add` datetime NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_user` (`id_user`),
  KEY `id_acteur` (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `id_acteur`, `date_add`, `post`) VALUES
(60, 1, 1, '2023-02-13 17:55:25', 'Bonjour'),
(61, 25, 1, '2023-02-15 11:24:44', 'dq'),
(62, 1, 2, '2023-02-15 11:55:02', 'Bonjour très bien comme entreprise '),
(63, 1, 4, '2023-02-15 12:08:33', 'dsbsbs'),
(64, 1, 3, '2023-02-15 12:10:27', 'thj'),
(65, 25, 3, '2023-02-16 08:37:41', 'hrgd'),
(66, 31, 1, '2023-02-20 09:31:42', 'Bonjour, je trouve que cette agence est très bien, je recommande !');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id_vote` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_acteur` int NOT NULL,
  `vote` int NOT NULL,
  PRIMARY KEY (`id_vote`),
  KEY `id_user` (`id_user`),
  KEY `id_acteur` (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `vote`
--

INSERT INTO `vote` (`id_vote`, `id_user`, `id_acteur`, `vote`) VALUES
(33, 1, 1, 0),
(36, 1, 4, 0),
(37, 25, 1, 0),
(38, 25, 2, 1),
(39, 1, 2, 1),
(40, 1, 3, 0),
(41, 31, 1, 0),
(42, 31, 3, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `account` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `account` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
