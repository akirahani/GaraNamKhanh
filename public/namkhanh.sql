-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2021 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `namkhanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT curdate(),
  `time_in` time NOT NULL DEFAULT curtime(),
  `time_out` time DEFAULT NULL,
  `type` int(2) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attendance`
--

INSERT INTO `attendance` (`id`, `member_id`, `date`, `time_in`, `time_out`, `type`, `status`, `shift_id`, `created_at`, `updated_at`) VALUES
(109, 6, '2021-07-14', '13:02:36', '17:02:48', 1, '0', 44, '2021-07-14 03:02:36', '2021-07-14 10:02:36'),
(110, 6, '2021-07-14', '17:13:20', '21:13:30', 1, '0', 44, '2021-07-14 03:13:20', '2021-07-14 10:13:20'),
(111, 6, '2021-07-15', '08:00:00', '09:48:06', 1, '0', 43, '2021-07-14 18:18:34', '2021-07-15 01:18:34'),
(112, 7, '2021-07-15', '10:11:03', '10:11:12', 1, '0', 43, '2021-07-14 20:11:03', '2021-07-15 03:11:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
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
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `hour`, `day`, `run_distance`, `status`, `want`, `customer_id`, `created_at`, `updated_at`) VALUES
(24, '08:30:00', '2021-08-26', 1000, 1, 'bảo dưỡng xe', 2, '2021-08-24 19:51:57', '2021-08-24 19:52:03'),
(25, '08:30:00', '2021-08-26', 1000, 1, 'bảo dưỡng xe', 1, '2021-08-24 20:29:37', '2021-08-24 21:04:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_date` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `calendars`
--

INSERT INTO `calendars` (`id`, `type_date`, `date`, `title`, `created_at`, `updated_at`) VALUES
(324, 1, '2021-06-29 00:00:00', 'Công tác', '2021-07-06 20:56:48', '2021-07-06 20:56:48'),
(325, 1, '2021-08-18 00:00:00', 'holiday', '2021-08-23 19:08:45', '2021-08-23 19:08:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_manufacture` year(4) NOT NULL,
  `run_distance` bigint(20) NOT NULL,
  `id_company` bigint(20) NOT NULL,
  `id_type` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`id`, `license_plate`, `name`, `engine`, `chassis`, `color`, `year_manufacture`, `run_distance`, `id_company`, `id_type`, `customer_id`, `created_at`, `updated_at`) VALUES
(11, '15BA2198', 'Ferrari F430', '3223654', '21287', 'đỏ', 2012, 120, 5, 4, 2, '2021-08-17 18:57:29', '2021-08-17 18:57:29'),
(17, '15BA1108', 'VinATXRT', '3254577', '45848', 'trắng đen', 1998, 120, 4, 3, 3, '2021-08-24 20:42:07', '2021-08-24 20:42:07'),
(18, '15BA0489', 'Hà Linh', '2414578', '26422', 'đỏ trắng', 1998, 300, 5, 1, 1, '2021-08-24 20:49:01', '2021-08-24 20:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `car_types`
--

CREATE TABLE `car_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `car_types`
--

INSERT INTO `car_types` (`id`, `name_type`, `vehicles`, `created_at`, `updated_at`) VALUES
(1, 'Xe 4 chỗ', 'Kia', '2021-08-16 23:34:53', '2021-08-17 01:37:08'),
(3, 'Xe 4 chỗ', 'Vin', '2021-08-17 02:05:28', '2021-08-17 02:05:28'),
(4, 'Xe ô tô con', 'Ferrari', '2021-08-17 18:52:30', '2021-08-17 18:52:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id`, `session`, `created_at`, `updated_at`) VALUES
(1, 'bff68b3348977918fcd8a8e6c9e0512b', NULL, '2021-07-14 23:03:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `email`, `email_verified_at`, `api_token`, `remember_token`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Đình Đức', 'Hồng Bàng, HP', '0357836964', 'dinhduc0803@gmail.com', NULL, NULL, NULL, '$2y$10$683VmLPeG0ANme.RypsgAeU8IGpwxjdx9GvhaZgQWgwDSXfrFWD4K', '2021-08-15 00:33:31', '2021-08-17 21:22:47'),
(2, 'Hà Linh', 'Hồng Bàng, HP', '0125578988', 'halinh1102@gmail.com', NULL, NULL, NULL, '$2y$10$8OnWSPFknM2fUxjpPCp3Jemc8/XownPB4fTWkkPxcKXLyN5vuUYtS', '2021-08-15 00:34:01', '2021-08-17 21:23:01'),
(3, 'Dương Đức Hiếu', '123 HA3', '0528575222', 'hieu11081@gmail.com', NULL, NULL, NULL, '$2y$10$00HjxFp3nQIuMOY9zluPGetIthxxh5aoeWn4tD.K9zjHSnojorZuW', '2021-08-17 21:13:55', '2021-08-17 21:24:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_shift`
--

CREATE TABLE `group_shift` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `group_shift`
--

INSERT INTO `group_shift` (`id`, `name`) VALUES
(17, 'HC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `name`, `phone`, `address`, `website`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Kia VN', '0125458255', '23 Lê Chân HP', 'luki@js.com', 'kiavn@gmail.com', '2021-08-17 01:02:52', '2021-08-17 01:37:29'),
(4, 'VinAR', '0125458255', '12 LKT', 'luki@j32s.com', 'tbbc@gmail.com', '2021-08-17 02:05:10', '2021-08-17 02:05:10'),
(5, 'DA- Ferrari', '0125855855', '24 Tôn Đức Thắng', 'ferraris2@js.com', 'ffaree@gmail.com', '2021-08-17 18:54:51', '2021-08-17 18:54:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `token`, `created_at`, `updated_at`) VALUES
(6, 'user1', 'user01@gmail.com', NULL, '$2y$10$ndshBY2P39lJRn6d1/qn7.MAWM4Hvnfa0x7aQ0eE7lHtUMr56P5jq', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijk0Yzg0YzI4YTYzMDhkZGI4ODRmMDkyZDY5MWU4ODJjZmRmNGMwYzg2NDFjYjk0N2YxNWYxMDIwYWNiOGE3OTA0NTI0YjFjMzNmYjg1MDc4In0.eyJhdWQiOiIxIiwianRpIjoiOTRjODRjMjhhNjMwOGRkYjg4NGYwOTJkNjkxZTg4MmNmZGY0YzBjODY0MWNiOTQ3ZjE1ZjEwMjBhY2I4YTc5MDQ1MjRiMWMzM2ZiODUwNzgiLCJpYXQiOjE2Mjc3MDM5NTYsIm5iZiI6MTYyNzcwMzk1NiwiZXhwIjoxNjU5MjM5OTU2LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.B3hzPCOLcoaIUGCYHAbaucMndRASbBXXxdUaj4ny-L_V2eLdnmQwC3iJDUU8GUtylpIrrJnj_clRktzPC-fLdhDrDHfpOl6S4wAkVnjfoB_j_XEnoBs0SsEJeKTF8emLHZiHR3EsyYP4_P-cQCpRHKT3f8o8Xj0b9h998ZQRXDqYJogIeOn3k0BR2YEQenQHX905FwH7BNRS28P4u9PdTg2_ZmOBEXw5eQU6WbfZPZCp2_DryVo2lzFW2x0YTzAQTzKglDMIoSIiQe86yomiaGSfx3tFv9kn-utdWcWzkZSEEzuZ9jL-5_HkpugdtZ_aYR-4H2KjMxBNFFLrCiHaGX9dpj3A7MJ5ziIW0UDJuu3kpGgZ8_a45hRCcrW0TFeJxMpK4JOf8btM6MntzM4QUotaI8NFSzjTy8o9lp-_IQAvlGbOlAYAMu2OhVAqiYRw_mqhVM-Lixdp-m4iii0nNLBqZ8PN9ByGvzD4wznuu8k0eJI7IZ9l1y_XjYy-i1jzL_YF_Idw19DDgERBbfV0He-8ASnEjSpoLj6OzoEH-Zv7M7y8s9eamztJv1Wp0MmUfR_yX_yUYY8SIJIoNGpYdYa4uiEDfJDFph5DpfQ2Fx_BleKytjy3cIZxbjiVGplO1q9-5uF4Ki7tDUt6Xg5ZtAp2cuWfk7XWiyw6J1vb6E4', '2021-07-01 10:06:11', '2021-07-30 20:59:16'),
(7, 'user2', 'user02@gmail.com', NULL, '$2y$10$43Z9d44IJSIIWDQ2SbKHQeGlfdofMQMlOzi61e/exUzit6pG0mykW', NULL, NULL, '2021-07-01 10:06:19', '2021-07-19 23:57:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member_shift`
--

CREATE TABLE `member_shift` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(255) DEFAULT NULL,
  `group_id` int(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member_shift`
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
(112, 6, 17, '2021-07-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
(90, '2021_08_31_014437_create_pn_outs_table', 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_access_tokens`
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
-- Đang đổ dữ liệu cho bảng `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0c7e0148e2e7c38bf1452201a7adaa1e9746d90ecf1651e657c18210589ba2eae4bed0dbd0b33d7c', 6, 1, 'namkhanh', '[]', 0, '2021-07-26 02:44:52', '2021-07-26 02:44:52', '2022-07-26 09:44:52'),
('1be8bf9f986a4118f0095540203438fb34b109b882326f51a8ee0d20844ec43b8ea244b173955084', 1, 1, 'MyToken', '[]', 0, '2021-08-23 20:12:15', '2021-08-23 20:12:15', '2022-08-24 03:12:15'),
('1e9e097ebe02327bdd352667c59af66aae1b0d091f192a81e938a5f5bdb3cdfb502c19013118124f', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:38:05', '2021-08-23 18:38:05', '2022-08-24 01:38:05'),
('630ceb4bfae6e3ff17403e73cad0c36f7ccddade935a0cb9c1227f8373b15129373dd340a64ebe5a', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:51:16', '2021-08-23 18:51:16', '2022-08-24 01:51:16'),
('6a33a04e74ec2b4b958138734665d8bce2e6c7e121924fdd233a029d6f20e7e145ca1ec226b69cce', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:36:50', '2021-08-23 18:36:50', '2022-08-24 01:36:50'),
('712645b6d8010c895ded5fe1a1be4fa4f28d6b7723f95cbed134657fdf942287f8024f4b4333546b', 1, 1, 'MyToken', '[]', 0, '2021-08-23 20:12:58', '2021-08-23 20:12:58', '2022-08-24 03:12:58'),
('8bfd7e5d81002099ecd4cdae4261ca4248baf69ec9d523728dd9639ac87c342cbda8dcf7501b2364', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:52:04', '2021-08-23 18:52:04', '2022-08-24 01:52:04'),
('9247fbb7b9a3fb01de8514616a07c892acc3cdbf29f924672723f79c9db789a20cc8ccf9f7919b94', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:37:25', '2021-08-23 18:37:25', '2022-08-24 01:37:25'),
('94c84c28a6308ddb884f092d691e882cfdf4c0c8641cb947f15f1020acb8a7904524b1c33fb85078', 6, 1, 'namkhanh', '[]', 0, '2021-07-30 20:59:16', '2021-07-30 20:59:16', '2022-07-31 03:59:16'),
('9e18858c5c4e31af9ac46b9c7c541bc4feb53d17d0da63ebc036ac1030ffaadef86cfbce92b3f25b', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:45:35', '2021-08-23 18:45:35', '2022-08-24 01:45:35'),
('e83b73a20ac3e4259eba2d1352953a164220c113501817d605306410a7120d3104da1a5b6390e778', 1, 1, 'MyToken', '[]', 0, '2021-08-23 18:39:03', '2021-08-23 18:39:03', '2022-08-24 01:39:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_auth_codes`
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
-- Cấu trúc bảng cho bảng `oauth_clients`
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
-- Đang đổ dữ liệu cho bảng `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'WebNWA Personal Access Client', 'efJe1qCblnLKO4CWTu5sriCdbP3h928Z0xKrApFe', 'http://localhost', 1, 0, 0, '2021-07-26 01:05:17', '2021-07-26 01:05:17'),
(2, NULL, 'WebNWA Password Grant Client', '0HKOpXK2rFQxy01md9GGozaJGdYbABybAXU8lpdP', 'http://localhost', 0, 1, 0, '2021-07-26 01:05:17', '2021-07-26 01:05:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-07-26 01:05:17', '2021-07-26 01:05:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pn_ins`
--

CREATE TABLE `pn_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pn` bigint(20) NOT NULL,
  `id_in` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pn_outs`
--

CREATE TABLE `pn_outs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pn` bigint(20) NOT NULL,
  `id_out` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pn_spares`
--

CREATE TABLE `pn_spares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pn_id` bigint(20) NOT NULL,
  `spare_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pn_spares`
--

INSERT INTO `pn_spares` (`id`, `pn_id`, `spare_id`) VALUES
(386, 338, 5),
(387, 338, 6),
(388, 338, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pn_works`
--

CREATE TABLE `pn_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pn_id` bigint(20) NOT NULL,
  `work_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pn_works`
--

INSERT INTO `pn_works` (`id`, `pn_id`, `work_id`) VALUES
(384, 338, 286),
(385, 338, 287),
(386, 338, 288);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_notifications`
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
-- Đang đổ dữ liệu cho bảng `price_notifications`
--

INSERT INTO `price_notifications` (`id`, `status`, `customer_id`, `assessor`, `final_price`, `created_at`, `updated_at`) VALUES
(338, 2, 1, 'Nguyễn An', 500000, '2021-08-31 04:22:35', '2021-08-30 21:23:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_spare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `references`
--

INSERT INTO `references` (`id`, `name_spare`, `unit`, `created_at`, `updated_at`) VALUES
(18, 'Lốp xe', 'cái', '2021-08-08 21:40:46', '2021-08-11 00:00:56'),
(19, 'càng xe', 'cái', '2021-08-08 21:40:46', '2021-08-08 21:40:46'),
(20, 'Dầu nhớt', 'Lít', '2021-08-08 21:40:46', '2021-08-08 21:40:46'),
(30, 'TT', 'cái', '2021-08-12 20:36:26', '2021-08-12 20:36:26'),
(31, 'AA1', 'cái', '2021-08-12 21:08:04', '2021-08-12 21:08:04'),
(32, 'DD', 'cái', '2021-08-12 21:08:04', '2021-08-12 21:08:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shift`
--

CREATE TABLE `shift` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shift`
--

INSERT INTO `shift` (`id`, `start_time`, `end_time`, `group_id`) VALUES
(43, '08:00:00', '12:00:00', 17),
(44, '13:00:00', '17:30:00', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spare_details`
--

CREATE TABLE `spare_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_supplier` bigint(20) NOT NULL,
  `id_type` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `price_reference` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spare_details`
--

INSERT INTO `spare_details` (`id`, `id_spare`, `id_supplier`, `id_type`, `amount`, `price_reference`, `created_at`, `updated_at`) VALUES
(5, 18, 4, 3, 0, 100000, '2021-08-15 02:39:27', '2021-08-30 21:23:16'),
(6, 19, 5, 4, 0, 350000, '2021-08-15 02:39:27', '2021-08-30 21:23:16'),
(7, 20, 4, 11, 0, 150000, '2021-08-15 02:39:27', '2021-08-30 21:23:16'),
(8, 18, 5, 4, 0, 150000, '2021-08-15 02:39:27', '2021-08-24 21:24:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spare_ins`
--

CREATE TABLE `spare_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_notification` bigint(20) NOT NULL,
  `amount_in` bigint(20) NOT NULL,
  `price_in` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spare_ins`
--

INSERT INTO `spare_ins` (`id`, `id_spare`, `id_notification`, `amount_in`, `price_in`, `created_at`, `updated_at`) VALUES
(229, 5, 338, 2, 50000, '2021-08-30 21:23:10', '2021-08-30 21:23:10'),
(230, 6, 338, 1, 310000, '2021-08-30 21:23:10', '2021-08-30 21:23:10'),
(231, 7, 338, 3, 110000, '2021-08-30 21:23:10', '2021-08-30 21:23:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_spare` bigint(20) NOT NULL,
  `id_notification` bigint(20) NOT NULL,
  `amount_out` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spare_parts`
--

INSERT INTO `spare_parts` (`id`, `id_spare`, `id_notification`, `amount_out`, `unit_price`, `total_price`, `created_at`, `updated_at`) VALUES
(125, 5, 338, 2, 100000, 200000, '2021-08-30 21:23:16', '2021-08-30 21:23:16'),
(126, 6, 338, 1, 350000, 350000, '2021-08-30 21:23:16', '2021-08-30 21:23:16'),
(127, 7, 338, 3, 150000, 450000, '2021-08-30 21:23:16', '2021-08-30 21:23:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `email`, `website`, `tax_code`, `created_at`, `updated_at`) VALUES
(4, 'DNA', 'Hồng Bàng, HP', '0357836964', 'adnsse@gmail.com', 'hanam.atk.vn', '2423422334232232', '2021-07-31 09:10:17', '2021-07-31 09:10:17'),
(5, 'T1', 'Ngô Gia Tự, Hải An, Hải Phòng', '0357836964', 't1@lol.gmail.com', 't1.lol.vn', '1223224242', '2021-08-01 00:59:42', '2021-08-01 00:59:42'),
(6, 'BBC', '23 Lê Chân HP', '0125458255', 'tbbc@gmail.com', 'luki@js.com', '021658482-222', '2021-08-12 21:30:28', '2021-08-12 21:30:28'),
(7, 'ĐM', '121 LKT HP', '0142552555', 'dms@gmail.com', 'ssw@dm.com', '22542225552-2', '2021-08-12 21:30:28', '2021-08-12 21:30:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_spares`
--

CREATE TABLE `type_spares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_spares`
--

INSERT INTO `type_spares` (`id`, `serial`, `model`, `created_at`, `updated_at`) VALUES
(3, '700', 'QA230500', '2021-08-02 18:22:40', '2021-08-03 21:40:39'),
(4, '300', 'QA230511', '2021-08-02 18:22:51', '2021-08-02 18:38:02'),
(6, '500', 'QD222A2', '2021-08-08 04:26:12', '2021-08-08 04:26:12'),
(11, '450', 'QADDH231', '2021-08-12 21:01:19', '2021-08-12 21:01:19'),
(12, '500', 'QDEEW221', '2021-08-12 21:01:19', '2021-08-12 21:01:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$pHDZ2I8XPvgeFVH5kKiNY.s3J3EZmR0YryBdUnNVeYS.9luueYutW', 'BJXLxY1CYtzGU9NZkWQeECF8g2uJiV5nXlJKYyHRee6vJkf8KTgScSjv3Pwu', '2021-06-30 19:01:37', '2021-06-30 19:01:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `works`
--

CREATE TABLE `works` (
  `id` bigint(20) NOT NULL,
  `name_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `works`
--

INSERT INTO `works` (`id`, `name_work`, `wage`, `created_at`, `updated_at`) VALUES
(286, 'thay lốp xe', 40000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(287, 'thay càng trước', 60000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(288, 'Rửa xe, thay dầu', 50000, '2021-08-08 21:41:46', '2021-08-08 21:41:46'),
(300, 'AA', 150000, '2021-08-12 20:36:09', '2021-08-12 20:36:09'),
(301, 'TT', 100000, '2021-08-12 20:36:09', '2021-08-12 20:36:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_api_token_unique` (`api_token`);

--
-- Chỉ mục cho bảng `group_shift`
--
ALTER TABLE `group_shift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_email_unique` (`email`);

--
-- Chỉ mục cho bảng `member_shift`
--
ALTER TABLE `member_shift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Chỉ mục cho bảng `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `pn_ins`
--
ALTER TABLE `pn_ins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pn_outs`
--
ALTER TABLE `pn_outs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pn_spares`
--
ALTER TABLE `pn_spares`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pn_works`
--
ALTER TABLE `pn_works`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `price_notifications`
--
ALTER TABLE `price_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spare_details`
--
ALTER TABLE `spare_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spare_ins`
--
ALTER TABLE `spare_ins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_spares`
--
ALTER TABLE `type_spares`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT cho bảng `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `group_shift`
--
ALTER TABLE `group_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `member_shift`
--
ALTER TABLE `member_shift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `pn_ins`
--
ALTER TABLE `pn_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `pn_outs`
--
ALTER TABLE `pn_outs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pn_spares`
--
ALTER TABLE `pn_spares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT cho bảng `pn_works`
--
ALTER TABLE `pn_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

--
-- AUTO_INCREMENT cho bảng `price_notifications`
--
ALTER TABLE `price_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT cho bảng `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `shift`
--
ALTER TABLE `shift`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `spare_details`
--
ALTER TABLE `spare_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `spare_ins`
--
ALTER TABLE `spare_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT cho bảng `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `type_spares`
--
ALTER TABLE `type_spares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
