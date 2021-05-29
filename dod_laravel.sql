-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 07:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dod_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` smallint(5) UNSIGNED NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `age`, `gender`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Joda', 25, 'male', '0597101386', 'joda.ahmad.96@gmail.com', '<p>fdsghjklfdghjkljasdsfgh</p>', '2021-02-22 17:11:21', '2021-02-22 18:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `description`, `name`, `address`, `created_at`, `updated_at`) VALUES
(4, 'clients/XpNr9gHT7owidcHJfLWjjuc69r8KNo43Hor5UjU3.png', '<div class=\"col-sm-6 col-xs-12 col-service\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 570px; margin-bottom: 20px; font-family: Cairo, sans-serif; font-size: 14px;\">\r\n<div class=\"col-sm-6 col-xs-12\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 270px;\">\r\n<h6 style=\"text-align:justify\">Text messaging, or texting, is the act of composing and sending electronic messages.text messaging, or texting, is the act of composing and sending electronic messages.Text messaging, or texting, is the act of composing and sending electronic messages.</h6>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12 col-service\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 570px; margin-bottom: 20px; font-family: Cairo, sans-serif; font-size: 14px;\">&nbsp;</div>', 'Ahmad Joda', 'Palestine - Rafah', '2021-02-25 08:06:49', '2021-02-25 08:06:49'),
(5, 'clients/IIiqqIL0HHsGrosE8a3teVSwBNEDrrI3QXxVsNlA.png', '<div class=\"col-sm-6 col-xs-12 col-service\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 570px; margin-bottom: 20px; font-family: Cairo, sans-serif; font-size: 14px;\">\r\n<div class=\"col-sm-6 col-xs-12\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 270px;\">\r\n<h6 style=\"text-align:justify\">Text messaging, or texting, is the act of composing and sending electronic messages.text messaging, or texting, is the act of composing and sending electronic messages.Text messaging, or texting, is the act of composing and sending electronic messages.</h6>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12 col-service\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 570px; margin-bottom: 20px; font-family: Cairo, sans-serif; font-size: 14px;\">&nbsp;</div>', 'Nour Joda', 'Palestine - Gaza', '2021-02-25 08:07:18', '2021-02-25 08:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Joda', 'joda.ahmad.96@gmail.com', '0597101386', '<p>Nour Jouda</p>', '2021-02-22 16:46:13', '2021-02-22 17:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(13, 'Dr. Ahmad Jouda', '<p>A highly professional backend developer&nbsp; with exceptional skills data base buiding , php native , laravel framwork , plugin and debugging systems to give the user and the admin the best util in developing the web and various SEO sites and creating user interfaces, has methods for solving huge problems and appreciates his time. My educational background has allowed me to thrive in this profession, and my training in this department has made me master this department.</p>', 'doctors/tlRPcUdhNPyJ1YgMwkRXpuTLjxn25bYyNWuPxMMc.png', '2021-02-25 07:55:33', '2021-02-25 07:55:33'),
(14, 'Dr. Alaa Jouda', '<p>A highly professional backend developer&nbsp; with exceptional skills data base buiding , php native , laravel framwork , plugin and debugging systems to give the user and the admin the best util in developing the web and various SEO sites and creating user interfaces, has methods for solving huge problems and appreciates his time. My educational background has allowed me to thrive in this profession, and my training in this department has made me master this department.</p>', 'doctors/OHo6YyWp1xBuKR8CRrE7w1nXSBHipG2UvfIRECFS.png', '2021-02-25 07:58:24', '2021-02-25 07:58:24'),
(15, 'Dr. Nour Jouda', '<p>A highly professional backend developer&nbsp; with exceptional skills data base buiding , php native , laravel framwork , plugin and debugging systems to give the user and the admin the best util in developing the web and various SEO sites and creating user interfaces, has methods for solving huge problems and appreciates his time. My educational background has allowed me to thrive in this profession, and my training in this department has made me master this department.</p>', 'doctors/ZxrGTs6plVbOUfs15zjwd7wEcMRTG1rGZl5L663W.png', '2021-02-25 07:58:38', '2021-02-25 07:58:38');

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
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'gallaries/QOrCCjQgFCcWbODLcJRLgqLkI2ywrY4k6WfSs3qd.png', '2021-02-25 08:08:35', '2021-02-25 08:08:35'),
(4, 'gallaries/M78dNtVdKRfbwU3pGQtzNjOh1K1QxMLCT20Qpn3X.png', '2021-02-25 08:08:41', '2021-02-25 08:08:41'),
(5, 'gallaries/yeIQHD4sM1xTiITyQi5Wzi346gDst45c83lsVW5d.png', '2021-02-25 08:08:48', '2021-02-25 08:08:48');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_20_191249_create_sessions_table', 1),
(7, '2021_02_20_205143_create_sliders_table', 2),
(8, '2021_02_21_175207_create_doctors_table', 3),
(10, '2021_02_21_203755_create_services_table', 4),
(11, '2021_02_22_091912_create_clients_table', 5),
(13, '2021_02_22_181800_create-settings-table', 6),
(14, '2021_02_22_182312_create_contacts_table', 7),
(15, '2021_02_22_185651_create_appointments_table', 8),
(16, '2021_02_22_191534_create_gallaries_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Service 1', '<p><span style=\"color:rgb(156, 151, 151); font-family:cairo,sans-serif; font-size:12px\">Text messaging, or texting, is the act of composing and sending electronic messages.text messaging, or texting, is the act of composing and sending electronic messages.Text messaging, or texting, is the act of composing and sending electronic messages.</span></p>', 'services/bEsSSZBUgywvLorUpAjCTO9dO35QRO1LQ2nlLh6p.png', '2021-02-25 08:02:27', '2021-02-25 08:04:18'),
(10, 'Service 2', '<p><span style=\"color:rgb(156, 151, 151); font-family:cairo,sans-serif; font-size:12px\">Text messaging, or texting, is the act of composing and sending electronic messages.text messaging, or texting, is the act of composing and sending electronic messages.Text messaging, or texting, is the act of composing and sending electronic messages.</span></p>', 'services/LOjYqVDo5BD2mR6UCzrBs1eukiowkmYAAH77tEtf.png', '2021-02-25 08:02:42', '2021-02-25 08:04:35'),
(11, 'Service 3', '<p><span style=\"color:rgb(156, 151, 151); font-family:cairo,sans-serif; font-size:12px\">Text messaging, or texting, is the act of composing and sending electronic messages.text messaging, or texting, is the act of composing and sending electronic messages.Text messaging, or texting, is the act of composing and sending electronic messages.</span></p>', 'services/LNWA0oExPuhcvPixJIgxVFItH2VHBSnyxQyMdxu1.png', '2021-02-25 08:02:53', '2021-02-25 08:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('2eMNltxOSI6lkQpcWOBmVO5i2s5ypyUmBJeLmsZk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRENJdDhxZ2JpYUdRdElwbUlXcDZ1MlZKUHh3WGhvZjBLYlRQT2NGUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9hcHBvaW50bWVudHMiO319', 1614247784),
('2k486x0u4PkLn2lLakpSjhfoHrg7m5PgnhyehcqX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiajVLQXVKeksxSk9DbUxJM29lV2lvQ2RoTE5IYUhiTDFUS2R6T1lydiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZDdYT1djNXJLR3J2OHMyb3llOGc1T1FFb3cubW04T2xlNmJIZ1locEhobjlmMTF3VU1ta0MiO30=', 1614623438),
('6BCKYH4McPBNn4dDvdL7xpa6zO3JZgqsUedGaPkF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUDVzSzRYWk9iWTVSRGhTRkhvT3FuVWZ3MnhMcmJpQkpBZlVRT2NKWSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vdXNlcnMvMS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGQ3WE9XYzVyS0dydjhzMm95ZThnNU9RRW93Lm1tOE9sZTZiSGdZaHBIaG45ZjExd1VNbWtDIjt9', 1614452944),
('dKjWXuyI1RT05RZ2ZvgpA2X54P0OCOJP0ZVcGnwu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSzVvRmJ4V0g0bTBZUzFRTWZncmQzVUc0WHRkS2RRcWJUWXpCd0RVRyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvdXNlci9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGQ3WE9XYzVyS0dydjhzMm95ZThnNU9RRW93Lm1tOE9sZTZiSGdZaHBIaG45ZjExd1VNbWtDIjt9', 1614503219),
('gGbE6436KfWY3t80mLXEYQpA1EzriUiMb0w79Dtz', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYVlZY2x2dk5Td1M4R0JKeVphNFlSRE01ZXJuM3VpYVBGYVpZTEl0SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZDdYT1djNXJLR3J2OHMyb3llOGc1T1FFb3cubW04T2xlNmJIZ1locEhobjlmMTF3VU1ta0MiO30=', 1614464963),
('GjjNCGtGSw1U4L0A0nn1VyXzfYoR8VDToCpLHgCd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHZoczRjU3lQQ3VmS3lMVGhTRXo4Sjc5RjVPOFlRYzZ2MTd1aUlpZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1614411519),
('VxQ6siUIbQWLQxxYJDIrKoYq1Aoo5aCSx0Tgls7M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibUh4a3VZSWQ1bmh3ZXJPSjdxbkFyVjJxTTI2NVBXRmFNYTNvZmR4ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1614419528),
('WpjoawQaD39F9RzoQT486vhc3DWGKybZMk0WdcYR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM1FsQmdQd3BhSk5ZYzk0MlFxajBRQWQ1QmF2R2k3R1U1Q082TWRsbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9zZXR0aW5ncy8xL2VkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZDdYT1djNXJLR3J2OHMyb3llOGc1T1FFb3cubW04T2xlNmJIZ1locEhobjlmMTF3VU1ta0MiO30=', 1614419659),
('Zvrlhudnh9gYXjvnkq1NlsJIOJ599TkzCbqg86GW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXMyRFlYVEJDcEV5TU5hYUpoUG1JOE5LcDhYcTlMWjNKbmt5b2tscyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb3Jnb3QtcGFzc3dvcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1614271306);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `background` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `postal_code`, `address`, `phone`, `email`, `first_time`, `last_time`, `logo`, `background`, `created_at`, `updated_at`) VALUES
(1, '85555555', 'Palestine - Gaza', '0597101386', 'joda.ahmad.96@gmail.com', '20:24', '20:27', 'settings/J9OCKj9rB3S2SDKByFkkjRpjOHNkHipHuDwU7BEt.png', 'settings/TAyxG8c5CXkJjmCVrv3S62CvGFuNNaZjCBwkIJpA.png', NULL, '2021-03-01 15:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(27, 'sliders/8D0A0lytoTqnigGgp1f0rhOlHekeUtLySbX0hGRJ.png', '2021-02-25 07:46:48', '2021-02-25 07:46:48'),
(28, 'sliders/RfzmcGNEtztLgIkoXIsGMLm5k4SM1YuxsUs9JH6b.png', '2021-02-25 07:46:56', '2021-02-25 07:46:56'),
(29, 'sliders/8iNNwNQM5jzu3Y8kchZ9LWNOwDgT3i1QJ3Hb5GmD.png', '2021-02-25 07:47:04', '2021-02-25 07:47:04'),
(30, 'sliders/iYJQEthp0w15qYMFKUZ5hOUlJLGR9Fy6t7KSPr4L.png', '2021-02-25 07:47:13', '2021-02-25 07:47:13');

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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Joda', 'joda.ahmad.96@gmail.com', NULL, '$2y$10$d7XOWc5rKGrv8s2oye8g5OQEow.mm8Ole6bHgYhpHhn9f11wUMmkC', NULL, NULL, NULL, NULL, NULL, '2021-02-20 20:03:45', '2021-02-20 20:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
