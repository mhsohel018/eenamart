-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2019 at 12:18 PM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prantm3v_eenamart`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `brief_en` text NOT NULL,
  `brief_ch` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `photo`, `brief_en`, `brief_ch`, `created_at`, `updated_at`) VALUES
(1, 'efdf6ec69bcf01950b5eecb4e432b9c081.jpeg', '<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>', '<p>這是Photoshop的版本的Lorem存有。 NIBH懷孕微波或香蕉的戶外作者。 Aenean sollicitudin，LOREM QUIS必比登auctor，尼絲紡ELIT consequat存有製造業adipiscing ELIT NIBH sagittis SEM。家庭作業，並通過大量的胡蘿蔔consequat elitr運行開始的痛恨。室外足球層本身。對於還甚至的奧迪奧tincidunt ELIT足球仇恨的作者。但它不是生命的作者，並有在美國拍攝的足球。開始上課就業扭曲我們的婚姻，每himenaeos。在剛剛最大。番茄醬和鍋蛋白質足球觸發了大量的宣傳。但它不是，也不是投資者。但是，如果這樣的融資。微波醬熱身了。即使是移民，但有一個熱身feugiat森佩爾的Pretium射精mauris執法，而不是斷言的球員誰不質量的一個。對於臨床按摩。</p>', NULL, '2019-11-15 07:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ch` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_ch`, `updated_at`, `created_at`) VALUES
(1, 'cbc', 'cvb', NULL, NULL),
(2, 's', 's', '2019-11-16 04:43:00', '2019-11-16 04:43:00');

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
  `daleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_en`, `category_ch`, `brief_en`, `brief_ch`, `updated_at`, `daleted_at`) VALUES
(1, 'Toys', 'Toys', '', '', NULL, NULL),
(2, 'Grocery', 'sdfdsf', 'fdgd', 'dfg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'd', 'm@gmail.com', 'sdf', 'sdf', '2019-11-17 06:15:38', '2019-11-17 06:15:38'),
(2, 'sohel', 'mhsohel017@gmail.com', 'Test Mail', 'test mail body', '2019-11-17 13:04:49', '2019-11-17 13:04:49');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '624b9712151583f37427d8eef4842dec20.jpeg', '<p>Welcome to ENNA MART</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>', '<p>歡迎來到EENA MART</p>\r\n\r\n<p>Lorem Ipsum的段落有很多變化，但大多數通過注入幽默而遭受某種形式的改變</p>', '<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page Many desktop publishing packages and web Updated</p>', '<p>Lorem Ipsum認為其字母大致呈正態分佈，與在此處使用&ldquo;內容&rdquo;，&ldquo;在此內容&rdquo;相反，它看起來像可讀的英語。許多桌面發布程序包和網頁許多桌面發布程序包和網頁 updated</p>', '2ba61bd7b59eff51f76879561fe6096699.jpeg', '2ba61bd7b59eff51f76879561fe6096658.jpeg', '<p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>', '<p>長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心 看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常</p>', '96c3fdec3565142c45c8190a5365ca8293.jpeg', '96c3fdec3565142c45c8190a5365ca8267.jpeg', '41adbc22efe2841636ff2e50329f0e7068.png', '41adbc22efe2841636ff2e50329f0e7047.png', '41adbc22efe2841636ff2e50329f0e7024.png', '41adbc22efe2841636ff2e50329f0e7020.png', '43533eb03ca07e685fa01851eb91100429.jpeg', '43533eb03ca07e685fa01851eb91100425.jpeg', '<p>MIDDLE PART TITLE Updated</p>', '<p>中部標題</p>', '50353fc831997d13d76985ba75fa8d5272.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>', '<p>Lorem Ipsum的段落有很多變化，但是大多數都是由於注入幽默而遭受某種形式的改變。這是一個長期存在的事實，即讀者在查看頁面佈局時會被頁面的可讀內容分散注意力。使用Lorem Ipsum的要點是，它具有大致正態的字母分佈，而不是使用&ldquo;內容在這裡，這裡在內容&rdquo;，使其看起來像。 Lorem Ipsum的段落有很多變化，但是大多數都是由於注入幽默而遭受某種形式的改變。這是一個長期存在的事實，即讀者在查看頁面佈局時會被頁面的可讀內容分散注意力。使用Lorem Ipsum的要點是它或多或少</p>', '<p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal Updated</p>', '<p>長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心 看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常</p>', '<p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal updated</p>', '<p>長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心 看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常</p>', 'Fresh vegetables 30% off', '新鮮蔬菜30％折扣', 'Up to 30% off', '高達30％的折扣', 'Fresh tomato', '新鮮番茄', 'veg-big.jpg', 'veg-big-2.jpg', 'veg-big-3.jpg', '1', '3', '4', '<p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal Updated</p>', '<p>長期存在的事實，即讀者在閱讀時會被頁面的可讀內容分心 看它的佈局。使用Lorem Ipsum的要點是它具有或多或少的正常</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it long established fact that a reader will be distracted by the readable others updated</p>', '<p>與普遍的看法相反，Lorem Ipsum不僅僅是簡單的隨機文本。 它起源於公元前45年的一部古典拉丁文學作品，這使人們早已確定了這樣一個事實，即讀者會被可讀的內容分散注意力</p>', NULL, '2019-11-15 05:56:09');

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

--
-- Dumping data for table `latest_product`
--

INSERT INTO `latest_product` (`id`, `productID`, `created_at`, `updated_at`) VALUES
(2, 1, '2019-11-16 04:30:50', '2019-11-16 04:30:50'),
(3, 2, '2019-11-16 05:18:27', '2019-11-16 05:18:27');

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

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sub_categoryID`, `categoryID`, `name_ch`, `name_en`, `description_ch`, `description_en`, `brandID`, `status`, `mrp_ch`, `mrp_en`, `price_ch`, `price_en`, `unit_ch`, `uni_en`, `photo`, `updated_at`, `created_at`) VALUES
(1, 3, 1, 'apple', 'hjghj', '<p>xcv</p>', '<p>xvx</p>', 1, 'OUT OF STOCK', '2', '2', '2', '2', 'kg', 'kg', '805d876f1ec7889e5c0e7b4c4666099091.jpeg', '2019-11-16 04:40:08', NULL),
(2, 4, 2, 'fgh', 'gfhfghf', '<p>fgh</p>', '<p>fgh</p>', 1, 'IN STOCK', '2', '2', '2', '2', 'kg', 'kg', '805d876f1ec7889e5c0e7b4c4666099068.jpeg', '2019-11-16 06:18:36', '2019-11-16 05:18:04');

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
  `map` text NOT NULL,
  `logo` text NOT NULL,
  `address_en` text NOT NULL,
  `address_ch` text NOT NULL,
  `phone_en` text NOT NULL,
  `phone_ch` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `source_brief_en`, `source_brief_ch`, `contact_brief_en`, `contact_brief_ch`, `map`, `logo`, `address_en`, `address_ch`, `phone_en`, `phone_ch`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>\r\n\r\n<p>as opposed to using Content here, content here&#39;, making it look like readable English.</p>', '<p>Lorem Ipsum的字母大致呈正態分佈，<br />\r\n而不是在這裡使用Content，而在這裡使用Content&rdquo;，使它看起來像可讀的英語。</p>', '<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>', '<p>這是Photoshop的版本的Lorem存有。 NIBH懷孕微波或香蕉的戶外作者。 Aenean sollicitudin，LOREM QUIS必比登auctor，尼絲紡ELIT consequat存有製造業adipiscing ELIT NIBH sagittis SEM。家庭作業，並通過大量的胡蘿蔔consequat elitr運行開始的痛恨。室外足球層本身。對於還甚至的奧迪奧tincidunt ELIT足球仇恨的作者。但它不是生命的作者，並有在美國拍攝的足球。開始上課就業扭曲我們的婚姻，每himenaeos。在剛剛最大。番茄醬和鍋蛋白質足球觸發了大量的宣傳。但它不是，也不是投資者。但是，如果這樣的融資。微波醬熱身了。即使是移民，但有一個熱身feugiat森佩爾的Pretium射精mauris執法，而不是斷言的球員誰不質量的一個。對於臨床按摩。</p>', 'fgh', '69007ba2dfe72755d2c463090354889f47.jpeg', 'Plot: 36, Road: 6C, Sector: 12, Uttara, Dhaka, Bangladesh', 'Plot: 36, Road: 6C, Sector: 12, Uttara, Dhaka, Bangladesh', '01819-208869, 01614-009231', '01819-208869, 01614-009231', NULL, '2019-11-17 06:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ch` varchar(255) NOT NULL,
  `designation_en` varchar(255) NOT NULL,
  `designation_ch` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description_en` text NOT NULL,
  `description_ch` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`id`, `name_en`, `name_ch`, `designation_en`, `designation_ch`, `photo`, `description_en`, `description_ch`, `created_at`, `updated_at`) VALUES
(8, 'Robert Jose', 'Robert Jose', 'Organic farmer', 'Organic farmer', '16e9575b7632ae27efcdcf72e3a8fe1d76.jpeg', '<p>In the context of developing nations or other pre-industrial cultures, most farmers practice a meager subsistence agriculture&mdash;a simple organic farming system employing crop rotation, seed saving, slash and burn, or other techniques to maximize efficiency while meeting the needs of the household or community. Historically, one subsisting in this way may have been known as a peasant. In developed nations, however, a person using such techniques on small patches of land might be called a gardener and be considered a hobbyist. Alternatively, one might be driven into such practices by poverty or, ironically&mdash;against.</p>', '<p>In the context of developing nations or other pre-industrial cultures, most farmers practice a meager subsistence agriculture&mdash;a simple organic farming system employing crop rotation, seed saving, slash and burn, or other techniques to maximize efficiency while meeting the needs of the household or community. Historically, one subsisting in this way may have been known as a peasant. In developed nations, however, a person using such techniques on small patches of land might be called a gardener and be considered a hobbyist. Alternatively, one might be driven into such practices by poverty or, ironically&mdash;against.</p>', '2019-11-16 04:29:46', '2019-11-17 11:35:12'),
(10, 'Robert William', 'Robert William', 'Organic farmer', 'Organic farmer', 'c95ad5d643773cf949a9cb746394a02287.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2019-11-16 04:35:50', '2019-11-17 11:36:24'),
(11, 'Jhon Smith', 'Jhon Smith', 'Organic farmer', 'Organic farmer', '1792ff7cb58b0d542b1de54ed957c9ac38.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2019-11-16 04:40:03', '2019-11-17 11:37:29');

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
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `categoryID`, `sub_category_en`, `sub_category_ch`, `brief_en`, `brief_ch`, `updated_at`, `created_at`) VALUES
(1, 1, 'xcv', 'xcv', '<p>Updated</p>', '<p>xcv</p>', '2019-11-14 07:45:14', '2019-11-14 07:23:55'),
(3, 1, 'New', 'New', '<p>dsf</p>', '<p>sdf</p>', '2019-11-16 05:09:44', '2019-11-16 05:09:44'),
(4, 2, 'New h', 'New h', '<p>fc</p>', '<p>dfg</p>', '2019-11-16 05:42:42', '2019-11-16 05:42:42');

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
(1, 'Morshed Habib', 'mhsohel017@gmail.com', NULL, '$2y$10$av9RxUuANMeNj8FIITg5fOv.t5bDu2yuFlDZqxchbieiMwWOo9Mha', NULL, '2019-11-12 06:57:39', '2019-11-12 06:57:39'),
(2, 'Admin', 'eenabd8869@gmail.com', NULL, '$2y$10$PhJHPmue2mKdp/OczhuHxu3QmJ6CGTEsWXDaiZLFfgUBpeA29HB7i', NULL, '2019-11-17 06:31:16', '2019-11-17 06:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`(191));

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
-- Indexes for table `source`
--
ALTER TABLE `source`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
