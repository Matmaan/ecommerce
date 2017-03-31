-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 31 Mars 2017 à 16:36
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Cauchemar'),
(2, 'Erotique'),
(3, 'Ado'),
(4, 'Basique');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `name`, `description`, `image`, `price`, `quantity`) VALUES
(1, 1, 'Le grand méchant loup', 'BOUH ! Vous allez vous pisser dessus', 'https://images.pexels.com/photos/99551/hot-air-balloon-valley-sky-99551.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb', 25, 0),
(3, 2, 'Nuit en folie', 'Vous êtes accompagné(e) de la personne de votre choix et elle vous fiat bien ce que vous voulez...', 'https://static.pexels.com/photos/570/sunny-summer-catcher-feathers.jpg', 125, 0),
(4, 3, 'Le crush', 'Vous êtes tout ce que vous avez rêver d''être à l''âge ingrat', 'https://images.pexels.com/photos/163465/softball-girls-team-mates-happy-163465.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb', 100, 0),
(10, 4, 'sunt aut facere repellat provident', 'quia et suscipit\\nsuscipit recusandae consequuntur expedita et cum\\nreprehenderit molestiae ut ut quas totam\\nnostrum rerum est autem sunt rem eveniet architecto', 'https://images.pexels.com/photos/355296/pexels-photo-355296.jpeg?h=350&auto=compress&cs=tinysrgb', 23, 100),
(11, 2, 'qui est esse', 'est rerum tempore vitae\\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\\nqui aperiam non debitis possimus qui neque nisi nulla', 'https://images.pexels.com/photos/29017/pexels-photo-29017.jpg?h=350&auto=compress&cs=tinysrgb', 54, 100),
(12, 3, 'ea molestias quasi exercitationem', 'et iusto sed quo iure\\nvoluptatem occaecati omnis eligendi aut ad\\nvoluptatem doloribus vel accusantium quis pariatur\\nmolestiae porro eius odio et labore et velit aut', 'https://images.pexels.com/photos/355101/pexels-photo-355101.jpeg?h=350&auto=compress&cs=tinysrgb', 75, 100),
(13, 4, 'eum et est occaecati', 'ullam et saepe reiciendis voluptatem adipisci\\nsit amet autem assumenda provident rerum culpa\\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\\nquis sunt voluptatem rerum illo velit', 'https://images.pexels.com/photos/210144/pexels-photo-210144.jpeg?h=350&auto=compress&cs=tinysrgb', 78, 100),
(14, 1, 'sciunt quas odio', 'repudiandae veniam quaerat sunt sed\\nalias aut fugiat sit autem sed est\\nvoluptatem omnis possimus esse voluptatibus quis\\nest aut tenetur dolor neque', 'https://images.pexels.com/photos/279616/pexels-photo-279616.jpeg?h=350&auto=compress&cs=tinysrgb', 87, 100);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(55) DEFAULT 'user',
  `login` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `role`, `login`, `registered_at`) VALUES
(1, 'toto@ok.fr', '123', 'user', 'toto', '2017-03-31 14:28:08'),
(2, 'webforce', 'webforce', 'user', 'toto', '2017-03-31 14:30:05'),
(5, 'webforce@123.fr', 'webforce', 'user', 'a', '2017-03-31 14:36:19'),
(6, 'webforc', 'webforce', 'user', '', '2017-03-31 14:36:55'),
(7, 'webforcea', 'webforce', 'user', '', '2017-03-31 14:38:19'),
(8, 'webforceaa', 'webforce', 'user', '', '2017-03-31 14:39:21'),
(9, 'webforces', 'webforce', 'user', '', '2017-03-31 14:40:09'),
(10, 'webforcezgr', 'webforce', 'user', '', '2017-03-31 14:41:46'),
(24, 'test@123.com', '123', 'user', 'test', '2017-03-31 14:48:03'),
(27, '', '', 'user', '', '2017-03-31 15:14:02');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
