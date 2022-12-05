-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 05, 2022 at 05:43 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

DROP TABLE IF EXISTS `addcategory`;
CREATE TABLE IF NOT EXISTS `addcategory` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `add_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`id`, `add_category`, `created_at`, `updated_at`) VALUES
(1, '+2 Books', NULL, NULL),
(2, 'Fiction & Literature', NULL, NULL),
(3, 'LifeStyle & Wellness', NULL, NULL),
(4, 'Academic & Reference', NULL, NULL),
(5, 'Graphic novels', NULL, NULL),
(6, 'Bachelor\'s Book', NULL, NULL),
(7, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(19, 2, 0, '2022-11-30 00:40:52', '2022-11-30 00:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

DROP TABLE IF EXISTS `checkouts`;
CREATE TABLE IF NOT EXISTS `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `name`, `email`, `mobile`, `address`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Aladdin Dodson', 'xopyxod@mailinator.com', 0, 'lozebyv@mailinator.com', 'Fugiat sapiente aut', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_18_132516_create_productentry_table', 1),
(6, '2021_11_18_135701_add_category', 1),
(7, '2021_11_24_031425_create_checkouts_table', 1),
(8, '2021_12_07_153751_create_cart_table', 1),
(9, '2022_07_30_091626_edit_productentry_table', 1),
(10, '2022_07_30_092420_add_productentry_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(12, '2022_11_15_032034_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productentry`
--

DROP TABLE IF EXISTS `productentry`;
CREATE TABLE IF NOT EXISTS `productentry` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_price` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` int(11) NOT NULL,
  `format` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productentry`
--

INSERT INTO `productentry` (`id`, `pname`, `category_name`, `current_price`, `description`, `quantity`, `photo1`, `created_at`, `updated_at`, `author`, `isbn`, `format`, `language`, `release_date`, `publisher`, `pages`, `condition`) VALUES
(1, 'Karnali Blues', 'Fiction & Literature', 550, 'Karnali Blues, by Buddhisagar, is the most widely read Nepali novel to have appeared in the last twenty years. As it recounts the evolution of a father-son relationship-a son’s search for app', 5, '386081721.jpg', '2022-10-29 08:35:51', '2022-10-29 08:35:51', 'Buddhi Sagar', 2147483647, 'Paperback', 'English', '2010-05-14', 'Fine Print Publication', 800, 'Very good'),
(2, 'Think Like A Monk', 'LifeStyle & Wellness', 800, 'Jay Shetty, social media superstar and host of the #1 podcast ‘On Purpose’, distils the timeless wisdom he learned as a practicing monk into practical steps anyone can take every day to live ', 2, '1459895855.jpg', '2022-10-29 08:58:59', '2022-10-29 08:58:59', 'Jay Shetty', 2147483647, 'Paperback', 'English', '2020-09-08', 'Simon & Schuster', 900, 'Good'),
(3, 'The Gurkhas', 'Academic & Reference', 760, 'The Gurkhas remain one of the most distinctive and feared regiments of the British Army. Rumor has it that during the Falklands War, Argentinean troops lived in terror of being stalked and ki', 1, '812997284.jpg', '2022-10-29 09:05:33', '2022-10-29 09:05:33', 'John Parker', 747275777, 'Paperback', 'English', '2015-05-28', 'Headline Book Publication', 287, 'Excellent'),
(4, 'Gulamoke Saudagar', 'Graphic novels', 950, 'Who doesn t know Tintin! His adventures have sparked the imagination of young minds around the globe! If there is any child who still isn t engrossed in this world of Tintin, then these 22 co', 1, '2028527286.jpg', '2022-10-29 09:08:09', '2022-10-29 09:08:09', 'Herge', 2147483647, 'Paperback', 'Hindi', '2012-01-01', 'Om Publisher', 87, 'Good'),
(5, 'Business Mathematics-II', 'Bachelor\'s Books', 650, 'Mathematics books for the Bachelor\'s Student', 2, '872350811.jpg', '2022-10-29 09:10:31', '2022-10-29 09:10:31', 'Jay Narayan Jha', 72398406, 'Paperback', 'English', '2021-12-12', 'Kirti Publication', 900, 'Excellent'),
(6, 'Principles Of Physics', '+2 Books', 1200, 'Physics book for +2 students', 1, '26863350.jpg', '2022-10-29 09:15:28', '2022-10-29 09:15:28', 'Dr.Manij Kumar Thapa', 2147483647, 'Paperback', 'English', '2021-02-12', 'Colombus Publication', 1590, 'Very good');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('22B6mXt4IoNXbJkZnvDSvBcAz4ryjn2BktK679Wb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTdPSDYyc1gwUFhZZ3hGb3lZeXlJeUxjUHRGVjZpWWk5OHhlMTdSUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1668875188),
('aKSDZwo8G1PUqsn9mjWLaN9tfti4IiwHE7GQJpEh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3dIMnB6VWF0dmFOOU0xM2Y3MjFkYlhBcGRXRjRBYlE3SVFObHFKRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1669128709),
('oEERqsXCFBo3BAeUfNQD52CCdD7gGdIQrPnFJYGW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUENYYnBYNEdlVFpnM3FrakhDQk5NMkxIVklvRnFaelRmeDVHQzRwZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1668875114);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Prapti Tuladhar', 'admin@admin.com', NULL, '$2y$10$f7RFa164ALssoRhoxjOPcO2.gL2QiA6XFm77zSsyUzy6BWmBtdrmG', NULL, NULL, NULL, NULL, '2022-11-14 22:21:59', '2022-11-14 22:21:59'),
(5, '', '', NULL, '', NULL, NULL, NULL, NULL, '2022-11-28 04:03:02', '2022-11-28 04:03:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
