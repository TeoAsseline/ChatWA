-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 16 mars 2023 à 08:26
-- Version du serveur : 10.6.10-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u563109936_R410_Messageri`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `horaire` timestamp NOT NULL DEFAULT current_timestamp(),
  `auteur` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `horaire`, `auteur`, `contenu`, `conv`) VALUES
(1, '2023-02-21 08:57:43', 'Arthur', 'Salut moi c\'est Arthur, j\'aime beaucoup les haricots et Wario. WAAAAAAH !', 1),
(4, '2023-02-22 12:14:28', 'Antoine', 'Je suis un jambon.', 1),
(6, '2023-02-22 18:54:35', 'Téo', 'Vous êtes bourrés ?', 1),
(7, '2023-02-22 18:58:03', 'Téo', 'Allo ?', 1),
(8, '2023-02-22 18:59:40', 'Téo', 'Toujours pareil ...', 1),
(9, '2023-02-22 19:12:44', 'Arthur', 'Moi ça va, chui en forme !', 1),
(10, '2023-02-22 19:30:24', 'Arthur', 'c Antoine lol !', 1),
(11, '2023-02-22 19:34:16', 'Antoine', 'hein ?', 1),
(12, '2023-02-22 19:38:33', 'Antoine', 'moi ?', 1),
(13, '2023-02-22 19:39:20', 'Antoine', 'ui', 1),
(14, '2023-02-22 19:39:39', 'Antoine', 'c moi', 1),
(15, '2023-02-22 19:42:03', 'Bebou', 'Hello', 1),
(16, '2023-02-22 21:49:07', 'Téo', 'Salut bebou :)', 1),
(17, '2023-02-22 22:01:52', 'Téo', 'Ca va ?', 1),
(18, '2023-02-22 22:22:58', 'Bebou', 'uiiii ca va', 1),
(19, '2023-02-22 22:30:28', 'Arthur', 'Oh Bebou', 1),
(20, '2023-02-22 22:40:12', 'Téo', 'Waaaaaa', 1),
(21, '2023-02-22 22:44:17', 'Antoine', 'Vous êtes tous fou ici !', 1),
(22, '2023-02-23 08:05:55', 'Téo', 'Jamais de la vie', 1),
(23, '2023-02-23 10:51:32', 'Téo', 'Nous sommes normaux ici !', 1),
(28, '2023-03-08 22:39:56', 'Téo', 'WAA', 1),
(29, '2023-03-08 22:40:56', 'Téo', 'WAA', 1),
(30, '2023-03-08 22:41:21', 'Antoine', 'WAAAAAAAA ', 1),
(31, '2023-03-08 22:47:53', 'Antoine', 'Mon perso pref c&#039;est Mario lol !', 3),
(32, '2023-03-08 22:54:37', 'Téo', 'SALUT la famille !', 2),
(33, '2023-03-08 23:00:23', 'Arthur', 'slt comme dise les djeuns', 2),
(34, '2023-03-08 23:00:46', 'Arthur', 'Moi waluigi bien sur', 3),
(37, '2023-03-14 18:56:08', 'Menwizz', 'Bonjour !', 1),
(38, '2023-03-14 18:56:31', 'Menwizz', 'TEAM WARIO !', 3),
(39, '2023-03-14 19:08:39', 'Téo', 'Bonjour', 1),
(54, '2023-03-15 15:13:58', 'Téo', 'lol', 2),
(55, '2023-03-15 15:14:23', 'Téo', 't bete', 2),
(56, '2023-03-15 15:15:27', 'Téo', 'viens à la maison !', 2),
(57, '2023-03-15 15:16:50', 'Téo', 'plutôt', 2),
(58, '2023-03-15 15:18:07', 'Téo', 'monsieur arthur !', 2),
(59, '2023-03-15 16:57:40', 'Téo', 'oh les amis ....', 2),
(64, '2023-03-15 17:00:01', 'Téo', '...', 2),
(65, '2023-03-15 17:20:03', 'Téo', 'nin ten do', 3),
(66, '2023-03-15 17:47:16', 'Téo', 'its me wario !', 2),
(67, '2023-03-15 17:47:36', 'Téo', 'waaaaaaaa', 2),
(68, '2023-03-15 17:55:42', 'Fabio', 'Bonjour', 2),
(70, '2023-03-15 17:58:09', 'Fabio', 'dodo va tu dois aller', 3),
(74, '2023-03-15 18:03:21', 'Fabio', 'waaaaaa', 3),
(78, '2023-03-16 08:21:33', 'Fabio', 'cv Téo ?', 2),
(79, '2023-03-16 08:29:26', 'Fabio', 'téoooooo', 2),
(81, '2023-03-16 08:37:05', 'Fabio', 'asseline !', 2),
(84, '2023-03-16 08:53:00', 'Arthur', 'oh fabio', 2),
(89, '2023-03-16 09:17:04', 'Téo', 'oh arthur', 2),
(90, '2023-03-16 09:17:10', 'Arthur', 'ça marche !', 2);

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

CREATE TABLE `conversations` (
  `id_conv` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conversations`
--

INSERT INTO `conversations` (`id_conv`, `nom`) VALUES
(1, 'Les AMIS'),
(2, 'Famille'),
(3, 'Nintendo Team');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conv` (`conv`);

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id_conv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id_conv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`conv`) REFERENCES `conversations` (`id_conv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
