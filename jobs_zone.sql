-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 11:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs_zone`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ourmission_headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ourmission_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vission_headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vission_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_headline`, `about_details`, `ourmission_headline`, `ourmission_details`, `vission_headline`, `vission_details`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', 'Our Mission', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', 'Our Vission', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', '2017-10-28 13:43:35', '2017-10-30 23:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Accounting / Finance', 'Accounting / Finance', 1, '2017-10-22 08:52:14', '2017-10-24 01:23:16'),
(4, 'Bank / Non-Bank Fin. Institution', 'Bank / Non-Bank Fin. Institution', 1, '2017-10-22 09:29:58', '2017-10-22 09:29:58'),
(5, 'Commercial / Supply Chain', 'Commercial / Supply Chain', 1, '2017-10-22 09:30:13', '2017-10-22 09:30:13'),
(6, 'Customer Support / Call Centre', 'Customer Support / Call Centre', 1, '2017-10-22 09:30:23', '2017-10-22 09:30:23'),
(7, 'Data Entry / Operator / BPO', 'Data Entry / Operator / BPO', 1, '2017-10-22 09:30:32', '2017-10-22 09:30:32'),
(8, 'Design / Creative', 'Design / Creative', 1, '2017-10-22 09:30:41', '2017-10-22 09:30:41'),
(9, 'Driving / Motor Technician', 'Driving / Motor Technician', 1, '2017-10-22 09:30:50', '2017-10-22 09:30:50'),
(10, 'Education / Training', 'Education / Training', 1, '2017-10-22 09:31:08', '2017-10-22 09:31:08'),
(11, 'Electrician / Construction / Repair', 'Electrician / Construction / Repair', 1, '2017-10-22 09:31:20', '2017-10-22 09:31:20'),
(12, 'Engineer / Architects', 'Engineer / Architects', 1, '2017-10-22 09:31:31', '2017-10-22 09:31:31'),
(13, 'Research / Consultancy', 'Research / Consultancy', 1, '2017-10-22 09:31:41', '2017-10-22 09:31:41'),
(14, 'Agro based Industry', 'Agro based Industry', 1, '2017-10-22 09:32:02', '2017-10-22 09:32:02'),
(15, 'Airline / Travel / Tourism', 'Airline / Travel / Tourism', 1, '2017-10-22 09:32:20', '2017-10-22 09:32:20'),
(16, 'Architecture / Engineering / Construction', 'Architecture / Engineering / Construction', 1, '2017-10-22 09:32:30', '2017-10-22 09:32:30'),
(17, 'Food & Beverage Industry', 'Food & Beverage Industry', 1, '2017-10-22 09:32:38', '2017-10-22 09:32:38'),
(18, 'Garments / Textile', 'Garments / Textile', 1, '2017-10-22 09:32:49', '2017-10-22 09:32:49'),
(19, 'Pharmaceuticals', 'Pharmaceuticals', 1, '2017-10-22 09:33:00', '2017-10-22 09:33:00'),
(20, 'Real Estate / Development', 'Real Estate / Development', 1, '2017-10-22 09:33:08', '2017-10-22 09:33:08'),
(21, 'Security Service', 'Security Service', 1, '2017-10-22 09:33:18', '2017-10-22 09:33:18'),
(22, 'Telecommunication', 'Telecommunication', 1, '2017-10-22 09:33:26', '2017-10-31 14:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `headline_one`, `details_one`, `headline_two`, `details_two`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', 'We are located', 'BDBL Bhaban (5th Floor - West), \r\n12, Kazi Nazrul Islam Ave,\r\n', 'info@jobs-zone.com', '+8801922646558, +8801627092264', '2017-10-29 01:24:14', '2017-10-29 01:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `email`, `password`, `mobile_number`, `user_image`, `created_at`, `updated_at`) VALUES
(1, 'Raz Biswas', 'user@gmail.com', '$2y$10$whOTL21r2dS4oS7.lGkGu.PKz8UcwbP9pNvwMGLYIVsDBilViGUzq', '01922646558', 'images/user-images/RazPassportImage.jpg', '2017-10-29 09:57:20', '2017-10-29 09:57:20'),
(2, 'Shariful Islam', 'usershariful@gmail.com', '$2y$10$a08BzssNwJMn22R18tCuBeJY0cC2bAsQZLWgovA73AmTKJChlxnjS', '01724369378', 'images/user-images/BASIS_173916.jpg', '2017-10-31 05:08:30', '2017-10-31 05:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `full_name`, `email`, `password`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'Raz Biswas', 'admin@gmail.com', '123456', 'Ali Baba', '2017-10-29 01:01:42', '2017-10-29 01:01:42'),
(15, 'Raz Biswas', 'raz@gmail.com', '$2y$10$us2O4hkL30qs30/JovqkueeDnzByXM7mbEj7Fk/zGW/bQm1A6/yuC', 'Dhaka Calls', '2017-10-29 01:51:06', '2017-10-29 01:51:06'),
(16, 'Raz Biswas', 'razbiswas@gmail.com', '$2y$10$DpyvokB6n8GyoeClIwUq..CftBXpV3eHnmR7CIm6.PJ38WBBVxer.', 'Dhaka Calls', '2017-10-29 01:51:35', '2017-10-29 01:51:35'),
(17, 'Shariful Islam', 'shariful@gmail.com', '$2y$10$ZqKIpyKf5IWRsggdqgIu4Ovzaka3JPK9sSptJ4kvUR6DTkiJX2ONe', 'Sharif Group', '2017-10-31 05:01:06', '2017-10-31 05:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancey` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `educational_requirements` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_requirements` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_descripton` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `spotlight` tinyint(4) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_designation`, `vacancey`, `category_id`, `educational_requirements`, `experience_requirements`, `job_descripton`, `job_location`, `company_name`, `company_logo`, `company_address`, `job_nature`, `salary`, `spotlight`, `published`, `created_at`, `updated_at`) VALUES
(2, 'Call Center', 'Asst. Manager', 5, 5, 'MBA', '2', 'asdfdsf asdfd', 'Dhaka', 'Dhaka Calls', 'images/company-logos/download (4).png', '9-A dhanmondi,', 'Full Time', 25000, 1, 1, '2017-10-20 12:40:38', '2017-10-24 05:00:58'),
(3, 'Call Center', 'Asst. Manager', 5, 4, 'MBA', '1', 'asdsad', 'Khulna', 'Khulan Computer house', 'images/company-logos/download (3).png', '18-Zigatola, Dhanmondi', 'Full Time', 25000, 1, 1, '2017-10-22 09:25:54', '2017-10-24 05:00:52'),
(4, 'Computer Job', 'Asst. Manager', 2, 4, 'MBS/Masters', '2', 'asdfds', 'Dhaka', 'Khulan Computer house', 'images/company-logos/download (3).jpg', '9-A dhanmondi,', 'Full Time', 25000, 1, 1, '2017-10-22 09:46:44', '2017-10-24 05:00:41'),
(5, 'Call Center', 'Asst. Manager', 25, 19, 'MBA', '2', 'asfdsfdsfsdfsd', 'Dhaka', 'Dhaka Calls', 'images/company-logos/download (2).png', '9-A dhanmondi,', 'Full Time', 25000, 1, 1, '2017-10-22 09:48:05', '2017-10-24 05:00:32'),
(6, 'Computer Job', 'Asst. Manager', 2, 17, 'MBS/Masters', '2', 'asdfdsf', 'Dhaka', 'Dhaka Calls', 'images/company-logos/download (2).jpg', '9-A dhanmondi,', 'Full Time', 25000, 1, 1, '2017-10-22 09:49:20', '2017-10-24 05:00:22'),
(7, 'Call Center', 'Asst. Manager', 25, 13, 'MBS/Masters', '2', 'asdfdsf', 'Khulna', 'Dhaka Calls', 'images/company-logos/download (1).png', '9-A dhanmondi,', 'Full Time', 25000, 1, 1, '2017-10-22 12:21:31', '2017-10-24 05:00:05'),
(9, 'Call Center', 'Asst. Manager', 25, 17, 'MBS/Masters', '1', 'asfdfafdsfasd', 'asfdfasfsadf', 'Kazi Farms Group', 'images/company-logos/og-logo-200x200.png', 'aasfdasfdsafdsaf', 'Part Time', 25000, 1, 1, '2017-10-23 23:46:42', '2017-10-23 23:46:42'),
(10, 'asdfsdaf', 'adfsadf', 25, 17, 'MA', '2', 'asdfdsafds', 'Khulna', 'NCC Bank Limited', 'images/company-logos/images (1).png', '18-Zigatola, Dhanmondi', 'Part Time', 25000, 1, 1, '2017-10-23 23:48:56', '2017-10-24 03:41:25'),
(11, 'Computer Related Job Edited', 'Marketing Executive', 2, 4, 'MBS/Masters', '2', 'asdfasdfdsf', 'Comila', 'Computer Lab', 'images/company-logos/images.png', '18-Zigatola, Dhanmondi,dhaka', 'Part Time', 20000, 1, 1, '2017-10-24 02:01:00', '2017-10-24 04:53:57'),
(12, 'Call Center', 'Asst. Manager', 25, 4, 'MBA', '2', 'asdfdsfdf', 'Rajshahi', 'Rajshahi Call Center', 'images/company-logos/images (3).jpg', '16-Rajshai New market, Rajshahai', 'Part Time', 10000, 1, 1, '2017-10-28 11:46:03', '2017-10-31 05:15:28'),
(13, 'Call Center', 'Asst. Manager', 25, 4, 'MBS/Masters', '2', 'asfdfds', 'Dhaka', 'Khulan Computer house', 'images/company-logos/images (2).jpg', '18-Zigatola, Dhanmondi', 'Full Time', 25000, 1, 1, '2017-10-29 02:15:29', '2017-11-01 03:49:55'),
(14, 'Compute Operator', 'Operator', 10, 3, 'MBA', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 1, 1, '2017-11-01 04:16:33', '2017-11-01 04:16:50'),
(15, 'Compute Operator', 'Operator', 5, 5, 'MBS/Masters', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 0, 1, '2017-11-01 04:17:20', '2017-11-01 04:20:57'),
(16, 'Compute Operator', 'Operator', 5, 5, 'MBS/Masters', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 0, 1, '2017-11-01 04:17:27', '2017-11-01 04:22:06'),
(17, 'Operator', 'Operator', 5, 6, 'MBS/Masters', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 0, 1, '2017-11-01 04:17:46', '2017-11-01 04:22:02'),
(18, 'Operator', 'Operator', 5, 6, 'MBS/Masters', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 0, 1, '2017-11-01 04:17:50', '2017-11-01 04:21:55'),
(19, 'Operator', 'Operator', 5, 7, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 0, 1, '2017-11-01 04:18:12', '2017-11-01 04:21:53'),
(20, 'Operator', 'Operator', 5, 7, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 1, 1, '2017-11-01 04:18:16', '2017-11-01 04:30:24'),
(21, 'Operator', 'Operator', 5, 8, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 1, 1, '2017-11-01 04:18:31', '2017-11-01 04:30:22'),
(22, 'Operator', 'Operator', 5, 8, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 25000, 1, 1, '2017-11-01 04:18:36', '2017-11-01 04:30:20'),
(23, 'Operator', 'Operator', 2, 9, 'SSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 15000, 1, 1, '2017-11-01 04:19:14', '2017-11-01 04:30:43'),
(24, 'Operator', 'Operator', 2, 9, 'SSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 15000, 1, 1, '2017-11-01 04:19:29', '2017-11-01 04:30:56'),
(25, 'Software Developer', 'Software Developer', 5, 12, 'BBS', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 35000, 0, 1, '2017-11-01 04:20:36', '2017-11-01 04:30:15'),
(26, 'Software Developer', 'Software Developer', 5, 12, 'BBS', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 35000, 0, 1, '2017-11-01 04:20:40', '2017-11-01 04:30:13'),
(27, 'Software Developer', 'Software Developer', 5, 12, 'BBS', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 35000, 1, 1, '2017-11-01 04:20:44', '2017-11-01 04:30:10'),
(28, 'Software Developer', 'Software Developer', 5, 10, 'BBS', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Cotton Group', 'images/company-logos/download (2).jpg', '19- Ali hat road', 'Full Time', 35000, 0, 1, '2017-11-01 04:22:38', '2017-11-01 04:30:09'),
(29, 'Electrian', 'Electrian', 3, 11, 'SSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;\r\nContact, collect and negotiate price offers from foreign suppliers or their local agents and prepare comparative price statements for management decision;\r\nEnsure cost effective quality purchase of materials;\r\nDevelop and execute a sourcing strategy to meet the company\'s business growth while attaining desired financial results;\r\nAny other job as & when asked by the Management.', 'Dhaka', 'Kazi It', 'images/company-logos/download (2).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:24:11', '2017-11-01 04:30:07'),
(30, 'Airline Travel', 'Airline Travel', 1, 15, 'BSc', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Airline Travel  Group', 'images/company-logos/download (2).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:32:33', '2017-11-01 04:32:41'),
(31, 'Architecture', 'Architecture', 1, 16, 'BSc', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Architecture   Group bd', 'images/company-logos/download (2).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:33:27', '2017-11-01 04:33:54'),
(32, 'Architecture', 'Architecture', 1, 16, 'BSc', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Architecture   Group bd', 'images/company-logos/download (2).png', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:33:46', '2017-11-01 04:33:56'),
(33, 'Pharmaceuticals', 'Pharmaceuticals', 1, 19, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Pharmaceuticals  Group bd', 'images/company-logos/images (2).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:34:50', '2017-11-01 04:35:03'),
(34, 'Pharmaceuticals', 'Pharmaceuticals', 1, 19, 'HSC', '2', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Machineries spare parts, electrical & electronics and consumable related items) with desired according to schedule;\r\nWill be responsible for Fabric / Accessories / Yarn / Dye stuff sourcing for Knit composite Factory (Supply Chain);\r\nWill be responsible for knit fabric and yarn sourcing from home / abroad;\r\nCoordinate with Marketing & Merchandising Department to understand requirement of core / basic fabrics and yarn in adherence to business calendar and accordingly work with fabric suppliers on pricing, delivery, capacity etc;\r\nMaintain liaison with the Factory regarding timely supply of all the Fabric / Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Pharmaceuticals  Group bd', 'images/company-logos/images (2).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:34:56', '2017-11-01 04:36:10'),
(35, 'Security Service', 'Security Service', 30, 21, 'SSC', '1', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Pharmaceuticals  Group bd', 'images/company-logos/images (3).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:36:02', '2017-11-01 04:36:12'),
(36, 'Security Service', 'Security Service', 30, 21, 'SSC', '1', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Pharmaceuticals  Group bd', 'images/company-logos/images (3).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:36:05', '2017-11-01 04:36:14'),
(37, 'Garments', 'Garments', 30, 18, 'SSC', '1', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Garments   Group bd', 'images/company-logos/images (3).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:37:14', '2017-11-01 04:37:29'),
(38, 'Garments', 'Garments', 30, 18, 'SSC', '1', 'Job Description / Responsibility\r\nEstablish and implement best practices that support inventory forecasting, purchasing, and material control;\r\nDevelop & implement entire Material Planning, Procurement & Supply Chain strategy;\r\nEnsure required quantity of local & foreign raw materials (dyes & chemicals, Accessories / Yarn / Dye stuff and etc as per need;', 'Dhaka', 'Garments   Group bd', 'images/company-logos/images (3).jpg', '29-Khilkhate Road', 'Full Time', 15000, 0, 1, '2017-11-01 04:37:17', '2017-11-01 04:37:30');

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
(4, '2017_10_20_124908_create_jobs_table', 2),
(5, '2017_10_22_111611_create_categories_table', 3),
(6, '2017_10_28_180424_create_employers_table', 4),
(7, '2017_10_29_153004_create_employees_table', 5),
(8, '2017_10_28_184344_create_abouts_table', 6),
(9, '2017_10_28_211529_create_programs_table', 6),
(10, '2017_10_29_070249_create_contacts_table', 6),
(11, '2017_10_29_162245_create_social_links_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_three` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `headline_one`, `details_one`, `headline_two`, `details_two`, `headline_three`, `details_three`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Communication', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', 'Office management', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', 'HR Management', 'Building a website is, in many ways, an exercise of willpower. It’s tempting to get distracted by the bells and whistles of the design process, and forget all about creating compelling content. But it\'s that last part that\'s crucial to making inbound marketing work for your business. So how do you balance your remarkable content creation with your web design needs? It all starts with the \"About Us\" page. For a remarkable about page, all you need to do is figure out your company\'s unique identity, and then share it with the world. Easy, right? Of course it\'s not easy. That said, the \"About Us\" page is one of the most important pages on your website, and it can\'t go neglected. It also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.', '2017-10-28 15:39:42', '2017-10-31 00:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `class`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Facebokk', 'fa fa-facebook-square', 'https://www.facebook.com', '2017-10-29 13:24:23', '2017-10-29 13:24:23'),
(2, 'Google+', 'fa fa-twitter-square', 'https://plus.google.com/', '2017-10-29 13:58:06', '2017-10-29 13:58:06'),
(3, 'Twitter', 'fa fa-twitter-square', 'https://twitter.com/', '2017-10-29 13:59:08', '2017-10-29 13:59:08'),
(4, 'Youtube', 'fa fa-youtube-square', 'https://www.youtube.com/', '2017-10-29 13:59:55', '2017-10-29 13:59:55'),
(5, 'Linkedin', 'fa fa-linkedin-square', 'https://www.linkedin.com/', '2017-10-29 14:00:58', '2017-10-29 14:00:58'),
(7, 'Job-Zone', 'fa fa-twitter-square', 'https://plus.google.com', '2017-10-29 15:08:16', '2017-10-30 01:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'munthasir', 'munthasirahmed131@gmail.com', '$2y$10$A8bfrf1bGUQcPgNOsGYwk.C/Gg9.w4O389sY7GIMGLDs/Czm.QPki', 'YJ22MDhXNP57CKWztdwoJ9qqT9xKdJIjVjktPhkgkJLMNxTg4ED4Z0SpbJ9j', '2017-10-18 15:05:18', '2017-10-18 15:05:18'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$CUqf/.8l6.Ry.AJLz1lUt.tFYih7B1B4Dg7UldSFUL7JAm/V06mS.', 'aIFJBZLMrNrX78lZOfhoEUhwKSDuNqrXnn4ETW62yVbascnWxCTVnlOlOtKO', '2017-10-20 01:55:32', '2017-10-20 01:55:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
