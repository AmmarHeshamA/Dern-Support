-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 04:35 PM
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
-- Database: `fullstack_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_billing_details` varchar(255) NOT NULL,
  `email_billing_details` varchar(255) NOT NULL,
  `company_billing_details` varchar(255) DEFAULT NULL,
  `address_billing_details` varchar(255) NOT NULL,
  `city_billing_details` varchar(255) NOT NULL,
  `post_code_billing_details` varchar(255) NOT NULL,
  `phone_billing_details` varchar(255) NOT NULL,
  `notes_billing_details` text DEFAULT NULL,
  `categories_billing_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`categories_billing_details`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `name_billing_details`, `email_billing_details`, `company_billing_details`, `address_billing_details`, `city_billing_details`, `post_code_billing_details`, `phone_billing_details`, `notes_billing_details`, `categories_billing_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mohamed Ahmad', 'Mohamed@gmail.com', NULL, 'Shuha 16 eleshraf', 'elmansoura', '4534534753', '01235469874', 'I would like to expedite the implementation of this request', '[{\"id\":\"1\",\"name\":\"GAMERS MOUSE\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622059.jpg\",\"quantity\":2},{\"id\":\"2\",\"name\":\"128GB SSD M.2\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622334.jpg\",\"quantity\":4},{\"id\":\"3\",\"name\":\"EXTERNAL HDD DRIVE\",\"price\":102,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622374.jpg\",\"quantity\":3},{\"id\":\"6\",\"name\":\"USB 3.0 HUB\",\"price\":67,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622174.jpg\",\"quantity\":3},{\"id\":\"5\",\"name\":\"Keyboard\",\"price\":30,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622544.png\",\"quantity\":2},{\"id\":\"4\",\"name\":\"LAPTOP POWER ADAPTER\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622240.jpg\",\"quantity\":3}]', '2024-06-07 15:21:46', '2024-06-07 15:21:46', NULL),
(2, 'Ammar Hesham', 'Ammar@gmail.com', 'Elnour', 'nasr 89 Elnaga', 'egypt', '4534534753', '01235648974', 'I would like to expedite the implementation of this request', '[{\"id\":\"2\",\"name\":\"128GB SSD M.2\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622334.jpg\",\"quantity\":2},{\"id\":\"1\",\"name\":\"GAMERS MOUSE\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622059.jpg\",\"quantity\":3},{\"id\":\"4\",\"name\":\"LAPTOP POWER ADAPTER\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622240.jpg\",\"quantity\":2},{\"id\":\"5\",\"name\":\"Keyboard\",\"price\":30,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622544.png\",\"quantity\":4},{\"id\":\"6\",\"name\":\"USB 3.0 HUB\",\"price\":67,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622174.jpg\",\"quantity\":2},{\"id\":\"3\",\"name\":\"EXTERNAL HDD DRIVE\",\"price\":102,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622374.jpg\",\"quantity\":3}]', '2024-06-07 15:23:27', '2024-06-07 15:23:27', NULL),
(3, 'Elsayed Diaaa', 'Elsayed@gmail.com', NULL, 'Tanta', 'tanta', '12364764', '01234576786768', NULL, '[{\"id\":\"2\",\"name\":\"128GB SSD M.2\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622334.jpg\",\"quantity\":3},{\"id\":\"1\",\"name\":\"GAMERS MOUSE\",\"price\":45,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622059.jpg\",\"quantity\":2},{\"id\":\"3\",\"name\":\"EXTERNAL HDD DRIVE\",\"price\":102,\"image\":\"http://127.0.0.1:8000/Uploads/categories/1717622374.jpg\",\"quantity\":3}]', '2024-06-08 06:27:50', '2024-06-08 06:27:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_price` double NOT NULL,
  `category_description` text NOT NULL,
  `category_quantity` double NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_price`, `category_description`, `category_quantity`, `category_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GAMERS MOUSE', 45, 'is the best mouse gaming used RGP', 5, '1717622059.jpg', '2024-06-05 18:14:19', '2024-06-08 11:35:30', NULL),
(2, '128GB SSD M.2', 45, 'is the best 128GB SSD M.2 used RGP', 3, '1717622334.jpg', '2024-06-05 18:18:54', '2024-06-05 18:18:54', NULL),
(3, 'EXTERNAL HDD DRIVE', 102, 'is the best EXTERNAL HDD DRIVE used RGP', 6, '1717622374.jpg', '2024-06-05 18:19:34', '2024-06-05 18:19:34', NULL),
(4, 'LAPTOP POWER ADAPTER', 45, 'is the best LAPTOP POWER ADAPTER used RGP', 5, '1717622240.jpg', '2024-06-05 18:17:20', '2024-06-05 18:17:20', NULL),
(5, 'Keyboard', 30, 'is the best Keyboard', 4, '1717622544.png', '2024-06-05 18:20:49', '2024-06-05 18:22:24', NULL),
(6, 'USB 3.0 HUB', 67, 'is the best USB 3.0 HUB used RGP', 5, '1717622174.jpg', '2024-06-05 18:16:14', '2024-06-05 18:16:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_title` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_image` varchar(255) NOT NULL,
  `comment_users` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_title`, `comment_content`, `comment_image`, `comment_users`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Flexible services', 'Dern Supportdid great job with fixing my laptop for a good price. I recommend any body with laptop problems, they will give you excellent service to all his customers.', '1717715225.png', 'Merry Smith', '2024-06-06 19:49:59', '2024-06-06 20:07:06', NULL),
(2, 'Great customer support', 'Thanks John, I was really pleased with Dern Support service. Would definitely recommend you and have alredy given out some of your business cards that were left with me. All the best for future succes.', '1717715217.png', 'Michale John', '2024-06-06 20:06:57', '2024-06-06 20:06:57', NULL),
(3, 'Excellent team', 'Keep up the excellent work. Thank you so much for your help. This is simply unbelievable!', '1717715299.png', 'Michale John', '2024-06-06 20:08:19', '2024-06-06 20:08:19', NULL);

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `companyname`, `name`, `email`, `phone`, `address`, `message`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eltawheed', 'Mohamed Elsayed', 'mohamedelsayed@gmail.com', '01024569742', 'Shuha', 'The computer is show blue screen', '1716289793_664c810197167.png', '2024-05-21 08:09:53', '2024-06-08 11:35:18', NULL),
(2, 'Nassa', 'Ammar Hesham', 'ammarheshama@gmail.com', '01067307254', 'Eleshraf street 16 Shuha', 'Computer is restart always after 2 min', NULL, '2024-05-21 08:13:40', '2024-05-21 08:13:40', NULL),
(3, 'We', 'Ahmad Amer', 'ahmadamer@gmail.com', '01024576333', '15 Elsalam street Elmansoura', 'The keyboard does not work some buttons', '1716290382_664c834eb6566.jpg', '2024-05-21 08:19:42', '2024-05-21 08:19:42', NULL),
(4, NULL, 'Elsayed mohamed', 'Elsayed@gmail.com', '01036521489', 'Nasr Egypt', 'My device crackled', NULL, '2024-06-04 11:36:26', '2024-06-04 11:36:26', NULL);

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
(5, '2024_05_20_113135_create_messages_table', 1),
(6, '2024_06_05_171451_create_categories_table', 1),
(7, '2024_06_06_221312_create_comments_table', 1),
(8, '2024_06_07_083822_create_services_table', 1),
(9, '2024_06_07_140740_create_billing_details_table', 1),
(10, '2024_06_08_094948_add_trashed_messages_column_to_messages_table', 2),
(11, '2024_06_08_095242_add_trashed_category_column_to_categories_table', 2),
(12, '2024_06_08_095305_add_trashed_comment_column_to_comments_table', 2),
(13, '2024_06_08_095327_add_trashed_service_column_to_services_table', 2),
(14, '2024_06_08_095345_add_trashed_detail_column_to_billing_details_table', 2);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_service` varchar(255) NOT NULL,
  `content_service` text NOT NULL,
  `image_service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_service`, `content_service`, `image_service`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laptop & Mac Upgrade', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750709.jpg', '2024-06-07 05:58:29', '2024-06-07 05:58:29', NULL),
(2, 'Data backup & recovery', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750766.jpg', '2024-06-07 05:59:26', '2024-06-07 06:13:34', NULL),
(3, 'Repair Power Supply', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750836.jpg', '2024-06-07 06:00:36', '2024-06-07 06:00:36', NULL),
(4, 'Laptop & Mac Upgrade', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750885.jpg', '2024-06-07 06:01:25', '2024-06-07 06:01:25', NULL),
(5, 'CPU Upgrade', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750928.jpg', '2024-06-07 06:02:08', '2024-06-07 06:02:08', NULL),
(6, 'Complex Diagnostics', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717750997.jpg', '2024-06-07 06:03:17', '2024-06-07 06:03:17', NULL),
(7, 'Repair PC & Laptop Hardware', 'We working hard to build a reputation of customer satisfaction through technical excellence and friendly staff', '1717751050.jpg', '2024-06-07 06:04:10', '2024-06-07 06:04:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, NULL, NULL, '$2y$12$a3NZvha21ieMKncWuxUzmeI04W0YZdtOQZIu0ehiKBWBvWUKgCWkO', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', 'user', NULL, NULL, NULL, '$2y$12$Z/wyHfWZVgmcof/NXTC.Qe2jprKFYPIIvgVK77exJc6Tl6ml/oQk2', NULL, NULL, NULL),
(3, 'Ammar Hesham', 'ammar@gmail.com', 'user', '01245789632', 'Shuha', NULL, '$2y$12$y3RfoRZFu.1ZQqArkOo0AermlSeWfKNlfcEdfEA8PUFBqDyxIRTO6', NULL, '2024-06-05 05:41:08', '2024-06-05 05:41:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
