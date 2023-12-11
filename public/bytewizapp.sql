-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytewizapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reportedby` bigint(20) UNSIGNED NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_contactno` varchar(255) NOT NULL,
  `c_email` varchar(255) DEFAULT NULL,
  `c_name_accused` varchar(255) NOT NULL,
  `c_position` varchar(255) NOT NULL,
  `c_department` varchar(255) NOT NULL,
  `offense` text NOT NULL,
  `narration` text NOT NULL,
  `date_of_incident` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `reportedby`, `c_fname`, `c_lname`, `c_contactno`, `c_email`, `c_name_accused`, `c_position`, `c_department`, `offense`, `narration`, `date_of_incident`, `status`, `created_at`, `updated_at`) VALUES
(11, 4, 'abdul clint', 'joshua', '09235436412', NULL, 'Samuel Jinayon', 'Clerk', 'IT', 'Aggressive', 'Sigaan kog mata', '2023-12-11', 'pending', '2023-12-10 18:28:48', '2023-12-10 19:01:16'),
(12, 4, 'Mohammad Jibreel', 'Oguis', '09435672341', NULL, 'Early Bouquet', 'Desk 3', 'Finance', 'Aggressive', 'sakit kaayo mustorya', '2023-12-08', 'pending', '2023-12-10 19:13:45', '2023-12-10 19:13:45'),
(13, 15, 'Allan Raymark', 'Metuda', '09351360948', 'allanraymartparaiso@g.msuiit.edu.ph', 'Adam Oguis', 'Security Gord', 'SID', 'Agressive Personnel', 'He tried to punch me', '2023-12-01', 'pending', '2023-12-10 20:14:58', '2023-12-10 20:14:58'),
(14, 4, 'raymart', 'paradise', '09363728751', NULL, 'accused 1', 'pos accused', 'department 1', 'Intentional Slow Sevice', 'langay kaayo', '2023-12-11', 'pending', '2023-12-10 20:15:50', '2023-12-10 20:15:50'),
(15, 16, 'Jyza Mae', 'Acuram', '09068258524', NULL, 'Ferdinand Marcos Jr.', 'President', 'Office of the President', 'Intentional Feeding', 'Always feeding the enemy with gold and EXP', '2023-12-05', 'Resolved', '2023-12-10 20:16:57', '2023-12-10 20:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2023_10_21_222557_alter_userstbl', 2),
(11, '2023_10_22_164527_modify_users_table', 3),
(20, '2014_10_12_000000_create_users_table', 4),
(21, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(22, '2019_08_19_000000_create_failed_jobs_table', 4),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(24, '2023_10_24_090932_create_userfeedbacktbl', 5),
(25, '2023_11_08_130642_complainttbl', 6),
(26, '2023_11_08_130642_complainttbl1', 7),
(27, '2023_11_13_083247_create_whistleblowertbl', 8),
(28, '2023_11_13_083247_create_whistleblowertbl1', 9),
(29, '2023_11_20_220306_create_whistleblowertbl', 10),
(30, '2023_11_20_220306_create_whistleblowertbl1', 11),
(31, '2023_10_24_090932_create_userfeedbacktbl1', 12),
(32, '2023_11_08_130642_complainttbl2', 13),
(33, '2023_11_08_130642_complainttbl3', 14),
(34, '2023_10_24_090932_create_userfeedbacktbl2', 15),
(35, '2023_11_20_220306_create_whistleblowertbl2', 16),
(36, '2023_11_08_130642_complainttbl4', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `userfeedbacks`
--

CREATE TABLE `userfeedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reportedby` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `rating` varchar(255) NOT NULL,
  `issues` varchar(255) NOT NULL,
  `suggestions` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userfeedbacks`
--

INSERT INTO `userfeedbacks` (`id`, `reportedby`, `name`, `contact`, `rating`, `issues`, `suggestions`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, NULL, '3', 'slow', 'this is for test@gmail', '2023-11-28 00:26:51', '2023-11-28 00:26:51'),
(2, 4, '', 'mn', '4', 'bad UI', 'mn', '2023-12-09 02:48:46', '2023-12-09 02:48:46'),
(3, 4, 'bgb', 'g2342', '4', 'slow', 'bg', '2023-12-09 02:53:52', '2023-12-09 02:53:52'),
(4, 4, 'fff', 'f453453', '4', 'slow', 'fff', '2023-12-09 02:58:44', '2023-12-09 02:58:44'),
(5, 4, 'ddd', '12312312312d', '3', 'loading kaayo', 'ddd', '2023-12-09 02:59:00', '2023-12-09 02:59:00'),
(6, 4, 'ooo', '6782342', '3', 'langay', 'oooo', '2023-12-09 03:00:09', '2023-12-09 03:00:09'),
(7, 4, 'xxx', '235745456456', '9', 'no problem at all', 'xxx', '2023-12-09 03:06:16', '2023-12-09 03:06:16'),
(8, 4, 'fhgjghj', '12312312312', '6', 'ghjgfhjg', 'gfhjfghjgfhj', '2023-12-09 03:06:36', '2023-12-09 03:06:36'),
(9, 4, NULL, NULL, '9', 'good', 'none', '2023-12-09 11:34:06', '2023-12-09 11:34:06'),
(10, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:11', '2023-12-09 11:34:11'),
(11, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:16', '2023-12-09 11:34:16'),
(12, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:19', '2023-12-09 11:34:19'),
(13, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:23', '2023-12-09 11:34:23'),
(14, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:26', '2023-12-09 11:34:26'),
(15, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:32', '2023-12-09 11:34:32'),
(16, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:35', '2023-12-09 11:34:35'),
(17, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:38', '2023-12-09 11:34:38'),
(18, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:34:57', '2023-12-09 11:34:57'),
(19, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:35:05', '2023-12-09 11:35:05'),
(20, 4, NULL, NULL, '9', 'none', 'none', '2023-12-09 11:35:13', '2023-12-09 11:35:13'),
(22, 4, NULL, NULL, '1', 'very bad', 'very bad', '2023-12-09 11:37:39', '2023-12-09 11:37:39'),
(23, 4, NULL, NULL, '2', 'so bad', 'so bad', '2023-12-09 11:37:47', '2023-12-09 11:37:47'),
(24, 4, NULL, NULL, '3', 'bad', 'bad', '2023-12-09 11:37:54', '2023-12-09 11:37:54'),
(25, 4, NULL, NULL, '4', 'so so', 'so so', '2023-12-09 11:38:01', '2023-12-09 11:38:01'),
(26, 4, NULL, NULL, '5', 'so so', 'so so', '2023-12-09 11:38:11', '2023-12-09 11:38:11'),
(27, 4, NULL, NULL, '6', 'good enough', 'good enough', '2023-12-09 11:38:23', '2023-12-09 11:38:23'),
(28, 4, NULL, NULL, '7', 'good', 'good', '2023-12-09 11:38:33', '2023-12-09 11:38:33'),
(29, 4, NULL, NULL, '8', 'good', 'good', '2023-12-09 11:38:39', '2023-12-09 11:38:39'),
(30, 4, NULL, NULL, '8', 'nice', 'its already nice', '2023-12-10 15:12:07', '2023-12-10 15:12:07'),
(31, 4, NULL, NULL, '6', 'good enough', 'make it better', '2023-12-10 15:20:14', '2023-12-10 15:20:14'),
(32, 4, NULL, NULL, '9', 'rt', 'rt', '2023-12-10 15:44:23', '2023-12-10 15:44:23'),
(33, 4, NULL, NULL, '7', 'kk', 'kk', '2023-12-10 15:46:02', '2023-12-10 15:46:02'),
(34, 4, NULL, NULL, '3', 'fg', 'fg', '2023-12-10 15:47:13', '2023-12-10 15:47:13'),
(35, 4, NULL, NULL, '1', 'bad', 'so bad', '2023-12-10 15:48:08', '2023-12-10 15:48:08'),
(36, 4, NULL, NULL, '1', 'baad', 'baaaddd', '2023-12-10 15:48:20', '2023-12-10 15:48:20'),
(37, 4, NULL, NULL, '3', 'baadddd', 'baddd', '2023-12-10 15:48:45', '2023-12-10 15:48:45'),
(38, 4, NULL, NULL, '2', 'baaaddd', 'baaafff', '2023-12-10 15:49:12', '2023-12-10 15:49:12'),
(39, 4, NULL, NULL, '2', 'ahdha', 'ashddsh', '2023-12-10 15:49:22', '2023-12-10 15:49:22'),
(40, 4, NULL, NULL, '2', 'Ui so bad', 'improve', '2023-12-10 20:13:27', '2023-12-10 20:13:27'),
(41, 15, 'Allan Raymark Metuda', '09268265092', '1', 'Adam tried to bribe me on doing porkbarrel', 'Wow, very good website', '2023-12-10 20:13:30', '2023-12-10 20:13:30'),
(42, 16, NULL, NULL, '2', 'Dugay kaayo ang serbisyo. Wala nuon ko nakalantaw sa dula sa Lakers vs Pacers.', 'Dapat paspason jud.', '2023-12-10 20:13:34', '2023-12-10 20:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`, `remember_token`) VALUES
(4, 'test', 'test@gmail.com', '$2y$10$5DPnuyFNt0ubcex75eIgTOa2XPOnEOpGyIjGmLfilO0T4wXHtqo5q', 'member', '2023-10-27 04:11:36', '2023-10-27 04:11:36', NULL),
(6, 'ethics committee 1', 'ethicscom1@gmail.com', '$2y$10$18oa77jj6vlz7OI2IBPlSub6JLL17VLyaIXqCAz8g0EKR/vqqCZee', 'ethics_com', '2023-12-08 08:33:19', '2023-12-08 08:33:19', NULL),
(7, 'ethics committee 2', 'ethicscom2@gmail.com', '$2y$10$4yLps6VaRw8s77XlERTAu.AxdTI.wJATwvSQK6/obHWzafWfe4a.G', 'ethics_com', '2023-12-08 08:34:11', '2023-12-08 08:34:11', NULL),
(8, 'ethics committee 3', 'ethicscom3@gmail.com', '$2y$10$w.2WaklpOtmqeC9DzQic9uWRPsO0jCt11WTwvhdFilwtQM9IdOs8u', 'ethics_com', '2023-12-08 08:34:27', '2023-12-08 08:34:27', NULL),
(9, 'ethics committee 4', 'ethicscom4@gmail.com', '$2y$10$rGHij0Yv.kz9p0w3gN3P5ekDLQwUPcVxLQRnvACo39VJ2F40omDX.', 'ethics_com', '2023-12-08 08:34:43', '2023-12-08 08:34:43', NULL),
(10, 'ethics committee 5', 'ethicscom5@gmail.com', '$2y$10$EkKMWxg5Nk.9Df8BARHvq.33urAjGtaY7a40RkWn1.c7dPeXGQW3e', 'ethics_com', '2023-12-08 08:35:01', '2023-12-08 08:35:01', NULL),
(11, 'internal audit 1', 'iaudit1@gmail.com', '$2y$10$fKJW.JL/ibPiJhvEBNg7dupFkOzAzwH9YnLVqUhSqXTvovSEdYt3u', 'internal_audit', '2023-12-10 10:28:03', '2023-12-10 10:28:03', NULL),
(12, 'internal audit 2', 'iaudit2@gmail.com', '$2y$10$lqXeWil6l579I83Me33wheBR77Udh5FWHIIp0T4mAoncEttKFd6.6', 'internal_audit', '2023-12-10 10:28:34', '2023-12-10 10:28:34', NULL),
(13, 'internal audit 3', 'iaudit3@gmail.com', '$2y$10$nYPwXXNHBr1IqlCVLD5G7.DtVrgYt3oGUIOarbsNeZicXfjOUdT/y', 'internal_audit', '2023-12-10 10:29:03', '2023-12-10 10:29:03', NULL),
(14, 'raymart paraiso', 'raymartparadise2001@gmail.com', '$2y$10$YJlQzYloxUx8kMg/POK.5.iGg1edSm68GVa0bVYNATb4uEtSyBE5m', 'member', '2023-12-10 16:22:29', '2023-12-10 16:22:29', NULL),
(15, 'Allan Raymark Metuda', 'allanraymartparaiso@g.msuiit.edu.ph', '$2y$10$.gK8/0v2HolJB4IQh89v.uuylXeyLg5Hp7dPWlT8OyCOgNI4mjxAm', 'member', '2023-12-10 20:12:35', '2023-12-10 20:12:35', NULL),
(16, 'Haron Hakeen Lua', 'haronlua@gmail.com', '$2y$10$4kvawtCG74Tj2lDbg/PNw.ctV4Bj8poVyR8X8PfgEjMBONwUinkzW', 'member', '2023-12-10 20:12:42', '2023-12-10 20:12:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whistleblowerreps`
--

CREATE TABLE `whistleblowerreps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reportedby` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name_accused` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `misconduct` text NOT NULL,
  `persons_involved` varchar(255) NOT NULL,
  `date_of_incident` date NOT NULL,
  `further_infos` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whistleblowerreps`
--

INSERT INTO `whistleblowerreps` (`id`, `reportedby`, `fname`, `lname`, `contactno`, `email`, `name_accused`, `position`, `department`, `misconduct`, `persons_involved`, `date_of_incident`, `further_infos`, `status`, `created_at`, `updated_at`) VALUES
(8, 4, 'Clint', 'Marksman', '09532468601', NULL, 'Faheem Oguis', 'Admin Personnel 1', 'Admin Department', 'Corruption', 'Faheem Oguis, Person 1', '2023-12-11', 'Oguis tried to bribe me', 'pending', '2023-12-10 19:20:23', '2023-12-10 19:20:23'),
(9, 15, 'Allan Raymark', 'Metuda', '093427273333', 'allanraymartparaiso@g.msuiit.edu.ph', 'Jan Faheem Oguis', 'Cashier', 'Gaisano', 'Bribery, Harrassment, Corruption', '5', '2023-12-05', 'Help', 'pending', '2023-12-10 20:16:08', '2023-12-10 20:16:08'),
(10, 16, 'Adam Russel', 'Westbrook', '09196396009', NULL, 'Jay Rence Quilario', 'Senior Aguila', 'SBSI', 'Being a cult', 'Ako', '2023-09-13', 'Ex-members alleged that Quilario claimed to be God; specifically as the Santo Nino and a Messiah. Not complying with his orders supposedly would meant damnation in hell.', 'Denied', '2023-12-10 20:21:51', '2023-12-10 20:22:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_reportedby_foreign` (`reportedby`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `userfeedbacks`
--
ALTER TABLE `userfeedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userfeedbacks_reportedby_foreign` (`reportedby`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whistleblowerreps`
--
ALTER TABLE `whistleblowerreps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whistleblowerreps_reportedby_foreign` (`reportedby`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userfeedbacks`
--
ALTER TABLE `userfeedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `whistleblowerreps`
--
ALTER TABLE `whistleblowerreps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_reportedby_foreign` FOREIGN KEY (`reportedby`) REFERENCES `users` (`id`);

--
-- Constraints for table `userfeedbacks`
--
ALTER TABLE `userfeedbacks`
  ADD CONSTRAINT `userfeedbacks_reportedby_foreign` FOREIGN KEY (`reportedby`) REFERENCES `users` (`id`);

--
-- Constraints for table `whistleblowerreps`
--
ALTER TABLE `whistleblowerreps`
  ADD CONSTRAINT `whistleblowerreps_reportedby_foreign` FOREIGN KEY (`reportedby`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
