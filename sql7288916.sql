-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 25 Avril 2019 à 17:52
-- Version du serveur :  10.1.38-MariaDB-0ubuntu0.18.04.1
-- Version de PHP :  7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sql7288916`
--

-- --------------------------------------------------------

--
-- Structure de la table `attractions`
--

CREATE TABLE `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` bigint(20) NOT NULL,
  `minheight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `classdiv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `logo`, `experience`, `minheight`, `description`, `classdiv`, `created_at`, `updated_at`) VALUES
(10, 'Super Fighter League', 'img/logo_fighter_league.png', 1000, 'Interdit au moins d’1m10', 'Vous   aimez   les   jeux   de   combat   alors   bienvenue dans ce grand 8 aux couleurs des plus  grands  combattants  de  l’histoire  du  jeu-vidéo : Ryu, Raiden, Akuma, Yoshimitsu, Sub Zero, Scorpion et plus encore vont vous défier	dans	ce	manège	à', 'item item--medium animated zoomIn', NULL, NULL),
(11, 'Heroes team', 'img/logo_heroes.png', 2500, 'Accessible à tous', 'L’attraction ultime de notre parc, un univers entièrement consacré aux super héros Marvel. Embarquez  dans  une  navette  qui  vous  fera  voyager  dans  l’univers  des  gardiens  de  la  galaxy,  Spider-Man,  Thor,  Iron  Man  et  plus  encore. Une aventure unique dont vous serez le héros durant tout le voyage.', 'item item--large animated zoomIn', NULL, NULL),
(12, 'Contagion VR', 'img/logo_contagion_vr.png', 1500, 'Interdit au moins d\'1m30', 'Vous dirigez une équipe de soldats en charge de	 découvrir	ce	 qui	 est	 arrivé	  aux	 scientifiques	du laboratoire minier Omega Centuri B.Une fois à bord, vous apprenez qu’un terrible virus a fait muter tout l’équipage, et que la station spatiale est maintenant infestée par d’horribles zombies !Vous devez donc évacuer votre équipe en tentant de survivre le plus longtemps possible.', 'item item--long animated zoomIn', NULL, NULL),
(13, 'Fighter Hard Team', 'img/logo_fighter_hard.png', 1000, 'Interdit au moins d’1m30', 'Dans ce jeu, il n’y a plus de règle. Vous êtes équipé de la dernière armure sensitive et vous  ressentirez  tous  les  coups  que  vos  adversaires  vont  vous  porter.  Attention  donc à ne pas prendre de mauvais coups. Une attraction déconseillée aux femmes enceintes.', 'item item--medium animated zoomIn', NULL, NULL),
(14, 'Battle Kart', 'img/logo_battle_kart.png', 1000, 'Accessible à tous', 'BattleKart, c’est la quintessence du jeu vidéo, de la réalité augmentée et du karting électrique, ré-unis  pour  vous  procurer  des  sensations  inédites  entre amis, en familles ou entre collègues ! C’est avant tout l’un des plus grands écrans de cinéma au	 monde	   (deux	   pistes	   de	 2.000	   m2)		  sur	 lequel	   nous	  projetons	différents	circuits	   et	 modes	   de	 jeu,	et sur lequel vous évoluez réellement plein gaz à bord d’un kart électrique, tout en interagissant avec le décor, les bonus, et les autres pilotes.', 'item item--medium animated zoomIn', NULL, NULL),
(15, 'GAME CENTER', 'img/logo_game_center.png', 500, 'Accessible à tous', 'Un espace de 3000 m2 dédié au Retro Gaming. Vous retrouverez  toute  l’ambiance  des  salles  d’arcade  des  années	   80	 avec	  les	 bornes	   de	 l’époque	pour	  défier	   vos	amis dans les meilleurs jeux retro : Mario, Centipede, Q Bert, Space invaders, Pac-Man...', 'item item--long animated zoomIn', NULL, NULL),
(16, 'Awsome heroes team', 'img/logo_awesome_heroes.png', 1200, 'Interdit au moins d\'1m30', 'une plongée épique dans l’univers des vikings et des chevaliers. Vous retrouverez l’ambiance du célèbre jeu  For  Honor  du  studio  français  Ubisoft.  Une  attraction  riche  en  sensations  fortes  déconseillée  aux âmes sensibles.', 'item item--medium animated zoomIn', NULL, NULL),
(17, 'Champions League', 'img/logo_champions_league.png', 1300, 'Accessible à tous', 'Dans	  ce	 jeu	 vous	  bénéficiez	de	 la	 toute	  dernière	technologie	hologramme	pour	   affronter	les	légendes du football en partenariat avec Konami et	 la	 licence	   de	 simulation	de	 football	   PES.	  Venez	   affronter	sur	 le	 terrain	   Maradona,	Pelé, Messi et bien d\'autres', 'item item--medium animated zoomIn', NULL, NULL),
(18, 'Champions League Survivor', 'img/logo_champions_league_survivor.png', 1400, 'Interdit au moins d’1m10', 'Dans   cette   version   alternative   du   jeu   Champions  League,  les  joueurs  de  foot  sont remplacès par des vampires, des loups garous et des zombies. Vous devrez donc marquer des buts sans vous faire dévorer par d’horribles créatures.', 'item item--medium animated zoomIn', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `image`) VALUES
(1, 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_04_21_161845_avatar', 1),
(22, '2019_04_21_170613_attractions', 1),
(23, '2019_04_21_171113_roles', 1),
(24, '2019_04_21_172236_updateuser', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `experience` bigint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `firstname`, `nickname`, `city`, `avatar_id`, `experience`) VALUES
(1, 'AUDREY', 'auda59@hotmail.fr', NULL, '$2y$10$M4ddGoR7GVvzpJZTNLTpQuOQahqBZt6J4qMCIlIypMKmHY9IWhP6O', NULL, '2019-04-21 17:44:58', '2019-04-21 17:44:58', 'AUDREY', 'YAUDA', 'VALENCIENNES', 1, 0),
(2, 'BERNEZET', 'alex@alex.fr', NULL, '$2y$10$vC3gCHYlhqCgM6465aK7p./g.18l20Zj3HNSmZxrLI5aMx2D9aWiG', NULL, '2019-04-22 21:21:33', '2019-04-22 21:21:33', NULL, 'ALEX', 'DUNKERQUE', 1, 0),
(3, 'audrey', 'audrey@hotmail.fr', NULL, '$2y$10$IWxApbwzC1LturuFWqb5Ce2P3.ytDi7PkIS1UYFkk9CX1krrhcX9K', NULL, '2019-04-24 16:08:11', '2019-04-24 16:08:11', 'audrey', 'audrey', 'audrey', 1, 0),
(4, 'grbr', 'q@hotmail.fr', NULL, '$2y$10$hOSyhwQEiJ3cvDwtT7dgkezyNG0niVsu1GCd7JGhVU4t3MviiZ85S', NULL, '2019-04-24 16:13:11', '2019-04-24 16:13:11', 'dd', 'd', 'kj', 1, 0),
(5, 'dve', 'fdbved@br.fr', NULL, '$2y$10$gzs0GOcAzPgFSoUOWfvo/OcI8fqir7mXW2IJsfjvDRs8jtj74w4Bi', NULL, '2019-04-24 16:17:08', '2019-04-24 16:17:08', 've', 've', 'efegr', 1, 0),
(6, 'hello', 'hello@hotmail.fr', NULL, '$2y$10$WCfuyc1L5HRFhDMZt5zcceCw69ui7EG8k3fShobinkUoAOlsz9H8a', NULL, '2019-04-24 17:05:59', '2019-04-24 17:05:59', 'hello', 'hello', 'hello', 1, 0),
(7, 'world', 'world@hotmail.fr', NULL, '$2y$10$1qulZ2iudxtEfxcDbMZm7ODcO.YxXNsjDUXMw8hTwdZqijPEhTrmi', NULL, '2019-04-25 10:13:39', '2019-04-25 10:13:39', 'world', 'world', 'world', 1, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_avatar_id_foreign` (`avatar_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_avatar_id_foreign` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
