-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2019 at 06:57 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopkhanhmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 'iphone', NULL, '2019-01-17 03:27:50'),
(2, 'SamSung', 'samsung', NULL, NULL),
(3, 'LG', 'lg', '2019-01-17 02:50:31', '2019-01-17 02:50:31'),
(4, 'Motorola', 'motorola', '2019-01-17 02:50:44', '2019-01-17 02:50:44'),
(6, 'Huawei', 'huawei', '2019-01-17 19:23:04', '2019-01-17 19:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `km_users`
--

CREATE TABLE `km_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `km_users`
--

INSERT INTO `km_users` (`id`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Mdbgmkh/F32px7k2dDXl9OBcmvp8/KD6SKB3ZeHooNMuxoYpII4hW', 1, 'tttdrs3aFW5rfEgRgVccZOrUefoHdszxgbcV2nJrLltc6oyvAJyz416bLuqO', NULL, NULL),
(2, 'huutx', 'huutx@vinsofts.net', '$2y$10$TmdGoOYlNzfvKwdA5PAQVuwuLcNWacJx2ibFlgv7LK8kIpnKdg1Xm', 1, NULL, NULL, NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_01_15_070453_create_khanhmy_users_table', 1),
(9, '2019_01_17_085126_create_category_table', 1),
(10, '2019_01_23_033259_create_product_table', 2);

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
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`prod_id`, `name`, `slug`, `price`, `image`, `warranty`, `accessories`, `condition`, `promotion`, `status`, `description`, `featured`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Samsung A8', 'samsung-a8', 6000000, '24-01-2019-product-2.png', '2 năm', 'Cáp sạc', 'Fullbox', '300k', 1, '<p>Mẫu m&atilde; ưa nh&igrave;n</p>', 1, 2, '2019-01-22 23:50:40', '2019-01-23 21:14:29'),
(2, 'iPhone 6s plus', 'iphone-6s-plus', 5600000, '24-01-2019-iphone7-plus-black-select-2016.jpg', '2 năm', 'Cáp sạc', 'Fullbox', '300k', 1, '<p>H&agrave;ng xịn</p>', 1, 1, '2019-01-22 23:54:47', '2019-01-23 21:11:48'),
(4, 'Motorola L2', 'motorola-l2', 4100000, '24-01-2019-product-3.png', '1 năm', 'Cáp sạc', 'Fullbox', '0', 1, '<p>Any desc</p>', 0, 4, '2019-01-23 19:07:10', '2019-01-23 19:07:10'),
(5, 'iPhone 7s', 'iphone-7s', 8000000, '24-01-2019-iphone7-plus-black-select-2016.jpg', '1 năm', 'Cáp sạc', 'Fullbox', '300', 1, '<p>Any desc</p>', 1, 1, '2019-01-23 19:09:54', '2019-01-23 21:09:14'),
(6, 'iPhone 8s', 'iphone-8s', 11200000, '24-01-2019-product-1.png', '2 năm', 'Cáp sạc', 'Fullbox', '300', 1, '<p>DES</p>', 1, 1, '2019-01-23 19:14:22', '2019-01-23 21:10:50'),
(7, 'Samsung Galaxy S8', 'samsung-galaxy-s8', 11150000, '24-01-2019-product-2.png', '1 năm', 'Cáp sạc', 'Fullbox', '0', 1, '<p>DESC</p>', 1, 2, '2019-01-23 19:16:14', '2019-01-23 21:11:01'),
(8, 'Samsung Galaxy S5', 'samsung-galaxy-s5', 3500000, '24-01-2019-product-2.png', '1 năm', 'Cáp sạc', 'Fullbox', '0', 1, '<p>DESC</p>', 1, 2, '2019-01-23 19:18:28', '2019-01-23 19:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `category_table_name_unique` (`cate_name`),
  ADD UNIQUE KEY `category_table_slug_unique` (`cate_slug`);

--
-- Indexes for table `km_users`
--
ALTER TABLE `km_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `km_users_username_unique` (`username`),
  ADD UNIQUE KEY `km_users_email_unique` (`email`);

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
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `product_table_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `km_users`
--
ALTER TABLE `km_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_table`
--
ALTER TABLE `product_table`
  ADD CONSTRAINT `product_table_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_table` (`cate_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
