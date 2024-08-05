-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 28 juin 2024 à 14:37
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `xgprchty_pro_gest_restos_bs`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('RESTAURANT','MAQUIS ET BAR','ÉVÉNEMENT') NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `name`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'RESTAURANT', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 'MAQUIS ET BAR', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 'ÉVÉNEMENT', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stocke_id` bigint(20) UNSIGNED NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_achat` double NOT NULL,
  `frais_divers` double NOT NULL,
  `prix_achat_unitaire` double NOT NULL,
  `depense_combinee` double NOT NULL,
  `prix_vente_unitaire` double NOT NULL,
  `prix_vente_totale` double NOT NULL,
  `revenu_unitaire` double NOT NULL,
  `revenu` double NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `stocke_id`, `departement_id`, `name`, `reference`, `quantite`, `prix_achat`, `frais_divers`, `prix_achat_unitaire`, `depense_combinee`, `prix_vente_unitaire`, `prix_vente_totale`, `revenu_unitaire`, `revenu`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'LAIT CADIA', 'LECHE2024001', 5000, 8000000, 0, 1600, 8000000, 2500, 12500000, 900, 4500000, 'ACTIF', 'ACTIF', '2024-06-28 05:40:03', '2024-06-28 05:40:03'),
(2, 1, 2, 'HUILE DINOR', 'HUIL2024001', 5000, 5000000, 0, 1000, 5000000, 1500, 7500000, 500, 2500000, 'ACTIF', 'ACTIF', '2024-06-28 05:40:03', '2024-06-28 05:40:03'),
(3, 1, 2, 'AUBERGINE VIOLETTE', 'AUB2024001', 10000, 5000000, 0, 500, 5000000, 1000, 10000000, 500, 5000000, 'ACTIF', 'ACTIF', '2024-06-28 05:40:03', '2024-06-28 05:40:03'),
(4, 2, 2, 'CATON D\'OEF', 'CARTO2024002', 80000, 195000000, 0, 2438, 195000000, 3500, 280000000, 1062, 85000000, 'ACTIF', 'ACTIF', '2024-06-28 05:45:20', '2024-06-28 05:45:20'),
(5, 2, 2, 'HUILE DINOR', 'HUIL2024102', 90000, 95000000, 0, 1056, 95000000, 1500, 135000000, 444, 40000000, 'ACTIF', 'ACTIF', '2024-06-28 05:45:20', '2024-06-28 05:45:20'),
(6, 2, 2, 'AUBERGINE VIOLETTE', 'AUBERG2024201', 70000, 19500000, 0, 279, 19500000, 500, 35000000, 221, 15500000, 'ACTIF', 'ACTIF', '2024-06-28 05:45:20', '2024-06-28 05:45:20'),
(7, 3, 2, 'RIZ ONCLE SAME 1KG', 'REF2024010', 9000, 9500000, 0, 1056, 9500000, 2000, 18000000, 944, 8500000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(8, 3, 2, 'HUILE DINOR', 'HUR10012', 500, 500000, 0, 1000, 500000, 1500, 750000, 500, 250000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(9, 3, 2, 'AUBERGINE VIOLETTE', 'AUB2024112', 50, 50000, 0, 1000, 50000, 2000, 100000, 1000, 50000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(10, 3, 2, 'PATE DE TOMATE', 'PT020241001', 50, 90000, 0, 1800, 90000, 2500, 125000, 700, 35000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(11, 3, 2, 'PATTE D\'ARRACHIDE', 'ARH2024101', 150, 190000, 0, 1267, 190000, 2000, 300000, 733, 110000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(12, 3, 2, 'SUCRE EN POUDRE', 'SRC2024001', 950, 500000, 0, 527, 500000, 900, 855000, 373, 355000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(13, 3, 2, 'CUBE MAGGIE', 'CUM2024001', 1900, 80000, 0, 43, 81700, 50, 95000, 7, 13300, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(14, 3, 2, 'SEL', 'SER2024001', 150, 35000, 0, 234, 35000, 500, 75000, 266, 40000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(15, 3, 2, 'CARRETE', 'CART2024001', 100, 250000, 0, 2500, 250000, 3500, 350000, 1000, 100000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(16, 3, 2, 'CHOUX', 'CHX2024001', 250, 50000, 0, 200, 50000, 500, 125000, 300, 75000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(17, 3, 2, 'PIMENT FRAIS', 'PMF2024001', 50, 15000, 0, 300, 15000, 650, 32500, 350, 17500, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16'),
(18, 3, 2, 'OIGNON', 'OGN2024001', 500, 300000, 0, 600, 300000, 1000, 500000, 400, 200000, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16');

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

CREATE TABLE `bannieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `raison_sociale` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `marge` double(8,2) NOT NULL DEFAULT 36.00,
  `signature` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

CREATE TABLE `boissons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unitaire` double(8,2) NOT NULL,
  `prix_total` double(8,2) NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `caisses`
--

CREATE TABLE `caisses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `coordinateur` bigint(20) UNSIGNED NOT NULL,
  `tresorier` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(20) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detail`)),
  `etat` enum('EN ATTENTE','VALIDER','CONFIRMER') NOT NULL DEFAULT 'EN ATTENTE',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `activite_id`, `name`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Restaurant', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 1, 'Kiosque', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 2, 'Boisson', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(4, 3, 'Événement', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

-- --------------------------------------------------------

--
-- Structure de la table `dispatchers`
--

CREATE TABLE `dispatchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `espace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detail`)),
  `montant` double NOT NULL,
  `date` date NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dispatchers`
--

INSERT INTO `dispatchers` (`id`, `espace_id`, `detail`, `montant`, `date`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '[{\"articleId\":1,\"quantite\":2,\"montant\":5000},{\"articleId\":2,\"quantite\":3,\"montant\":4500},{\"articleId\":3,\"quantite\":4,\"montant\":4000}]', 13500, '2024-06-28', 'ACTIF', 'ACTIF', '2024-06-28 09:26:08', '2024-06-28 09:26:08');

-- --------------------------------------------------------

--
-- Structure de la table `espaces`
--

CREATE TABLE `espaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `espaces`
--

INSERT INTO `espaces` (`id`, `name`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Espace Restaurant', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 'Espace Buvette', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 'Espace Plein Aire', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `repas_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`)),
  `reference` varchar(50) NOT NULL,
  `etat` enum('EN ATTENTE','OUVERT','FERMER') NOT NULL DEFAULT 'EN ATTENTE',
  `status` enum('EN ATTENTE','OUVERT','FERMER') NOT NULL DEFAULT 'EN ATTENTE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(70, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(71, '2019_08_19_000000_create_failed_jobs_table', 1),
(72, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(73, '2024_05_13_073915_create_v_i_p_s_table', 1),
(74, '2024_05_13_191030_create_roles_table', 1),
(75, '2024_05_13_191031_create_users_table', 1),
(76, '2024_05_13_191044_create_repas_table', 1),
(77, '2024_05_13_191045_create_activites_table', 1),
(78, '2024_05_13_191045_create_departements_table', 1),
(79, '2024_05_13_191046_create_stockes_table', 1),
(80, '2024_05_13_191047_create_menus_table', 1),
(81, '2024_05_13_191057_create_boissons_table', 1),
(82, '2024_05_13_191106_create_espaces_table', 1),
(83, '2024_05_13_191134_create_plats_table', 1),
(84, '2024_05_13_191144_create_tables_table', 1),
(85, '2024_05_13_191145_create_ventes_table', 1),
(86, '2024_05_13_191201_create_commandes_table', 1),
(87, '2024_05_13_191214_create_caisses_table', 1),
(88, '2024_05_13_191227_create_produits_table', 1),
(89, '2024_05_22_192706_create_articles_table', 1),
(90, '2024_06_01_084534_create_bannieres_table', 1),
(91, '2024_06_13_080558_create_profiles_table', 1),
(92, '2024_06_23_021927_create_dispatchers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `repas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` double NOT NULL,
  `prix_total` double NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unitaire` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `designation` enum('Kilogramme','Unite') NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `montant` double NOT NULL,
  `profile` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE `repas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('PETIT DEJEUNER','DEJEUNER','GOUTER','DINER') NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `repas`
--

INSERT INTO `repas` (`id`, `name`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PETIT DEJEUNER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 'DEJEUNER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 'GOUTER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(4, 'DINER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('GESTIONNAIRE','MANAGER','MAGAZINIER','CAISSIER','SUPERVISEUR','DIRECTEUR','HOTESSE','SERVEUR') NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GESTIONNAIRE', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 'MANAGER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 'MAGAZINIER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(4, 'CAISSIER', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(5, 'SUPERVISEUR', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(6, 'DIRECTEUR', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(7, 'HOTESSE', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(8, 'SERVEUR', 'ACTIF', 'ACTIF', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

-- --------------------------------------------------------

--
-- Structure de la table `stockes`
--

CREATE TABLE `stockes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `categorie` double DEFAULT NULL,
  `contenu` int(11) DEFAULT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stockes`
--

INSERT INTO `stockes` (`id`, `activite_id`, `departement_id`, `reference`, `montant`, `categorie`, `contenu`, `etat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'RES-2024-1', 18000000, 3, 20000, 'ACTIF', 'ACTIF', '2024-06-28 05:40:03', '2024-06-28 05:40:03'),
(2, 1, 2, 'RES-2024-2', 309500000, 3, 240000, 'ACTIF', 'ACTIF', '2024-06-28 05:45:20', '2024-06-28 05:45:20'),
(3, 1, 2, 'RES-2024-3', 11561700, 12, 13650, 'ACTIF', 'ACTIF', '2024-06-28 06:31:16', '2024-06-28 06:31:16');

-- --------------------------------------------------------

--
-- Structure de la table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `vip_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_prise_de_fonction` date DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fullname`, `telephone`, `email`, `date_prise_de_fonction`, `residence`, `etat`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'ADMIN GEST', NULL, 'admin@gmail.com', NULL, NULL, 'ACTIF', 'ACTIF', NULL, '$2y$12$AU5lI8H86Kl4slhBex02LuLProcC2Qm8AKF.W6cAedJQgGbxwlmlG', NULL, '2024-06-28 05:34:16', '2024-06-28 05:34:16');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE `ventes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(20) NOT NULL,
  `caissier` bigint(20) UNSIGNED NOT NULL,
  `manager` bigint(20) UNSIGNED DEFAULT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED DEFAULT NULL,
  `montant` double NOT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detail`)),
  `etat` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `status` enum('ACTIF','INACTIF') NOT NULL DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vip`
--

CREATE TABLE `vip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('VIP1','VIP2','VIP3') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vip`
--

INSERT INTO `vip` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'VIP1', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(2, 'VIP2', '2024-06-28 05:33:47', '2024-06-28 05:33:47'),
(3, 'VIP3', '2024-06-28 05:33:47', '2024-06-28 05:33:47');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_reference_unique` (`reference`),
  ADD KEY `articles_stocke_id_foreign` (`stocke_id`),
  ADD KEY `articles_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `bannieres`
--
ALTER TABLE `bannieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boissons`
--
ALTER TABLE `boissons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boissons_activite_id_foreign` (`activite_id`);

--
-- Index pour la table `caisses`
--
ALTER TABLE `caisses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caisses_activite_id_foreign` (`activite_id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_activite_id_foreign` (`activite_id`),
  ADD KEY `commandes_coordinateur_foreign` (`coordinateur`),
  ADD KEY `commandes_tresorier_foreign` (`tresorier`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_activite_id_foreign` (`activite_id`);

--
-- Index pour la table `dispatchers`
--
ALTER TABLE `dispatchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dispatchers_espace_id_foreign` (`espace_id`);

--
-- Index pour la table `espaces`
--
ALTER TABLE `espaces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_repas_id_foreign` (`repas_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plats_activite_id_foreign` (`activite_id`),
  ADD KEY `plats_menu_id_foreign` (`menu_id`),
  ADD KEY `plats_repas_id_foreign` (`repas_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produits_reference_unique` (`reference`),
  ADD KEY `produits_activite_id_foreign` (`activite_id`);

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_vent_id_foreign` (`vent_id`);

--
-- Index pour la table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stockes`
--
ALTER TABLE `stockes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stockes_activite_id_foreign` (`activite_id`),
  ADD KEY `stockes_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tables_activite_id_foreign` (`activite_id`),
  ADD KEY `tables_vip_id_foreign` (`vip_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventes_caissier_foreign` (`caissier`),
  ADD KEY `ventes_manager_foreign` (`manager`),
  ADD KEY `ventes_activite_id_foreign` (`activite_id`),
  ADD KEY `ventes_table_id_foreign` (`table_id`);

--
-- Index pour la table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `bannieres`
--
ALTER TABLE `bannieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `boissons`
--
ALTER TABLE `boissons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caisses`
--
ALTER TABLE `caisses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `dispatchers`
--
ALTER TABLE `dispatchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `espaces`
--
ALTER TABLE `espaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `repas`
--
ALTER TABLE `repas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `stockes`
--
ALTER TABLE `stockes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ventes`
--
ALTER TABLE `ventes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vip`
--
ALTER TABLE `vip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_stocke_id_foreign` FOREIGN KEY (`stocke_id`) REFERENCES `stockes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `boissons`
--
ALTER TABLE `boissons`
  ADD CONSTRAINT `boissons_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `caisses`
--
ALTER TABLE `caisses`
  ADD CONSTRAINT `caisses_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_coordinateur_foreign` FOREIGN KEY (`coordinateur`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_tresorier_foreign` FOREIGN KEY (`tresorier`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `departements_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dispatchers`
--
ALTER TABLE `dispatchers`
  ADD CONSTRAINT `dispatchers_espace_id_foreign` FOREIGN KEY (`espace_id`) REFERENCES `espaces` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_repas_id_foreign` FOREIGN KEY (`repas_id`) REFERENCES `repas` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plats_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plats_repas_id_foreign` FOREIGN KEY (`repas_id`) REFERENCES `repas` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_vent_id_foreign` FOREIGN KEY (`vent_id`) REFERENCES `ventes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stockes`
--
ALTER TABLE `stockes`
  ADD CONSTRAINT `stockes_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stockes_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tables_vip_id_foreign` FOREIGN KEY (`vip_id`) REFERENCES `vip` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD CONSTRAINT `ventes_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventes_caissier_foreign` FOREIGN KEY (`caissier`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventes_manager_foreign` FOREIGN KEY (`manager`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventes_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
