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


-- Dumping database structure for db_nonton_film
CREATE DATABASE IF NOT EXISTS `db_nonton_film` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_nonton_film`;

-- Dumping structure for table db_nonton_film.failed_jobs
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

-- Dumping data for table db_nonton_film.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_nonton_film.film_terbarus
CREATE TABLE IF NOT EXISTS `film_terbarus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul_film` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.film_terbarus: ~6 rows (approximately)
INSERT INTO `film_terbarus` (`id`, `judul_film`, `id_kategori`, `url_video`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Nonton Film By Aji firlana', '1', 'film1.mp4', 'Nonton-Film-By-Aji-firlana', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(2, 'film 2', '1', 'film2.mp4', 'film-2', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(3, 'rambo first blood 1982', '2', 'rambo-first-blood-1982.mp4', 'rambo-first-blood-1982', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(4, 'NANO - Sampai Ku Mati (Official Music Video)', '3', 'NANO - Sampai Ku Mati (Official Music Video).mp4', 'NANO-Sampai-Ku-Mati-(Official-Music-Video)', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(5, 'Atletico Madrid Vs Inter Milan', '4', 'https://www.youtube.com/embed/3V_XItaEDZU', 'Atletico-Madrid-Vs-Inter-Milan', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(6, 'cara cepat install laravel', '1', '1724668859.mkv', 'tutorial', '2024-08-26 03:41:00', '2024-08-26 03:41:00');

-- Dumping structure for table db_nonton_film.kategoris
CREATE TABLE IF NOT EXISTS `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.kategoris: ~4 rows (approximately)
INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	(1, 'tutorial', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(2, 'movie', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(3, 'musik', '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(4, 'bola', '2024-04-29 23:01:04', '2024-04-29 23:01:04');

-- Dumping structure for table db_nonton_film.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_02_28_135827_create_film_terbarus_table', 1),
	(6, '2024_02_28_140201_create_setting_webs_table', 1),
	(7, '2024_03_08_115253_create_kategoris_table', 1);

-- Dumping structure for table db_nonton_film.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_nonton_film.personal_access_tokens
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

-- Dumping data for table db_nonton_film.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_nonton_film.setting_webs
CREATE TABLE IF NOT EXISTS `setting_webs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.setting_webs: ~0 rows (approximately)
INSERT INTO `setting_webs` (`id`, `judul_web`, `telepon`, `url_twitter`, `url_facebook`, `url_instagram`, `email`, `alamat`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Nonton Film By Aji firlana', '089531941653', '', 'https://web.facebook.com/profile.php?id=100064146004445', 'https://www.youtube.com/@AjiFirlana/playlists', 'firlana89@gmail.com', 'Muara Tembesi', 'Nonton Film terbaru cuma ada di website ini', '2024-04-29 23:01:04', '2024-04-29 23:01:04');

-- Dumping structure for table db_nonton_film.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_nonton_film.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ajifirlana', 'Ajifirlana', 'firlana89@gmail.com', '$2y$10$RBV0ifHUk7PqdnGiYVF0UuLDfRXpR3EFjAcPHVUujf1K3GJwQYiRa', NULL, '2024-04-29 23:01:04', '2024-04-29 23:01:04'),
	(2, 'user', 'user', 'user@gmail.com', '$2y$10$gqOppJ.NnYieICiSWUhB8eedHtSSaOil8i02I6uLq/Yl4kFkTJuwm', NULL, '2024-04-29 23:01:04', '2024-04-29 23:01:04');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;