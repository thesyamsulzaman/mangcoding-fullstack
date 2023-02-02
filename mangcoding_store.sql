-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangcoding_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'Ruang Tamu', 'Terdapat berbagai macam Furniture Ruang Tamu yang dapat anda beli dengan kualitas yang bagus', '2023-01-23 20:41:08', '2023-01-31 10:18:05', '1675185485_chair.png'),
(2, 'Ruang Kerja', 'Terdapat berbagai macam Furniture Ruang Kerja, Seperti Kursi Kantor, Santay, dan lainnya', '2023-01-23 20:41:08', '2023-01-31 10:18:27', '1675185507_table.png'),
(4, 'Ruang Olahraga', 'Lorem ipsum', '2023-01-30 23:12:35', '2023-02-01 00:26:18', '1675145555_Annotation 2022-03-04 172332.png'),
(5, 'I Dont Know Crap', 'kjkjkj', '2023-01-30 23:12:48', '2023-02-01 00:26:31', '1675145568_Annotation 2022-02-12 091215.png'),
(6, 'Uncle Roger', 'jhjhjkh', '2023-01-30 23:13:06', '2023-02-01 00:26:38', '1675145586_Annotation 2022-02-08 000545.png'),
(7, 'Kategori Baru', 'lorem ipsum', '2023-02-02 10:28:40', '2023-02-02 10:28:40', '1675358920_pancaroba.png');

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2023_01_18_072027_create_category_table', 1),
(26, '2023_01_19_162752_create_products_table', 1),
(27, '2023_01_23_152746_add_category_column_to_products', 1),
(28, '2023_01_30_193348_add_photo_column_to_categories', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `trait` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `user_id`, `featured`, `trait`, `rate`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Product 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674506632_image-1.png', 899, 1, 0, 'Fresh out of open', '5', '2023-01-23 13:43:52', '2023-01-23 13:44:45', 1),
(2, 'Product 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674506671_image-2.png', 4999, 1, 0, 'Keren', '5', '2023-01-23 13:44:31', '2023-01-23 13:44:31', 1),
(3, 'Product 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507098_image-3.png', 800, 1, 0, 'Cool', '4', '2023-01-23 13:51:38', '2023-01-23 13:51:38', 1),
(4, 'Product 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507131_image-4.png', 75999, 1, 0, 'The Best', '5', '2023-01-23 13:52:11', '2023-01-23 13:52:11', 1),
(5, 'Product 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507167_image-5.png', 4877, 1, 0, 'Good', '4', '2023-01-23 13:52:47', '2023-01-23 13:52:47', 1),
(6, 'Product 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507276_image-6.png', 883475, 1, 0, 'Fresh', '5', '2023-01-23 13:54:36', '2023-01-23 13:54:36', 1),
(7, 'Product 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507320_image-7.png', 4999, 1, 0, 'Kuee', '4', '2023-01-23 13:55:20', '2023-01-23 13:55:20', 1),
(8, 'Product 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.', '1674507349_image-8.png', 499, 1, 0, 'Good', '4', '2023-01-23 13:55:49', '2023-02-02 10:29:55', 7);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Syamsul Zaman', 'thesyamsulzaman@gmail.com', NULL, '$2y$10$JcvordzQx.3SFtZ8RZU4/eFSyZZZJ9Zu4nEmAs5QbPIq0Rqt50CaK', NULL, '2023-01-23 13:40:34', '2023-01-23 13:40:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
