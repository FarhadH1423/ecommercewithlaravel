-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 11:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `link`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Discount Offer', 'Offer', 'https://www.google.com/', '1610872662eCommerce-Website-Development.jpg', '2021-01-17 02:20:28', '2021-01-17 02:37:42'),
(3, 'Save Upto', 'Upto', 'https://www.google.com/', '1610872684banner-e-commerce1.png', '2021-01-17 02:24:03', '2021-01-17 02:38:04'),
(4, 'We Quality', 'on Quality', 'https://www.google.com/', '1610872728Site-banners-ecom.jpg', '2021-01-17 02:30:14', '2021-01-17 02:38:48'),
(5, 'We 100% Original', '100% Original', 'https://www.google.com/', '161087274558f24e8568b50_thumb900.jpg', '2021-01-17 02:31:06', '2021-01-17 02:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `picture`, `details`, `created_at`, `updated_at`) VALUES
(2, 'Grocery', '1610866064new-year-sale-simple-banner-website-header-gold-background-brush-stroke-new-year-sale-simple-banner-website-header-167245750.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:47:44', '2021-01-17 00:47:44'),
(3, 'Vegetable', '161086607758f24e8568b50_thumb900.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:47:57', '2021-01-17 00:47:57'),
(4, 'Toy', '1610866090new-year-sale-simple-banner-website-header-gold-background-brush-stroke-new-year-sale-simple-banner-website-header-167245750.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:48:10', '2021-01-17 00:48:10'),
(5, 'Electronics', '161086610058f24e8568b50_thumb900.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:48:20', '2021-01-17 00:48:20'),
(6, 'Others', '1610866111new-year-sale-simple-banner-website-header-gold-background-brush-stroke-new-year-sale-simple-banner-website-header-167245750.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:48:31', '2021-01-17 00:48:31'),
(7, 'Fish', '161086612858f24e8568b50_thumb900.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio diam, lobortis a efficitur ut, aliquet a ipsum. Etiam nulla ipsum, feugiat quis tristique id, mollis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec tincidunt accumsan eleifend. Aenean ut lorem molestie, pellentesque arcu at, suscipit dui. Donec mauris quam, fringilla et magna vitae, molestie convallis leo. Nullam pulvinar odio sed facilisis feugiat. Aenean vehicula et augue ac posuere', '2021-01-17 00:48:48', '2021-01-17 00:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_12_044424_create_admins_table', 1),
(5, '2021_01_12_060538_create_categories_table', 1),
(6, '2021_01_12_062206_create_products_table', 1),
(7, '2021_01_16_093435_create_settings_table', 1),
(8, '2021_01_17_060829_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `picture`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Asus Laptop', '22000', '5', '1610866284161078042616105205481608784334girl.png', 5, '2021-01-17 00:51:24', '2021-01-17 00:51:24'),
(2, 'Rice', '65', '50', '1610866307161060534716105206071608784334man.png', 2, '2021-01-17 00:51:47', '2021-01-17 00:51:47'),
(3, 'Ilish', '450', '10', '161086634616105205821608784334boy.png', 7, '2021-01-17 00:52:26', '2021-01-17 00:52:26'),
(4, 'Baby toy', '230', '45', '1610866372161086634616105205821608784334boy.png', 4, '2021-01-17 00:52:52', '2021-01-17 00:52:52'),
(5, 'Lau', '33', '54', '16108664151610866284161078042616105205481608784334girl.png', 3, '2021-01-17 00:53:35', '2021-01-17 00:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `picture`, `created_at`, `updated_at`) VALUES
(1, '1610866197final-logo-goooooo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
