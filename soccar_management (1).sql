-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 10:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccar_management`
--

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
(1, '2019_07_07_182904_create_tbl_tournaments_table', 1),
(2, '2019_07_08_020245_create_tbl_admins_table', 1),
(3, '2019_07_08_023448_create_tbl_teams_table', 2),
(4, '2019_07_08_174857_rename_admin_email_in_tbl_admins_table', 3),
(5, '2019_07_08_175658_rename_admin_email_in_tbl_admins_table', 4),
(6, '2019_07_08_180035_rename_admin_passowrd_in_tbl_admins_table', 5),
(7, '2019_07_08_180812_create_tbl_admins_table', 6),
(8, '2019_07_08_183216_create_tbl_teams_table', 7),
(9, '2019_07_08_185713_create_tbl_passes_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phn_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `email`, `password`, `admin_name`, `admin_dept_name`, `admin_position`, `admin_phn_number`, `created_at`, `updated_at`) VALUES
(1, 'x@gmail.com', '123456789', 'x', 'cse', 'v', '01521109596', '2019-07-08 12:20:15', '2019-07-08 12:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passes`
--

CREATE TABLE `tbl_passes` (
  `All email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `All password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `even_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_captain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_players` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`id`, `even_code`, `team_name`, `team_reg`, `email`, `password`, `team_captain`, `team_players`, `created_at`, `updated_at`) VALUES
(1, '12', 'team xp', '12345', 'xp@gmail.com', '12345678', 'p', '10', '2019-07-08 12:33:53', '2019-07-08 12:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tournaments`
--

CREATE TABLE `tbl_tournaments` (
  `tournaments_id` int(10) UNSIGNED NOT NULL,
  `clube_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clube_pic` blob NOT NULL,
  `post_date` date NOT NULL,
  `tournaments_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_start_date` date NOT NULL,
  `motto_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_pic` blob NOT NULL,
  `tournaments_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tournaments`
--

INSERT INTO `tbl_tournaments` (`tournaments_id`, `clube_name`, `clube_pic`, `post_date`, `tournaments_title`, `match_start_date`, `motto_line`, `description`, `post_pic`, `tournaments_code`, `created_at`, `updated_at`) VALUES
(1, 'fb mobin', 0x4265636b73315f355f33303239303732622e6a7067, '2019-07-09', 'bappy fucker', '2019-08-01', 'fuck masum', 'bappy nazia re chude', 0x646f776e6c6f6164202831292e6a7067, 123, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tournaments`
--
ALTER TABLE `tbl_tournaments`
  ADD PRIMARY KEY (`tournaments_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tournaments`
--
ALTER TABLE `tbl_tournaments`
  MODIFY `tournaments_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
