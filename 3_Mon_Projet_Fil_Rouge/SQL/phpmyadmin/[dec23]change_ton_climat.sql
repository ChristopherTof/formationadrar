-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 14 déc. 2023 à 10:22
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `change_ton_climat`
--

-- --------------------------------------------------------

--
-- Structure de la table `accept`
--

CREATE TABLE `accept` (
  `id_users` int(11) NOT NULL,
  `id_valid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discuss`
--

CREATE TABLE `discuss` (
  `id_discuss` int(11) NOT NULL,
  `title_discuss` varchar(50) NOT NULL,
  `body_discuss` text NOT NULL,
  `date_discuss` datetime DEFAULT NULL,
  `is_hidden_discuss` tinyint(1) DEFAULT '0',
  `author` int(11) DEFAULT NULL,
  `id_theme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `text_message` text,
  `date_message` datetime DEFAULT NULL,
  `sender` int(11) DEFAULT NULL,
  `recipient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `response`
--

CREATE TABLE `response` (
  `id_users` int(11) NOT NULL,
  `id_discuss` int(11) NOT NULL,
  `text_response` text,
  `date_response` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `name_theme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username_users` varchar(50) NOT NULL,
  `firstname_users` varchar(50) DEFAULT NULL,
  `lastname_users` varchar(50) DEFAULT NULL,
  `email_users` varchar(50) NOT NULL,
  `password_users` varchar(100) NOT NULL,
  `date_inscription_users` date DEFAULT NULL,
  `is_moderator` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `valid_info`
--

CREATE TABLE `valid_info` (
  `id_valid` int(11) NOT NULL,
  `name_valid` varchar(50) DEFAULT NULL,
  `is_valid` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`id_users`,`id_valid`),
  ADD KEY `fk_valid_accept` (`id_valid`);

--
-- Index pour la table `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`id_discuss`),
  ADD KEY `fk_author_discuss` (`author`),
  ADD KEY `fk_theme_discuss` (`id_theme`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `fk_recipient_message` (`recipient`),
  ADD KEY `fk_sender_message` (`sender`);

--
-- Index pour la table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_users`,`id_discuss`),
  ADD KEY `id_discuss` (`id_discuss`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username_users` (`username_users`),
  ADD UNIQUE KEY `email_users` (`email_users`);

--
-- Index pour la table `valid_info`
--
ALTER TABLE `valid_info`
  ADD PRIMARY KEY (`id_valid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `discuss`
--
ALTER TABLE `discuss`
  MODIFY `id_discuss` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `valid_info`
--
ALTER TABLE `valid_info`
  MODIFY `id_valid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accept`
--
ALTER TABLE `accept`
  ADD CONSTRAINT `fk_users_accept` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `fk_valid_accept` FOREIGN KEY (`id_valid`) REFERENCES `valid_info` (`id_valid`);

--
-- Contraintes pour la table `discuss`
--
ALTER TABLE `discuss`
  ADD CONSTRAINT `fk_author_discuss` FOREIGN KEY (`author`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `fk_theme_discuss` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id_theme`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_recipient_message` FOREIGN KEY (`recipient`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `fk_sender_message` FOREIGN KEY (`sender`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `fk_users_response` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `id_discuss` FOREIGN KEY (`id_discuss`) REFERENCES `discuss` (`id_discuss`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
