-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 09:34 AM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `judul`, `slug_judul`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(3, 13, 'Apple Akan Akuisisi Bisnis Modem Intel 1 Miliar Dolar', 'apple-akan-akuisisi-bisnis-modem-intel-1-miliar-dolar', '<p>Apple akan segera mengakuisisi sebagian besar bisnis modem smartphone Intel, dengan transaksi senilai 1 miliar dolar AS atau sekira Rp14,01 triliun yang akan diselesaikan pada kuartal keempat 2019. Perjanjian jual beli dengan Intel yang telah ditandatangani pada 25 Juli menjadi momentum pelimpahan sekitar 2.200 karyawan Intel kepada Apple, termasuk properti intelektual, peralatan, dan sewa. Melalui penggabungan paten yang diperoleh untuk teknologi nirkabel dan masa depan dengan portofolio yang ada, Apple akan memiliki lebih dari 17.000 paten teknologi nirkabel, mulai dari protokol untuk standard seluler hingga arsitektur modem dan operasi modem. Intel akan mempertahankan kemampuan untuk mengembangkan modem untuk aplikasi non-smartphone, seperti komputer personal, perangkat internet-of-things dan kendaraan otonom.<br></p>', '1648681742.jpg', '2022-03-30 15:09:02', '2022-03-30 15:09:02'),
(4, 5, 'Quis iste rerum qui tempora ea hic praesentium.', 'quis-iste-rerum-qui-tempora-ea-hic-praesentium', 'Occaecati accusantium illum aut est sed. Et est eum illo expedita qui doloribus quam. Modi officia praesentium ipsum commodi consequatur ipsum minima.', 'default.jpg', '2022-03-30 17:33:26', '2022-03-30 17:33:26'),
(5, 1, 'Eaque sint non quis nisi.', 'eaque-sint-non-quis-nisi', 'Impedit facilis dicta commodi illum provident assumenda sit. Accusantium et eius reprehenderit. Rem qui similique voluptatem aliquid eos quae.', 'default.jpg', '2022-03-30 17:33:26', '2022-03-30 17:33:26'),
(6, 5, 'Deleniti cumque qui cupiditate quam.', 'deleniti-cumque-qui-cupiditate-quam', 'Consequatur eius optio quia delectus reiciendis quia temporibus. Error animi a consequatur deleniti maxime adipisci culpa. Sed laborum omnis molestiae aliquam. Voluptas quo quis architecto voluptatum sunt velit qui.', 'default.jpg', '2022-03-30 17:33:26', '2022-03-30 17:33:26'),
(7, 1, 'Harum commodi voluptatum eos sit nobis distinctio.', 'harum-commodi-voluptatum-eos-sit-nobis-distinctio', 'Rerum molestias nihil et libero tenetur delectus voluptatum. Earum enim consequuntur eos autem. Commodi ut earum dolorem. Vitae accusamus aut ea. Eum consequuntur exercitationem atque consequatur sint.', 'default.jpg', '2022-03-30 17:33:26', '2022-03-30 17:33:26'),
(8, 9, 'Aliquam accusamus repellat eius dolorum delectus numquam.', 'aliquam-accusamus-repellat-eius-dolorum-delectus-numquam', 'Aut sunt voluptas ex. Commodi praesentium recusandae qui ea eum. Corporis animi consequatur in et aperiam fugiat eligendi.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27'),
(9, 2, 'Rerum omnis nemo consequatur totam.', 'rerum-omnis-nemo-consequatur-totam', 'Fuga at voluptas minima nihil ipsam consequuntur. Qui dignissimos voluptatem quia repudiandae quas commodi. Eveniet id tempora est et illo dolorem. Doloremque fugiat adipisci qui necessitatibus sed ut sapiente earum. Quas in qui recusandae aut nihil nemo occaecati.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27'),
(10, 2, 'Aut possimus necessitatibus debitis qui.', 'aut-possimus-necessitatibus-debitis-qui', 'Dolorem quisquam nemo sint libero libero libero. Distinctio nihil culpa et aut ut mollitia. Mollitia eos adipisci nam sit dolor incidunt iure. Aut sed repellat reprehenderit nam ducimus autem incidunt ratione.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27'),
(11, 8, 'Assumenda et eius modi nemo aperiam in vel.', 'assumenda-et-eius-modi-nemo-aperiam-in-vel', 'Ratione ab quae neque qui cumque nulla sint. Quibusdam rerum recusandae praesentium sint soluta quia et. Qui minus et dolor culpa et.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27'),
(12, 13, 'Cum est optio modi eius.', 'cum-est-optio-modi-eius', 'Velit facere maiores vel ea possimus architecto eos et. Consectetur ut ut mollitia debitis nihil. Culpa alias odit ut eum distinctio porro. Hic dignissimos inventore quisquam voluptas mollitia.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27'),
(13, 9, 'Harum hic architecto quae eum adipisci.', 'harum-hic-architecto-quae-eum-adipisci', 'Consectetur eveniet suscipit omnis ab totam. Voluptas esse excepturi quia et. Maiores nulla fugiat consequatur ad ut voluptatem quam. Magnam inventore eius cum non odio molestiae beatae aut.', 'default.jpg', '2022-03-30 17:33:27', '2022-03-30 17:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(8, '2016_06_01_000004_create_oauth_clients_table', 2),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(10, '2022_03_30_125055_create_api_password_reset_token', 3),
(11, '2022_03_30_134138_create_reset_password_table', 4),
(12, '2022_03_30_141032_create_articles_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('32f4094e28ad2f97118916eb940be62acb7febb6b28438333173c7bf4af8b980b8591af9184fd802', 13, 1, 'bahaso', '[]', 0, '2022-03-30 04:28:28', '2022-03-30 04:28:28', '2023-03-30 12:28:28'),
('338d105ffa8720ac85c0cd9abfc7d1afb7aa7b1767dbf5fa36240721e35d4908f15bab28af69fba1', 1, 1, 'bahaso', '[]', 0, '2022-03-30 04:03:38', '2022-03-30 04:03:38', '2023-03-30 12:03:38'),
('3de1f3978524d7607fd7fceb254ab7288acd7e454fa87c568e520efd9e894f9c4044551b3672e796', 1, 1, 'bahaso', '[]', 0, '2022-03-30 13:50:25', '2022-03-30 13:50:25', '2023-03-30 21:50:25'),
('547900630535bfa53fa0b38982b63da262443a77d3f8db4752af5195a7bef935d76fab2a81842f75', 1, 1, 'bahaso', '[]', 0, '2022-03-30 04:10:38', '2022-03-30 04:10:38', '2023-03-30 12:10:38'),
('82e80ccfd6edaeb698edc633cf9e95845b2ab8b539eaf0a11182ad7590c05631b23cac7590292d1b', 12, 1, 'bahaso', '[]', 0, '2022-03-30 04:27:51', '2022-03-30 04:27:51', '2023-03-30 12:27:51'),
('b025782a8bbb1953908f5362944cced7573030833196cbcf01c29a6fafde24e191c619558f986182', 11, 1, 'bahaso', '[]', 0, '2022-03-30 04:18:21', '2022-03-30 04:18:21', '2023-03-30 12:18:21'),
('b4f1fe4bffc154ee7f3242b768911277242628f51f6ecdb027b2f0ad63d5aa90fafcd7c5c3045f0b', 1, 1, 'bahaso', '[]', 0, '2022-03-30 04:20:55', '2022-03-30 04:20:55', '2023-03-30 12:20:55'),
('ca1344aeeedfdeff83c0b173aeec5b13345c9d2bfe8e507878e231450969b89d40c1cd6376409264', 1, 1, 'bahaso', '[]', 0, '2022-03-30 04:04:09', '2022-03-30 04:04:09', '2023-03-30 12:04:09'),
('edbf628ce9c1f78d9b56db7b29ffd2a3201cd4b80543385a106291b1dcb06196627775de6af64f20', 1, 1, 'bahaso', '[]', 0, '2022-03-30 04:12:23', '2022-03-30 04:12:23', '2023-03-30 12:12:23'),
('f5bce7285c4635dc0df79e88466835dedd9e1d52efe0aedb9e07c6a8dc298a1ff125ef7e1651c3eb', 1, 1, 'bahaso', '[]', 0, '2022-03-30 03:55:23', '2022-03-30 03:55:23', '2023-03-30 11:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'O5YfCWGWm0QDlnoDLxbUaUbGuyvdIxIwf3R1wOTq', NULL, 'http://localhost', 1, 0, 0, '2022-03-30 03:04:39', '2022-03-30 03:04:39'),
(2, NULL, 'Laravel Password Grant Client', 'XzbwD5UVbp4qj5hEGrv0ycNWWdgMhq0SoQJBjVSg', 'users', 'http://localhost', 0, 1, 0, '2022-03-30 03:04:39', '2022-03-30 03:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-30 03:04:39', '2022-03-30 03:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fikar@gmail.com', '$2y$10$.boRmuIQS1gzhTLHZ97LFOQ6OTdzsbQFoAflpLxicmgwCkwI6lpuG', '2022-03-30 05:37:20'),
('fikar@gmail.com', 'AJ6y9rfgfgSYIBIVREPCubpo7PH8wPdTMnsEhOzbjmQxlqZ4vEysHocYEkoFkpj8', '2022-03-30 06:04:45'),
('fikar@gmail.com', 'J29HRq9mL0vqG5y7ATiah9bnYjDiPUCqRy8RSPsttVJ5vE10cUXDLOzE2SSmRGbr', '2022-03-30 06:07:07'),
('syawal03adiyaksa@gmail.com', 'wOQCBOidJCBiSw6cW6xQxYkyrW7BOXPIF9c4s0zQsklVE1aYpJLvH1TCNaYLmqyC', '2022-03-30 06:08:01'),
('syawal03adiyaksa@gmail.com', 'ICOQTtD8E7SP4ulpiy3QcqoBBFwk4DiiWDUmWblYZ1RXKst5wYoZQ0N5R3AmnKrt', '2022-03-30 06:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('visitor','author') COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `avatar`, `verification_code`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Lexie Sanford MD', 'wilfredo98@example.org', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'm50ob6BZMW', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(2, 'Forest Stehr II', 'keeley.smitham@example.com', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'd9YNNxs8q4', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(3, 'Margaretta Deckow', 'jacey.torp@example.net', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'ZQKr7KtFmv', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(4, 'Columbus Williamson', 'shills@example.org', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'visitor', 'default.png', NULL, 0, 'JYvyHiYFFY', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(5, 'Gennaro Becker', 'mertz.harold@example.com', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'ocA1BsYqCl', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(6, 'Alba Runolfsson', 'jarrod58@example.net', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'visitor', 'default.png', NULL, 0, 'onsRQ563mi', '2022-03-30 03:32:51', '2022-03-30 03:32:51'),
(7, 'Aurelio Marvin', 'yost.mariane@example.org', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'visitor', 'default.png', NULL, 0, 'fky3SywyoB', '2022-03-30 03:32:52', '2022-03-30 03:32:52'),
(8, 'Mrs. Lucinda Crist', 'allene31@example.com', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'IPhckAEHmk', '2022-03-30 03:32:52', '2022-03-30 03:32:52'),
(9, 'Donato Zemlak Sr.', 'madilyn96@example.org', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'author', 'default.png', NULL, 0, 'ByPtA3ahds', '2022-03-30 03:32:52', '2022-03-30 03:32:52'),
(10, 'Miss Nelle Yundt', 'rschuppe@example.net', '2022-03-30 03:32:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'visitor', 'default.png', NULL, 0, 'v0Wp9dlMJh', '2022-03-30 03:32:52', '2022-03-30 03:32:52'),
(13, 'fikar', 'fikar@gmail.com', NULL, '$2y$10$x5R0b448gqb1OsS1E6QKq.ZG83B8WQVzInUk3RGBmEHEY.VMnslmi', 'author', 'default.png', NULL, 0, NULL, '2022-03-30 04:28:28', '2022-03-30 04:28:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD KEY `reset_password_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
