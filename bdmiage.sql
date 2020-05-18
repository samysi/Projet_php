-- Samy SI-MOHAMMED L3 APP
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 mai 2020 à 13:06
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdmiage`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dossiers`
--

CREATE TABLE `dossiers` (
  `id_dossier` int(10) UNSIGNED NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lettre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relever_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imprime_ecran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etudiant` int(10) UNSIGNED NOT NULL,
  `id_statut` int(10) UNSIGNED NOT NULL,
  `id_formation` int(10) UNSIGNED NOT NULL,
  `commentaire` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dossiers`
--

INSERT INTO `dossiers` (`id_dossier`, `cv`, `lettre`, `relever_note`, `imprime_ecran`, `id_etudiant`, `id_statut`, `id_formation`, `commentaire`) VALUES
(17, 'cv_7.pdf', 'lettre_motivation_7.pdf', 'relever_note_7.pdf', 'imprime_ecran_7.pdf', 7, 3, 1, 'test'),
(18, 'cv_9.pdf', 'lettre_motivation_9.pdf', 'relever_note_9.pdf', 'imprime_ecran_9.pdf', 9, 1, 2, NULL),
(19, 'cv_12.pdf', 'lettre_motivation_12.pdf', 'relever_note_12.pdf', 'imprime_ecran_12.pdf', 12, 5, 3, 'Prenez moi !!!!'),
(22, 'cv_18.pdf', 'lettre_motivation_18.pdf', 'relever_note_18.pdf', 'imprime_ecran_18.pdf', 18, 5, 2, 'Je suis un étudiant de nanterre');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_formation` int(10) UNSIGNED NOT NULL,
  `libelle_formation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `libelle_formation`) VALUES
(1, 'Licence Miage'),
(2, 'Master1 Miage'),
(3, 'Master2 Miage');

-- --------------------------------------------------------

--
-- Structure de la table `individus`
--

CREATE TABLE `individus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `prof` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `individus`
--

INSERT INTO `individus` (`id`, `nom`, `prenom`, `email`, `password`, `date_naissance`, `adresse`, `telephone`, `created_at`, `updated_at`, `remember_token`, `admin`, `prof`) VALUES
(5, 'test', 'test', 'test@test.fr', '$2y$10$PNOp6O2lC8yIZwpXjG4Ps.NNsUbp90F/7yYUgBd1PXdP51P7Yd5Xq', '1998-02-02', 'nanterre', 12345, '2020-04-27 07:54:15', '2020-04-27 08:32:43', NULL, 0, 0),
(7, 'mr', 'moi', 'moi@nanterre.fr', '$2y$10$XoQ0RAEY7jfSlP3x.th1WOcbJbA5pvkQllHfy5qqG.YNyJ97pFub6', '2013-10-15', 'nanterre', 645982563, '2020-05-11 09:37:15', '2020-05-12 19:12:21', NULL, 0, 0),
(8, 'mr', 'truc', 'admin@parisnanterre.fr', '$2y$10$sHWTePNTZIvxpsXWH.Pdh.wKvqhicGcPJoY7uMRTkz8sWofERu4UK', '1999-01-01', 'rien', 0, '2020-05-11 19:15:21', '2020-05-18 09:05:16', NULL, 0, 1),
(9, 'SI-mohammed', 'Yasser', 'yasser@nanterre.fr', '$2y$10$QGDqIEEJbCTyVb.qxgvY0u4c1E2zemlJya.laV1Ui2hsqUBMAF5rC', '2005-08-24', 'Rosny', 658943578, '2020-05-12 19:08:23', '2020-05-12 19:08:23', NULL, 0, 0),
(10, 'Isoard', 'Thierry', 'isoard@parisnanterre.fr', '$2y$10$zMwEJCEZC6ibEJbp0bowv.DbOoUY5Q/JGJUVimThQYBG3UOOW.naC', '1999-01-01', 'rien', 0, '2020-05-12 19:50:35', '2020-05-12 19:50:35', NULL, 0, 1),
(12, 'Sakho', 'mamadou', 'mamadou@nanterre.fr', '$2y$10$SNljrsvudx3qGvEly1sMTO7SbRNtudYui2Mvt4hua8tf90.mjsnhy', '1985-01-01', 'paris', 645787889, '2020-05-12 20:23:14', '2020-05-12 20:24:47', NULL, 0, 0),
(13, 'Macone', 'Marie', 'marie@parisnanterre.fr', '$2y$10$HVRT4BCyQvMJdurfCKHrVe/ZgzRLI5wATmJBiPAqj7R8lKKzm9yYO', '1999-01-01', 'rien', 0, '2020-05-12 20:34:31', '2020-05-12 20:37:02', NULL, 0, 1),
(18, 'SI', 'samy', 'samysi@nanterre.fr', '$2y$10$a/06gN/JfUpx/khX1r3dSutY3/Qs1LZuWG1b1C/ojdMrSTxzWeCpC', '1999-01-01', 'Rosny', 645789652, '2020-05-13 18:18:02', '2020-05-13 18:19:20', NULL, 0, 0),
(19, 'Hyon', 'Emmanuel', 'hyon@parisnanterre.fr', '$2y$10$W6ZjnuJynWWD7zGfstpH3uV4vxbQ0t/hGaBkEk62RLd6f7gZmVFC.', '1999-01-01', 'rien', 0, '2020-05-13 18:22:24', '2020-05-13 18:22:24', NULL, 0, 1);

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
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_30_090943_etudiant', 1),
(2, '2020_03_30_091009_dossier', 1),
(3, '2020_03_30_091022_formation', 1),
(4, '2020_03_30_091034_statut', 1),
(5, '2020_03_30_091049_administrateur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id_statut` int(10) UNSIGNED NOT NULL,
  `libelle_statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statuts`
--

INSERT INTO `statuts` (`id_statut`, `libelle_statut`) VALUES
(1, 'Reçu'),
(2, 'Reçu incomplet en attente de complément'),
(3, 'Validé complet '),
(4, 'Entretien'),
(5, 'Accepté'),
(6, 'Refusé'),
(7, 'Liste d\'attente');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dossiers`
--
ALTER TABLE `dossiers`
  ADD PRIMARY KEY (`id_dossier`),
  ADD UNIQUE KEY `dossier_email_unique` (`id_etudiant`),
  ADD KEY `id_statut` (`id_statut`),
  ADD KEY `id_formation` (`id_formation`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `individus`
--
ALTER TABLE `individus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etudiants_email_unique` (`email`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id_statut`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dossiers`
--
ALTER TABLE `dossiers`
  MODIFY `id_dossier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_formation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `individus`
--
ALTER TABLE `individus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id_statut` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dossiers`
--
ALTER TABLE `dossiers`
  ADD CONSTRAINT `dossiers_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `individus` (`id`),
  ADD CONSTRAINT `dossiers_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `individus` (`id`),
  ADD CONSTRAINT `dossiers_ibfk_3` FOREIGN KEY (`id_statut`) REFERENCES `statuts` (`id_statut`),
  ADD CONSTRAINT `dossiers_ibfk_4` FOREIGN KEY (`id_formation`) REFERENCES `formations` (`id_formation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
