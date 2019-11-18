-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 10:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ennamart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ch` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `daleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `category_en` varchar(255) NOT NULL,
  `category_ch` varchar(255) NOT NULL,
  `brief_en` text NOT NULL,
  `brief_ch` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `daleted_at` timestamp NULL DEFAULT NULL,
  `main_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `welcome_msg_en` text NOT NULL,
  `welcome_msg_ch` text NOT NULL,
  `about_msg_en` text NOT NULL,
  `about_msg_ch` text NOT NULL,
  `about_msg_photo_en` text NOT NULL,
  `about_msg_photo_ch` text NOT NULL,
  `service_msg_en` text NOT NULL,
  `service_msg_ch` text NOT NULL,
  `service_one_en` varchar(255) NOT NULL,
  `service_one_ch` varchar(255) NOT NULL,
  `service_two_en` varchar(255) NOT NULL,
  `service_two_ch` varchar(255) NOT NULL,
  `service_three_en` varchar(255) NOT NULL,
  `service_three_ch` varchar(255) NOT NULL,
  `service_four_en` varchar(255) NOT NULL,
  `service_four_ch` varchar(255) NOT NULL,
  `middle_part_title_en` varchar(255) NOT NULL,
  `middle_part_title_ch` varchar(255) NOT NULL,
  `middle_part_photo` varchar(255) NOT NULL,
  `middle_part_msg_en` text NOT NULL,
  `middle_part_msg_ch` text NOT NULL,
  `latest_product_msg_en` text NOT NULL,
  `latest_product_msg_ch` text NOT NULL,
  `featured_msg_en` text NOT NULL,
  `featured_msg_ch` text NOT NULL,
  `featured_one_title_en` text NOT NULL,
  `featured_one_title_ch` text NOT NULL,
  `featured_two_title_en` text NOT NULL,
  `featured_two_title_ch` text NOT NULL,
  `featured_three_title_en` text NOT NULL,
  `featured_three_title_ch` text NOT NULL,
  `featured_one_photo` varchar(255) NOT NULL,
  `featured_two_photo` varchar(255) NOT NULL,
  `featured_three_photo` varchar(255) NOT NULL,
  `featured_one_id` varchar(100) NOT NULL,
  `featured_two_id` varchar(255) NOT NULL,
  `featured_three_id` varchar(255) NOT NULL,
  `our_product_msg_en` text NOT NULL,
  `our_product_msg_ch` text NOT NULL,
  `subscribe_msg_en` text NOT NULL,
  `subscribe_msg_ch` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `banner`, `welcome_msg_en`, `welcome_msg_ch`, `about_msg_en`, `about_msg_ch`, `about_msg_photo_en`, `about_msg_photo_ch`, `service_msg_en`, `service_msg_ch`, `service_one_en`, `service_one_ch`, `service_two_en`, `service_two_ch`, `service_three_en`, `service_three_ch`, `service_four_en`, `service_four_ch`, `middle_part_title_en`, `middle_part_title_ch`, `middle_part_photo`, `middle_part_msg_en`, `middle_part_msg_ch`, `latest_product_msg_en`, `latest_product_msg_ch`, `featured_msg_en`, `featured_msg_ch`, `featured_one_title_en`, `featured_one_title_ch`, `featured_two_title_en`, `featured_two_title_ch`, `featured_three_title_en`, `featured_three_title_ch`, `featured_one_photo`, `featured_two_photo`, `featured_three_photo`, `featured_one_id`, `featured_two_id`, `featured_three_id`, `our_product_msg_en`, `our_product_msg_ch`, `subscribe_msg_en`, `subscribe_msg_ch`, `created_at`, `updated_at`) VALUES
(1, 'banner.jpg', 'Welcome to ENNA MART\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '歡迎來到EENA MART\r\nLorem Ipsum的段落有很多變化，但大多數通過注入幽默而遭受某種形式的改變', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here\', making it look like readable English. Many desktop publishing packages and web page Many desktop publishing packages and web', '\r\nLorem Ipsum認為其字母大致呈正態分佈，與在此處使用“內容”，“在此內容”相反，它看起來像可讀的英語。許多桌面發布程序包和網頁許多桌面發布程序包和網頁', 'small-text-baner.jpg', 'small-text-baner.jpg', 'long established fact that a reader will be distracted by the readable content of a page when\r\nlooking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal', '長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心\r\n看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常', 'text-block1.png', 'text-block1.png', 'text-block2.png', 'text-block2.png', 'text-block3.png', 'text-block3.png', 'text-block4.png', 'text-block4.png', 'MIDDLE PART TITLE', '\r\n中部標題', 'veg-rack.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like.  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less', ' Lorem Ipsum的段落有很多變化，但是大多數都是由於注入幽默而遭受某種形式的改變。這是一個長期存在的事實，即讀者在查看頁面佈局時會被頁面的可讀內容分散注意力。使用Lorem Ipsum的要點是，它具有大致正態的字母分佈，而不是使用“內容在這裡，這裡在內容”，使其看起來像。  Lorem Ipsum的段落有很多變化，但是大多數都是由於注入幽默而遭受某種形式的改變。這是一個長期存在的事實，即讀者在查看頁面佈局時會被頁面的可讀內容分散注意力。使用Lorem Ipsum的要點是它或多或少', 'long established fact that a reader will be distracted by the readable content of a page when\r\nlooking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal', '\r\n長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心\r\n看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常', 'long established fact that a reader will be distracted by the readable content of a page when\r\nlooking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal', '\r\n長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心\r\n看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常', 'Fresh vegetables 30% off', '新鮮蔬菜30％折扣', 'Up to 30% off', '高達30％的折扣', 'Fresh tomato', '\r\n新鮮番茄', 'veg-big.jpg', 'veg-big-2.jpg', 'veg-big-3.jpg', '1', '3', '4', 'long established fact that a reader will be distracted by the readable content of a page when\r\nlooking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal', '\r\n長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心\r\n看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常', 'Contrary to popular belief, Lorem Ipsum is not simply random text.\r\nIt has roots in a piece of classical Latin literature from 45 BC, making it long established fact that a reader will be distracted by the readable', '與普遍的看法相反，Lorem Ipsum不僅僅是簡單的隨機文本。\r\n它起源於公元前45年的一部古典拉丁文學作品，這使人們早已確定了這樣一個事實，即讀者會被可讀的內容分散注意力', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `latest_product`
--

CREATE TABLE `latest_product` (
  `id` int(11) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `sub_categoryID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `name_ch` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `description_ch` text NOT NULL,
  `description_en` text NOT NULL,
  `brandID` bigint(20) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'in stock, out of stock',
  `mrp_ch` varchar(100) NOT NULL,
  `mrp_en` varchar(100) NOT NULL,
  `price_ch` varchar(100) NOT NULL,
  `price_en` varchar(100) NOT NULL,
  `unit_ch` varchar(100) NOT NULL,
  `uni_en` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_photo`
--

CREATE TABLE `product_photo` (
  `id` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `source_brief_en` text NOT NULL,
  `source_brief_ch` text NOT NULL,
  `contact_brief_en` text NOT NULL,
  `contact_brief_ch` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `sub_category_en` varchar(255) NOT NULL,
  `sub_category_ch` varchar(255) NOT NULL,
  `brief_en` text NOT NULL,
  `brief_ch` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Morshed Habib', 'mhsohel017@gmail.com', NULL, '$2y$10$av9RxUuANMeNj8FIITg5fOv.t5bDu2yuFlDZqxchbieiMwWOo9Mha', NULL, '2019-11-12 06:57:39', '2019-11-12 06:57:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_category_id` (`main_category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_product`
--
ALTER TABLE `latest_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productID` (`productID`);

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
  ADD KEY `sub_categoryID` (`sub_categoryID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`);

--
-- Indexes for table `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_product`
--
ALTER TABLE `latest_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
