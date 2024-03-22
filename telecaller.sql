-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:28 PM
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
-- Database: `telecaller`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `created_at`) VALUES
(3, 'Raipurs', '2023-12-14 08:23:09'),
(8, 'kamlesh Patel', '2023-12-06 11:09:19'),
(10, 'Saraipali', '2023-12-06 13:43:31'),
(11, 'yogendra', '2023-12-13 04:31:55'),
(12, 'kamlesh', '2023-12-12 17:47:28'),
(14, 'kamlesh', '2023-12-14 08:23:01'),
(15, 'bvd', '2024-01-09 09:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `calldetails`
--

CREATE TABLE `calldetails` (
  `callId` bigint(20) UNSIGNED NOT NULL,
  `custId` bigint(20) UNSIGNED NOT NULL,
  `history` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calldetails`
--

INSERT INTO `calldetails` (`callId`, `custId`, `history`, `remark`, `created_at`) VALUES
(6, 14, '2023-12-15', 'hello', '2023-12-06 06:37:37'),
(9, 11, '2023-12-06', 'ads', '2023-12-22 08:46:45'),
(10, 14, '2024-02-22', 'Friday', '2024-02-18 10:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNo` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `customerCategory` varchar(255) NOT NULL,
  `customerType` varchar(255) NOT NULL,
  `lastBilling` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `payterm` varchar(255) NOT NULL,
  `callPerson` varchar(255) NOT NULL,
  `callDate` varchar(255) NOT NULL,
  `callPurpose` varchar(255) NOT NULL,
  `callResponse` varchar(255) NOT NULL,
  `oldResponse` varchar(255) DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `nextPlan` varchar(255) NOT NULL,
  `timeToCall` varchar(255) NOT NULL,
  `competitor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobileNo`, `telephone`, `address`, `area`, `city`, `district`, `customerCategory`, `customerType`, `lastBilling`, `balance`, `payterm`, `callPerson`, `callDate`, `callPurpose`, `callResponse`, `oldResponse`, `action`, `nextPlan`, `timeToCall`, `competitor`, `amount`, `created_at`) VALUES
(11, 'kamlesh patel', 'kamleshp@gmail.com', '1234567890', '8319277348', 'asdf', '8', 'asd', '2', 'Select Customer Category', 'Select Customer Type', '2023-12-20', '12345456', 'qwert', 'qww', '2023-11-10T09:43', 'qwer', 'asdf', 'asdfgh', 'hello', '1234', '12:23', 'fgghy', '123', '2023-12-17 15:04:20'),
(14, 'Anil Patel', 'user@example.com', '8319277348', '8319277348', 'asdf', '2', 'Saraipali', '2', '1', '2', '2023-12-20', '123', 'qwert', 'qww', '2023-11-10T09:43', 'qwer', 'asdf', 'asdfgh', 'hello', '1234', '12:23', 'fgghy', '123', '2023-12-06 06:35:58'),
(15, 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'a', 'aa', 'aa', '', '', '', '', '', '', NULL, '', '', '', '', '', '2023-12-12 17:22:12'),
(16, 'a', 'ass', 'ass', 'aa', 'a', 'a', 'a', 'a', 'a', 'aa', 'aa', 's', '', 'sd', '', '', '', NULL, '', '', '', '', '', '2023-12-12 17:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `customercategory`
--

CREATE TABLE `customercategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customercategory`
--

INSERT INTO `customercategory` (`id`, `name`, `created_at`) VALUES
(4, 'Discount Customer', '2023-12-05 08:30:06'),
(6, 'customer5', '2023-12-05 09:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `customertype`
--

CREATE TABLE `customertype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customertype`
--

INSERT INTO `customertype` (`id`, `name`, `created_at`) VALUES
(1, 'Customers1', '2023-12-01 08:25:28'),
(6, 'cvn', '2023-12-15 05:50:13'),
(7, 'cvn', '2023-12-15 05:50:14'),
(8, 'bvdffs', '2023-12-17 15:02:26'),
(9, 'bvd', '2023-12-17 16:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `created_at`) VALUES
(1, 'Raipur1', '2023-12-17 16:12:34'),
(2, 'Bemetara', '2023-12-05 05:50:03'),
(3, 'Bilaspur1', '2023-12-17 16:13:03'),
(4, 'Mahasmund', '2023-12-01 08:17:59'),
(6, 'Jagadalpur', '2023-12-04 18:04:18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_01_064818_customer', 2),
(6, '2023_12_01_080342_area', 3),
(7, '2023_12_01_080353_district', 3),
(8, '2023_12_01_080414_customer_category', 3),
(9, '2023_12_01_080427_customer_type', 3),
(10, '2014_10_12_100000_create_password_resets_table', 4),
(11, '2023_12_05_162706_call_details', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `role`) VALUES
(3, 'Nilabar Patel', 'user@example.com', '$2y$12$.hgGCREUwU1.Yh.VAJ8mq.oqFSENLxbJanZlz1Rwk.E6Hw0creZXK', '2023-12-03 11:50:00', 0),
(4, 'Nilabar Patel', '27mohitsoni@gmail.com', '$2y$12$Vc/Ceis/mKc0K1pMs9/maO45354IQFJub7jbkRTUhCMKlsctLOVcS', '2023-12-03 10:54:14', 1),
(6, 'kamlesh', 'kamleshp52170@gmail.com', '$2y$12$8GsZaolFJgfqfLbOcXmQKuLI2d0/.dIwB82jzK/8zkHE4tT1zbfi6', '2023-12-04 08:04:32', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calldetails`
--
ALTER TABLE `calldetails`
  ADD PRIMARY KEY (`callId`),
  ADD KEY `custId` (`custId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `customercategory`
--
ALTER TABLE `customercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertype`
--
ALTER TABLE `customertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `calldetails`
--
ALTER TABLE `calldetails`
  MODIFY `callId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customercategory`
--
ALTER TABLE `customercategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customertype`
--
ALTER TABLE `customertype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calldetails`
--
ALTER TABLE `calldetails`
  ADD CONSTRAINT `calldetails_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
