-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table test_praktek_laravel.cards
CREATE TABLE IF NOT EXISTS `cards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `section_id` bigint unsigned NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.cards: ~0 rows (approximately)
DELETE FROM `cards`;
INSERT INTO `cards` (`id`, `section_id`, `title`, `subtitle`, `menu_link`, `img`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Mesin Kasir', NULL, NULL, 'images/zRA73KbNRVxCULxIStSmxbtcvjXCaEurldVv4gyS.jpg', '2023-07-06 10:20:07', '2023-07-06 10:20:07'),
	(2, 3, 'Scan Barcode', NULL, NULL, 'images/VeOUTMMMx09T3Qx8TK9jZhATxzEXufbNzzdKDxWG.jpg', '2023-07-06 10:20:30', '2023-07-06 10:20:30'),
	(3, 3, 'Daftar Kurir', NULL, NULL, 'images/TaclxA52ItNJFd3OEwbQBoVw5tRTbQvAJScvS381.jpg', '2023-07-06 10:20:52', '2023-07-06 10:20:52'),
	(4, 3, 'Stock Opname', NULL, NULL, 'images/NFZbHxhB870cKFwDFRLE7Bvlkxi1Ou8qRF2OhmPl.jpg', '2023-07-06 10:21:40', '2023-07-06 10:21:40'),
	(5, 5, 'Toko Kelontong', 'lorem ipsum, utawa ringkese lipsum.', NULL, 'images/YRTbwZ3HBuRjYK4jgT7CFleUCajyj813cSLKV6dg.jpg', '2023-07-06 16:54:56', '2023-07-06 16:54:56'),
	(6, 5, 'Toko Bangunan', 'lorem ipsum, utawa ringkese lipsum.', NULL, 'images/jpkpqklOPjlduERV3ImGBLGQRcXxPjqjyM5kMQGb.jpg', '2023-07-06 16:55:24', '2023-07-06 16:55:24'),
	(7, 5, 'Toko Pakaian', 'lorem ipsum, utawa ringkese lipsum.', NULL, 'images/tmnguvLquvgasyH8YcvZlyWQYZbrRXbFBh4idUFj.jpg', '2023-07-06 16:56:27', '2023-07-06 16:56:27'),
	(8, 5, 'Warung Makan', 'lorem ipsum, utawa ringkese lipsum.', NULL, 'images/VdshXZyxM9EA7qZaviyS5LlrRUvdkx0qyqUmyo6q.jpg', '2023-07-06 16:59:10', '2023-07-06 16:59:10'),
	(9, 9, 'Marketing Communication', 'Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan, mulai mengembangkan bisnis toko online bersama', NULL, 'images/YPGvBNoTAEhdo49WVvSoVZ4LiMTBqJ6sFldwDozq.jpg', '2023-07-06 17:05:14', '2023-07-06 17:05:14'),
	(10, 9, 'Marketing Communication', 'Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan, mulai mengembangkan bisnis toko online bersama', NULL, 'images/O1OVH1QzaESnHiS9JtibYhdLikGIp5dJknktdZc9.jpg', '2023-07-06 17:05:33', '2023-07-06 17:05:33'),
	(11, 9, 'Marketing Communication', 'Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan, mulai mengembangkan bisnis toko online bersama', NULL, 'images/Uf9j33pkghlBK1larMaC6J6l5JYImXWteoMmrxaZ.jpg', '2023-07-06 17:06:08', '2023-07-06 17:06:08'),
	(12, 9, 'Marketing Communication', 'Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan, mulai mengembangkan bisnis toko online bersama', NULL, 'images/UdTuY2wEYsbTIS2c8jCgxKpxjywiscs1OotqJRpl.jpg', '2023-07-06 17:06:27', '2023-07-06 17:06:27');

-- Dumping structure for table test_praktek_laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table test_praktek_laravel.footers
CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_footer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.footers: ~1 rows (approximately)
DELETE FROM `footers`;
INSERT INTO `footers` (`id`, `name_footer`, `img_logo`, `created_at`, `updated_at`) VALUES
	(1, 'Footer 1', 'images/A4Ae27ZlAoRydpmp2CRWwNmP7Ln73a7kiXstcUmn.png', '2023-07-06 08:15:55', '2023-07-06 08:15:55');

-- Dumping structure for table test_praktek_laravel.footer_menus
CREATE TABLE IF NOT EXISTS `footer_menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `footer_id` bigint unsigned NOT NULL,
  `text_menu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.footer_menus: ~1 rows (approximately)
DELETE FROM `footer_menus`;
INSERT INTO `footer_menus` (`id`, `footer_id`, `text_menu`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Tentang GAS', '2023-07-06 08:49:18', '2023-07-06 08:49:18'),
	(3, 1, 'Hubungi Kami', '2023-07-06 09:50:25', '2023-07-06 09:50:25'),
	(4, 1, 'Follow Us', '2023-07-06 09:51:06', '2023-07-06 09:51:50'),
	(5, 1, 'Unduh', '2023-07-06 09:59:53', '2023-07-06 09:59:53');

-- Dumping structure for table test_praktek_laravel.footer_sub_menus
CREATE TABLE IF NOT EXISTS `footer_sub_menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `footer_menu_id` bigint unsigned NOT NULL,
  `type_sub_menu` int NOT NULL,
  `text_sub_menu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_sub_menu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.footer_sub_menus: ~0 rows (approximately)
DELETE FROM `footer_sub_menus`;
INSERT INTO `footer_sub_menus` (`id`, `footer_menu_id`, `type_sub_menu`, `text_sub_menu`, `link_sub_menu`, `created_at`, `updated_at`) VALUES
	(2, 2, 1, 'Terms and Conditions', 'https://instagram.com', '2023-07-06 09:31:55', '2023-07-06 09:31:55'),
	(3, 2, 1, 'Pricay', 'https://instagram.com', '2023-07-06 09:50:13', '2023-07-06 09:50:13'),
	(4, 3, 1, 'Kritik dan Saran', 'https://instagram.com', '2023-07-06 09:50:47', '2023-07-06 09:50:47'),
	(5, 4, 1, 'Instagram', 'https://instagram.com', '2023-07-06 09:57:09', '2023-07-06 09:57:09'),
	(6, 4, 1, 'Facebook', 'https://facebook.com', '2023-07-06 09:57:19', '2023-07-06 09:57:19'),
	(7, 5, 2, 'Google Play', 'https://google.play.com', '2023-07-06 10:00:16', '2023-07-06 10:00:16');

-- Dumping structure for table test_praktek_laravel.landingpages
CREATE TABLE IF NOT EXISTS `landingpages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.landingpages: ~0 rows (approximately)
DELETE FROM `landingpages`;

-- Dumping structure for table test_praktek_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.migrations: ~12 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(96, '2014_10_12_000000_create_users_table', 1),
	(97, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(98, '2019_08_19_000000_create_failed_jobs_table', 1),
	(99, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(100, '2023_07_05_124726_create_landingpages_table', 1),
	(101, '2023_07_05_231035_create_sections_table', 1),
	(102, '2023_07_05_233032_create_cards_table', 1),
	(103, '2023_07_05_233910_create_navbars_table', 1),
	(104, '2023_07_05_233920_create_navbar_menuses_table', 1),
	(105, '2023_07_06_144309_create_footers_table', 1),
	(106, '2023_07_06_144344_create_footer_menus_table', 1),
	(107, '2023_07_06_144357_create_footer_sub_menus_table', 1);

-- Dumping structure for table test_praktek_laravel.navbars
CREATE TABLE IF NOT EXISTS `navbars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img_logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.navbars: ~0 rows (approximately)
DELETE FROM `navbars`;
INSERT INTO `navbars` (`id`, `img_logo`, `btn_text`, `btn_link`, `created_at`, `updated_at`) VALUES
	(1, 'images/EdnyHp1LUIOtktP4U0bL6vaKpJROA8BnsilNmvZS.png', 'Sign In', 'https://instagram.com', '2023-07-06 10:01:59', '2023-07-06 10:01:59');

-- Dumping structure for table test_praktek_laravel.navbar_menuses
CREATE TABLE IF NOT EXISTS `navbar_menuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `navbar_id` bigint unsigned NOT NULL,
  `menu_text` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.navbar_menuses: ~0 rows (approximately)
DELETE FROM `navbar_menuses`;
INSERT INTO `navbar_menuses` (`id`, `navbar_id`, `menu_text`, `menu_link`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Beranda', '#beranda', '2023-07-06 10:02:07', '2023-07-06 10:02:07'),
	(2, 1, 'Tentang GAS', '#tentanggas', '2023-07-06 10:04:07', '2023-07-06 10:04:07'),
	(3, 1, 'Fitur', '#fitur', '2023-07-06 10:04:19', '2023-07-06 10:04:19'),
	(4, 1, 'Daftar', '#daftar', '2023-07-06 10:05:18', '2023-07-06 10:05:18'),
	(5, 1, 'Karir', '#karir', '2023-07-06 10:05:28', '2023-07-06 10:05:28');

-- Dumping structure for table test_praktek_laravel.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table test_praktek_laravel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table test_praktek_laravel.sections
CREATE TABLE IF NOT EXISTS `sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_section` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_type` int NOT NULL,
  `link_section` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.sections: ~0 rows (approximately)
DELETE FROM `sections`;
INSERT INTO `sections` (`id`, `name_section`, `name_type`, `link_section`, `title`, `subtitle`, `btn_text`, `btn_link`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'Hero', 1, 'beranda', 'Bergabung dengan GAS', 'Aplikasi GAS akan membantumu dalam memantau stok produk tokomu dan menjangkau customer lebih luas', 'Google Play', 'https://google.play.com/', 'images/m4eZB22WCtc7elKTVq7TG4uYZcIyIB2sXjuFK5x9.png', '2023-07-06 10:07:00', '2023-07-06 10:17:13'),
	(2, 'About', 2, 'tentanggas', 'Tentang Kami', 'GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Mulai gerakkan #AyoBelanjaTokoTetangga. GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.', NULL, NULL, NULL, '2023-07-06 10:12:00', '2023-07-06 16:52:40'),
	(3, 'Popular Fitur', 4, 'fitur', 'Popular Fitur', 'Nikmati berbagai fitur menarik yang kami berikan', NULL, NULL, NULL, '2023-07-06 10:18:13', '2023-07-06 16:52:26'),
	(5, 'Kategori toko', 4, NULL, 'Kategori Toko', 'Apapun jenis tokomu dapat bergabung bersama GAS', NULL, NULL, NULL, '2023-07-06 16:54:26', '2023-07-06 16:57:42'),
	(6, 'Fitur Maps', 5, NULL, 'Fitur Maps', 'Aplikasi GAS akan membantumu dalam memantau stok produk tokomu dan menjangkau customer lebih luas', NULL, NULL, 'images/lfCWr1KJ4j89lFg0IjPD7DicEr8wC5dlXraDj8h7.jpg', '2023-07-06 16:59:54', '2023-07-06 16:59:54'),
	(7, 'Daftar toko 1', 6, 'daftar', 'Daftar Toko', 'Daftarkan Tokomu Segera', 'Google Play', 'https://google.play.com/', 'images/HGElDg92LfYU7wx0EpE7vdDExF94YYnnN7n3r2OU.png', '2023-07-06 17:01:14', '2023-07-06 17:03:08'),
	(8, 'Daftar toko 2', 7, NULL, 'Daftar Toko', 'Download Sekarang', 'Google Play', 'https://google.play.com/', 'images/jl8Q5UVLPyZdsMzKNiVAKs8wVmCJdfYnxILHwqqR.png', '2023-07-06 17:02:21', '2023-07-06 17:02:21'),
	(9, 'Karir', 8, 'karir', 'Temukan Karir Impianmu', 'Mari bergabung bersama kami. Jadilah bagian dari kami dan kembangkan bakat, ide kreatifmu dalam GAS', NULL, NULL, NULL, '2023-07-06 17:04:44', '2023-07-06 17:07:05');

-- Dumping structure for table test_praktek_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_praktek_laravel.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$9Y/gggduIE/cD1OHnvGycOsMgAMNPcVBGHjXC.wdJamI2RiiodSYG', NULL, '2023-07-06 07:59:27', '2023-07-06 07:59:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
