-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 06 août 2023 à 11:56
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ufc_twito`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `auteur` varchar(191) DEFAULT NULL,
  `profile` varchar(191) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `id_publication` int(10) UNSIGNED NOT NULL,
  `id_fix` varchar(191) DEFAULT NULL,
  `count_responx` int(11) NOT NULL DEFAULT 0,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `message`, `auteur`, `profile`, `id_user`, `id_prof`, `id_publication`, `id_fix`, `count_responx`, `statut`, `created_at`, `updated_at`) VALUES
(30, 'op', 'olivia', 'Estudante', 1, NULL, 21, '16839922757880', 0, '1', '2023-05-13 14:37:55', '2023-05-13 14:37:55'),
(31, 'toin arrete de me souler', 'olivia', 'Estudante', 1, NULL, 24, '16839923156581', 0, '1', '2023-05-13 14:38:35', '2023-05-13 14:38:35'),
(32, 'kksks mdr jai fais qoui', 'olivia', 'Estudante', 1, NULL, 24, '16839923372205', 9, '1', '2023-05-13 14:38:57', '2023-06-11 11:16:57'),
(33, 'salut', 'olivia', 'Estudante', 1, NULL, 11, '16839966666923', 7, '1', '2023-05-13 15:51:06', '2023-06-10 07:55:21'),
(34, 'ok ça va', 'olivia', 'Estudante', 1, NULL, 15, '16839969782409', 0, '1', '2023-05-13 15:56:18', '2023-05-13 15:56:18'),
(35, 'pour aujourdhui na qua rester comme ça', 'olivia', 'Estudante', 1, NULL, 11, '16840068774482', 0, '1', '2023-05-13 18:41:18', '2023-05-13 18:41:18'),
(36, 'je viens d\'arriver a la maison', 'olivia', 'Estudante', 1, NULL, 24, '16840586073118', 0, '1', '2023-05-14 09:03:27', '2023-05-14 09:03:27'),
(37, 'waohhheu gostei muito', 'manu', 'Estudante', 2, NULL, 20, '16840658895435', 0, '1', '2023-05-14 11:04:49', '2023-05-14 11:04:49'),
(38, 'est ce quon se comprend?', 'alicia', 'Professor', NULL, 4, 11, '16840777677972', 0, '1', '2023-05-14 14:22:47', '2023-05-14 14:22:47'),
(39, 'opa tu esta ai?', 'alicia', 'Professor', NULL, 4, 13, '16840780239822', 0, '1', '2023-05-14 14:27:03', '2023-05-14 14:27:03'),
(40, 'on est la?', 'alicia', 'Professor', NULL, 4, 11, '16840782943708', 0, '1', '2023-05-14 14:31:34', '2023-05-14 14:31:34'),
(41, 'olaaa', 'alicia', 'Professor', NULL, 4, 11, '16840804778625', 0, '1', '2023-05-14 15:07:57', '2023-05-14 15:07:57'),
(42, 'ooo', 'alicia', 'Professor', NULL, 4, 11, '16840810438260', 0, '1', '2023-05-14 15:17:23', '2023-05-14 15:17:23'),
(43, 'salut', 'olivia', 'Estudante', 1, NULL, 21, '16842544103240', 0, '1', '2023-05-16 15:26:50', '2023-05-16 15:26:50'),
(44, 'on est la?', 'olivia', 'Estudante', 1, NULL, 11, '16842546127664', 0, '1', '2023-05-16 15:30:12', '2023-05-16 15:30:12'),
(45, 'ksksksks essa postagem foi pesada', 'olivia', 'Estudante', 1, NULL, 11, '16842548557898', 0, '1', '2023-05-16 15:34:15', '2023-05-16 15:34:15'),
(46, 'cetait vraiment pitoyable', 'manu', 'Estudante', 2, NULL, 25, '16843139818036', 0, '1', '2023-05-17 07:59:41', '2023-05-17 07:59:41'),
(47, 'on est la?', 'manu', 'Estudante', 2, NULL, 20, '16843185346559', 0, '1', '2023-05-17 09:15:34', '2023-05-17 09:15:34'),
(48, 'je viens d\'arriver', 'manu', 'Estudante', 2, NULL, 16, '16843186443969', 0, '1', '2023-05-17 09:17:24', '2023-05-17 09:17:24'),
(49, 'je ne suis pas d\'accord', 'olivia', 'Estudante', 1, NULL, 24, '16847549429322', 0, '1', '2023-05-22 10:29:02', '2023-05-22 10:29:02'),
(50, 'olaaa', 'olivia', 'Estudante', 1, NULL, 25, '16848283763975', 0, '1', '2023-05-23 06:52:56', '2023-05-23 06:52:56'),
(51, 'voce esta ai?', 'olivia', 'Estudante', 1, NULL, 11, '16848285979206', 0, '1', '2023-05-23 06:56:37', '2023-05-23 06:56:37'),
(52, 'kkkkkkk', 'olivia', 'Estudante', 1, NULL, 20, '16848286853694', 0, '1', '2023-05-23 06:58:05', '2023-05-23 06:58:05'),
(53, 'vous e', 'olivia', 'Estudante', 1, NULL, 21, '16848288548609', 0, '1', '2023-05-23 07:00:54', '2023-05-23 07:00:54'),
(54, 'opa', 'olivia', 'Estudante', 1, NULL, 11, '16848307351767', 0, '1', '2023-05-23 07:32:15', '2023-05-23 07:32:15'),
(55, 'vous etes la?', 'olivia', 'Estudante', 1, NULL, 13, '16848415529265', 0, '1', '2023-05-23 10:32:32', '2023-05-23 10:32:32'),
(56, 'ola', 'olivia', 'Estudante', 1, NULL, 17, '16848415762126', 1, '1', '2023-05-23 10:32:56', '2023-06-10 07:53:13'),
(57, 'je suis la', 'olivia', 'Estudante', 1, NULL, 12, '16848417386109', 0, '1', '2023-05-23 10:35:38', '2023-05-23 10:35:38'),
(58, 'ola la', 'olivia', 'Estudante', 1, NULL, 23, '16848544897783', 0, '1', '2023-05-23 14:08:09', '2023-05-23 14:08:09'),
(59, 'je suis la', 'olivia', 'Estudante', 1, NULL, 23, '16848545931209', 0, '1', '2023-05-23 14:09:53', '2023-05-23 14:09:53'),
(60, 'ksks', 'olivia', 'Estudante', 1, NULL, 25, '16848548555954', 0, '1', '2023-05-23 14:14:15', '2023-05-23 14:14:15'),
(61, 'oui je suis la', 'olivia', 'Estudante', 1, NULL, 20, '16848552364025', 0, '1', '2023-05-23 14:20:36', '2023-05-23 14:20:36'),
(62, 'on est la?', 'olivia', 'Estudante', 1, NULL, 18, '16848554519192', 0, '1', '2023-05-23 14:24:11', '2023-05-23 14:24:11'),
(63, 'la cest serieux', 'olivia', 'Estudante', 1, NULL, 20, '16848555931825', 0, '1', '2023-05-23 14:26:33', '2023-05-23 14:26:33'),
(64, 'salut', 'olivia', 'Estudante', 1, NULL, 15, '16848556724999', 0, '1', '2023-05-23 14:27:52', '2023-05-23 14:27:52'),
(65, 'ke ne suispas daccord', 'olivia', 'Estudante', 1, NULL, 20, '16848593401384', 0, '1', '2023-05-23 15:29:00', '2023-05-23 15:29:00'),
(66, 'wagner kkskdkdkdkd', 'olivia', 'Estudante', 1, NULL, 13, '16848609284371', 0, '1', '2023-05-23 15:55:28', '2023-05-23 15:55:28'),
(67, 'opa', 'cine', 'Estudante', 12, NULL, 24, '16851933457767', 0, '1', '2023-05-27 12:15:45', '2023-05-27 12:15:45'),
(68, 'on est dedans comme ça oohh', 'manu', 'Estudante', 2, NULL, 25, '16852070272208', 0, '1', '2023-05-27 16:03:48', '2023-05-27 16:03:48'),
(69, 'on est dedans comme ça oohh', 'manu', 'Estudante', 2, NULL, 25, '16852070461226', 0, '1', '2023-05-27 16:04:06', '2023-05-27 16:04:06'),
(70, 'tu es la?', 'manu', 'Estudante', 2, NULL, 25, '16852076916132', 0, '1', '2023-05-27 16:14:51', '2023-05-27 16:14:51'),
(71, 'tudo', 'manu', 'Estudante', 2, NULL, 25, '16852077724984', 0, '1', '2023-05-27 16:16:12', '2023-05-27 16:16:12'),
(72, 'ioioio', 'manu', 'Estudante', 2, NULL, 25, '16852112816266', 8, '1', '2023-05-27 17:14:41', '2023-06-10 14:55:55'),
(73, 'Pour décrire une personne, on utilise des adjectifs. Ces adjectifs s\'accordent avec le masculin, le féminin et le pluriel. Voici une liste des principales caractéristiques pour parler du physique d\'une personne, de sa taille, de la couleur de ses yeux, de sa chevelure, etc', 'manu', 'Estudante', 2, NULL, 25, '16852158836509', 0, '1', '2023-05-27 18:31:23', '2023-05-27 18:31:23'),
(74, 'tu es la?', 'olivia', 'Estudante', 1, NULL, 15, '16854784303743', 0, '1', '2023-05-30 19:27:10', '2023-05-30 19:27:10'),
(75, 'oui on est ici.et d\'ailleur je voudrais te parler', 'alicia', 'Professor', NULL, 4, 18, '16854797954790', 0, '1', '2023-05-30 19:49:55', '2023-05-30 19:49:55'),
(76, 'nossa gostei da iniciativa viu?', 'alicia', 'Professor', NULL, 4, 22, '16855200528064', 0, '1', '2023-05-31 07:00:52', '2023-05-31 07:00:52'),
(77, 'tu es la?', 'olivia', 'Estudante', 1, NULL, 19, '16855225015985', 0, '1', '2023-05-31 07:41:41', '2023-05-31 07:41:41'),
(78, 'vraiment sur de toi?', 'alicia', 'Professor', NULL, 4, 21, '16855229183199', 0, '1', '2023-05-31 07:48:38', '2023-05-31 07:48:38'),
(79, 'ksksks jen viens', 'olivia', 'Estudante', 1, NULL, 21, '16855229533226', 0, '1', '2023-05-31 07:49:13', '2023-05-31 07:49:13'),
(80, 'jy suis', 'alicia', 'Professor', NULL, 4, 20, '16855248951480', 0, '1', '2023-05-31 08:21:35', '2023-05-31 08:21:35'),
(81, 'ke viens de loin', 'olivia', 'Estudante', 1, NULL, 15, '16855642896920', 0, '1', '2023-05-31 19:18:09', '2023-05-31 19:18:09'),
(82, 'tu es la?', 'olivia', 'Estudante', 1, NULL, 11, '16855646237977', 0, '1', '2023-05-31 19:23:43', '2023-05-31 19:23:43'),
(83, 'super', 'olivia', 'Estudante', 1, NULL, 11, '16855646864385', 0, '1', '2023-05-31 19:24:46', '2023-05-31 19:24:46'),
(84, 'mdr', 'olivia', 'Estudante', 1, NULL, 11, '16855647256171', 0, '1', '2023-05-31 19:25:26', '2023-05-31 19:25:26'),
(85, 'on est la?', 'olivia', 'Estudante', 1, NULL, 23, '16856295966190', 0, '1', '2023-06-01 13:26:36', '2023-06-01 13:26:36'),
(86, 'oui', 'olivia', 'Estudante', 1, NULL, 23, '16856296107141', 0, '1', '2023-06-01 13:26:50', '2023-06-01 13:26:50'),
(87, 'okkkkkk', 'olivia', 'Estudante', 1, NULL, 23, '16856297198776', 0, '1', '2023-06-01 13:28:39', '2023-06-01 13:28:39'),
(88, 'ewooooo', 'olivia', 'Estudante', 1, NULL, 23, '16856297332126', 0, '1', '2023-06-01 13:28:53', '2023-06-01 13:28:53'),
(89, 'hahaha', 'olivia', 'Estudante', 1, NULL, 23, '16856297478734', 0, '1', '2023-06-01 13:29:07', '2023-06-01 13:29:07'),
(90, 'esta tudo bem?', 'olivia', 'Estudante', 1, NULL, 22, '16856299604009', 0, '1', '2023-06-01 13:32:40', '2023-06-01 13:32:40'),
(91, 'ok', 'olivia', 'Estudante', 1, NULL, 25, '16856301199703', 0, '1', '2023-06-01 13:35:19', '2023-06-01 13:35:19'),
(92, 'tu es daccord', 'olivia', 'Estudante', 1, NULL, 25, '16856301512187', 0, '1', '2023-06-01 13:35:51', '2023-06-01 13:35:51'),
(93, 'a lecole', 'olivia', 'Estudante', 1, NULL, 25, '16856303019984', 0, '1', '2023-06-01 13:38:21', '2023-06-01 13:38:21'),
(94, 'hoje teve uma palestra muito legal que teve por objetivo de tirar duvidas sobre o mercado do trabalho', 'olivia', 'Estudante', 1, NULL, 27, '16856315795097', 2, '1', '2023-06-01 13:59:39', '2023-06-10 11:40:47'),
(95, 'non mais vous vousnetes pas serieux', 'olivia', 'Estudante', 1, NULL, 27, '16856319631183', 0, '1', '2023-06-01 14:06:04', '2023-06-01 14:06:04'),
(96, 'vraiment tu es comment meme', 'alicia', 'Professor', NULL, 4, 22, '16856384074787', 0, '1', '2023-06-01 15:53:27', '2023-06-01 15:53:27'),
(97, 'hahahaha ficou show viu', 'alicia', 'Professor', NULL, 4, 22, '16856384365798', 0, '1', '2023-06-01 15:53:56', '2023-06-01 15:53:56'),
(98, 'si cetait toi', 'alicia', 'Professor', NULL, 4, 27, '16856385549890', 0, '1', '2023-06-01 15:55:54', '2023-06-01 15:55:54'),
(99, 'estou aqui mas nao gostei desse negocio ai viu', 'olivia', 'Estudante', 1, NULL, 13, '16856938727999', 0, '1', '2023-06-02 07:17:52', '2023-06-02 07:17:52'),
(100, 'hahah sei como é mas vai dar tudo certo', 'olivia', 'Estudante', 1, NULL, 13, '16856938949806', 0, '1', '2023-06-02 07:18:14', '2023-06-02 07:18:14'),
(101, 'concordo com voce', 'olivia', 'Estudante', 1, NULL, 13, '16856939315090', 0, '1', '2023-06-02 07:18:51', '2023-06-02 07:18:51'),
(102, 'opa tudo bem', 'olivia', 'Estudante', 1, NULL, 27, '16857229899139', 0, '1', '2023-06-02 15:23:09', '2023-06-02 15:23:09'),
(103, 'kddkdkdkdk eu nao gostei', 'olivia', 'Estudante', 1, NULL, 27, '16857230368169', 0, '1', '2023-06-02 15:23:56', '2023-06-02 15:23:56'),
(104, 'tu es la? moi je suis la', 'olivia', 'Estudante', 1, NULL, 27, '16857400488427', 0, '1', '2023-06-02 20:07:28', '2023-06-02 20:07:28'),
(105, 'je suis neamoins d\'accord avec toi', 'olivia', 'Estudante', 1, NULL, 27, '16857401112001', 0, '1', '2023-06-02 20:08:31', '2023-06-02 20:08:31'),
(106, 'eu nao estou mais gostando desa iniciativa. é serio viu.porque estamos na mesma instituçao,e mesmo assim nem parece né.hoje vim em russas e nao fui atendido como deveria ser. eu me senti so pouco em familia', 'olivia', 'Estudante', 1, NULL, 27, '16857717682103', 0, '1', '2023-06-03 04:56:08', '2023-06-03 04:56:08'),
(107, 'tudo bem?', 'olivia', 'Estudante', 1, NULL, 14, '16857724081575', 0, '1', '2023-06-03 05:06:48', '2023-06-03 05:06:48'),
(108, 'ksksks esse cara é foda demais', 'olivia', 'Estudante', 1, NULL, 12, '16857795905290', 0, '1', '2023-06-03 07:06:30', '2023-06-03 07:06:30'),
(109, 'kdkdkdkdkd que massa', 'olivia', 'Estudante', 1, NULL, 27, '16857805103668', 0, '1', '2023-06-03 07:21:50', '2023-06-03 07:21:50'),
(110, 'tudo bem entao', 'alicia', 'Professor', NULL, 4, 16, '16858051992868', 0, '1', '2023-06-03 14:13:20', '2023-06-03 14:13:20'),
(111, 'salut on fait comment?', 'olivia', 'Estudante', 1, NULL, 20, '16859483301314', 0, '1', '2023-06-05 05:58:50', '2023-06-05 05:58:50'),
(112, 'concordo pleinamente', 'olivia', 'Estudante', 1, NULL, 22, '16859554967972', 0, '1', '2023-06-05 07:58:16', '2023-06-05 07:58:16'),
(113, 'ola acabei de chegar em casa , ja to iindo lalalala', 'alicia', 'Professor', NULL, 4, 25, '16862431546385', 2, '1', '2023-06-08 15:52:34', '2023-06-10 08:37:13'),
(114, 'ola, nossa que orgulho da minha professora.gostei demais dessa iniciativa.obrigado por sempre pensar trazer sempre mais um valor de novo na nossa comunidade.Deus abençoe a senhora', 'alicia', 'Professor', NULL, 4, 28, '16863018311305', 2, '1', '2023-06-09 08:10:31', '2023-06-10 08:44:02'),
(115, 'ksksksk nossa que massa.gostei demais.', 'alicia', 'Professor', NULL, 4, 28, '16863019099876', 0, '1', '2023-06-09 08:11:49', '2023-06-09 08:11:49'),
(116, 'okkkk', 'cine', 'Estudante', 12, NULL, 28, '16863224461345', 0, '1', '2023-06-09 13:54:06', '2023-06-09 13:54:06'),
(117, 'eu estou aqui', 'cine', 'Estudante', 12, NULL, 28, '16863227056472', 0, '1', '2023-06-09 13:58:25', '2023-06-09 13:58:25'),
(118, 'ksksk nossa que projeto de honra innnh. parabens', 'cine', 'Estudante', 12, NULL, 29, '16863235298007', 3, '1', '2023-06-09 14:12:09', '2023-06-10 07:46:42'),
(119, 'ksksksksks esta serrio????', 'cine', 'Estudante', 12, NULL, 27, '16863251286382', 0, '1', '2023-06-09 14:38:48', '2023-06-09 14:38:48'),
(120, 'oiiiii nossa que massa né', 'cine', 'Estudante', 12, NULL, 25, '16863370283821', 0, '1', '2023-06-09 17:57:08', '2023-06-09 17:57:08'),
(121, 'opa , nossa que programa legal.gostei muito', 'alicia', 'Professor', NULL, 4, 11, '16863880342144', 0, '1', '2023-06-10 08:07:14', '2023-06-10 08:07:14'),
(122, 'eita lindissimo', 'alicia', 'Professor', NULL, 4, 29, '16863904871708', 1, '1', '2023-06-10 08:48:07', '2023-07-11 09:04:20'),
(123, 'oola, tudo bem entao ksksks', 'alicia', 'Professor', NULL, 4, 29, '16864120859299', 0, '1', '2023-06-10 14:48:05', '2023-06-10 14:48:05'),
(124, 'ola, estou aqui com voces', 'olivia', 'Estudante', 1, NULL, 29, '16864845242273', 0, '1', '2023-06-11 10:55:24', '2023-06-11 10:55:24'),
(125, 'oi', 'olivia', 'Estudante', 1, NULL, 24, '16864859496302', 0, '1', '2023-06-11 11:19:09', '2023-06-11 11:19:09'),
(126, 'ksks ce gar é maran', 'alicia', 'Professor', NULL, 4, 29, '16869938752599', 1, '1', '2023-06-17 08:24:35', '2023-06-17 08:24:59'),
(127, 'oi bom dia', 'olivia', 'Estudante', 1, NULL, 27, '16870803838058', 0, '1', '2023-06-18 08:26:23', '2023-06-18 08:26:23'),
(128, 'tudo bem com voce??', 'olivia', 'Estudante', 1, NULL, 27, '16870804017728', 0, '1', '2023-06-18 08:26:41', '2023-06-18 08:26:41'),
(129, 'ola, com quem eu estou falando?', 'alicia', 'Professor', NULL, 4, 27, '16873319799276', 0, '1', '2023-06-21 06:19:39', '2023-06-21 06:19:39'),
(130, 'est ce quon est sure de ce qui se passe?', 'alicia', 'Professor', NULL, 4, 28, '16875982135366', 0, '1', '2023-06-24 08:16:53', '2023-06-24 08:16:53'),
(131, 'oi , eu acabei de chegar', 'alicia', 'Professor', NULL, 4, 28, '16875982611221', 0, '1', '2023-06-24 08:17:41', '2023-06-24 08:17:41'),
(132, 'eita ksksks, gostei viu', 'manu', 'Estudante', 2, NULL, 29, '16877045377884', 1, '1', '2023-06-25 13:48:57', '2023-06-25 13:49:51'),
(133, 'serio que coisa linda né', 'manu', 'Estudante', 2, NULL, 29, '16877045553333', 0, '1', '2023-06-25 13:49:16', '2023-06-25 13:49:16'),
(134, 'hkknknknknknknkn', 'alicia', 'Professor', NULL, 4, 27, '16877122974533', 1, '1', '2023-06-25 15:58:17', '2023-06-25 15:58:36'),
(135, 'oh professor ,eu gostei daé idea.mas o probelma e que eu nao tenho aonde dormir se eu for', 'olivia', 'Estudante', 1, NULL, 29, '16890696829663', 0, '1', '2023-07-11 09:01:22', '2023-07-11 09:01:22');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_publication` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_publication`, `id_user`, `id_prof`, `statut`, `created_at`, `updated_at`) VALUES
(30, 29, 1, NULL, '1', '2023-06-10 11:28:50', '2023-06-10 11:28:50'),
(31, 29, NULL, 4, '1', '2023-06-10 11:29:35', '2023-06-10 11:29:35'),
(32, 22, NULL, 4, '1', '2023-06-10 12:06:22', '2023-06-10 12:06:22'),
(33, 25, NULL, 4, '1', '2023-06-10 14:57:05', '2023-06-10 14:57:05'),
(34, 24, 1, NULL, '1', '2023-06-11 11:22:08', '2023-06-11 11:22:08'),
(35, 28, NULL, 4, '1', '2023-06-18 05:31:31', '2023-06-18 05:31:31'),
(36, 27, NULL, 4, '1', '2023-06-21 14:44:16', '2023-06-21 14:44:16'),
(37, 29, 2, NULL, '1', '2023-06-25 13:50:45', '2023-06-25 13:50:45');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_01_133934_create_ufcs_table', 1),
(3, '2023_05_01_134031_create_professeurs_table', 1),
(4, '2023_05_01_134102_create_users_table', 1),
(5, '2023_05_02_091246_create_publications_table', 2),
(6, '2023_05_02_110749_create_publications_table', 3),
(7, '2023_05_04_195134_create_commentaires_table', 4),
(8, '2023_05_06_082144_create_seguirs_table', 5),
(9, '2023_05_09_173255_create_responx_comments_table', 6),
(10, '2023_05_13_102634_create_commentaires_table', 7),
(11, '2023_05_13_102951_create_responx_comments_table', 7),
(12, '2023_06_09_161830_create_likes_table', 8),
(13, '2023_06_13_081125_create_privados_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `privados`
--

CREATE TABLE `privados` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `decript_prof` int(11) DEFAULT NULL,
  `decript_user` int(11) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `privados`
--

INSERT INTO `privados` (`id`, `message`, `decript_prof`, `decript_user`, `id_user`, `id_prof`, `statut`, `created_at`, `updated_at`) VALUES
(17, 'oi boa tarde professora', 4, NULL, 1, NULL, '1', '2023-06-24 08:52:05', '2023-06-24 08:52:05'),
(18, 'ola, esta tudo bem ai?', 4, NULL, 1, NULL, '1', '2023-06-24 08:54:16', '2023-06-24 08:54:16'),
(19, 'ola, ah cheguei agora', 4, NULL, 1, NULL, '1', '2023-06-24 08:55:34', '2023-06-24 08:55:34'),
(20, 'oiiiii', 4, NULL, 1, NULL, '1', '2023-06-24 08:56:44', '2023-06-24 08:56:44'),
(21, 'kkkkkkk', 4, NULL, 1, NULL, '1', '2023-06-24 09:10:36', '2023-06-24 09:10:36'),
(22, 'oi okkkk', 4, NULL, 1, NULL, '1', '2023-06-24 09:12:18', '2023-06-24 09:12:18'),
(23, 'olaaa acabei de chegar', 4, NULL, 1, NULL, '1', '2023-06-24 09:13:27', '2023-06-24 09:13:27'),
(24, 'olaaaaa', 4, NULL, 1, NULL, '1', '2023-06-24 09:14:37', '2023-06-24 09:14:37'),
(25, 'opa, chegueiiiii', NULL, 1, NULL, 4, '1', '2023-06-24 09:19:56', '2023-06-24 09:19:56'),
(26, 'que arrumaçaao é essza enhhh', NULL, 1, NULL, 4, '1', '2023-06-24 09:23:48', '2023-06-24 09:23:48'),
(27, 'que  enhhh', NULL, 1, NULL, 4, '1', '2023-06-24 09:27:46', '2023-06-24 09:27:46'),
(28, 'kkkkkkkkkkkkk', NULL, 1, NULL, 4, '1', '2023-06-24 09:28:54', '2023-06-24 09:28:54'),
(29, 'hehehehehe', NULL, 1, NULL, 4, '1', '2023-06-24 09:32:23', '2023-06-24 09:32:23'),
(30, 'hioo', NULL, 1, NULL, 4, '1', '2023-06-24 09:37:14', '2023-06-24 09:37:14'),
(31, 'opaa', NULL, 1, NULL, 4, '1', '2023-06-24 09:39:18', '2023-06-24 09:39:18'),
(32, 'kikiokiokio', NULL, 1, NULL, 4, '1', '2023-06-24 09:40:23', '2023-06-24 09:40:23'),
(33, 'ola , sim vi foi agora', NULL, 1, NULL, 4, '1', '2023-06-24 09:45:53', '2023-06-24 09:45:53'),
(34, 'ksksksksk ola , sim vi foi agora', NULL, 1, NULL, 4, '1', '2023-06-24 09:46:48', '2023-06-24 09:46:48'),
(35, 'ksksks pois bora', NULL, 1, NULL, 4, '1', '2023-06-24 09:48:37', '2023-06-24 09:48:37'),
(36, 'ola, eu quero falar com voce depois da auala', NULL, 12, NULL, 4, '1', '2023-06-24 10:23:57', '2023-06-24 10:23:57'),
(37, 'ola amor', 4, NULL, 12, NULL, '1', '2023-06-24 10:36:46', '2023-06-24 10:36:46'),
(38, 'ooooooooooooooo', NULL, 1, 2, NULL, '1', '2023-06-24 10:56:52', '2023-06-24 10:56:52'),
(39, 'llsslsl olivia me responde logo viu', NULL, 1, NULL, 4, '1', '2023-06-25 13:34:41', '2023-06-25 13:34:41'),
(40, 'manu ,como voce esta?', NULL, 2, 1, NULL, '1', '2023-06-25 13:37:05', '2023-06-25 13:37:05'),
(41, 'ksksks tudo de boa man, vai dar tudo certo', NULL, 1, 2, NULL, '1', '2023-06-25 13:42:08', '2023-06-25 13:42:08'),
(42, 'ola professora alicia, eu passando aqui para te agradecer viu', 4, NULL, 2, NULL, '1', '2023-06-25 13:45:00', '2023-06-25 13:45:00'),
(43, 'obrigada manu', NULL, 2, NULL, 4, '1', '2023-06-25 13:46:41', '2023-06-25 13:46:41'),
(44, 'ola cine aonde se encontrar esse local?', NULL, 12, NULL, 4, '1', '2023-07-11 09:19:03', '2023-07-11 09:19:03'),
(45, 'oi manu aonde voce esta?', NULL, 2, 2, NULL, '1', '2023-07-11 09:32:57', '2023-07-11 09:32:57'),
(46, 'oiiiii me segue la?', NULL, 2, NULL, 4, '1', '2023-07-11 09:35:45', '2023-07-11 09:35:45'),
(47, 'oi cara ,ainda estou aguardando', NULL, 1, 1, NULL, '1', '2023-07-22 14:14:28', '2023-07-22 14:14:28');

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_prof` varchar(191) NOT NULL,
  `email_prof` varchar(191) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `bio` text NOT NULL,
  `password` varchar(191) NOT NULL,
  `securty_code` varchar(191) NOT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `id_ufc` int(10) UNSIGNED NOT NULL,
  `count_msg_prof` int(10) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `name_prof`, `email_prof`, `photo`, `bio`, `password`, `securty_code`, `statut`, `id_ufc`, `count_msg_prof`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'alicia', 'relaxmusik229@gmail.com', '1682951149.png', 'sou professora de Requisitos de Software doutorado em Desenvolvimento de Software', '4141', '1689070560W~/*-aAw~$@$@5569', '1', 1, 10, NULL, '2023-05-01 13:25:49', '2023-07-11 09:16:00');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) NOT NULL DEFAULT '0',
  `video` varchar(191) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `namo` varchar(191) DEFAULT NULL,
  `profile` varchar(191) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `nb_com` int(11) NOT NULL DEFAULT 0,
  `count_lik` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `photo`, `video`, `description`, `statut`, `namo`, `profile`, `id_user`, `id_prof`, `nb_com`, `count_lik`, `created_at`, `updated_at`) VALUES
(11, '0', 'VID_20180217_160030.mp4', 'ppppppppppppppppp', '1', 'olivia', 'Estudante', 1, NULL, 14, 1, '2023-05-02 12:20:33', '2023-06-10 08:07:14'),
(12, '0', 'VID_20180217_160030.mp4', 'jjjjjjjjjjjjjjjjjjjjjj', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-02 12:56:54', '2023-05-02 12:56:54'),
(13, '0', '1efb9848ac2e419a9a86973612d4c55c.mp4', 'olaaaaa', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 05:36:25', '2023-05-03 05:36:25'),
(14, '0', '69921cff8eff40829c291c7c57781706.mp4', 'ok', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 05:38:02', '2023-05-03 05:38:02'),
(15, '0', '18353203-preview.mp4', 'ok compris', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 05:42:50', '2023-05-03 05:42:50'),
(16, '0', '938578-preview.mp4', 'nossa que legal', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 05:44:25', '2023-05-03 05:44:25'),
(17, '0', '1043211724-preview (1).mp4', 'ola', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 10:50:56', '2023-05-03 10:50:56'),
(18, '0', 'WhatsApp Video 2020-04-07 at 7.56.02 PM.mp4', 'ooooo', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 10:53:27', '2023-05-03 10:53:27'),
(19, '0', '18353203-preview.mp4', 'ola hje suis dacord', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 15:36:30', '2023-05-03 15:36:30'),
(20, '0', '483970-preview (1).mp4', 'okkkkkk', '1', 'olivia', 'Estudante', 1, NULL, 0, 0, '2023-05-03 15:37:10', '2023-05-03 15:37:10'),
(21, '1683212673.PNG', '0', 'Un polygone, en géométrie euclidienne, est une figure géométrique plane formée d\'une ligne brisée (appelée aussi ligne polygonale) fermée, c\'est-à-dire d\'une suite cyclique de segments consécutifs.', '1', 'manu', 'Estudante', 2, NULL, 0, 0, '2023-05-04 14:04:34', '2023-05-04 14:04:34'),
(22, '1683389092.PNG', '0', 'a aula de hoje foi sobre os direitos autorais, e foi uma boa aula que ajudou muita gente a abrir a mente para enter como functiona esse mundo', '1', 'alicia', 'Professor (a)', NULL, 4, 0, 1, '2023-05-06 15:04:52', '2023-06-10 12:06:22'),
(23, '1683558021.jpg', '0', 'ola', '1', 'alicia', 'Professor (a)', NULL, 4, 0, 1, '2023-05-08 14:00:21', '2023-06-10 08:52:29'),
(24, '1683558184.jpg', '0', 'oiiiiiiiii', '1', 'alicia', 'Professor (a)', NULL, 4, 6, 1, '2023-05-08 14:03:04', '2023-06-11 11:22:08'),
(25, '0', 'WhatsApp Video 2019-09-20 at 1.27.10 PM (1)(1).mp4', 'ao vivo como eu fui assaltado', '1', 'manu', 'Estudante', 2, NULL, 14, 1, '2023-05-17 07:52:51', '2023-06-10 14:57:05'),
(27, '1685631487.jpeg', '0', 'hoje teve uma palestra muito legal que teve por objetivo de tirar duvidas sobre o mercado do trabalho', '1', 'olivia', 'Estudante', 1, NULL, 14, 1, '2023-06-01 13:58:07', '2023-06-25 15:58:17'),
(28, '0', '1036084157-preview.mp4', 'on est la', '1', 'alicia', 'Professor (a)', NULL, 4, 6, 1, '2023-06-09 07:15:26', '2023-06-24 08:17:41'),
(29, '0', 'istockphoto-1176764896-640_adpp_is (1).mp4', 'tenho orgulho de apresentar esse trabalho final com voces', '1', 'cine', 'Estudante', 12, NULL, 8, 3, '2023-06-09 13:27:12', '2023-07-11 09:01:22');

-- --------------------------------------------------------

--
-- Structure de la table `responx_comments`
--

CREATE TABLE `responx_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reponse` text NOT NULL,
  `namo` varchar(191) DEFAULT NULL,
  `profile` varchar(191) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `id_commentaire` int(10) UNSIGNED NOT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `responx_comments`
--

INSERT INTO `responx_comments` (`id`, `reponse`, `namo`, `profile`, `id_user`, `id_prof`, `id_commentaire`, `statut`, `created_at`, `updated_at`) VALUES
(2, 'sincesserement merci', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-05-13 14:40:10', '2023-05-13 14:40:10'),
(3, 'je suis la', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-05-13 15:51:57', '2023-05-13 15:51:57'),
(4, 'okkkk', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-05-13 16:09:48', '2023-05-13 16:09:48'),
(5, 'mdr tu mens, je suis devant ta porte', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-05-14 09:04:41', '2023-05-14 09:04:41'),
(6, 'Dans la feuille de style, vous pouvez utiliser la classe \"figure\" pour formatter la figure de la façon que vous voulez. Par exemple, les règles suivantes vous permettent de positionner la figure sur la droite, dans une zone égale à 30% de la largeur des paragraphes englobants', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-05-14 10:02:21', '2023-05-14 10:02:21'),
(7, 'mdr jaime quand meme l\'idee', 'manu', 'Estudante', 2, NULL, 32, '1', '2023-05-14 10:59:55', '2023-05-14 10:59:55'),
(8, 'assim,concordo pleinamente.quando vai ser esse evento ksksksks, gostei.se for a ufc de quixada, eu posso até ir mas aonde dormir é isso o problema', 'alicia', 'Professor(a)', NULL, 4, 32, '1', '2023-05-14 14:15:07', '2023-05-14 14:15:07'),
(9, 'je ne suis pas d\'accord', 'olivia', 'Estudante', 1, NULL, 44, '1', '2023-05-16 15:33:02', '2023-05-16 15:33:02'),
(10, 'je suis tout a faire d\'accord avec toi', 'manu', 'Estudante', 2, NULL, 32, '1', '2023-05-17 08:46:59', '2023-05-17 08:46:59'),
(11, 'esta tudo certo', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-05-22 10:26:35', '2023-05-22 10:26:35'),
(12, 'eu presenciei hoje, foi uma loucura ksksks', 'olivia', 'Estudante', 1, NULL, 39, '1', '2023-05-23 10:19:43', '2023-05-23 10:19:43'),
(13, 'tu es la?', 'olivia', 'Estudante', 1, NULL, 55, '1', '2023-05-23 14:17:19', '2023-05-23 14:17:19'),
(14, 'voce esta ai?', 'olivia', 'Estudante', 1, NULL, 61, '1', '2023-05-23 14:21:00', '2023-05-23 14:21:00'),
(15, 'ksksksks', 'olivia', 'Estudante', 1, NULL, 64, '1', '2023-05-23 14:28:03', '2023-05-23 14:28:03'),
(16, 'ok compris', 'olivia', 'Estudante', 1, NULL, 63, '1', '2023-05-23 14:28:57', '2023-05-23 14:28:57'),
(17, 'je suis parfaitement d\'accord', 'olivia', 'Estudante', 1, NULL, 63, '1', '2023-05-23 14:38:36', '2023-05-23 14:38:36'),
(18, 'jdjdjdjdjdjdjdjd', 'olivia', 'Estudante', 1, NULL, 66, '1', '2023-05-23 15:56:13', '2023-05-23 15:56:13'),
(19, 'nao concordo', 'cine', 'Estudante', 12, NULL, 67, '1', '2023-05-27 12:16:03', '2023-05-27 12:16:03'),
(20, 'pourquoi tu reponds comme ça?', 'manu', 'Estudante', 2, NULL, 69, '1', '2023-05-27 16:04:33', '2023-05-27 16:04:33'),
(21, 'hahah je tai loupé', 'manu', 'Estudante', 2, NULL, 70, '1', '2023-05-27 16:15:10', '2023-05-27 16:15:10'),
(22, 'estou aqui', 'manu', 'Estudante', 2, NULL, 71, '1', '2023-05-27 16:16:23', '2023-05-27 16:16:23'),
(23, 'concordo com voce', 'manu', 'Estudante', 2, NULL, 71, '1', '2023-05-27 16:20:15', '2023-05-27 16:20:15'),
(24, 'je suis la', 'manu', 'Estudante', 2, NULL, 71, '1', '2023-05-27 17:04:40', '2023-05-27 17:04:40'),
(25, 'ppppp', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:14:52', '2023-05-27 17:14:52'),
(26, 'il ya longtemps', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:33:41', '2023-05-27 17:33:41'),
(27, 'ok', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:36:05', '2023-05-27 17:36:05'),
(28, 'no', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:41:32', '2023-05-27 17:41:32'),
(29, 'la je suis daccord', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:44:47', '2023-05-27 17:44:47'),
(30, 'a la maison?', 'manu', 'Estudante', 2, NULL, 72, '1', '2023-05-27 17:47:37', '2023-05-27 17:47:37'),
(31, 'haha, tres interessant', 'manu', 'Estudante', 2, NULL, 73, '1', '2023-05-27 18:32:05', '2023-05-27 18:32:05'),
(32, 'kksksks parle alors, je suis la', 'alicia', 'Professor(a)', NULL, 4, 75, '1', '2023-05-30 19:50:23', '2023-05-30 19:50:23'),
(33, 'hahaha é massa viu', 'alicia', 'Professor(a)', NULL, 4, 76, '1', '2023-05-31 07:01:18', '2023-05-31 07:01:18'),
(34, 'je suis d\'accord', 'alicia', 'Professor(a)', NULL, 4, 73, '1', '2023-05-31 07:11:44', '2023-05-31 07:11:44'),
(35, 'ksksksks', 'olivia', 'Estudante', 1, NULL, 73, '1', '2023-05-31 07:13:06', '2023-05-31 07:13:06'),
(36, 'je suis daccord', 'olivia', 'Estudante', 1, NULL, 46, '1', '2023-05-31 07:15:39', '2023-05-31 07:15:39'),
(37, 'je sui', 'olivia', 'Estudante', 1, NULL, 46, '1', '2023-05-31 07:25:15', '2023-05-31 07:25:15'),
(38, 'oui jy suis', 'olivia', 'Estudante', 1, NULL, 74, '1', '2023-05-31 07:27:15', '2023-05-31 07:27:15'),
(39, 'ah bom', 'olivia', 'Estudante', 1, NULL, 63, '1', '2023-05-31 07:28:38', '2023-05-31 07:28:38'),
(40, 'haha', 'olivia', 'Estudante', 1, NULL, 59, '1', '2023-05-31 07:30:03', '2023-05-31 07:30:03'),
(41, 'helo', 'olivia', 'Estudante', 1, NULL, 49, '1', '2023-05-31 07:32:08', '2023-05-31 07:32:08'),
(42, 'ksksksks', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-05-31 07:33:21', '2023-05-31 07:33:21'),
(43, 'ai é foda', 'olivia', 'Estudante', 1, NULL, 72, '1', '2023-05-31 07:35:24', '2023-05-31 07:35:24'),
(44, 'suis la putain', 'olivia', 'Estudante', 1, NULL, 77, '1', '2023-05-31 07:41:56', '2023-05-31 07:41:56'),
(45, 'hahaha', 'olivia', 'Estudante', 1, NULL, 77, '1', '2023-05-31 07:44:36', '2023-05-31 07:44:36'),
(46, 'conard', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-05-31 07:46:12', '2023-05-31 07:46:12'),
(47, 'yu es la?', 'olivia', 'Estudante', 1, NULL, 81, '1', '2023-05-31 19:21:44', '2023-05-31 19:21:44'),
(48, 'kkkkkk', 'olivia', 'Estudante', 1, NULL, 54, '1', '2023-05-31 19:22:50', '2023-05-31 19:22:50'),
(49, 'oui', 'olivia', 'Estudante', 1, NULL, 82, '1', '2023-05-31 19:23:53', '2023-05-31 19:23:53'),
(50, 'oooo', 'olivia', 'Estudante', 1, NULL, 83, '1', '2023-05-31 19:24:54', '2023-05-31 19:24:54'),
(51, 'je ne suis pas daccord', 'olivia', 'Estudante', 1, NULL, 86, '1', '2023-06-01 13:27:18', '2023-06-01 13:27:18'),
(52, 'je suis pret', 'olivia', 'Estudante', 1, NULL, 92, '1', '2023-06-01 13:36:14', '2023-06-01 13:36:14'),
(53, 'hahaha eyalo', 'olivia', 'Estudante', 1, NULL, 93, '1', '2023-06-01 13:38:42', '2023-06-01 13:38:42'),
(54, 'foi massa viu.gostei demais', 'olivia', 'Estudante', 1, NULL, 94, '1', '2023-06-01 14:00:26', '2023-06-01 14:00:26'),
(55, 'jsjsjsjsjsjsjsjs', 'olivia', 'Estudante', 1, NULL, 95, '1', '2023-06-01 14:07:20', '2023-06-01 14:07:20'),
(56, 'je ne suis pas daccord serieux', 'alicia', 'Professor(a)', NULL, 4, 98, '1', '2023-06-01 15:56:15', '2023-06-01 15:56:15'),
(57, 'porque tu é assim mesmo?', 'olivia', 'Estudante', 1, NULL, 101, '1', '2023-06-02 07:19:34', '2023-06-02 07:19:34'),
(58, 'é serio isso', 'olivia', 'Estudante', 1, NULL, 103, '1', '2023-06-02 15:24:18', '2023-06-02 15:24:18'),
(59, 'concordo pleinamente com voce', 'olivia', 'Estudante', 1, NULL, 57, '1', '2023-06-03 07:07:12', '2023-06-03 07:07:12'),
(60, 'tu es foda dmais', 'alicia', 'Professor(a)', NULL, 4, 48, '1', '2023-06-03 14:13:51', '2023-06-03 14:13:51'),
(61, 'ksksksk pois beleza', 'alicia', 'Professor(a)', NULL, 4, 77, '1', '2023-06-03 14:15:50', '2023-06-03 14:15:50'),
(62, 'eh benh on est la', 'olivia', 'Estudante', 1, NULL, 111, '1', '2023-06-05 05:59:27', '2023-06-05 05:59:27'),
(63, 'je suis daccord avec toi mais la tu es allé trop loin', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-06-05 08:09:04', '2023-06-05 08:09:04'),
(64, 'estou aqui bixa ksksks', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-06-05 08:17:35', '2023-06-05 08:17:35'),
(65, 'jjbjhjhjhhhhhhhhhhhhhhhhuuuuuuuuuuuuuuuuuu', 'olivia', 'Estudante', 1, NULL, 33, '1', '2023-06-05 08:34:03', '2023-06-05 08:34:03'),
(66, 'daccord merci a toi', 'olivia', 'Estudante', 1, NULL, 44, '1', '2023-06-05 08:36:40', '2023-06-05 08:36:40'),
(67, 'eu acabei de chegar aqui man', 'olivia', 'Estudante', 1, NULL, 54, '1', '2023-06-05 08:37:32', '2023-06-05 08:37:32'),
(68, 'je suis ok stp', 'alicia', 'Professor(a)', NULL, 4, 99, '1', '2023-06-07 16:09:17', '2023-06-07 16:09:17'),
(69, 'ksksksk que massa esse sistema', 'alicia', 'Professor(a)', NULL, 4, 113, '1', '2023-06-08 15:53:01', '2023-06-08 15:53:01'),
(70, 'esse dai eu gostei', 'alicia', 'Professor(a)', NULL, 4, 114, '1', '2023-06-09 08:11:26', '2023-06-09 08:11:26'),
(71, 'ola, acabei de ver a mensagem ksksks, cara é massa viu ksksks.gostei', 'alicia', 'Professor(a)', NULL, 4, 118, '1', '2023-06-10 07:33:17', '2023-06-10 07:33:17'),
(72, 'kskssks sensacional viu', 'alicia', 'Professor(a)', NULL, 4, 118, '1', '2023-06-10 07:36:53', '2023-06-10 07:36:53'),
(73, 'ksksks parabens cara', 'alicia', 'Professor(a)', NULL, 4, 118, '1', '2023-06-10 07:46:42', '2023-06-10 07:46:42'),
(74, 'ola gostei ksksks', 'alicia', 'Professor(a)', NULL, 4, 56, '1', '2023-06-10 07:53:12', '2023-06-10 07:53:12'),
(75, 'ksksksks que massa.gostei', 'alicia', 'Professor(a)', NULL, 4, 33, '1', '2023-06-10 07:55:21', '2023-06-10 07:55:21'),
(76, 'gostou?', 'alicia', 'Professor(a)', NULL, 4, 113, '1', '2023-06-10 08:37:12', '2023-06-10 08:37:12'),
(77, 'ksksks', 'alicia', 'Professor(a)', NULL, 4, 114, '1', '2023-06-10 08:44:02', '2023-06-10 08:44:02'),
(78, 'oi ,tudo bem?', 'alicia', 'Professor(a)', NULL, 4, 94, '1', '2023-06-10 11:40:47', '2023-06-10 11:40:47'),
(79, 'e agora entao?', 'alicia', 'Professor(a)', NULL, 4, 72, '1', '2023-06-10 14:55:55', '2023-06-10 14:55:55'),
(80, 'oiii man, tudo bem?', 'olivia', 'Estudante', 1, NULL, 32, '1', '2023-06-11 11:16:57', '2023-06-11 11:16:57'),
(81, 'ah oui,tes serieux la', 'alicia', 'Professor(a)', NULL, 4, 126, '1', '2023-06-17 08:24:59', '2023-06-17 08:24:59'),
(82, 'gostei muito do seu jeito de resolver problemas.', 'manu', 'Estudante', 2, NULL, 132, '1', '2023-06-25 13:49:51', '2023-06-25 13:49:51'),
(83, 'kkkkkkkkkkkhhhhhhhhhhhhhhvvvvvvvvvvvvvvvvnnnnn', 'alicia', 'Professor(a)', NULL, 4, 134, '1', '2023-06-25 15:58:36', '2023-06-25 15:58:36'),
(84, 'obrigado meu bem', 'olivia', 'Estudante', 1, NULL, 122, '1', '2023-07-11 09:04:20', '2023-07-11 09:04:20');

-- --------------------------------------------------------

--
-- Structure de la table `seguirs`
--

CREATE TABLE `seguirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_user` varchar(191) DEFAULT NULL,
  `name_prof` varchar(191) DEFAULT NULL,
  `email_user` varchar(191) DEFAULT NULL,
  `email_prof` varchar(191) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prof` int(10) UNSIGNED DEFAULT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `whox` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `seguirs`
--

INSERT INTO `seguirs` (`id`, `name_user`, `name_prof`, `email_user`, `email_prof`, `id_user`, `id_prof`, `statut`, `created_at`, `updated_at`, `whox`) VALUES
(14, NULL, 'alicia', 'luxuluxu229@gmail.com', 'relaxmusik229@gmail.com', 1, 4, '1', '2023-05-06 15:02:30', '2023-05-06 15:02:30', 2),
(16, 'olivia', NULL, 'luxuluxu229@gmail.com', 'relaxmusik229@gmail.com', 1, 4, '1', '2023-05-30 14:33:07', '2023-05-30 14:33:07', 1),
(32, NULL, 'alicia', 'manuagondanou229@gmail.com', 'relaxmusik229@gmail.com', 2, 4, '1', '2023-05-31 06:53:43', '2023-05-31 06:53:43', 2),
(33, 'cine', NULL, 'manuagondanou@alu.ufc.br', 'relaxmusik229@gmail.com', 12, 4, '1', '2023-06-09 15:32:28', '2023-06-09 15:32:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ufcs`
--

CREATE TABLE `ufcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ufc` varchar(191) NOT NULL,
  `email_ufc` varchar(191) NOT NULL,
  `biblio_ufc` text DEFAULT NULL,
  `photo` varchar(191) NOT NULL,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ufcs`
--

INSERT INTO `ufcs` (`id`, `name_ufc`, `email_ufc`, `biblio_ufc`, `photo`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'UFC-FORTALEZA', 'ufc1@gmail.com', 'je suis la', '1682949353.PNG', '1', '2023-05-01 12:55:53', '2023-05-01 12:55:53'),
(2, 'UFC-RUSSAS', 'lucia@gmail.com', 'je suis la', '1682975424.jpg', '1', '2023-05-01 20:10:24', '2023-05-01 20:10:24'),
(3, 'UFC-QUIXADA', 'olivia@gmail.com', 'ok jai compris', '1682975468.PNG', '1', '2023-05-01 20:11:08', '2023-05-01 20:11:08');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `curso` varchar(191) NOT NULL,
  `matricula` varchar(191) NOT NULL,
  `id_ufc` int(10) UNSIGNED NOT NULL,
  `code_secutite` varchar(191) NOT NULL,
  `count_msg_user` int(10) DEFAULT 0,
  `statut` varchar(191) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `email_verified_at`, `curso`, `matricula`, `id_ufc`, `code_secutite`, `count_msg_user`, `statut`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'olivia', 'luxuluxu229@gmail.com', '1685719694.jpg', NULL, 'Ciencia da computaçao', '4141', 1, '1690038492W~/*-aAw~$@$@2077', 15, '1', NULL, '2023-05-02 06:45:55', '2023-07-22 14:14:28'),
(2, 'manu', 'manuagondanou229@gmail.com', '1683212246.jpg', NULL, 'engenharia de software', '4142', 1, '1689071763W~/*-aAw~$@$@1526', 4, '1', NULL, '2023-05-04 13:57:26', '2023-07-11 09:36:03'),
(12, 'cine', 'manuagondanou@alu.ufc.br', '1685191657.jpg', NULL, 'Ciencia da computaçao', '4143', 1, '1689071015W~/*-aAw~$@$@5785', 2, '1', NULL, '2023-05-27 11:47:37', '2023-07-11 09:23:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaires_id_user_foreign` (`id_user`),
  ADD KEY `commentaires_id_prof_foreign` (`id_prof`),
  ADD KEY `commentaires_id_publication_foreign` (`id_publication`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_id_publication_foreign` (`id_publication`),
  ADD KEY `likes_id_user_foreign` (`id_user`),
  ADD KEY `likes_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `privados`
--
ALTER TABLE `privados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `privados_id_user_foreign` (`id_user`),
  ADD KEY `privados_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professeurs_id_ufc_foreign` (`id_ufc`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_id_user_foreign` (`id_user`),
  ADD KEY `publications_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `responx_comments`
--
ALTER TABLE `responx_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responx_comments_id_user_foreign` (`id_user`),
  ADD KEY `responx_comments_id_prof_foreign` (`id_prof`),
  ADD KEY `responx_comments_id_commentaire_foreign` (`id_commentaire`);

--
-- Index pour la table `seguirs`
--
ALTER TABLE `seguirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seguirs_id_user_foreign` (`id_user`),
  ADD KEY `seguirs_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `ufcs`
--
ALTER TABLE `ufcs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_matricula_unique` (`matricula`),
  ADD KEY `users_id_ufc_foreign` (`id_ufc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `privados`
--
ALTER TABLE `privados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `responx_comments`
--
ALTER TABLE `responx_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `seguirs`
--
ALTER TABLE `seguirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `ufcs`
--
ALTER TABLE `ufcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaires_id_publication_foreign` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaires_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_id_publication_foreign` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `privados`
--
ALTER TABLE `privados`
  ADD CONSTRAINT `privados_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `privados_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `professeurs_id_ufc_foreign` FOREIGN KEY (`id_ufc`) REFERENCES `ufcs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `publications_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `responx_comments`
--
ALTER TABLE `responx_comments`
  ADD CONSTRAINT `responx_comments_id_commentaire_foreign` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaires` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `responx_comments_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `responx_comments_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `seguirs`
--
ALTER TABLE `seguirs`
  ADD CONSTRAINT `seguirs_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seguirs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_ufc_foreign` FOREIGN KEY (`id_ufc`) REFERENCES `ufcs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
