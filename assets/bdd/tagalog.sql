-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 29 avr. 2021 à 13:38
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
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_picture` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `profile_picture`, `username`, `password`) VALUES
(1, 'augustin.jpg', 'augustin', 'ttt'),
(3, 'may.jpg', 'may', 'kubota');

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `english` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `french` varchar(255) DEFAULT NULL,
  `tagalog` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `picture`, `english`, `french`, `tagalog`) VALUES
(1, 'crocodile.png', 'crocodile', 'crocodile', 'buwaya'),
(3, 'bird.png', 'jacques', 'Bird', 'le');

-- --------------------------------------------------------

--
-- Structure de la table `categories_portfolio`
--

DROP TABLE IF EXISTS `categories_portfolio`;
CREATE TABLE IF NOT EXISTS `categories_portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories_portfolio`
--

INSERT INTO `categories_portfolio` (`id`, `category`) VALUES
(1, 'Meals'),
(2, 'Babies'),
(3, 'Wedding day'),
(4, 'Wedding trip');

-- --------------------------------------------------------

--
-- Structure de la table `categories_travel`
--

DROP TABLE IF EXISTS `categories_travel`;
CREATE TABLE IF NOT EXISTS `categories_travel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories_travel`
--

INSERT INTO `categories_travel` (`id`, `category`, `thumbnail`) VALUES
(1, 'Incredible places', 'loremTwo.jpg'),
(2, 'Activities', 'loremTwo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cooking`
--

DROP TABLE IF EXISTS `cooking`;
CREATE TABLE IF NOT EXISTS `cooking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `tagalog` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `french` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `english` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cooking`
--

INSERT INTO `cooking` (`id`, `picture`, `tagalog`, `french`, `english`) VALUES
(1, 'soup.png', 'manok', 'poulet', 'chicken'),
(2, 'cheese.png', 'goro', 'fromage', 'cheese'),
(3, 'egg.png', 'gurt', 'Oeuf', 'egg'),
(5, 'fish.png', 'Poisscaille', 'bfdb', 'Poiscaille');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `country`) VALUES
(1, 'philippines'),
(2, 'france');

-- --------------------------------------------------------

--
-- Structure de la table `countries_articles`
--

DROP TABLE IF EXISTS `countries_articles`;
CREATE TABLE IF NOT EXISTS `countries_articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country_id` int NOT NULL,
  `picture` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries_articles`
--

INSERT INTO `countries_articles` (`id`, `country_id`, `picture`, `title`, `description`) VALUES
(1, 1, 'lorem.jpg', 'Title 1', 'Donec faucibus mauris in elit accumsan, sit amet tempor mi euismod. Ut nec sem eu elit semper mollis. Proin euismod, tellus sed gravida luctus, risus velit tempus sem, eget interdum risus nunc id lacus. Curabitur tempus leo diam, sed elementum mi consequa'),
(2, 1, 'lorem.jpg', 'Title 2', 'Donec faucibus mauris in elit accumsan, sit amet tempor mi euismod. Ut nec sem eu elit semper mollis. Proin euismod, tellus sed gravida luctus, risus velit tempus sem, eget interdum risus nunc id lacus. Curabitur tempus leo diam, sed elementum mi consequa'),
(3, 1, 'lorem.jpg', 'Title 3', 'Donec faucibus mauris in elit accumsan, sit amet tempor mi euismod. Ut nec sem eu elit semper mollis. Proin euismod, tellus sed gravida luctus, risus velit tempus sem, eget interdum risus nunc id lacus. Curabitur tempus leo diam, sed elementum mi consequa'),
(4, 1, 'lorem.jpg', 'Title 4', 'Donec faucibus mauris in elit accumsan, sit amet tempor mi euismod. Ut nec sem eu elit semper mollis. Proin euismod, tellus sed gravida luctus, risus velit tempus sem, eget interdum risus nunc id lacus. Curabitur tempus leo diam, sed elementum mi consequa'),
(6, 2, 'loremTwo.jpg', 'Title 1', 'Pellentesque sit amet dui vel neque sollicitudin semper ac ac lacus. Sed in risus nunc. Mauris nec risus ut purus malesuada posuere. Phasellus sodales et velit ac vulputate. Pellentesque molestie ipsum eget lacus efficitur, nec luctus enim consequat. Ut v'),
(7, 2, 'loremTwo.jpg', 'Title 2', 'Pellentesque sit amet dui vel neque sollicitudin semper ac ac lacus. Sed in risus nunc. Mauris nec risus ut purus malesuada posuere. Phasellus sodales et velit ac vulputate. Pellentesque molestie ipsum eget lacus efficitur, nec luctus enim consequat. Ut v'),
(8, 2, 'loremTwo.jpg', 'Title 3', 'Pellentesque sit amet dui vel neque sollicitudin semper ac ac lacus. Sed in risus nunc. Mauris nec risus ut purus malesuada posuere. Phasellus sodales et velit ac vulputate. Pellentesque molestie ipsum eget lacus efficitur, nec luctus enim consequat. Ut v'),
(9, 2, 'loremTwo.jpg', 'Title 4', 'Pellentesque sit amet dui vel neque sollicitudin semper ac ac lacus. Sed in risus nunc. Mauris nec risus ut purus malesuada posuere. Phasellus sodales et velit ac vulputate. Pellentesque molestie ipsum eget lacus efficitur, nec luctus enim consequat. Ut v');

-- --------------------------------------------------------

--
-- Structure de la table `courtesy`
--

DROP TABLE IF EXISTS `courtesy`;
CREATE TABLE IF NOT EXISTS `courtesy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tagalog` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `french` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `courtesy`
--

INSERT INTO `courtesy` (`id`, `tagalog`, `english`, `french`) VALUES
(1, 'Kumusta !', 'Hello !', 'Bonjour !'),
(4, 'jean', 'jacques', 'martin');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture_one` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `experience` varchar(255) NOT NULL,
  `dreamplace_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_dreamplace` (`dreamplace_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id`, `picture_one`, `experience`, `dreamplace_id`) VALUES
(1, 'lorem.jpg', 'In metus risus, vulputate vitae dapibus ac, cursus in odio. Praesent at odio urna. Proin imperdiet metus urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec lobortis, justo vitae tristique aliquet, arcu felis', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `addDate` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `addDate`, `picture`, `title`, `description`, `category_id`) VALUES
(1, NULL, 'picture1.jpg', 'Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin est libero, mattis eget velit at, porta cursus ex. Nunc eu condimentum ante. Fusce vulputate, mauris et consequat tristique, nisi diam semper ante, et commodo justo dolor eget ipsum. In gravida nisl hendrerit lectus tristique, ut elementum ipsum feugiat. Curabitur consectetur metus quis augue convallis vehicula. In nec urna erat. Phasellus a mattis sapien. Quisque tellus metus, vehicula at sapien a, pellentesque sodales nunc. Cras luctus vel nunc at mollis.', 1),
(2, NULL, 'picture2.jpg', 'title 2', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam non scelerisque ante, vel malesuada enim. Fusce tempus fermentum sagittis. Integer vitae massa felis. Mauris bibendum id sapien pretium iaculis. Fusce quis velit tempor, auctor augue quis, iaculis libero. Sed neque metus, dapibus non diam id, tristique venenatis urna.', 1),
(3, NULL, 'picture3.jpg', 'Title 3', 'Integer interdum mollis leo nec fringilla. Nullam id viverra ante. Aliquam dapibus tempus massa, vel semper urna hendrerit ac. Vestibulum condimentum lorem ut arcu posuere pellentesque. Mauris vel purus iaculis, tempus nulla et, dignissim diam. Nam scelerisque magna id feugiat rhoncus. Pellentesque suscipit arcu id ex sollicitudin, a efficitur erat varius. Pellentesque viverra, odio eget maximus malesuada, tellus est molestie sapien, vel interdum lorem nulla ut libero. Aenean lacinia nulla neque, quis dictum odio consectetur vel. Fusce porttitor convallis ipsum sed vulputate. Pellentesque finibus orci in nunc iaculis porttitor.', 2),
(4, NULL, 'picture4.jpg', 'Title 4', 'Phasellus eget est leo. Vestibulum at nisi quis purus fringilla porttitor. In sed rhoncus mauris. Phasellus dapibus magna mi, a accumsan nisl congue eget. Aliquam dapibus venenatis fermentum. Pellentesque id ante ut velit accumsan interdum. Fusce lectus lectus, fringilla id interdum non, elementum nec arcu. Nullam vehicula nisi sed velit pulvinar, et dignissim est varius. Aliquam sit amet consectetur dolor, ut tincidunt magna. Sed id orci ipsum. Integer sollicitudin neque vitae metus mollis, ac porta mauris finibus.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `songs`
--

INSERT INTO `songs` (`id`, `link`, `title`, `description`, `user_id`) VALUES
(1, 'PyFoVbw3jyI', '', 'Sed posuere elit sapien, sit amet accumsan ligula porttitor nec. Ut a venenatis dolor, sit amet cursus turpis. Curabitur dignissim, neque in tincidunt tempor, orci lorem hendrerit elit, et rhoncus neque mi a purus. Vivamus ipsum ligula, rhoncus ut suscipi', 1),
(11, '4n6tbxBOFfA', '', '', 1),
(12, 'h_YXWBoL5eE', 'ssss', 'ssss', 1),
(14, 'wKX0eZmkXhs', 'sss', 'ssss', 1),
(15, '6b6Q6zuqLtk', 'ssss', 'ssss', 1),
(19, '5x-_gucJd7c', 'ssss', 'sssss', 1),
(20, '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `travels`
--

DROP TABLE IF EXISTS `travels`;
CREATE TABLE IF NOT EXISTS `travels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `addDate` varchar(50) NOT NULL,
  `addBy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext,
  `display_carousel` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `picture_1` varchar(255) DEFAULT NULL,
  `picture_2` varchar(255) DEFAULT NULL,
  `picture_3` varchar(255) DEFAULT NULL,
  `picture_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `travels`
--

INSERT INTO `travels` (`id`, `addDate`, `addBy`, `picture`, `title`, `description`, `display_carousel`, `category_id`, `picture_1`, `picture_2`, `picture_3`, `picture_4`) VALUES
(7, '26/02/2021', 'May', 'picture1.jpg', 'Title 1', 'Nullam id nulla sed sapien vestibulum blandit sed a ex. Etiam ultrices erat sed luctus ornare. Integer non condimentum ante, vitae congue nunc. Nullam volutpat neque sed ultricies finibus. Duis interdum felis vel fringilla dignissim. Phasellus tempus ac leo in rutrum. Nam faucibus ligula nec mattis volutpat. Pellentesque varius consequat libero. Fusce sagittis dignissim mattis. Cras imperdiet ligula a sem semper aliquam. Nunc eget laoreet nisl, ac congue arcu. Suspendisse vitae lorem turpis.\r\n\r\nAliquam ac sodales dolor, at pretium ante. Nam purus erat, lobortis eu ultricies at, pulvinar quis purus. Sed dolor quam, vehicula dignissim arcu sit amet, pellentesque mattis leo. Duis lobortis nec urna non ultrices. Nunc at augue ut arcu volutpat fermentum vel non lectus. Sed quam nibh, sollicitudin ut consectetur sed, malesuada et ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce efficitur lacus a orci fringilla, id commodo leo lobortis. Sed finibus quis lacus ac molestie.\r\n\r\n', 0, 1, 'picture4.jpg', 'picture5.jpg', 'picture6.jpg', 'picture6.jpg'),
(8, '26/02/2021', '', 'picture2.jpg', 'Title 2', 'fffffff', 1, 1, '', '', '', ''),
(10, '28/02/2021', '', 'picture1.jpg', 'Title 1', 'gcytfvygvvyu', 1, 1, '', '', '', ''),
(11, '28/02/2021', '', 'picture1.jpg', 'Title 2', 'xxxx', 0, 1, '', '', '', ''),
(12, '02/03/2021', '', 'picture4.jpg', 'Title 5', 'Description 5', 1, 1, '', '', '', ''),
(13, '06/03/2021', '', 'picture2.jpg', 'fezrffz', 'PD', 0, 1, '', '', '', NULL),
(14, '06/03/2021', '', 'picture4.jpg', 'dzada', 'dazdza', 0, 1, '', 'picture4.jpg', 'picture6.jpg', NULL),
(15, '07/03/2021', '', 'picture5.jpg', 'fezrffz', 'fezsfzefzeffzef', 0, 1, 'picture5.jpg', 'picture5.jpg', 'picture3.jpg', NULL),
(18, '15/03/2021', 'Augustin', 'picture3.jpg', 'fezrffz', 'ffffffffffffffffffffff', 0, 2, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user`) VALUES
(1, 'May'),
(2, 'Augustin'),
(3, 'Both');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `countries_articles`
--
ALTER TABLE `countries_articles`
  ADD CONSTRAINT `countries_articles_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`dreamplace_id`) REFERENCES `travels` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories_portfolio` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `travels`
--
ALTER TABLE `travels`
  ADD CONSTRAINT `travels_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories_travel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
