-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Août 2016 à 15:27
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kaemo`
--

-- --------------------------------------------------------

--
-- Structure de la table `k_movies`
--

CREATE TABLE `k_movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `real_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `duration` time NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `k_movies`
--

INSERT INTO `k_movies` (`id`, `order`, `title`, `real_name`, `release_date`, `duration`, `image`) VALUES
(1, 1, 'Drive', 'Nicolas Refn', '2011-05-20', '01:45:00', 'img/drive.jpg'),
(2, 6, 'Deadpool', 'Tom Miller', '2016-02-20', '01:57:00', 'img/deadpool.jpg'),
(3, 3, 'Star Wars', 'John Doe', '2015-12-10', '02:30:00', 'img/starwars.jpg'),
(4, 7, 'Dernier train pour Busan', 'Jonh Doe', '2016-08-17', '01:57:00', 'img/busan.jpg'),
(5, 2, 'The Strangers', 'Na Hong-Jin	', '2016-07-06', '02:36:00', 'img/the-strangers.jpg'),
(6, 4, 'Le Voyage de Chihiro', 'Hayao Miyazaki', '2001-07-27', '02:05:00', 'img/Le-Voyage-de-Chihiro.jpg'),
(7, 5, 'Le Tombeau des lucioles', 'Hotaru no Haka', '1988-04-16', '01:29:00', 'img/tombeau-des-lucioles.jpg'),
(8, 9, 'Fight Club', 'David Fincher', '1999-09-10', '02:19:00', 'img/fight-club.jpg'),
(9, 8, 'Seven', 'David Fincher', '1995-09-22', '02:07:00', 'img/seven.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `k_movies`
--
ALTER TABLE `k_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `k_movies`
--
ALTER TABLE `k_movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
