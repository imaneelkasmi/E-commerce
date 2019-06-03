-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  mer. 15 mai 2019 à 16:23
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id_items` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `des` varchar(200) NOT NULL,
  `catg` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_items`, `title`, `des`, `catg`, `price`, `img`) VALUES
(24, 'burger ', 'burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger burger !!!!', 'sandwichs', '40', 0x6368656573656275726765722e6a7067),
(26, 'chicken burger ', 'chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger chicken burger !!!', 'sandwichs', '45', 0x436869636b656e2d4275726765722e6a7067),
(27, 'panini ', 'panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini panini !!!', 'sandwichs', '25', 0x50616e696e692e6a7067),
(28, 'hot dog ', 'hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog hot dog !!!!', 'sandwichs', '50', 0x686f742d646f672e6a7067),
(29, 'tacos ', 'tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos tacos !!!', 'sandwichs', '60', 0x7461636f732e706e67),
(30, 'tuna sandwich ', 'tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich tuna sandwich !!!', 'sandwichs', '50', 0x74756e612d73616e64776963682e6a7067),
(31, 'margaritha ', 'margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha margaritha !!!!', 'pizza', '30', 0x6d6172676865726974612e6a7067),
(32, 'royale ', 'royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale royale !!!', 'pizza', '60', 0x726f79616c652e6a7067),
(33, 'see food pizza ', 'see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza see food pizza !!!', 'pizza', '60', 0x50697a7a612d6672756974732d6d65722e6a7067),
(34, 'sweet chicken pizza ', 'sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza sweet chicken pizza !!!', 'pizza', '50', 0x73776565742d636869636b656e2e6a7067),
(35, 'spicy hut ', 'spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut spicy hut !!!', 'pizza', '45', 0x73706963792d6875742e6a7067),
(36, 'vegetarian pizza', 'vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza vegetarian pizza !!!', 'pizza', '35', 0x70697a7a612d766567652e6a7067),
(37, 'pepci ', 'pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci i pepci pepci pepci pepci pepci pepci pepci pepci pepci pepci !!!', 'drinks', '20', 0x50657073692e6a7067),
(38, 'fanta ', 'fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta fanta !!!', 'drinks', '20', 0x66616e74612e6a7067),
(39, 'orange juice ', 'orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice orange juice !!', 'drinks', '25', 0x6a75652d6f72616e67652e6a7067),
(40, 'fruit juice ', 'fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit juice fruit ju', 'drinks', '25', 0x6a75652d6672756974732e6a7067),
(41, 'cocacola ', 'cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola cocacola !!!', 'drinks', '20', 0x636f6361636f6c612e6a7067),
(42, '7 up ', '7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up 7 up !!!! ', 'drinks', '20', 0x3775702e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(0, 'admin', 12345);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_items`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
