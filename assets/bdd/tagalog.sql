-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 jan. 2021 à 17:37
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tagalog`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `tagalog` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `picture`, `english`, `tagalog`) VALUES
(1, 'crocodile.png', 'crocodile', 'buwaya');

-- --------------------------------------------------------

--
-- Structure de la table `cooking`
--

DROP TABLE IF EXISTS `cooking`;
CREATE TABLE IF NOT EXISTS `cooking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `tagalog` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cooking`
--

INSERT INTO `cooking` (`id`, `picture`, `tagalog`, `english`) VALUES
(1, 'soup.png', 'manok', 'chicken');

-- --------------------------------------------------------

--
-- Structure de la table `courtesy`
--

DROP TABLE IF EXISTS `courtesy`;
CREATE TABLE IF NOT EXISTS `courtesy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tagalog` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `courtesy`
--

INSERT INTO `courtesy` (`id`, `tagalog`, `english`) VALUES
(1, 'Kumusta !', 'Hello !');

-- --------------------------------------------------------

--
-- Structure de la table `dreamplace`
--

DROP TABLE IF EXISTS `dreamplace`;
CREATE TABLE IF NOT EXISTS `dreamplace` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dreamplace`
--

INSERT INTO `dreamplace` (`id`, `picture`, `name`, `description`) VALUES
(1, 'batangas.jpg', 'Batangas', 'Cras sed varius velit, ac porta nulla. Ut mollis arcu metus, vel ultrices nibh ullamcorper ac. Nunc pellentesque mi quam, in euismod lorem posuere ut. Morbi sit amet dapibus nunc, et semper libero. Vivamus sollicitudin dictum ex et scelerisque. Nam et qua');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture_one` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `experience` varchar(255) NOT NULL,
  `id_dreamplace` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_dreamplace` (`id_dreamplace`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id`, `picture_one`, `experience`, `id_dreamplace`) VALUES
(1, 'lorem.jpg', 'In metus risus, vulputate vitae dapibus ac, cursus in odio. Praesent at odio urna. Proin imperdiet metus urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec lobortis, justo vitae tristique aliquet, arcu felis', 1);

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `picture`, `title`, `description`) VALUES
(1, 'picture1.jpg', 'Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin est libero, mattis eget velit at, porta cursus ex. Nunc eu condimentum ante. Fusce vulputate, mauris et consequat tristique, nisi diam semper ante, et commodo justo dolor eget ipsum. In gravida nisl hendrerit lectus tristique, ut elementum ipsum feugiat. Curabitur consectetur metus quis augue convallis vehicula. In nec urna erat. Phasellus a mattis sapien. Quisque tellus metus, vehicula at sapien a, pellentesque sodales nunc. Cras luctus vel nunc at mollis.'),
(2, 'picture2.jpg', 'title 2', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam non scelerisque ante, vel malesuada enim. Fusce tempus fermentum sagittis. Integer vitae massa felis. Mauris bibendum id sapien pretium iaculis. Fusce quis velit tempor, auctor augue quis, iaculis libero. Sed neque metus, dapibus non diam id, tristique venenatis urna.'),
(3, 'picture3', 'Title 3', 'Integer interdum mollis leo nec fringilla. Nullam id viverra ante. Aliquam dapibus tempus massa, vel semper urna hendrerit ac. Vestibulum condimentum lorem ut arcu posuere pellentesque. Mauris vel purus iaculis, tempus nulla et, dignissim diam. Nam scelerisque magna id feugiat rhoncus. Pellentesque suscipit arcu id ex sollicitudin, a efficitur erat varius. Pellentesque viverra, odio eget maximus malesuada, tellus est molestie sapien, vel interdum lorem nulla ut libero. Aenean lacinia nulla neque, quis dictum odio consectetur vel. Fusce porttitor convallis ipsum sed vulputate. Pellentesque finibus orci in nunc iaculis porttitor.');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_dreamplace`) REFERENCES `dreamplace` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
