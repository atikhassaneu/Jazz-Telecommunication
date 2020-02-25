-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2019 at 05:11 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jazt_voice`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(6, 'Atik Hassan', 'hira@gmail.com', 'asdfd', 0, '2019-07-04 05:32:21', '2019-07-04 05:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_04_24_143459_create_sliders_table', 1),
(21, '2019_04_24_143859_create_services_table', 1),
(22, '2019_04_24_143925_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hira@gmail.com', '$2y$10$CQyjMqxTCZBS.Yz9X7EdHuHwYYQRRwGJCef2S.4U9.wTx7hGfZ7Qm', '2019-05-15 04:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Premium Voice', 'Premium Voice is Quality focused product which provides the highest quality voice termination via VoIP/TDM direct routes and handpicked suppliers, with higher-than-market-level Answer Seizure Ratio (ASR) and Network Effectiveness Ratio (NER). This product is mostly used by Fixed/ Mobile Operators, PTTs, Retail / Calling Card Operators and MVNO\'s, who needs best possible quality (International Roaming and CLI). Our Customer for VGL Premium includes some world’s Top Wholesale Carriers, Mobile Operators. Major traffic is routed to Direct Partners in respective countries. Now carriers can get the best of both worlds by accessing Our Premium Voice service via efficient IP interconnects.', 'fa-paper-plane', '2019-05-13 04:24:49', '2019-07-04 06:26:27'),
(2, 'Standard Voice', 'Standard Voice is a mix designed for companies who are looking for premium like quality and wholesale like price, it delivers end-to-end international coverage to more than 1,500 destinations, including more than 700 fixed and mobile routes that are selected and actively managed to provide stability and voice quality for retail operators and consumer voice-over-broadband (VoBB) providers, Hubbing Traffic for Mobile Operators. Designed primarily for cost-driven retail, calling card, and business carriers, Standard Voice features our direct routes to more than 100 countries and offers targeted coverage at our most aggressive pricing.', 'fa-globe', '2019-05-13 04:32:41', '2019-07-04 06:26:40'),
(3, 'Wholesale Voice', 'Wholesale Voice is most aggressive offering from us. It is a product which we use to offer maximum number of our routes to customers which can bring price advantage to them. It has all our direct/indirect wholesale VoIP routes, we use our Wholesale VoIP Routes, Direct Termination Providers, Mobile Operators, Carrier Partners on TDM, who so ever bringing price advantage to us is used in this product. Wholesale Voice offers global voice termination to carriers and service providers that require broad coverage and minimal variation in quality. If you’re looking to improve your cost while getting high levels of route stability, Wholesale Voice is the right choice for your international voice business. Wholesale Voice in your international wholesale LCR tables will enable you to reach more than 1700+ destinations with limited providers in routing, simplifying your daily operations. Wholesale Voice is mostly used by VoIP Providers who is offering Calling Card, Call shop, PC2Phone and Callback Services requiring more aggressive rate our best possible quality, wholesale voip carriers, Tier 2 & 3 Carriers to build their LCR.', 'fa-american-sign-language-interpreting', '2019-05-13 04:34:07', '2019-07-04 06:27:23'),
(4, 'SMS Service', 'Provides Mobile SMS wholesale services at a very aggressive rates covering the major mobile network operators worldwide. We offer A2P, and P2P termination connecting via HTTP and SMPP. We also provide our own sms marketing platform for our reseller & our partner.Through our strategic partners offers wholesale carriers, fixed and mobile operators global accessibility and reliable solutions,we are able to terminating international SMS traffic.', 'fa-comments-o', '2019-05-13 04:38:43', '2019-07-04 06:29:39'),
(5, 'Genuine VOS Rent & Sale', 'VOS3000 is designed for small and medium scale carrier-class operations by Kunshi Network Technology Co., Ltd. In addition to providing Account Management,Rate Management, Package Management, Cards Management, Gateway Management, Phone Management, Softswitch Management, IVR Management, System Management, User Management, Data Query and Web Self-Service System, the system also integrates add-on modules like the Caliing Card/Call Back Business System (support 6 million cards) and Extreme Media Proxy, for you to build a stable , reliable and high-performance operating system. VOS3000 softswitch supports SIP/H323/SIP-H323, with capacity up to 5,000 simultaneous calls. After rigorous testing, the VOS3000 softswitch proves to be a stable and reliable high performance system.', 'fa-support', '2019-05-13 04:39:18', '2019-07-04 06:35:20'),
(6, 'Our Network', 'JAZZ Communications,  supports voice services in more than 150 countries worldwide and exercises a permanent control and technical support 24x7 using its own network of international gateways.\r\nThe network structure is based on Inter Exchange Carrier (IXC) accounting soft switch, Porta Billing and Cisco Systems voice gateways. It fully complies with the most up-to-date requirements of the new generation networks and supports various types of carrier-to-carrier interconnections, such as ISDN PRI, VoIP-H.323 and VoIP-SIP. It is essential that the net consists of interchangeable and independent backup power, so, in case anything goes wrong with any of the components, the system continues running nonstop. \r\nJAZZ Communications is a telecommunication consulting company specializing in distribution and transport infrastructure outside plant. We provide Voip Solutions from inception to connection for all your telecommunications network builds.', 'fa-snowflake-o', '2019-05-13 04:44:56', '2019-07-04 06:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img_slug`, `created_at`, `updated_at`) VALUES
(15, '2019-05-12-0945245cd7eb348520b.jpg', '2019-05-12 03:45:24', '2019-05-12 03:45:24'),
(14, '2019-05-12-0935225cd7e8daa1860.jpg', '2019-05-12 03:35:22', '2019-05-12 03:35:22'),
(16, '2019-05-12-0945505cd7eb4ebc3a2.jpg', '2019-05-12 03:45:50', '2019-05-12 03:45:50'),
(13, '2019-05-09-1057265cd4079694914.jpg', '2019-05-09 04:57:26', '2019-05-09 04:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atik Hassan', 'hira@gmail.com', NULL, '$2y$10$Y/zqrJIYUGwBQapH9UQeMu9wHwQrmpZ/8u0FmigCFzcO69Y9eFAqW', NULL, '2019-05-01 02:23:57', '2019-05-01 02:23:57'),
(2, 'Atik Hassan', 'hira.atova@gmail.com', NULL, '$2y$10$ADpoSIjBmZfxqqki4JilAOTdp0kwuDz98MvzfY1ts.WgwRPDW2tZy', 'rF8JOMlofUyvKy0KEruxY9QVBdmcl8GLpufwX3b2rNJKpsI0oBkKUZuhP57F', '2019-05-15 04:02:37', '2019-05-15 04:45:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
