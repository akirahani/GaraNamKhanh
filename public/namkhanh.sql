-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namkhanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `time` time NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `member_id`, `time`, `date`, `created_at`, `updated_at`) VALUES
(154, 6, '07:30:02', '2021-10-01', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(155, 7, '07:30:02', '2021-10-07', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(156, 6, '12:00:03', '2021-10-01', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(157, 7, '12:00:02', '2021-10-07', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(158, 6, '13:30:00', '2021-10-01', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(159, 7, '13:20:02', '2021-10-07', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(160, 6, '17:30:02', '2021-10-01', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(161, 7, '18:00:00', '2021-10-07', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(162, 6, '08:00:01', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(164, 6, '12:01:02', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(166, 6, '13:30:02', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(167, 7, '13:30:00', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(168, 6, '18:00:00', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(169, 7, '16:35:02', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(170, 7, '17:00:02', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(171, 7, '17:30:02', '2021-10-04', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(172, 7, '13:30:00', '2021-10-11', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(173, 7, '16:35:02', '2021-10-11', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(174, 7, '17:00:02', '2021-10-11', '2021-10-03 05:40:22', '2021-10-03 12:40:22'),
(175, 7, '17:30:02', '2021-10-11', '2021-10-03 05:40:22', '2021-10-03 12:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hour` time NOT NULL,
  `day` date NOT NULL,
  `run_distance` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `want` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `hour`, `day`, `run_distance`, `status`, `want`, `customer_id`, `created_at`, `updated_at`) VALUES
(24, '08:30:00', '2021-08-26', 1000, 1, 'bảo dưỡng xe', 2, '2021-08-24 19:51:57', '2021-08-24 19:52:03'),
(25, '08:30:00', '2021-08-26', 1000, 1, 'bảo dưỡng xe', 1, '2021-08-24 20:29:37', '2021-08-24 21:04:47'),
(26, '08:45:00', '2021-09-26', 1000, 1, 'bảo dưỡng xe', 1, '2021-09-07 19:59:56', '2021-09-09 18:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_date` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `type_date`, `date`, `title`, `created_at`, `updated_at`) VALUES
(324, 1, '2021-06-29', 'Công tác', '2021-07-06 20:56:48', '2021-07-06 20:56:48'),
(325, 1, '2021-08-18', 'holiday', '2021-08-23 19:08:45', '2021-08-23 19:08:45'),
(337, 1, '2021-09-29', 'Đi học1', '2021-09-26 20:16:10', '2021-09-30 01:58:34'),
(338, 1, '2021-09-06', 'h8h8', '2021-09-27 02:56:31', '2021-09-27 02:56:31'),
(339, 1, '2021-10-04', '2', '2021-10-12 21:20:28', '2021-10-12 21:20:28'),
(340, 1, '2021-10-04', 's', '2021-10-12 21:23:18', '2021-10-12 21:23:18'),
(341, 1, '2021-09-29', '2', '2021-10-17 06:43:02', '2021-10-17 06:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_manufacture` year(4) NOT NULL,
  `id_company` bigint(20) DEFAULT NULL,
  `id_type` bigint(20) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `license_plate`, `name`, `engine`, `chassis`, `color`, `year_manufacture`, `id_company`, `id_type`, `customer_id`, `created_at`, `updated_at`) VALUES
(11, '15BA2198', 'Ferrari F430', '3223654', '21287', 'hồng trắng', 2012, 3, 1, 2, '2021-08-17 18:57:29', '2021-09-13 18:43:25'),
(17, '15BA1108', 'VinATXRT', '3254577', '45848', 'trắng đen', 1998, 4, 3, 3, '2021-08-24 20:42:07', '2021-08-24 20:42:07'),
(18, '15BA0489', 'Hà Linh', '2414578', '26422', 'đỏ trắng', 1998, 5, 1, 1, '2021-08-24 20:49:01', '2021-08-24 20:58:25'),
(19, '16B24212', 'Kia 1B2A', '1058456', '254A8', 'đỏ cam', 1998, 3, 1, 16, '2021-09-13 20:26:22', '2021-09-13 20:26:22'),
(20, '15BA02233', 'Kia MB', '3223123AS564', '21564568', 'trắng đen', 1998, 3, 1, 16, '2021-09-19 22:21:15', '2021-09-19 22:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`id`, `name_type`, `vehicles`, `created_at`, `updated_at`) VALUES
(1, 'Xe ô tô con', 'Posche', '2021-08-16 23:34:53', '2021-09-21 00:13:16'),
(3, 'Xe ô tô con', 'Vin', '2021-08-17 02:05:28', '2021-09-21 00:05:32'),
(4, 'Xe ô tô con', 'Ferrari', '2021-08-17 18:52:30', '2021-08-17 18:52:50'),
(6, 'Xe 4 chỗ', 'Posche', '2021-09-20 23:53:58', '2021-09-20 23:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `session`, `created_at`, `updated_at`) VALUES
(1, 'fb8d266fd2aee34a70812320153715d8', NULL, '2021-09-28 20:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segment` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `business_infomation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_infomation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `email`, `avatar`, `segment`, `birthday`, `business_infomation`, `related_infomation`, `email_verified_at`, `api_token`, `remember_token`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Đình Đức', 'Hồng Bàng, HP', '0357836964', 'dinhduc0803@gmail.com', '1632725322.jpg', 0, '2021-09-09', 'aaa', 'aaa', NULL, NULL, NULL, '$2y$10$683VmLPeG0ANme.RypsgAeU8IGpwxjdx9GvhaZgQWgwDSXfrFWD4K', '2021-08-15 00:33:31', '2021-09-26 23:48:42'),
(2, 'Hà Linh', 'Hồng Bàng, HP', '0125578988', 'halinh1102@gmail.com', '1632725316.jpg', 0, '2000-09-19', NULL, NULL, NULL, NULL, NULL, '$2y$10$8OnWSPFknM2fUxjpPCp3Jemc8/XownPB4fTWkkPxcKXLyN5vuUYtS', '2021-08-15 00:34:01', '2021-09-26 23:48:36'),
(3, 'Dương Đức Hiếu', '123 HA3', '0528575222', 'hieu11081@gmail.com', '1632725301.jpg', 0, '2021-09-15', 'aaa', NULL, NULL, NULL, NULL, '$2y$10$00HjxFp3nQIuMOY9zluPGetIthxxh5aoeWn4tD.K9zjHSnojorZuW', '2021-08-17 21:13:55', '2021-09-26 23:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `file_ins`
--

CREATE TABLE `file_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_ins`
--

INSERT INTO `file_ins` (`id`, `status`, `created_at`, `updated_at`) VALUES
(96, 1, '2021-09-26 16:13:30', '2021-09-26 09:13:33'),
(98, 1, '2021-11-30 10:41:17', '2021-11-30 03:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `file_outs`
--

CREATE TABLE `file_outs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fin_spares`
--

CREATE TABLE `fin_spares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_fin` bigint(20) NOT NULL,
  `amount_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fin_spares`
--

INSERT INTO `fin_spares` (`id`, `id_spare`, `id_fin`, `amount_in`) VALUES
(132, 14, 96, 13),
(133, 12, 96, 14),
(134, 15, 96, 15),
(135, 12, 97, 2),
(136, 12, 98, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fout_spares`
--

CREATE TABLE `fout_spares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_fout` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_shift`
--

CREATE TABLE `group_shift` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_shift`
--

INSERT INTO `group_shift` (`id`, `name`) VALUES
(17, 'HC'),
(23, 'hc'),
(27, '222');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `name`, `phone`, `address`, `website`, `email`, `tax_code`, `note`, `rating`, `created_at`, `updated_at`) VALUES
(3, 'Kia VN', '0125458255', '23 Lê Chân HP', 'luki@js.com', 'kiavn@gmail.com', '1223224242', '', '[\"0\"]', '2021-08-17 01:02:52', '2021-09-13 05:19:49'),
(4, 'VinAR', '0125458255', '12 LKT', 'luki@j32s.com', 'tbbc@gmail.com', '2423422334232', 'Cần nhập nhiều', '[\"0\"]', '2021-08-17 02:05:10', '2021-09-13 05:19:34'),
(5, 'DA- Ferrari', '0125855855', '24 Tôn Đức Thắng', 'ferraris2@js.com', 'ffaree@gmail.com', '1223224242', '', '[\"1\"]', '2021-08-17 18:54:51', '2021-09-13 05:27:11'),
(7, 'BBC1', '0125458255', '23 Lê Chân HP', 'bbc3@js.com', 'tbbc@gmail.com', '021658482-222', 'note', '[\"2\"]', '2021-09-13 05:27:37', '2021-09-13 05:27:57'),
(8, 'BBC', '0125458255', '23 Lê Chân HP', 'luki@j32s.com', 'tbbc@gmail.com', '021658482-222', 'note', '1', '2021-09-13 05:27:50', '2021-09-13 05:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `licenses`
--

INSERT INTO `licenses` (`id`, `member_id`, `time_start`, `time_end`, `reason`, `note`, `date`, `created_at`, `updated_at`) VALUES
(1, 7, '2021-10-21 08:00:00', '2021-10-21 17:30:00', 'nhà có đám cưới', '', '2021-10-20', NULL, NULL),
(2, 42, '2021-10-26 08:00:00', '2021-10-26 17:30:00', 'nhà có giỗ', '', '2021-10-21', NULL, NULL),
(3, 46, '2021-10-27 08:00:00', '2021-10-28 17:30:00', 'nhà có người ốm', '', '2021-10-28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `token`, `created_at`, `updated_at`) VALUES
(6, 'user1', 'user01@gmail.com', '0357845456', NULL, '$2y$10$ndshBY2P39lJRn6d1/qn7.MAWM4Hvnfa0x7aQ0eE7lHtUMr56P5jq', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJiNjY4OTU0YzExNmYyNzkwM2E0YTM1NTA0OWY3ZDA3Nzg0N2MyYTZmNTMzNDc3ZWEzYWYwMmUzZGU2YTg2MDk2ZDI5NzFjOWE5OTk1YzBjIn0.eyJhdWQiOiIzIiwianRpIjoiMmI2Njg5NTRjMTE2ZjI3OTAzYTRhMzU1MDQ5ZjdkMDc3ODQ3YzJhNmY1MzM0NzdlYTNhZjAyZTNkZTZhODYwOTZkMjk3MWM5YTk5OTVjMGMiLCJpYXQiOjE2MzI4ODM1MjMsIm5iZiI6MTYzMjg4MzUyMywiZXhwIjoxNjY0NDE5NTIzLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.afcqkrWDac0yQUTM9xQD8kOm2Y7ctp5jmqba3lyZSjeBSgEdmV03mK1r8OIXFAWnPyIc5Pe_w8n6hBQqsVO5xleNpwVUehi_KqwyFg715IpO8xk6Nuw1SIbbSDTqr8niDkInmlcdkzsPAjpDmsJlmGSsjoT8ZS8h1NhL4CxthUPilhun2GiZ-PZDCoqgj4lpDC-f_BdX1KgxTFnd2DpnTgZHUBln5Op5KtaYRBNj5fVDSYm1WUlPQ4Pt4gpxfi5EgaJYX4qLYqj66cxFDRyqOXIOVQXVI_5Ql59Q4U_H4J9449ELIS0yGP7hqAId5PAZ7gKwH4ZY2sdvi6iAsfnP_uN-zOKPz0Gd8WkfuC0bP3Y6MYDEMU4d8EIcEUVOdTRDy1B0ELfWPOix2mN69AKJQfv38z-gSnRypmP3oxxNfDmtDmxSq_8wHyx_T1d6xh5TBEHjijHe6X0ChR9ZNGnSdT2S7Gu-9hfpEnR5dpZNYZZgDAD2sPreNbZqaFqSqMD2ds0FuoCXuDeNOYTv7JO73Gi8lBbknX7LJ7YhynG40Gia57x9md98hw9S-CxWRsZzdtXLq2wq7eSCzeaYYmb3SBm8cq2829DvwBVukvYV3OIPztb9U5dF2KNA3SAORuMI8VoPHSiIcNRpRK-d-yfU1AwueplADLDx98iXZiUu3lc', '2021-07-01 10:06:11', '2021-09-28 19:45:23'),
(7, 'user2', 'user02@gmail.com', '0357845352', NULL, '$2y$10$43Z9d44IJSIIWDQ2SbKHQeGlfdofMQMlOzi61e/exUzit6pG0mykW', NULL, NULL, '2021-07-01 10:06:19', '2021-07-19 23:57:10'),
(40, 'Phạm Đình Đức', 'user03@gmail.com', '0357843211', NULL, '$2y$10$gLTNYi1jkQ3VIixGkG/D.OE6VPMbBIarunIDc.kBNBb9e/W8kEQQW', NULL, NULL, '2021-09-30 01:48:07', '2021-09-30 01:48:07'),
(41, 'Hà Linh', 'user04@gmail.com', '0357812345', NULL, '$2y$10$3HhvQqYGz/F5HeR0LKR1juaF6icLj/iZEwZfMiHBePjBWnhgv8Fp6', NULL, NULL, '2021-09-30 01:48:22', '2021-09-30 01:48:22'),
(42, 'Hoàng Anh', 'hoanganh1101@gmail.com', '0357845242', NULL, '$2y$10$ndshBY2P39lJRn6d1/qn7.MAWM4Hvnfa0x7aQ0eE7lHtUMr56P5jq', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJiNjY4OTU0YzExNmYyNzkwM2E0YTM1NTA0OWY3ZDA3Nzg0N2MyYTZmNTMzNDc3ZWEzYWYwMmUzZGU2YTg2MDk2ZDI5NzFjOWE5OTk1YzBjIn0.eyJhdWQiOiIzIiwianRpIjoiMmI2Njg5NTRjMTE2ZjI3OTAzYTRhMzU1MDQ5ZjdkMDc3ODQ3YzJhNmY1MzM0NzdlYTNhZjAyZTNkZTZhODYwOTZkMjk3MWM5YTk5OTVjMGMiLCJpYXQiOjE2MzI4ODM1MjMsIm5iZiI6MTYzMjg4MzUyMywiZXhwIjoxNjY0NDE5NTIzLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.afcqkrWDac0yQUTM9xQD8kOm2Y7ctp5jmqba3lyZSjeBSgEdmV03mK1r8OIXFAWnPyIc5Pe_w8n6hBQqsVO5xleNpwVUehi_KqwyFg715IpO8xk6Nuw1SIbbSDTqr8niDkInmlcdkzsPAjpDmsJlmGSsjoT8ZS8h1NhL4CxthUPilhun2GiZ-PZDCoqgj4lpDC-f_BdX1KgxTFnd2DpnTgZHUBln5Op5KtaYRBNj5fVDSYm1WUlPQ4Pt4gpxfi5EgaJYX4qLYqj66cxFDRyqOXIOVQXVI_5Ql59Q4U_H4J9449ELIS0yGP7hqAId5PAZ7gKwH4ZY2sdvi6iAsfnP_uN-zOKPz0Gd8WkfuC0bP3Y6MYDEMU4d8EIcEUVOdTRDy1B0ELfWPOix2mN69AKJQfv38z-gSnRypmP3oxxNfDmtDmxSq_8wHyx_T1d6xh5TBEHjijHe6X0ChR9ZNGnSdT2S7Gu-9hfpEnR5dpZNYZZgDAD2sPreNbZqaFqSqMD2ds0FuoCXuDeNOYTv7JO73Gi8lBbknX7LJ7YhynG40Gia57x9md98hw9S-CxWRsZzdtXLq2wq7eSCzeaYYmb3SBm8cq2829DvwBVukvYV3OIPztb9U5dF2KNA3SAORuMI8VoPHSiIcNRpRK-d-yfU1AwueplADLDx98iXZiUu3lc', '2021-07-01 10:06:11', '2021-09-28 19:45:23'),
(43, 'Đức Anh', 'ducanh0112@gmail.com', '0232445456', NULL, '$2y$10$43Z9d44IJSIIWDQ2SbKHQeGlfdofMQMlOzi61e/exUzit6pG0mykW', NULL, NULL, '2021-07-01 10:06:19', '2021-07-19 23:57:10'),
(44, 'Phạm Anh', 'phamanh0112@gmail.com', '0357845555', NULL, '$2y$10$gLTNYi1jkQ3VIixGkG/D.OE6VPMbBIarunIDc.kBNBb9e/W8kEQQW', NULL, NULL, '2021-09-30 01:48:07', '2021-09-30 01:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `member_shift`
--

CREATE TABLE `member_shift` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(255) DEFAULT NULL,
  `group_id` int(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_shift`
--

INSERT INTO `member_shift` (`id`, `member_id`, `group_id`, `date`) VALUES
(68, 7, 17, '2021-07-14'),
(69, 7, 17, '2021-07-15'),
(88, 7, 17, '2021-07-16'),
(89, 7, 17, '2021-07-17'),
(90, 7, 17, '2021-07-18'),
(91, 7, 17, '2021-07-19'),
(92, 7, 17, '2021-07-20'),
(93, 7, 17, '2021-07-21'),
(94, 7, 17, '2021-07-22'),
(95, 7, 17, '2021-07-23'),
(96, 6, 17, '2021-07-15'),
(97, 6, 17, '2021-07-16'),
(98, 6, 17, '2021-07-17'),
(99, 6, 17, '2021-07-18'),
(100, 6, 17, '2021-07-19'),
(101, 6, 17, '2021-07-20'),
(102, 6, 17, '2021-07-21'),
(103, 6, 17, '2021-07-22'),
(104, 6, 17, '2021-07-23'),
(105, 6, 17, '2021-07-24'),
(106, 6, 17, '2021-07-25'),
(107, 6, 17, '2021-07-26'),
(108, 6, 17, '2021-07-27'),
(109, 6, 17, '2021-07-28'),
(110, 6, 17, '2021-07-29'),
(111, 6, 17, '2021-07-30'),
(112, 6, 17, '2021-07-31'),
(113, 6, 18, '2021-09-28'),
(114, 7, 18, '2021-09-28');

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
(4, '2021_07_01_015747_create_member_table', 2),
(5, '2021_07_01_055042_create_shift_table', 3),
(6, '2021_07_02_094829_create_attendance_table', 4),
(9, '2021_07_04_073408_create_config_table', 5),
(10, '2020_03_26_122233_create_admins_table', 6),
(11, '2021_06_23_084231_create_attendances_table', 6),
(12, '2021_06_23_085430_create_shifts_table', 6),
(13, '2021_07_07_173349_create_shift_member_table', 7),
(14, '2021_07_20_040424_create_customers_table', 7),
(15, '2021_07_25_083246_create_books_table', 8),
(16, '2021_07_25_083247_create_books_table', 9),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 10),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 10),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 10),
(20, '2016_06_01_000004_create_oauth_clients_table', 10),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 10),
(22, '2021_07_25_083248_create_books_table', 11),
(23, '2021_07_25_083249_create_books_table', 12),
(24, '2021_07_25_083250_create_books_table', 13),
(25, '2021_07_25_083251_create_books_table', 14),
(26, '2021_07_26_163359_create_repair_orders_table', 14),
(27, '2021_07_27_022036_create_works_table', 15),
(28, '2021_07_27_033502_create_spare_parts_table', 15),
(29, '2021_07_27_033929_create_spare_part__repair_orders_table', 16),
(30, '2021_07_27_033954_create_work__repair_orders_table', 16),
(31, '2021_07_26_163360_create_repair_orders_table', 17),
(32, '2021_07_27_033503_create_spare_parts_table', 18),
(33, '2021_07_27_033504_create_spare_parts_table', 19),
(34, '2021_07_28_040719_create_cars_table', 19),
(35, '2021_07_28_041053_create_suppliers_table', 19),
(36, '2021_07_28_091442_create_spare_part__suppliers_table', 20),
(37, '2021_07_28_091443_create_spare_part__suppliers_table', 21),
(38, '2021_07_27_033930_create_spare_part__repair_orders_table', 22),
(39, '2021_07_28_091444_create_spare_part__suppliers_table', 23),
(40, '2021_07_27_033505_create_spare_parts_table', 24),
(41, '2021_07_28_155854_create_spare_repairs_table', 25),
(42, '2021_08_02_025122_create_type_spares_table', 26),
(43, '2021_08_02_041207_create_spare_ins_table', 26),
(44, '2021_08_02_041326_create_spare_exists_table', 26),
(45, '2021_08_02_131622_create_references_table', 27),
(46, '2021_08_03_023330_create_reference_types_table', 28),
(47, '2021_08_03_023346_create_reference_suppliers_table', 28),
(48, '2021_08_03_083451_create_spare_reports_table', 29),
(49, '2021_08_02_131623_create_references_table', 30),
(50, '2021_08_03_083452_create_spare_reports_table', 30),
(51, '2021_08_05_052313_create_price_notifications_table', 31),
(52, '2021_08_05_060750_create_work_results_table', 31),
(53, '2021_08_05_060809_create_reference_results_table', 31),
(54, '2021_08_05_060905_create_pnotification_wresults_table', 31),
(55, '2021_08_05_060922_create_pnotification_sresults_table', 31),
(56, '2021_08_05_060810_create_reference_results_table', 32),
(57, '2021_08_05_052314_create_price_notifications_table', 33),
(58, '2021_08_05_060751_create_work_results_table', 34),
(59, '2021_08_05_060811_create_reference_results_table', 35),
(60, '2021_08_06_014640_create_books_table', 36),
(61, '2021_08_06_014641_create_books_table', 37),
(62, '2021_08_02_131624_create_references_table', 38),
(63, '2021_08_08_170428_create_sparein_references_table', 39),
(64, '2021_08_08_170429_create_sparein_references_table', 40),
(65, '2021_08_02_041208_create_spare_ins_table', 41),
(66, '2021_08_08_170430_create_sparein_references_table', 41),
(67, '2021_08_02_041209_create_spare_ins_table', 42),
(68, '2021_08_10_031625_create_sexist_references_table', 43),
(69, '2021_08_10_075207_create_spare_details_table', 44),
(70, '2021_08_11_083056_create_pn_works_table', 45),
(71, '2021_08_11_083101_create_pn_spares_table', 45),
(72, '2021_08_02_041210_create_spare_ins_table', 46),
(73, '2021_08_02_041211_create_spare_ins_table', 47),
(74, '2021_07_20_040425_create_customers_table', 48),
(75, '2021_07_20_040426_create_customers_table', 49),
(76, '2021_07_20_040427_create_customers_table', 50),
(77, '2021_07_20_040428_create_customers_table', 51),
(78, '2021_08_10_075208_create_spare_details_table', 52),
(79, '2021_08_10_075209_create_spare_details_table', 53),
(80, '2021_08_15_092611_create_repair_orders_table', 54),
(81, '2021_08_15_130358_create_in_notifications_table', 54),
(82, '2021_08_16_012829_create_rp_works_table', 55),
(83, '2021_08_16_012840_create_rp_spares_table', 55),
(84, '2021_07_27_033506_create_spare_parts_table', 56),
(85, '2021_08_17_030859_create_car_types_table', 57),
(86, '2021_08_17_031237_create_insurance_companies_table', 57),
(87, '2021_07_28_0407120_create_cars_table', 58),
(88, '2021_08_17_031238_create_insurance_companies_table', 59),
(89, '2021_08_31_014433_create_pn_ins_table', 60),
(90, '2021_08_31_014437_create_pn_outs_table', 60),
(91, '2021_09_14_102232_create_file_ins_table', 61),
(92, '2021_09_14_102239_create_file_outs_table', 61),
(93, '2021_09_14_102233_create_file_ins_table', 62),
(94, '2021_09_14_102240_create_file_outs_table', 62),
(95, '2021_09_14_102234_create_file_ins_table', 63),
(96, '2021_09_14_102241_create_file_outs_table', 63),
(97, '2021_09_17_100109_create_fin_spares_table', 64),
(98, '2021_09_17_100119_create_fout_spares_table', 64),
(99, '2021_08_02_041213_create_spare_ins_table', 65),
(100, '2021_09_26_023246_create_schedules_table', 65),
(101, '2021_08_02_041214_create_spare_ins_table', 66),
(102, '2021_09_26_023248_create_schedules_table', 67),
(103, '2021_10_13_042508_create_licenses_table', 68),
(104, '2021_10_13_042509_create_licenses_table', 69),
(105, '2021_10_13_042510_create_licenses_table', 70);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
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
('01665abecccba2d2cb0ade8c56b033f67832cc0b4e69ff45781c3bad45d07fb14fe9dac8c98ef17e', 6, 1, 'namkhanh', '[]', 0, '2021-09-05 21:58:28', '2021-09-05 21:58:28', '2022-09-06 04:58:28'),
('0c7e0148e2e7c38bf1452201a7adaa1e9746d90ecf1651e657c18210589ba2eae4bed0dbd0b33d7c', 6, 1, 'namkhanh', '[]', 0, '2021-07-26 02:44:52', '2021-07-26 02:44:52', '2022-07-26 09:44:52'),
('1be8bf9f986a4118f0095540203438fb34b109b882326f51a8ee0d20844ec43b8ea244b173955084', 1, 1, 'MyToken', '[]', 0, '2021-08-23 20:12:15', '2021-08-23 20:12:15', '2022-08-24 03:12:15'),
('1e9e097ebe02327bdd352667c59af66aae1b0d091f192a81e938a5f5bdb3cdfb502c19013118124f', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:38:05', '2021-08-23 18:38:05', '2022-08-24 01:38:05'),
('22c271f699a83d2f6a3a1c510a62c7891b42ced57ac471dc224182e2fb01c2218318130c76d0d979', 1, 3, 'MyToken', '[]', 0, '2021-10-15 21:07:54', '2021-10-15 21:07:54', '2022-10-16 04:07:54'),
('2747f32904df4eedabdde71daee0178d8a852a84b1a36f8d717d036e9bc503b4c0b47e762919dd41', 1, 3, 'MyToken', '[]', 0, '2021-09-29 06:02:25', '2021-09-29 06:02:25', '2022-09-29 13:02:25'),
('27f6a2b5acd15682064e2e0ca16785a218aec5792cbc6925e447aae09d5524362654674241b9933f', 1, 3, 'MyToken', '[]', 0, '2021-10-23 19:27:35', '2021-10-23 19:27:35', '2022-10-24 02:27:35'),
('2b338b0854069bd3dd2b90da32919c1813f05c642cefb3b567db88afa21f864917489a4d58d0324a', 1, 1, 'MyToken', '[]', 0, '2021-09-07 19:18:27', '2021-09-07 19:18:27', '2022-09-08 02:18:27'),
('2b668954c116f27903a4a355049f7d077847c2a6f533477ea3af02e3de6a86096d2971c9a9995c0c', 6, 3, 'namkhanh', '[]', 0, '2021-09-28 19:45:23', '2021-09-28 19:45:23', '2022-09-29 02:45:23'),
('30b2d3e51ad1f69bbd6ea65633b8b45cb80ceff66cddcffba2bd53afc83cc68843ff189e32165a5d', 1, 3, 'MyToken', '[]', 0, '2021-10-17 07:19:33', '2021-10-17 07:19:33', '2022-10-17 14:19:33'),
('42b2fc791fcb73fef85e1e878f430bf725bbd660533efed04208d857fef9c535c67abbb4c198ece5', 1, 1, 'MyToken', '[]', 0, '2021-09-09 21:53:56', '2021-09-09 21:53:56', '2022-09-10 04:53:56'),
('4557f3ab7c8fa949a9a97799922f1f8825be709d993f12eb067fc8a0b002e5a378b9fd08fb708938', 1, 3, 'MyToken', '[]', 0, '2021-11-27 08:35:10', '2021-11-27 08:35:10', '2022-11-27 15:35:10'),
('630ceb4bfae6e3ff17403e73cad0c36f7ccddade935a0cb9c1227f8373b15129373dd340a64ebe5a', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:51:16', '2021-08-23 18:51:16', '2022-08-24 01:51:16'),
('6a33a04e74ec2b4b958138734665d8bce2e6c7e121924fdd233a029d6f20e7e145ca1ec226b69cce', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:36:50', '2021-08-23 18:36:50', '2022-08-24 01:36:50'),
('6a8126546bdf2133ded1becc7b8af695af613db1346adcfacdc2b62153dab06ee471e2ab9c6fad81', 1, 3, 'MyToken', '[]', 0, '2021-09-27 02:53:19', '2021-09-27 02:53:19', '2022-09-27 09:53:19'),
('712645b6d8010c895ded5fe1a1be4fa4f28d6b7723f95cbed134657fdf942287f8024f4b4333546b', 1, 1, 'MyToken', '[]', 0, '2021-08-23 20:12:58', '2021-08-23 20:12:58', '2022-08-24 03:12:58'),
('8bfd7e5d81002099ecd4cdae4261ca4248baf69ec9d523728dd9639ac87c342cbda8dcf7501b2364', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:52:04', '2021-08-23 18:52:04', '2022-08-24 01:52:04'),
('9247fbb7b9a3fb01de8514616a07c892acc3cdbf29f924672723f79c9db789a20cc8ccf9f7919b94', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:37:25', '2021-08-23 18:37:25', '2022-08-24 01:37:25'),
('94c84c28a6308ddb884f092d691e882cfdf4c0c8641cb947f15f1020acb8a7904524b1c33fb85078', 6, 1, 'namkhanh', '[]', 0, '2021-07-30 20:59:16', '2021-07-30 20:59:16', '2022-07-31 03:59:16'),
('97a07dc766926d3cdabe74b901f7beb0c94e9a5b5440be42db24a2b6e3d0b7ab2ced1c99b1216bd7', 6, 3, 'namkhanh', '[]', 0, '2021-09-27 02:50:51', '2021-09-27 02:50:51', '2022-09-27 09:50:51'),
('9e18858c5c4e31af9ac46b9c7c541bc4feb53d17d0da63ebc036ac1030ffaadef86cfbce92b3f25b', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:45:35', '2021-08-23 18:45:35', '2022-08-24 01:45:35'),
('a813cf669fecedead1913057d59e0117fdfa69335ab0188df893aade2b883018527721e0163596de', 6, 1, 'namkhanh', '[]', 0, '2021-09-07 09:08:24', '2021-09-07 09:08:24', '2022-09-07 16:08:24'),
('bad31f4ca7801dd23e9e253f978acfd6a266ccfd2569c484a722cd530b554dfe7c316eb451a9a1d1', 1, 3, 'MyToken', '[]', 0, '2021-10-17 07:23:07', '2021-10-17 07:23:07', '2022-10-17 14:23:07'),
('cb179b852015163e7f274c5eecfb47837c8248304ef5ad78c4f1726e9da06801465d4fb4874db140', 1, 1, 'MyToken', '[]', 0, '2021-09-05 18:57:48', '2021-09-05 18:57:48', '2022-09-06 01:57:48'),
('e70eb8da8184644c0ffedb292f978da7d6151c37593e2ada906b479f459382a26b9b5664396d1c74', 1, 1, 'MyToken', '[]', 0, '2021-09-24 01:53:19', '2021-09-24 01:53:19', '2022-09-24 08:53:19'),
('e83b73a20ac3e4259eba2d1352953a164220c113501817d605306410a7120d3104da1a5b6390e778', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:39:03', '2021-08-23 18:39:03', '2022-08-24 01:39:03'),
('ed960f5aade2ce006760a3cd7746484ab14c69d36554b001d59988743899ca8b2c950458257bead4', 1, 3, 'MyToken', '[]', 0, '2021-09-27 02:57:50', '2021-09-27 02:57:50', '2022-09-27 09:57:50'),
('f6793f86aea8caac974269133670c8f18ef1e6afd7173ac1cea5951552a69fca8b96e6a60716299c', 1, 3, 'MyToken', '[]', 0, '2021-10-15 19:04:19', '2021-10-15 19:04:19', '2022-10-16 02:04:19'),
('f8b1d995b3a79841ebcd1871d91d262e2bea7f51c8aa960e7ec7d686482e019256732bb8c547594c', 1, 3, 'MyToken', '[]', 0, '2021-10-01 00:52:14', '2021-10-01 00:52:14', '2022-10-01 07:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'WebNWA Personal Access Client', 'efJe1qCblnLKO4CWTu5sriCdbP3h928Z0xKrApFe', 'http://localhost', 1, 0, 0, '2021-07-26 01:05:17', '2021-07-26 01:05:17'),
(2, NULL, 'WebNWA Password Grant Client', '0HKOpXK2rFQxy01md9GGozaJGdYbABybAXU8lpdP', 'http://localhost', 0, 1, 0, '2021-07-26 01:05:17', '2021-07-26 01:05:17'),
(3, NULL, 'WebNWA Personal Access Client', 'Smy4oSo7SNmQ3y7K6cahwoBoaUxL56p5nVZ6KMn8', 'http://localhost', 1, 0, 0, '2021-09-27 02:50:38', '2021-09-27 02:50:38'),
(4, NULL, 'WebNWA Password Grant Client', 'hlmTJqHESr5ONXxpucRK02p5lfLzJCzdSRj8Awwv', 'http://localhost', 0, 1, 0, '2021-09-27 02:50:38', '2021-09-27 02:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-07-26 01:05:17', '2021-07-26 01:05:17'),
(2, 3, '2021-09-27 02:50:38', '2021-09-27 02:50:38');

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

-- --------------------------------------------------------

--
-- Table structure for table `pn_spares`
--

CREATE TABLE `pn_spares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pn_id` bigint(20) NOT NULL,
  `spare_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pn_spares`
--

INSERT INTO `pn_spares` (`id`, `pn_id`, `spare_id`) VALUES
(418, 352, 11),
(419, 353, 11),
(420, 353, 15),
(421, 354, 12),
(422, 354, 13),
(423, 356, 11),
(424, 356, 15),
(425, 357, 14),
(426, 357, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pn_works`
--

CREATE TABLE `pn_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pn_id` bigint(20) NOT NULL,
  `work_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pn_works`
--

INSERT INTO `pn_works` (`id`, `pn_id`, `work_id`) VALUES
(413, 352, 286),
(414, 353, 286),
(415, 353, 287),
(416, 354, 287),
(417, 354, 288),
(418, 356, 286),
(419, 356, 287),
(420, 357, 300),
(421, 357, 301);

-- --------------------------------------------------------

--
-- Table structure for table `price_notifications`
--

CREATE TABLE `price_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `assessor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_notifications`
--

INSERT INTO `price_notifications` (`id`, `status`, `customer_id`, `assessor`, `final_price`, `created_at`, `updated_at`) VALUES
(357, 0, 1, '', 0, '2021-09-27 00:09:52', '2021-09-26 17:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_spare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `name_spare`, `unit`, `serial`, `model`, `price`, `note`, `rating`, `created_at`, `updated_at`) VALUES
(18, 'Lốp xe', 'cái', '70033', '54555', 200000, 'Cần nhập nhiều', 1, '2021-08-08 21:40:46', '2021-09-13 05:23:58'),
(19, 'càng xe', 'cái', '500', 'QA230500', 200000, NULL, 2, '2021-08-08 21:40:46', '2021-09-19 20:28:30'),
(20, 'Dầu nhớt', 'Lít', '300', 'QD222A2', 200000, NULL, 3, '2021-08-08 21:40:46', '2021-09-13 05:23:48'),
(34, 'xi lanh abc', 'cái', '500', 'QA230511', 200000, '2', 3, '2021-09-13 05:24:19', '2021-09-19 20:28:43'),
(36, 'DDoo', 'lít', '500', 'QA230500', 200000, NULL, 0, '2021-09-13 18:20:21', '2021-09-21 01:41:52'),
(41, 'đasadas', 'đasa', 'đá', 'ádsa', 5000000, 'đasa', 1, '2021-11-05 02:19:13', '2021-11-05 02:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `status` bigint(20) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `customer_id`, `status`, `start_time`, `end_time`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-09-26 08:00:00', '2021-09-26 11:00:00', 'Bao Duong Gam Xe\r\n', NULL, '2021-10-01 02:23:46'),
(2, 2, 0, '2021-09-26 10:00:00', '2021-09-26 10:45:00', 'Bao Duong Gam Xe\r\n', NULL, '2021-09-30 01:58:04'),
(3, 3, 0, '2021-09-26 09:00:00', '2021-09-26 11:00:00', 'Bao Duong Gam Xe\r\n', NULL, '2021-09-30 02:00:43'),
(5, 16, 0, '2021-09-24 10:00:00', '2021-09-24 11:00:00', 'Bao Duong Gam Xe\r\n', NULL, '2021-09-30 02:00:43'),
(6, 16, 0, '2021-09-30 10:00:00', '2021-09-30 11:00:00', 'Bao Duong Gam Xe\r\n', NULL, '2021-09-30 02:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `start_time`, `end_time`, `group_id`) VALUES
(15, '20:50:00', '12:49:00', 27);

-- --------------------------------------------------------

--
-- Table structure for table `shift_times`
--

CREATE TABLE `shift_times` (
  `id` int(11) NOT NULL,
  `start_time1` time NOT NULL,
  `end_time1` time NOT NULL,
  `start_time2` time NOT NULL,
  `end_time2` time NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `times` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift_times`
--

INSERT INTO `shift_times` (`id`, `start_time1`, `end_time1`, `start_time2`, `end_time2`, `time_start`, `time_end`, `times`) VALUES
(1, '08:00:00', '12:00:00', '13:30:00', '17:30:00', '07:30:00', '18:00:00', 31);

-- --------------------------------------------------------

--
-- Table structure for table `spare_details`
--

CREATE TABLE `spare_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_supplier` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `price_reference` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spare_details`
--

INSERT INTO `spare_details` (`id`, `id_spare`, `id_supplier`, `amount`, `price_reference`, `created_at`, `updated_at`) VALUES
(12, 20, 7, 15, 100000, '2021-09-13 21:35:26', '2021-11-30 03:41:21'),
(13, 34, 6, 0, 150000, '2021-09-13 21:35:26', '2021-09-26 09:02:55'),
(14, 36, 6, 13, 150000, '2021-09-13 21:35:26', '2021-09-26 09:13:33'),
(15, 19, 6, 15, 300000, '2021-09-13 21:35:26', '2021-09-26 09:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `spare_ins`
--

CREATE TABLE `spare_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_filein` bigint(20) NOT NULL,
  `amount_in` bigint(20) NOT NULL,
  `price_in` bigint(20) NOT NULL,
  `all_in` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spare_ins`
--

INSERT INTO `spare_ins` (`id`, `content`, `id_spare`, `id_filein`, `amount_in`, `price_in`, `all_in`, `created_at`, `updated_at`) VALUES
(3, '', 14, 96, 13, 200000, 0, '2021-09-26 09:13:33', '2021-09-26 09:13:33'),
(4, '', 12, 96, 14, 200000, 0, '2021-09-26 09:13:33', '2021-09-26 09:13:33'),
(5, '', 15, 96, 15, 200000, 0, '2021-09-26 09:13:33', '2021-09-26 09:13:33'),
(6, '', 12, 98, 1, 200000, 0, '2021-11-30 03:41:21', '2021-11-30 03:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_fileout` bigint(20) NOT NULL,
  `amount_out` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `email`, `website`, `tax_code`, `note`, `rating`, `created_at`, `updated_at`) VALUES
(4, 'DNA', 'Hồng Bàng, HP', '0357836964', 'adnsse@gmail.com', 'hanam.atk.vn', '2423422334232232', NULL, NULL, '2021-07-31 09:10:17', '2021-07-31 09:10:17'),
(5, 'T1', 'Ngô Gia Tự, Hải An, Hải Phòng', '0357836964', 't1@lol.gmail.com', 't1.lol.vn', '1223224242', NULL, '3', '2021-08-01 00:59:42', '2021-09-13 05:31:59'),
(6, 'BBC', '23 Lê Chân HP', '0125458255', 'tbbc@gmail.com', 'luki@js.com', '021658482-222', NULL, NULL, '2021-08-12 21:30:28', '2021-08-12 21:30:28'),
(7, 'ĐM', '121 LKT HP', '0142552555', 'dms@gmail.com', 'ssw@dm.com', '22542225552-2', NULL, '3', '2021-08-12 21:30:28', '2021-09-13 05:47:42'),
(8, 'BBC', '12 LKT', '0357836964', 'tbbc112@gmail.com', 'bbc2@js.com', '021658A222', NULL, '0', '2021-09-12 21:31:23', '2021-09-21 02:10:17');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$pHDZ2I8XPvgeFVH5kKiNY.s3J3EZmR0YryBdUnNVeYS.9luueYutW', 'Nm915ygrNunCvR6o5LivNF4nFSERC1FvUevXagCTUvbXmbFmItAQ42CKcVZr', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjQ1NTdmM2FiN2M4ZmE5NDlhOWE5Nzc5OTkyMmYxZjg4MjViZTcwOWQ5OTNmMTJlYjA2N2ZjOGEwYjAwMmU1YTM3OGI5ZmQwOGZiNzA4OTM4In0.eyJhdWQiOiIzIiwianRpIjoiNDU1N2YzYWI3YzhmYTk0OWE5YTk3Nzk5OTIyZjFmODgyNWJlNzA5ZDk5M2YxMmViMDY3ZmM4YTB', '2021-06-30 19:01:37', '2021-11-27 08:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) NOT NULL,
  `name_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name_work`, `wage`, `created_at`, `updated_at`) VALUES
(286, 'thay lốp xe', 40000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(287, 'thay càng trước', 60000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(288, 'Rửa xe, thay dầu', 50000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(300, 'AA', 150000, '2021-08-12 20:36:09', '2021-08-12 20:36:09'),
(301, 'TT', 100000, '2021-08-12 20:36:09', '2021-08-12 20:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_api_token_unique` (`api_token`);

--
-- Indexes for table `file_ins`
--
ALTER TABLE `file_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_outs`
--
ALTER TABLE `file_outs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_spares`
--
ALTER TABLE `fin_spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fout_spares`
--
ALTER TABLE `fout_spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_shift`
--
ALTER TABLE `group_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_email_unique` (`email`);

--
-- Indexes for table `member_shift`
--
ALTER TABLE `member_shift`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

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
-- Indexes for table `pn_spares`
--
ALTER TABLE `pn_spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pn_works`
--
ALTER TABLE `pn_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_notifications`
--
ALTER TABLE `price_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift_times`
--
ALTER TABLE `shift_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_details`
--
ALTER TABLE `spare_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_ins`
--
ALTER TABLE `spare_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `file_ins`
--
ALTER TABLE `file_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `file_outs`
--
ALTER TABLE `file_outs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fin_spares`
--
ALTER TABLE `fin_spares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `fout_spares`
--
ALTER TABLE `fout_spares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `group_shift`
--
ALTER TABLE `group_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `member_shift`
--
ALTER TABLE `member_shift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pn_spares`
--
ALTER TABLE `pn_spares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `pn_works`
--
ALTER TABLE `pn_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT for table `price_notifications`
--
ALTER TABLE `price_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shift_times`
--
ALTER TABLE `shift_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spare_details`
--
ALTER TABLE `spare_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `spare_ins`
--
ALTER TABLE `spare_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
