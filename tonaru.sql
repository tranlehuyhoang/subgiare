-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2023 at 12:14 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tonaru.id.vn_byto`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_banks`
--

CREATE TABLE `account_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `min_bank` varchar(255) DEFAULT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_banks`
--

INSERT INTO `account_banks` (`id`, `type`, `username`, `account_name`, `account_number`, `password`, `bank_name`, `logo`, `min_bank`, `notice`, `token`, `created_at`, `updated_at`) VALUES
(3, 'apigiare', 'tonaru', 'BANH GIA PHAT', '0927196768', 'a', 'mbbank', 'https://upload.wikimedia.org/wikipedia/commons/2/25/Logo_MB_new.png', '10000', 'Thời gian cộng tiền từ 1 đến 30p', 'a', '2023-08-10 19:13:54', '2023-08-10 19:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `account_fbs`
--

CREATE TABLE `account_fbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `twofa` varchar(255) DEFAULT NULL,
  `cookie` text DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `passMail` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `notice` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_histories`
--

CREATE TABLE `account_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_histories`
--

INSERT INTO `account_histories` (`id`, `username`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 'quyetcoder2k3', 'Bạn đã order sub vip với số lượng 1000 tổng tiền 1100', NULL, '2022-06-13 04:18:19', '2022-06-13 04:18:19'),
(2, 'Nghiep207', 'Bạn đã order sub vip với số lượng 5000 tổng tiền 5500', NULL, '2022-06-13 06:02:30', '2022-06-13 06:02:30'),
(3, 'quyetcoder2k3', 'Bạn đã order sub vip với số lượng 1000 tổng tiền 1100', NULL, '2022-06-13 07:32:58', '2022-06-13 07:32:58'),
(4, 'Nghiep207', 'Bạn đã order sub vip với số lượng 8000 tổng tiền 8000', NULL, '2022-06-13 07:41:01', '2022-06-13 07:41:01'),
(5, 'quyetcoder2k3', 'Bạn đã order sub vip với số lượng 10000 tổng tiền 11000', NULL, '2022-06-13 12:38:38', '2022-06-13 12:38:38'),
(6, 'luuvanhau', 'Bạn đã order sub vip với số lượng 10000 tổng tiền 10000', NULL, '2022-06-13 13:18:08', '2022-06-13 13:18:08'),
(7, 'quyetcoder2k3', 'Bạn đã order sub vip với số lượng 20000 tổng tiền 22000', NULL, '2022-06-13 13:34:44', '2022-06-13 13:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `block_ips`
--

CREATE TABLE `block_ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_orders`
--

CREATE TABLE `client_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `time_order` varchar(255) DEFAULT NULL,
  `total_money` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `link_order` varchar(999) NOT NULL,
  `server_order` varchar(255) NOT NULL,
  `interactive` varchar(255) DEFAULT NULL,
  `type_order` varchar(255) DEFAULT NULL,
  `startWith` varchar(255) DEFAULT NULL,
  `buff` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `code_order` varchar(255) DEFAULT NULL,
  `id_order` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `type_service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_orders`
--

INSERT INTO `client_orders` (`id`, `username`, `type`, `amount`, `time_order`, `total_money`, `price`, `link_order`, `server_order`, `interactive`, `type_order`, `startWith`, `buff`, `status`, `code_order`, `id_order`, `ghichu`, `type_service`, `created_at`, `updated_at`) VALUES
(1, 'quyetcoder2k3', 'sub-vip', '1000', '1655093899', '1100', '1.1', '100044825776500', 'sv3', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_YF92LGB4AVFR', 'A0ukyj4RK1', '', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 04:18:19', '2022-06-13 04:18:19'),
(2, 'Nghiep207', 'sub-vip', '5000', '1655100150', '5500', '1.1', '100077013593389', 'sv3', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_F6OT4L89XGSQ', 'nRCpZyemmJ', '', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 06:02:30', '2022-06-13 06:02:30'),
(3, 'quyetcoder2k3', 'sub-vip', '1000', '1655105578', '1100', '1.1', '100044825776500', 'sv3', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_58D5FU9HLFVH', '3sdwYcm0CD', 'Ok', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 07:32:58', '2022-06-13 07:32:58'),
(4, 'Nghiep207', 'sub-vip', '8000', '1655106061', '8000', '1', '100077013593389', 'sv4', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_O2Q1VMUGB8IB', '7387xwpDS8', '', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 07:41:01', '2022-06-13 07:41:01'),
(5, 'quyetcoder2k3', 'sub-vip', '10000', '1655123918', '11000', '1.1', '100044825776500', 'sv3', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_QBBQATYQHXDP', 'sGZaOKPqFl', '', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 12:38:38', '2022-06-13 12:38:38'),
(6, 'luuvanhau', 'sub-vip', '10000', '1655126288', '10000', '1', '100000490783536', 'sv4', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_8FJZD6I8ME4A', 'jbRLPuQNVw', '', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 13:18:08', '2022-06-13 13:18:08'),
(7, 'quyetcoder2k3', 'sub-vip', '20000', '1655127284', '22000', '1.1', '100044825776500', 'sv3', NULL, NULL, NULL, NULL, 'Start', 'FbSubVip_NEVX3WT1Q40Q', '5RDRKIhc8R', 'Ok', '47821377a5fbb5c49bc4727b075dc861', '2022-06-13 13:34:44', '2022-06-13 13:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `history_banks`
--

CREATE TABLE `history_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `card_price` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `thucnhan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `transid` varchar(255) DEFAULT NULL,
  `taskid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2022_05_20_015109_create_site_configs_table', 1),
(3, '2022_05_21_143956_create_notices_table', 1),
(4, '2022_05_21_172506_create_service_servers_table', 1),
(5, '2022_05_24_112428_create_client_orders_table', 1),
(6, '2022_06_01_012203_create_history_banks_table', 1),
(7, '2022_06_01_095742_create_account_histories_table', 1),
(8, '2022_06_04_163752_create_sub_webs_table', 1),
(9, '2022_06_08_213505_create_account_banks_table', 1),
(10, '2022_06_11_163556_create_block_ips_table', 1),
(11, '2022_06_12_181928_create_account_fbs_table', 1),
(12, '2022_06_12_183513_create_user_buy_accounts_table', 1),
(13, '2022_06_12_232932_create_notice_accfbs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `username`, `content`, `created_at`, `updated_at`) VALUES
(6, NULL, 'Code By tonaru', '2023-08-10 19:09:52', '2023-08-10 19:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `notice_accfbs`
--

CREATE TABLE `notice_accfbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_accfbs`
--

INSERT INTO `notice_accfbs` (`id`, `type`, `content`, `price`, `created_at`, `updated_at`) VALUES
(1, 'clone', 'Facebook Test - Name US', '60', NULL, '2022-06-13 04:03:23'),
(2, 'via', 'via víp', '1', NULL, NULL),
(3, 'tds', 'tds víp', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_servers`
--

CREATE TABLE `service_servers` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `code_server` varchar(255) NOT NULL,
  `name_server` varchar(255) DEFAULT NULL,
  `server_service` varchar(255) DEFAULT NULL,
  `rate_server` varchar(255) NOT NULL,
  `title_server` varchar(255) NOT NULL,
  `content_server` varchar(255) DEFAULT NULL,
  `status_server` varchar(255) NOT NULL,
  `reaction` varchar(255) DEFAULT NULL,
  `api_server` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_servers`
--

INSERT INTO `service_servers` (`id`, `type`, `code_server`, `name_server`, `server_service`, `rate_server`, `title_server`, `content_server`, `status_server`, `reaction`, `api_server`, `created_at`, `updated_at`) VALUES
(7, 'facebook', 'like-post-sale', NULL, 'sv9', '7.5', 'Clone nuôi, max 1m5 sub, bảo hành 7 ngày (nên dùng ổn định)', '- Tốc độ ổn 1k -> 3k/ngày, không bảo hành.', 'on', NULL, 'subgiare', '2023-08-10 18:49:20', '2023-08-10 18:49:20'),
(8, 'facebook', 'sub-vip', NULL, 'sv4', '10', 'Clone nuôi, max 1m5 sub, bảo hành 7 ngày (nên dùng ổn định)', '- Tốc độ ổn 1k -> 3k/ngày, không bảo hành.', 'on', NULL, 'subgiare', '2023-08-10 19:10:21', '2023-08-10 19:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `site_configs`
--

CREATE TABLE `site_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_configs`
--

INSERT INTO `site_configs` (`id`, `name`, `value`) VALUES
(1, 'domain', 'TONARU.ID.VN'),
(2, 'logoWeb', 'https://imgur.com/a/rO2txfO'),
(3, 'transfer_code', ''),
(4, 'card_type', 'thesieure'),
(5, 'parther_id', 'LBD'),
(6, 'parther_key', 'LBD'),
(7, 'thongbao', 'hi'),
(8, 'token_facebook', 'null'),
(9, 'api_tele', '1'),
(10, 'id_chat_tele', '1'),
(11, 'charge_level_TV', '10'),
(12, 'charge_level_CTV', '20'),
(13, 'charge_level_DL', '30'),
(14, 'charge_level_NPP', '100'),
(15, 'discount_TV', '1'),
(16, 'discount_CTV', '1'),
(17, 'discount_DL', '2'),
(18, 'discount_NPP', '3'),
(19, 'card_discount', '30'),
(20, 'admin_name', 'Bành Gia Phát'),
(21, 'facebook_admin', 'https://www.facebook.com/to.naru.50115/'),
(22, 'zalo_admin', 'https://zalo.me/0927196768'),
(23, 'subgiare', 'show'),
(24, 'baostar', 'hide'),
(25, 'logo', 'TONARU.ID.VN'),
(26, 'favicon', 'link'),
(27, 'token_subgiare', 'eyJpdiI6IlhvRGVkdWNBelkyNVQycSszLzI5V2c9PSIsInZhbHVlIjoiaU54enpveEc0Q2loWC9rMXRQWkxQc0RqaUZkdzIvKzFEODZLc1VvTHZVTXlkcTJtTmV3UDFHMmxhU2wvN1NNM2R5aUpkc0lVZEdQeUE1azlzVWN1cXVwK3MyRzU4bmNHOUNZNEx6anZ0bXBsSlVpRkJsMlc0L3F5R0lXWmgvczdBTXBKTmUrNDdUaWV4aGp1cncrcEVnPT0iLCJtYWMiOiI0MjA5MzM4ZTNmNDM0OTFiZDRiNmRhODFkNWVjMWExOWQxNjYxNGEwODgwZmJiYjQ5NDVjYWExMmZiYzNkNzFiIiwidGFnIjoiIn0='),
(28, 'token_baostar', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `sub_webs`
--

CREATE TABLE `sub_webs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `api_token` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
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
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `total_charge` varchar(255) NOT NULL,
  `total_minus` varchar(255) NOT NULL,
  `banned` varchar(255) DEFAULT NULL,
  `time_banned` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `api_token` varchar(999) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `money`, `total_charge`, `total_minus`, `banned`, `time_banned`, `ip`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'BANH GIA PHAT', 'tonaru', 'banhgaiphat27@gmail.com', '$2y$10$5dcjbT3CfRoydBzd81QmDu2feFAQTTf0f5FM9vdNdQ.Qal4o..nMq', 'admin', '0', '0', '0', '0', NULL, '171.245.183.90', 'KIG7BHYQ4taFxQguC5YFEJZwCviDyXUChHJWNu7S0xykb3j8PkH9EIhqKQvw', NULL, '2023-08-10 18:48:03', '2023-08-10 18:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_buy_accounts`
--

CREATE TABLE `user_buy_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `twofa` varchar(255) DEFAULT NULL,
  `cookie` text DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `passMail` varchar(255) DEFAULT NULL,
  `notice` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_buy_accounts`
--

INSERT INTO `user_buy_accounts` (`id`, `type`, `username`, `uid`, `pass`, `twofa`, `cookie`, `token`, `mail`, `passMail`, `notice`, `created_at`, `updated_at`) VALUES
(1, 'clone', 'quyetcoder2k3', '4', '1', NULL, 'hfkeowofnnf', '5688', 'jeoeoe', 'hfkeke', NULL, '2022-06-13 08:00:20', '2022-06-13 08:00:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_banks`
--
ALTER TABLE `account_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_fbs`
--
ALTER TABLE `account_fbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_histories`
--
ALTER TABLE `account_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_ips`
--
ALTER TABLE `block_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_orders`
--
ALTER TABLE `client_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_banks`
--
ALTER TABLE `history_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_accfbs`
--
ALTER TABLE `notice_accfbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_servers`
--
ALTER TABLE `service_servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_configs`
--
ALTER TABLE `site_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_webs`
--
ALTER TABLE `sub_webs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_buy_accounts`
--
ALTER TABLE `user_buy_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_banks`
--
ALTER TABLE `account_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `account_fbs`
--
ALTER TABLE `account_fbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_histories`
--
ALTER TABLE `account_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `block_ips`
--
ALTER TABLE `block_ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_orders`
--
ALTER TABLE `client_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history_banks`
--
ALTER TABLE `history_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice_accfbs`
--
ALTER TABLE `notice_accfbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_servers`
--
ALTER TABLE `service_servers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_webs`
--
ALTER TABLE `sub_webs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_buy_accounts`
--
ALTER TABLE `user_buy_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
