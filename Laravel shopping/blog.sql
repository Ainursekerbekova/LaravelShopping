-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2019 at 08:13 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

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
(3, '2019_02_16_100954_create_tasks_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(16, '2014_10_12_100000_create_password_resets_table', 2),
(17, '2019_02_16_223416_create_products_table', 2),
(18, '2019_02_19_121802_create_orders_table', 2),
(19, '2019_03_08_094511_create_subscribes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total_sum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `prod_id`, `user_id`, `total_sum`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 20000, '2019-02-20 10:50:21', '2019-02-20 10:50:21'),
(2, 2, 1, 20000, '2019-02-20 10:50:29', '2019-02-20 10:50:29'),
(3, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01'),
(4, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01'),
(5, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01'),
(6, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01'),
(7, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01'),
(8, 2, 1, 20000, '2019-02-20 10:51:01', '2019-02-20 10:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sekerbekova@mail.ru', '$2y$10$n2AjUdGV.x7R3Z.VDBjj6OIMp6KleW35AOmkx84Pw1sn1UB8TOgjG', '2019-03-08 23:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `gender`, `name`, `img`, `size`, `balance`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Male', 'Ride Burnout Snowboard', 'css/images/2222.png', '165cm', 24, 18500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(2, 'Female', 'Burton Clash Wide Snowboard', 'css/images/2222.png', 'L', 20, 14500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(3, 'Kids', 'Ride Burnout Snowboard', 'css/images/2222.png', '155cm', 28, 18000, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(4, 'Kids', 'Ride Burnout Kid Snowboard', 'css/images/2222.png', '115cm', 22, 19500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(5, 'Kids', 'Firefly Beacon Snowboard', 'css/images/2222.png', '115cm', 9, 16500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(6, 'Female', 'Burton Clash Wide Snowboard', 'css/images/2222.png', '145cm', 28, 14500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(7, 'Male', 'Ride Burnout Snowboard', 'css/images/2222.png', '155cm', 24, 18500, '2019-02-20 10:49:34', '2019-02-20 10:49:34'),
(8, 'Female', 'Burton Clash Snowboard', 'css/images/2222.png', '155cm', 20, 14500, '2019-02-20 10:49:34', '2019-02-20 10:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscribe_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `subscribe_type`, `created_at`, `updated_at`) VALUES
(1, 'sekerbekova00@gmail.com', 'all', '2019-03-08 11:16:34', '2019-03-08 11:16:34'),
(2, 'sekerbekova@mail.ru', 'all', '2019-03-08 09:09:30', '2019-03-08 09:09:30'),
(12, 'sekerbekova@mail.ru', 'all', '2019-03-08 11:48:08', '2019-03-08 11:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ainur', 'Ainur@gmail.com', '2019-02-20 10:40:38', 'Ainur', NULL, '2019-02-20 10:40:38', '2019-02-20 10:40:38'),
(2, 'Symbat', 'Symbat@gmail.com', '2019-02-20 10:40:38', 'Symbat', NULL, '2019-02-20 10:40:38', '2019-02-20 10:40:38'),
(3, 'Botakoz', 'Botakoz@gmail.com', '2019-02-20 10:41:15', 'Botakoz', NULL, '2019-02-20 10:41:15', '2019-02-20 10:41:15'),
(4, 'Dana', 'Dana@gmail.com', NULL, '$2y$10$XZuvkZ0IvUMUTRqPJHGRgO9vpiGjZ2zxSTyxvEvCdKRkIfQFXaOTm', 'uht6im8kGiyEVywnYGmTP5eKHfmFnxDZzfO7wr91gLzOjTPBk3aphiFSp5J2', '2019-02-26 21:00:06', '2019-02-26 21:00:06'),
(5, 'Admin', 'Admin@gmail.com', '2019-02-27 03:27:46', '$2y$10$XZuvkZ0IvUMUTRqPJHGRgO9vpiGjZ2zxSTyxvEvCdKRkIfQFXaOTm', 't73MduCWjjbLhJsjNNeS00ZyFbBbVsQPkHKCZWXBSuIYgVfMTrKYPgjOGxUs', '2019-02-27 03:27:46', '2019-02-27 03:27:46'),
(6, 'sekerbekova', 'sekerbekova@mail.ru', '2019-03-09 03:22:16', '$2y$10$XZuvkZ0IvUMUTRqPJHGRgO9vpiGjZ2zxSTyxvEvCdKRkIfQFXaOTm', 'xtc9vaVRk9kkhBWHcsxDLb3ZS121PBjizYvRnBGqexNIoKfDDuQNCB0Tze3G', '2019-03-09 03:22:16', '2019-03-09 03:22:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
