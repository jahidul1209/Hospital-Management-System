-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_research_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `f_name`, `l_name`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul', 'Pavel', 'jahidulku120912@gmail.com', '0123456789', 'Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti', '2020-12-23 17:35:06', '2020-12-23 17:35:06'),
(4, 'Tasnia', 'Islam', 'tasniaesha@gmail.com', '01912208773', 'I am Esha  student of pionior college..', '2020-12-29 07:29:37', '2020-12-29 07:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 11, 'Second divided from form fish beast made. Every of seas all gathered use saying you\'re, he our dominion twon Second divided from', '2020-12-29 21:49:26', '2020-12-29 21:49:26'),
(2, 2, 11, 'Second divided from form fish beast made. Every of seas all gathered use saying you\'re, he our dominion twon Second divided from', '2020-12-29 21:49:32', '2020-12-29 21:49:32'),
(3, 1, 11, 'form fish beast made. Every of seas all gathered use saying you\'re, he our dominion twon Second divided from', '2020-12-29 22:23:34', '2020-12-29 22:23:34'),
(4, 4, 6, 'Second divided from form fish beast made. Every of seas all gathered use saying you\'re, he our dominion twon Second divided from', '2021-01-01 17:36:53', '2021-01-01 17:36:53'),
(5, 7, 3, 'Second divided from form fish beast made. Every of seas all gathered use saying you\'re, he our dominion twon Second divided from', '2021-01-02 08:02:08', '2021-01-02 08:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoB` datetime DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `role`, `email`, `phone`, `DoB`, `address`, `about`, `details`, `created_at`, `updated_at`, `_token`, `_method`) VALUES
(7, 'Jahidul Pavel', 20, 'Doctor', 'jahidulku120912@gmail.com', '0123456789', '2020-12-03 00:00:00', 'Deara', 'generated migration file with', 'Get the word out to your network.', '2020-12-23 06:48:56', '2020-12-24 03:59:25', 'bnOlW9k04XyDFtwyWBAkAnVrZjcjYNFtk2FCkf4a', 'PUT'),
(8, 'Jahidul Pavel', 0, 'Admin', 'jahidul20912@gmail.com', '0123456789', NULL, '', '', 'Plan my virtual event', '2020-12-23 07:14:54', '2020-12-23 07:14:54', NULL, NULL),
(9, 'Ali Newaj Nuder', 27, 'Admin', 'newag@gmail.com', '0123456789', '2020-12-03 00:00:00', 'Deara', 'generated migration file with', 'generated migration file with generated migration file with generated migration file with generated migration file with', '2020-12-23 19:42:24', '2020-12-23 19:42:24', NULL, NULL),
(10, 'Raihan Parvez', 12, 'Patient', 'raihan@gmail.com', '0123456789', '2021-01-08 00:00:00', 'Deara', 'generated migration file with generated migration file with', 'generated migration file withgenerated migration file withgenerated migration file withgenerated migration file withgenerated migration file withgenerated', '2021-01-02 06:47:13', '2021-01-02 06:47:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `like`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 1, '2020-12-30 03:30:27', '2020-12-29 21:30:27'),
(2, 10, 2, 1, '2020-12-30 03:30:43', '2020-12-29 21:30:43'),
(3, 11, 2, 1, '2020-12-30 03:43:37', '2020-12-29 21:43:37'),
(4, 11, 6, 1, '2020-12-30 03:45:55', '2020-12-29 21:45:55'),
(5, 11, 6, 1, '2020-12-30 03:46:36', '2020-12-29 21:46:36'),
(6, 11, 6, 1, '2020-12-30 03:47:19', '2020-12-29 21:47:19'),
(7, 11, 1, 1, '2020-12-30 03:49:39', '2020-12-29 21:49:39'),
(8, 11, 1, 1, '2020-12-30 03:51:14', '2020-12-29 21:51:14'),
(9, 11, 2, 1, '2020-12-30 03:51:37', '2020-12-29 21:51:37'),
(10, 11, 2, 1, '2020-12-30 04:13:22', '2020-12-29 22:13:22'),
(11, 11, 1, 1, '2020-12-30 04:13:28', '2020-12-29 22:13:28'),
(12, 11, 2, 1, '2020-12-30 04:13:37', '2020-12-29 22:13:37'),
(13, 11, 1, 1, '2020-12-30 04:22:04', '2020-12-29 22:22:04'),
(14, 11, 2, 1, '2020-12-30 04:22:13', '2020-12-29 22:22:13'),
(15, 11, 1, 1, '2020-12-30 04:23:39', '2020-12-29 22:23:39'),
(16, 11, 1, 1, '2020-12-30 04:24:46', '2020-12-29 22:24:46'),
(17, 6, 4, 1, '2021-01-01 23:37:01', '2021-01-01 17:37:01'),
(18, 3, 7, 1, '2021-01-02 14:02:18', '2021-01-02 08:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_12_20_174049_create_sessions_table', 1),
(9, '2020_12_22_235516_create_tasks_table', 2),
(10, '2020_12_23_021158_create_employees_table', 3),
(11, '2020_12_23_231003_create_appoinments_table', 4),
(12, '2020_12_24_022053_create_postcategories_table', 5),
(13, '2020_12_24_100038_create_posts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 12, 'Admin', 'f14fc976947c736e7cfd5a28da77788480c7f3097c8aa6db10b8890c7f617b24', '[\"read\"]', NULL, '2020-12-22 07:22:58', '2020-12-22 07:22:58'),
(2, 'App\\Models\\User', 12, 'wW4fmxdWSO1GqiDRgsFz5IA6RX2Ghgxvc120blWq', '9c9fea9e723cc14d90ee2d01a41ced2c3a4c8bdbeaf890ea1ce394d9f391b5f7', '[\"read\"]', NULL, '2020-12-22 07:23:46', '2020-12-22 07:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `postcategories`
--

CREATE TABLE `postcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postcategories`
--

INSERT INTO `postcategories` (`id`, `cat_name`, `_token`, `_method`, `created_at`, `updated_at`) VALUES
(4, 'Oncology', '2EwczfpbjkKVJQavXdV6fEvINLu48HyZ06yCWWOr', 'PUT', '2020-12-23 21:29:39', '2020-12-26 07:20:35'),
(5, 'Cardiac', NULL, NULL, '2020-12-26 07:20:19', '2020-12-26 07:20:19'),
(6, 'Trauma centers', NULL, NULL, '2020-12-26 07:20:51', '2020-12-26 07:20:51'),
(7, 'Cancer', NULL, NULL, '2020-12-26 07:21:07', '2020-12-26 07:21:07'),
(8, 'Women\'s', NULL, NULL, '2020-12-26 07:21:23', '2020-12-26 07:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `role` varchar(55) NOT NULL,
  `details` varchar(255) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `_token` varchar(191) DEFAULT NULL,
  `_method` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `author`, `role`, `details`, `photo`, `updated_at`, `created_at`, `_token`, `_method`) VALUES
(3, 'Plan my virtual event', 'Trauma centers', 'Pavel', '', 'The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.', '1608967844.jpg', '2020-12-26 13:30:44', '2020-12-26 07:30:44', NULL, NULL),
(4, 'Get exhilarating free virtual events', 'Cancer', 'Jahidul islam', '', 'The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.', '1608967889.jpg', '2020-12-26 13:31:29', '2020-12-26 07:31:29', NULL, NULL),
(6, 'Get the word out', 'Trauma centers', 'Esha Islam', '', 'The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.', '1609522380.jpg', '2021-01-01 23:33:00', '2021-01-01 17:31:16', NULL, NULL),
(7, 'Get the word out to your network.', 'Oncology', 'Esha Islam', '', 'The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.', '1609523313.jpg', '2021-01-01 23:48:33', '2021-01-01 17:48:33', NULL, NULL),
(8, 'Get the word out to your network.', 'Oncology', 'Raihan Parvez', '', 'Get the word out to your network.', '1609572126.jpg', '2021-01-02 13:22:06', '2021-01-02 07:22:06', NULL, NULL),
(9, 'Get the word out to your network.', 'Cardiac', 'TASNIA ISLAM ESA', '', 'Get the word out to your network.Get the word out to your network.', '1609572252.jpg', '2021-01-02 13:24:12', '2021-01-02 07:24:12', NULL, NULL),
(10, 'Get the word out to your network.', 'Women\'s', 'TASNIA ISLAM ESA', '', 'Get the word out to your network.Get the word out to your network.', '1609572311.jpg', '2021-01-02 13:25:11', '2021-01-02 07:25:11', NULL, NULL),
(11, 'Get the word out to your network.', 'Oncology', 'Raihan Parvez', 'Nurse', 'Get the word out to your network.', '1609574162.jpg', '2021-01-02 13:56:02', '2021-01-02 07:56:02', NULL, NULL),
(12, 'Analyze data and reach out to leads via email or text.', 'Trauma centers', 'Raihan Parvez', 'Admin', 'Analyze data and reach out to leads via email or text.Analyze data and reach out to leads via email or text.Analyze data and reach out to leads via email or text.', '1609612455.jpg', '2021-01-03 00:34:15', '2021-01-02 18:34:15', NULL, NULL),
(13, 'Plan my virtual event', 'Cardiac', 'Raihan Parvez', 'Admin', 'With due respect, I am Md.Jahidul Islam Pavel as web developer.. \r\nPlease select my CV and want to get an opportunity to work with your organization', '1609612491.jpg', '2021-01-03 00:34:51', '2021-01-02 18:34:51', NULL, NULL),
(14, 'Get the word0', 'Oncology', 'REKHA KHATUN', 'Admin', 'WARNING You\'re browsing the documentation for an old version of Laravel. Consider upgrading your project to Laravel 8.x.', '1609612675.jpg', '2021-01-03 00:37:55', '2021-01-02 18:37:55', NULL, NULL),
(15, 'Get the word out to your network.', 'Oncology', 'Alamgir', 'Doctor', 'Eloquent is a great thing – you can build your query step-by-step and then call get() method. But sometimes it gets a little tricky for more complicated queries', '1609616776.jpg', '2021-01-03 01:46:16', '2021-01-02 19:46:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0PiusSm3jbRhvR9LZMO88uj57qlfPuUESVieFxRe', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiV0ZtYzlEQkxuTFR6M0U1NjJlTFJzb2VwNUJ2TDdyNzA0UFVwTEd2NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wb3N0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6InVzZXJfdHlwZSI7czo1OiJBZG1pbiI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPTWZEdTVQbmYyOU0yaDhmZm82c2x1VGYyU3lWeVhGRUNOY09EeXQ0ZWRhSWNoQ3BsUHB2bSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT01mRHU1UG5mMjlNMmg4ZmZvNnNsdVRmMlN5VnlYRkVDTmNPRHl0NGVkYUljaENwbFBwdm0iO30=', 1609654699);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jahidul\'s Team', 1, '2020-12-20 12:00:32', '2020-12-20 12:00:32'),
(2, 2, 'Jahidul\'s Team', 1, '2020-12-21 15:46:25', '2020-12-21 15:46:25'),
(3, 3, 'Jahidul\'s Team', 1, '2020-12-21 16:12:23', '2020-12-21 16:12:23'),
(4, 4, 'Jahidul\'s Team', 1, '2020-12-21 16:14:26', '2020-12-21 16:14:26'),
(5, 5, 'Jahidul\'s Team', 1, '2020-12-21 17:08:03', '2020-12-21 17:08:03'),
(6, 6, 'Doc\'s Team', 1, '2020-12-21 19:26:39', '2020-12-21 19:26:39'),
(7, 7, 'Jahidul\'s Team', 1, '2020-12-21 19:49:32', '2020-12-21 19:49:32'),
(8, 8, 'Dr.Pavel\'s Team', 1, '2020-12-21 19:51:11', '2020-12-21 19:51:11'),
(9, 9, 'Esha\'s Team', 1, '2020-12-21 19:59:17', '2020-12-21 19:59:17'),
(10, 10, 'Jahidul\'s Team', 1, '2020-12-22 05:40:09', '2020-12-22 05:40:09'),
(11, 11, 'Farjana\'s Team', 1, '2020-12-22 06:35:29', '2020-12-22 06:35:29'),
(12, 12, 'Ar.\'s Team', 1, '2020-12-22 07:22:07', '2020-12-22 07:22:07'),
(13, 13, 'Raihan\'s Team', 1, '2021-01-01 14:46:31', '2021-01-01 14:46:31'),
(14, 14, 'Ali\'s Team', 1, '2021-01-01 14:51:24', '2021-01-01 14:51:24'),
(15, 15, 'Pavel\'s Team', 1, '2021-01-01 14:55:53', '2021-01-01 14:55:53'),
(16, 1, 'Jahidul\'s Team', 1, '2021-01-01 15:41:23', '2021-01-01 15:41:23'),
(17, 2, 'Jahidul\'s Team', 1, '2021-01-01 15:44:04', '2021-01-01 15:44:04'),
(18, 3, 'Raihan\'s Team', 1, '2021-01-01 16:01:38', '2021-01-01 16:01:38'),
(19, 4, 'TASNIA\'s Team', 1, '2021-01-01 16:11:04', '2021-01-01 16:11:04'),
(20, 5, 'REKHA\'s Team', 1, '2021-01-01 16:13:12', '2021-01-01 16:13:12'),
(21, 6, 'urmi\'s Team', 1, '2021-01-01 16:19:47', '2021-01-01 16:19:47'),
(22, 7, 'timi\'s Team', 1, '2021-01-01 16:23:04', '2021-01-01 16:23:04'),
(23, 8, 'Jahidul\'s Team', 1, '2021-01-01 16:26:36', '2021-01-01 16:26:36'),
(24, 9, 'Jahidul\'s Team', 1, '2021-01-02 17:15:53', '2021-01-02 17:15:53'),
(25, 10, 'Pavel\'s Team', 1, '2021-01-02 17:22:35', '2021-01-02 17:22:35'),
(26, 11, 'Jahidul\'s Team', 1, '2021-01-02 18:46:51', '2021-01-02 18:46:51'),
(27, 12, 'Jahidul\'s Team', 1, '2021-01-02 19:24:33', '2021-01-02 19:24:33'),
(28, 1, 'Jahidul\'s Team', 1, '2021-01-02 19:28:57', '2021-01-02 19:28:57'),
(29, 2, 'Alamgir\'s Team', 1, '2021-01-02 19:29:48', '2021-01-02 19:29:48'),
(30, 3, 'Farjana\'s Team', 1, '2021-01-02 19:45:03', '2021-01-02 19:45:03'),
(31, 4, 'Raihan\'s Team', 1, '2021-01-03 06:01:59', '2021-01-03 06:01:59'),
(32, 5, 'Mukul\'s Team', 1, '2021-01-03 06:05:57', '2021-01-03 06:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul Pavel', 'jahidulku120912@gmail.com', NULL, '$2y$10$OMfDu5Pnf29M2h8ffo6sluTf2SyVyXFECNcODyt4edaIchCplPpvm', 'Admin', NULL, NULL, NULL, 1, NULL, '2021-01-02 19:28:57', '2021-01-03 06:01:06'),
(2, 'Alamgir', 'alamgir@gmail.com', NULL, '$2y$10$0GtE3cPOemiWUrv8mbA33OoOYqlWu.qxMuUQekShZOeEh71/RxSQC', 'Doctor', NULL, NULL, NULL, 2, 'profile-photos/qQF6tene9HUAbTt1WICPyZCzrjAV7Fr8HO6pG6Vq.jpg', '2021-01-02 19:29:48', '2021-01-02 21:22:27'),
(4, 'Raihan Parvez', 'raihan@gmail.com', NULL, '$2y$10$zZt66E3XKEBj.0Uyka1RGeNo1.HOKK.mgBYhAwbRE22LyLBiESU9u', 'Admin', NULL, NULL, NULL, 4, NULL, '2021-01-03 06:01:59', '2021-01-03 06:02:00'),
(5, 'Mukul', 'mukul@gmail.com', NULL, '$2y$10$NcBYSCrbQ3ID7OzsR.fEhOxFxMGnzwaJw0w228Z28cbLMOjA4gOsK', 'Patient', NULL, NULL, NULL, 5, NULL, '2021-01-03 06:05:57', '2021-01-03 06:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `typename` varchar(55) NOT NULL,
  `_token` varchar(191) DEFAULT NULL,
  `_method` varchar(191) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `typename`, `_token`, `_method`, `created_at`, `updated_at`) VALUES
(1, 'Nurse', '1jxfbAL4p3uqh7fcjKXyZky9XdO4cfoJCAqeGwol', 'PUT', '2021-01-02 12:04:34', '2021-01-02 06:06:38'),
(2, 'Patient', NULL, NULL, '2021-01-02 12:16:16', '2021-01-02 06:16:16'),
(3, 'Doctor', NULL, NULL, '2021-01-02 12:16:22', '2021-01-02 06:16:22'),
(4, 'Admin', NULL, NULL, '2021-01-02 12:16:37', '2021-01-02 06:16:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appoinments_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `postcategories`
--
ALTER TABLE `postcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postcategories`
--
ALTER TABLE `postcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
