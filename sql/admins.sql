-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 24 nov. 2017 à 16:47
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yves_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin.png',
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `avatar`, `name`, `email`, `password`, `contact`, `remember_token`, `job`, `created_at`, `updated_at`) VALUES
(1, '1511531456.jpg', 'Codeur', 'contact@admin.codeur', '$2y$10$RyvHgUKpR/ILr.r1aopMZuE.xUy.u6gkydbbMzD41HQfDuUAq.yo.', 57869730, 'OAi8utg0Stk8zryRcJkrjon41PQLlv71Cf8bk0aZmbQ508sqxbXaF1UkYRzk', 'Developper Full stack', '2017-11-19 17:53:37', '2017-11-24 13:50:56'),
(3, 'admin.png', 'Admin second', 'b@b.fr', '$2y$10$.JE6WI9Vg/q96QpP.DNg/Ol4CjLkOFzcGv6rduqFiFkmf9wWXeEu6', 500043543, NULL, 'Nord', '2017-11-21 18:45:05', '2017-11-21 18:45:05'),
(4, 'admin.png', 'Admin tree', 'c@c.fr', '$2y$10$wmUhZR.TA9kzDfKfJdgDs.HWaR8NLzF0heoDnngQiodqeTO5cdbna', 5000435, NULL, 'Nord', '2017-11-21 18:50:16', '2017-11-21 18:50:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
