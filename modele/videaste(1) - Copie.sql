-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 fév. 2021 à 13:09
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `videaste`
--

-- --------------------------------------------------------

--
-- Structure de la table `clik`
--

DROP TABLE IF EXISTS `clik`;
CREATE TABLE IF NOT EXISTS `clik` (
  `id_clik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_membre` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_clik`),
  KEY `clik_membre_fk` (`id_membre`),
  KEY `clik_post_fk` (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clik`
--

INSERT INTO `clik` (`id_clik`, `id_membre`, `id_post`) VALUES
(68, 8, 52),
(69, 8, 52),
(70, 8, 52),
(71, 8, 52),
(72, 8, 52),
(73, 8, 52),
(74, 8, 52),
(75, 8, 52),
(76, 8, 52),
(77, 8, 52),
(78, 8, 52),
(79, 8, 52),
(80, 8, 52),
(81, 8, 52),
(82, 8, 52),
(83, 8, 52),
(84, 8, 52),
(85, 8, 52),
(86, 8, 52),
(87, 8, 52),
(88, 8, 52),
(89, 8, 52),
(90, 8, 52),
(91, 8, 52),
(92, 8, 52),
(93, 8, 52),
(94, 8, 52),
(95, 8, 52),
(96, 8, 52),
(97, 8, 52),
(98, 8, 52),
(99, 8, 52),
(100, 8, 52),
(101, 8, 52),
(102, 8, 52),
(103, 8, 52),
(104, 8, 52),
(105, 8, 52),
(106, 8, 52),
(107, 8, 52),
(108, 8, 52),
(109, 8, 52),
(110, 8, 52),
(111, 8, 52),
(112, 8, 52),
(113, 8, 52),
(114, 8, 52),
(115, 8, 52),
(116, 8, 52),
(117, 8, 52),
(118, 8, 52),
(119, 8, 52),
(120, 8, 52),
(121, 8, 52),
(122, 8, 52),
(123, 8, 52),
(124, 8, 52),
(125, 8, 52),
(126, 8, 52),
(127, 8, 52),
(128, 8, 52),
(129, 8, 52),
(130, 8, 52),
(131, 8, 52),
(132, 8, 52),
(133, 8, 52),
(134, 8, 52),
(135, 8, 52),
(136, 8, 52),
(137, 8, 52),
(138, 8, 52),
(139, 8, 52),
(140, 8, 52),
(141, 8, 52),
(142, 8, 52),
(143, 8, 52),
(144, 8, 64),
(145, 8, 64),
(146, 8, 64),
(147, 9, 74),
(148, 9, 74),
(149, 9, 91),
(150, 9, 91),
(151, 9, 91),
(152, 9, 91),
(153, 9, 91),
(154, 9, 91),
(155, 9, 91),
(156, 9, 91),
(157, 9, 91),
(158, 9, 91),
(159, 9, 91),
(160, 9, 91),
(161, 9, 24),
(162, 9, 24),
(163, 9, 24),
(164, 11, 93),
(165, 11, 93),
(166, 11, 93),
(167, 13, 93);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id_membre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_membre`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_membre`, `nom`, `prenom`, `pseudo`, `date_naissance`, `email`, `telephone`, `mdp`, `date_inscription`, `avatar`) VALUES
(1, 'sdgfqg', 'dfgdqg', 'pikilla', NULL, 'maite.lajournade@gmail.com', 'qdgqdfg', '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, 'unnamed4b.jpg'),
(2, NULL, NULL, 'truc', NULL, 'hsfd@dfhr.com', NULL, '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, NULL),
(3, NULL, NULL, 'sg', NULL, 'gsg@dq.bg', NULL, '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, NULL),
(4, 'aucun', 'aucun', 'shd', '2021-02-09', 'swdwdf@rd.gsdf', 'aucun', '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, 'aucun'),
(5, 'aucun', 'aucun', 'dfw', '2021-02-09', 'bwd@dd.Dg', 'aucun', '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, 'aucun'),
(6, 'aucun', 'aucun', 'qszfd', '2021-02-09', 'sgwdh@ail.com', 'aucun', '64edf162bcb5e59010f758c2832e24bbcbc54941', NULL, 'aucun'),
(7, 'aucun', 'aucun', 'Kuumette', '2021-02-09', 'ballatoremanon@gmail.com', 'aucun', '5872b10247b42945004a625d013d2492c3b6c333', NULL, 'Leve_de_soelil.jpg'),
(8, 'aucun', 'rhbrt', 'Kuumette01', '2021-02-09', 'niellini@gmail.com', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'pia17563-full.jpg'),
(9, 'aucun', 'aucun', 'azerty', '2021-02-09', 'azerty@gmail.com', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'eso1644bsmall__w770.png'),
(10, 'aucun', 'aucun', 'toto', '2021-02-09', 'toto@toto.to', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'aucun'),
(11, 'aucun', 'aucun', 'tata', '2021-02-09', 'tata@tata.ta', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'aucun'),
(12, 'aucun', 'aucun', 'lala', '2021-02-09', 'lala@lala.la', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'aucun'),
(13, 'egvrfge', 'aucun', 'tutu', '2021-02-09', 'tutu@tutu.tu', 'aucun', '241766b20556774751634dcdb984d4a9a2e01efb', NULL, 'pia17563-full.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_membre` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_post` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `post_membre_fk` (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `id_membre`, `type`, `categorie`, `titre`, `description`, `date_post`, `url`) VALUES
(1, 1, 'video', 'cinema', 'cinema1', 'Description', '2021-02-24 16:10:03', '748124.mp4'),
(2, 1, 'video', 'cinema', 'cin2', 'Description', '2021-02-24 16:27:33', '716858.mp4'),
(3, 1, 'video', 'theatre', 'thea1', 'Description', '2021-02-24 16:27:58', '081726.mp4'),
(4, 1, 'video', 'theatre', 'thea2', 'Description', '2021-02-24 16:28:22', '529347.mp4'),
(5, 1, 'video', 'musique', 'musique1', 'Description', '2021-02-24 16:29:13', '045439.mp4'),
(6, 1, 'video', 'musique', 'sqd', 'Description', '2021-02-24 16:29:47', '821105.mp4'),
(7, 1, 'video', 'jeux', 'sqq', 'Description', '2021-02-24 16:31:03', '470904.mp4'),
(8, 1, 'video', 'jeux', 'qd', 'Description', '2021-02-24 16:31:30', '166418.mp4'),
(9, 1, 'video', 'danse', '', 'Description', '2021-02-24 16:31:47', '558806.mp4'),
(10, 1, 'video', 'mannequinat', '', 'Description', '2021-02-24 16:33:01', '924480.mp4'),
(11, 1, 'video', 'mannequinat', '', 'Description', '2021-02-24 16:33:14', '664360.mp4'),
(12, 1, 'video', 'theatre', 'ara', 'Description', '2021-02-24 16:33:47', '363395.mp4'),
(13, 1, 'video', 'danse', 'ara', 'Description', '2021-02-24 16:34:19', '445151.mp4'),
(14, 1, 'video', 'cinema', 'fyj', 'Description', '2021-02-24 16:36:26', '657261.mp4'),
(15, 1, 'video', 'theatre', 'eyr', 'Description', '2021-02-24 16:37:04', '963152.mp4'),
(16, 1, 'video', 'musique', 're', 'Description', '2021-02-24 16:37:22', '592671.mp4'),
(17, 1, 'video', 'jeux', 'reye', 'Description', '2021-02-24 16:37:47', '778321.mp4'),
(18, 1, 'video', 'danse', 'reye', 'Description', '2021-02-24 16:38:14', '364039.mp4'),
(19, 1, 'video', 'mannequinat', 'rere', 'Description', '2021-02-24 16:38:25', '398657.mp4'),
(20, 1, 'video', 'cinema', 'erth', 'Description', '2021-02-24 16:50:50', '830590.mp4'),
(21, 1, 'video', 'cinema', 'trehrte', 'Descriperthtion', '2021-02-24 16:51:05', '492515.mp4'),
(22, 1, 'video', 'cinema', 'rth', 'Description', '2021-02-24 16:51:14', '963878.mp4'),
(23, 1, 'video', 'cinema', 'trehrte', 'Description', '2021-02-24 16:51:39', '143443.mp4'),
(24, 1, 'video', 'cinema', 'rteh', 'Description', '2021-02-24 16:51:51', '154641.mp4'),
(25, 1, 'video', 'cinema', 'gfs', 'Description', '2021-02-24 16:52:16', '091657.mp4'),
(26, 1, 'video', 'theatre', 'gg', 'Description', '2021-02-24 18:50:32', '435470.mp4'),
(27, 1, 'video', 'theatre', 'fxg', 'Description', '2021-02-24 18:52:02', '897510.mp4'),
(28, 1, 'video', 'theatre', 'xsd', 'Description', '2021-02-24 18:52:29', '039763.mp4'),
(29, 1, 'video', 'theatre', 'sss', 'Description', '2021-02-24 18:52:45', '680527.mp4'),
(30, 1, 'video', 'theatre', 'sss', 'Description', '2021-02-24 18:53:08', '832640.mp4'),
(31, 1, 'video', 'theatre', 'ezezze', 'Description', '2021-02-24 18:54:16', '986571.mp4'),
(32, 1, 'video', 'musique', 'eze', 'Description', '2021-02-24 18:54:45', '101645.mp4'),
(33, 1, 'video', 'musique', 'ezez', 'Description', '2021-02-24 18:54:59', '489989.mp4'),
(34, 1, 'photo', 'musique', '', 'Description', '2021-02-24 18:55:18', '551581.png'),
(35, 1, 'photo', 'musique', 'ezfz', 'Description', '2021-02-24 18:55:37', '929211.png'),
(36, 1, 'video', 'musique', 'ezze', 'Description', '2021-02-24 18:56:02', '831710.mp4'),
(37, 1, 'video', 'jeux', 'ezfz', 'Description', '2021-02-24 18:56:19', '804503.mp4'),
(38, 1, 'video', 'jeux', 'zee', 'Description', '2021-02-24 18:56:32', '081301.mp4'),
(39, 1, 'video', 'jeux', 'ezez', 'Description', '2021-02-24 18:56:44', '483033.mp4'),
(40, 1, 'video', 'jeux', 'ezze', 'Description', '2021-02-24 18:57:51', '892245.mp4'),
(41, 1, 'video', 'jeux', 'ezez', 'Description', '2021-02-24 18:58:14', '671608.mp4'),
(42, 1, 'video', 'jeux', 'ezze', 'Description', '2021-02-24 18:58:28', '377240.mp4'),
(43, 1, 'video', 'jeux', 'ezze', 'Description', '2021-02-24 18:58:52', '420807.mp4'),
(44, 1, 'video', 'jeux', 'ezfez', 'Description', '2021-02-24 18:59:31', '970365.mp4'),
(45, 1, 'video', 'danse', 'zefez', 'Description', '2021-02-24 19:00:01', '070568.mp4'),
(46, 1, 'video', 'danse', 'ezffez', 'Description', '2021-02-24 19:00:18', '553471.mp4'),
(47, 1, 'video', 'danse', 'ezfezfez', 'Descriptioezffezn', '2021-02-24 19:00:33', '903398.mp4'),
(48, 1, 'video', 'danse', 'zefezzef', 'Description', '2021-02-24 19:00:48', '282804.mp4'),
(49, 1, 'video', 'danse', 'ezfe', 'Description', '2021-02-24 19:01:01', '970910.mp4'),
(50, 1, 'video', 'danse', 'zefze', 'Description', '2021-02-24 19:01:24', '572859.mp4'),
(51, 1, 'video', 'musique', 'efzfefz', 'Description', '2021-02-24 19:01:37', '748871.mp4'),
(52, 1, 'video', 'musique', 'deszf', 'Description', '2021-02-24 19:01:54', '666915.mp4'),
(53, 1, 'video', 'musique', 'zerf', 'Description', '2021-02-24 19:02:05', '488155.mp4'),
(54, 1, 'video', 'theatre', 'ezfez', 'Description', '2021-02-24 19:02:54', '632446.mp4'),
(55, 1, 'video', 'theatre', 'ezfezf', 'Description', '2021-02-24 19:03:07', '685231.mp4'),
(56, 1, 'video', 'mannequinat', 'ezfe', 'Description', '2021-02-24 19:03:21', '555402.mp4'),
(57, 1, 'video', 'mannequinat', 'ezfezf', 'Description', '2021-02-24 19:03:33', '236549.mp4'),
(58, 1, 'video', 'mannequinat', 'rgrge', 'Description', '2021-02-24 19:03:53', '152956.mp4'),
(59, 1, 'video', 'mannequinat', 'dssfdsd', 'Description', '2021-02-24 19:04:10', '124239.mp4'),
(60, 1, 'video', 'mannequinat', 'ezfze', 'Description', '2021-02-24 19:04:19', '965380.mp4'),
(61, 1, 'video', 'mannequinat', 'zefezffze', 'Description', '2021-02-24 19:04:38', '603660.mp4'),
(62, 1, 'video', 'mannequinat', 'gfdrhd', 'Description', '2021-02-24 19:05:00', '587030.mp4'),
(63, 1, 'video', 'mannequinat', 'dsvs', 'Description', '2021-02-24 19:05:12', '869141.mp4'),
(64, 1, 'video', 'mannequinat', 'dsvs', 'Description', '2021-02-24 19:05:35', '779564.mp4'),
(65, 7, 'video', 'cinema', 'sfcqs', 'Description', '2021-02-25 12:28:33', '834329.mp4'),
(66, 7, 'video', 'theatre', 'fy bhf', 'Description', '2021-02-25 12:47:34', '237350.mp4'),
(67, 7, 'video', 'musique', 'egrge', 'Description', '2021-02-25 12:47:45', '427051.mp4'),
(68, 7, 'video', 'danse', 'rgerg', 'Description', '2021-02-25 12:48:05', '241852.mp4'),
(69, 7, 'video', 'theatre', 'egre', 'Description', '2021-02-25 12:48:21', '785393.mp4'),
(70, 7, 'photo', 'danse', 'egegeae', 'Description', '2021-02-25 12:48:38', '458155.png'),
(71, 7, 'photo', 'theatre', 'y,k,k', 'Description', '2021-02-25 12:49:02', '461184.png'),
(72, 7, 'photo', 'theatre', 'ykuk', 'Description', '2021-02-25 12:49:30', '178975.png'),
(73, 7, 'video', 'theatre', 'ykuk', 'Description', '2021-02-25 12:49:51', '966681.mp4'),
(74, 7, 'video', 'danse', 'drsgvrds', 'Description', '2021-02-25 12:50:19', '755260.mp4'),
(91, 9, 'photo', 'cinema', 'tdrbhrgtf', 'rthbrtg', '2021-02-26 13:55:33', '024158.png'),
(93, 13, 'video', 'cinema', 'zcfz', '', '2021-02-27 12:14:38', '366654.mp4');
-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_post` int(10) UNSIGNED NOT NULL ,
  `id_membre_poster` int(10) UNSIGNED NOT NULL ,
  `comment` varchar(255) DEFAULT NULL,
 
  PRIMARY KEY (`id_comment`),
  KEY `post_comment_fk` (`id_post`)
) ENGINE=InnoDB DEFAULT  CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clik`
--
ALTER TABLE `clik`
  ADD CONSTRAINT `clik_membre_fk` FOREIGN KEY (`id_membre`) REFERENCES `inscription` (`id_membre`),
  ADD CONSTRAINT `clik_post_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_membre_fk` FOREIGN KEY (`id_membre`) REFERENCES `inscription` (`id_membre`);

--
-- Contraintes pour la table `clik`
--
ALTER TABLE `commentaire`
 
  ADD CONSTRAINT `comment_post_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
