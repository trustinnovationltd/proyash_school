-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2025 at 04:44 AM
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
-- Database: `sms_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `present_village` varchar(191) DEFAULT NULL,
  `present_post_office` varchar(191) DEFAULT NULL,
  `present_upazila` varchar(191) DEFAULT NULL,
  `present_district` varchar(191) DEFAULT NULL,
  `permanent_village` varchar(191) DEFAULT NULL,
  `permanent_post_office` varchar(191) DEFAULT NULL,
  `permanent_upazila` varchar(191) DEFAULT NULL,
  `permanent_district` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `student_id`, `present_village`, `present_post_office`, `present_upazila`, `present_district`, `permanent_village`, `permanent_post_office`, `permanent_upazila`, `permanent_district`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(2, 2, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(3, 3, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(4, 4, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(5, 5, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(6, 6, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(7, 7, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(8, 8, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(9, 9, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(10, 10, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(11, 11, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(12, 12, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(13, 13, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(14, 14, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(15, 15, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(16, 16, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(17, 17, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(18, 18, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(19, 19, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(20, 20, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(21, 21, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(22, 22, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(23, 23, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(24, 24, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(25, 25, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(26, 26, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(27, 27, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(28, 28, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(29, 29, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(30, 30, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(31, 31, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(32, 32, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(33, 33, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(34, 34, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(35, 35, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(36, 36, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(37, 37, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(38, 38, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(39, 39, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(40, 40, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(41, 41, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(42, 42, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(43, 43, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(44, 44, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(45, 45, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(46, 46, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(47, 47, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(48, 48, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(49, 49, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(50, 50, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(51, 51, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(52, 52, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(53, 53, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(54, 54, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(55, 55, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(56, 56, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(57, 57, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(58, 58, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(59, 59, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(60, 60, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(61, 61, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(62, 62, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(63, 63, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(64, 64, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(65, 65, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(66, 66, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(67, 67, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(68, 68, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(69, 69, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(70, 70, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(71, 71, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(72, 72, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(73, 73, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(74, 74, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(75, 75, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(76, 76, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(77, 77, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(78, 78, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(79, 79, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(80, 80, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(81, 81, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(82, 82, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(83, 83, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(84, 84, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(85, 85, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(86, 86, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(87, 87, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(88, 88, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(89, 89, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(90, 90, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(91, 91, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(92, 92, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(93, 93, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(94, 94, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(95, 95, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(96, 96, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(97, 97, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(98, 98, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(99, 99, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(100, 100, 'Dhanmondi', 'Dhanmondi PO', 'Dhanmondi', 'Dhaka', 'Narayanganj', 'Narayanganj PO', 'Sadar', 'Narayanganj', '2025-07-16 22:59:28', '2025-07-16 22:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `agreements`
--

CREATE TABLE `agreements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `guardian_signature` varchar(191) DEFAULT NULL,
  `student_signature` varchar(191) DEFAULT NULL,
  `date_signed` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_mark_entry_faculties`
--

CREATE TABLE `assign_mark_entry_faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `last_submission_date` date NOT NULL,
  `note` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine_setups`
--

CREATE TABLE `class_routine_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `period_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_setups`
--

CREATE TABLE `class_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medium_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`class_ids`)),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `father_mobile` varchar(191) DEFAULT NULL,
  `mother_mobile` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `student_id`, `father_mobile`, `mother_mobile`, `created_at`, `updated_at`) VALUES
(1, 1, '386-923-9940', '435-775-3206', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(2, 2, '+1-539-688-9762', '+1-872-823-0537', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(3, 3, '1-619-524-5847', '+1-551-907-6361', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(4, 4, '1-731-405-9119', '912-693-9513', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(5, 5, '1-956-735-3115', '+1-814-725-9467', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(6, 6, '+1-458-441-7290', '+1-402-205-0899', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(7, 7, '1-661-755-6259', '(310) 586-7939', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(8, 8, '+1-661-439-8106', '+1-731-956-0512', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(9, 9, '+1.347.315.4643', '(405) 889-6737', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(10, 10, '463.496.2583', '941-528-4904', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(11, 11, '+1 (320) 737-3738', '1-854-905-3041', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(12, 12, '1-919-507-5441', '+19803067608', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(13, 13, '+1-870-449-9710', '+1 (920) 997-1773', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(14, 14, '929.486.3497', '1-682-266-9077', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(15, 15, '+1 (717) 388-8558', '347-230-9292', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(16, 16, '+1.629.366.8957', '+1-858-670-3350', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(17, 17, '386.632.5942', '773.260.4334', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(18, 18, '1-947-218-0249', '478-656-7268', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(19, 19, '+1-678-820-8357', '786-861-0263', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(20, 20, '+1-678-683-9655', '+1-740-972-3293', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(21, 21, '781-452-4142', '650-719-4471', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(22, 22, '(573) 317-3676', '203-550-3093', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(23, 23, '+18288857026', '(469) 974-8637', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(24, 24, '281.243.6495', '+1.567.230.0005', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(25, 25, '(276) 535-2386', '+1.769.965.9358', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(26, 26, '1-336-728-3774', '(931) 564-8852', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(27, 27, '+1 (346) 287-7587', '+1-678-752-6009', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(28, 28, '+1 (515) 867-4961', '+1.689.388.4555', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(29, 29, '(512) 945-7913', '757-876-5544', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(30, 30, '662-872-6805', '309-660-5689', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(31, 31, '(786) 614-4006', '+16146427465', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(32, 32, '830.869.4678', '484-747-1645', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(33, 33, '(779) 200-7426', '858-538-0615', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(34, 34, '1-757-758-6994', '1-515-213-9612', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(35, 35, '+14456980850', '(781) 401-4864', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(36, 36, '+1 (540) 879-3051', '+1.585.298.9884', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(37, 37, '+1.607.298.7509', '220.340.6223', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(38, 38, '+1-660-640-0860', '+1.484.384.7819', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(39, 39, '(984) 636-7849', '660-993-7156', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(40, 40, '628-493-2391', '(757) 915-4034', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(41, 41, '+1 (785) 756-4984', '586-814-1992', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(42, 42, '445-348-2190', '854-647-7562', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(43, 43, '318.534.1443', '+1 (848) 284-4597', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(44, 44, '+14013672733', '1-984-351-5251', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(45, 45, '+19286402466', '+1-810-938-4358', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(46, 46, '+1-938-813-0818', '(606) 760-0675', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(47, 47, '678.903.1414', '984-408-9097', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(48, 48, '(754) 426-3373', '+12195743257', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(49, 49, '+1.918.250.9537', '682-601-5861', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(50, 50, '445-999-2036', '+19402838133', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(51, 51, '+1.938.986.0628', '1-843-745-2826', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(52, 52, '+1-458-532-7890', '813-995-9679', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(53, 53, '386-534-0713', '(608) 930-3242', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(54, 54, '463.972.9616', '(401) 843-8689', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(55, 55, '(941) 528-5589', '+1-480-992-5086', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(56, 56, '+1 (520) 249-1259', '1-385-630-2037', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(57, 57, '726.843.3422', '+1.970.797.0792', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(58, 58, '+1-414-799-2786', '+1-762-425-7140', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(59, 59, '218-582-3921', '646-419-6502', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(60, 60, '347.946.2017', '830.973.6610', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(61, 61, '757-658-8370', '1-651-597-1128', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(62, 62, '+1-931-996-3512', '1-509-734-4556', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(63, 63, '+1.534.787.0488', '580.693.0879', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(64, 64, '629.936.4318', '1-901-490-6569', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(65, 65, '1-502-813-6020', '+14707412940', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(66, 66, '+13315928383', '(680) 918-8347', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(67, 67, '513.641.1106', '1-563-858-2082', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(68, 68, '352-889-5085', '+1 (586) 993-1435', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(69, 69, '(512) 287-0419', '267.876.5366', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(70, 70, '+12815843716', '412-684-0152', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(71, 71, '(843) 471-8638', '650.752.7555', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(72, 72, '+1-352-979-5939', '+1-913-333-6823', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(73, 73, '1-330-634-4208', '1-502-351-9268', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(74, 74, '+1-941-701-4851', '743.204.0069', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(75, 75, '+1-262-455-7351', '929.213.9957', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(76, 76, '+1.251.462.5645', '+1 (812) 607-3046', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(77, 77, '1-504-715-9927', '1-216-899-5258', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(78, 78, '+1.779.726.0211', '+1.678.656.5552', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(79, 79, '475.705.5986', '1-660-448-4757', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(80, 80, '678-932-5024', '+1-720-687-1543', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(81, 81, '1-470-991-5899', '1-458-665-9738', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(82, 82, '646-673-7048', '+1-781-840-2422', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(83, 83, '+1-385-453-2904', '215.935.4450', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(84, 84, '1-913-357-1261', '501.604.2319', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(85, 85, '+1 (986) 426-0415', '+1-512-976-5535', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(86, 86, '(936) 791-8954', '1-339-270-4025', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(87, 87, '+1 (224) 609-5829', '(681) 817-4673', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(88, 88, '231-835-3611', '+1-480-893-4544', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(89, 89, '(661) 541-7210', '+1-949-448-7766', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(90, 90, '678-533-7669', '(931) 352-0920', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(91, 91, '540.758.7418', '+1-973-686-0134', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(92, 92, '434.592.5296', '+18062529130', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(93, 93, '+1-801-634-3298', '563.960.7889', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(94, 94, '(531) 259-9001', '1-346-846-2862', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(95, 95, '+1-989-952-5047', '1-267-247-9927', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(96, 96, '+1.458.674.4945', '325-857-7432', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(97, 97, '757.774.6055', '269-393-8024', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(98, 98, '+1-575-978-5608', '+12029080102', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(99, 99, '+1-484-547-9204', '+1-585-512-8734', '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(100, 100, '(832) 500-6946', '+1.870.362.4507', '2025-07-16 22:59:28', '2025-07-16 22:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `description`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tempora quis omnis.', 'Molestiae molestiae explicabo molestiae. Explicabo nulla aut voluptatem omnis minima cum sint. Fugit magnam non aliquam id aut accusamus architecto.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(2, 'Nobis ipsum quisquam reiciendis.', 'Architecto aut omnis nihil voluptatum praesentium laboriosam. Velit excepturi consequatur omnis aliquam. Non nihil suscipit odit autem provident adipisci non. Qui aut odit dicta earum sunt qui.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(3, 'Eum rem voluptas eum aut.', 'Aliquid ut reiciendis magni et omnis minima adipisci. Voluptas tempore beatae est quasi. Iusto repellendus numquam consequuntur sunt. Magnam nobis ut expedita qui amet repellendus consequatur.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(4, 'Voluptatem iusto vero dolor.', 'Eveniet non officia illum non. Asperiores itaque saepe velit id voluptatem delectus. Sed omnis velit ipsum assumenda ut et est. Suscipit labore tempora dolore odio saepe quae qui.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(5, 'Dolore iusto qui.', 'Dolorem alias doloribus et eaque velit. Voluptate rerum tenetur aut et et omnis. Ab aperiam assumenda ratione. Ut nemo voluptate quos aut et.', 0, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(6, 'Cupiditate nobis unde qui.', 'Saepe expedita ea dolorem at placeat nulla. Ipsum ex ullam laboriosam et ducimus. Totam et illo praesentium iure magni quia ut.', 0, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(7, 'Dolorem voluptate autem.', 'Nihil fugit cupiditate modi error qui. Quibusdam architecto commodi error consectetur quos neque et nesciunt. Est architecto est quidem quia ex sit omnis. Sit ab aspernatur qui quia.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(8, 'Eos et ex mollitia.', 'Veniam dolorem perferendis aut dolores. Qui non consectetur hic quam eligendi est molestiae. Officiis officiis commodi culpa architecto dolores adipisci ut rerum. Iusto ut distinctio officia a.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(9, 'Rerum sequi sit laboriosam.', 'Dolorem eos voluptatem non qui pariatur aliquid at aliquid. Amet laborum quam voluptate voluptatibus voluptatem laborum voluptatem. Unde placeat aut quisquam magnam est asperiores.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(10, 'At numquam in.', 'Dolore facilis architecto aut exercitationem odit consequatur. Sequi incidunt quia nihil dolores iusto ut. Consectetur illum quia sed.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(11, 'Non natus minus.', 'Quia quibusdam sit quis id facere. Ut porro consequatur suscipit itaque eius. Qui et delectus ea debitis aut fuga in nam.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(12, 'Accusamus incidunt fugit.', 'Odio fugiat esse facilis. Tempora ex excepturi quod quas et nostrum facere. Architecto quaerat asperiores nihil quia. Ea nisi expedita praesentium quam nisi enim.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(13, 'Sequi nulla omnis.', 'Labore libero sed ex. Aut neque illo ut inventore inventore quas. Et inventore ea explicabo ducimus aut sed error.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(14, 'Aperiam officiis sunt.', 'Ea nostrum tempora omnis. Ut eum ex magni inventore laborum omnis.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(15, 'Libero voluptatem repudiandae.', 'Quia cupiditate est et et quia beatae. Aperiam ad ea sit maiores molestiae. Et iste aliquam in.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(16, 'Ipsam sint doloribus.', 'Aperiam quia inventore quam earum. Dolorem provident aliquam ducimus maiores molestiae omnis. Qui rem dolorem reiciendis repellat sunt fugiat.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(17, 'Consequatur consequatur nobis blanditiis esse.', 'Tempora aut maxime suscipit et. Corrupti distinctio maiores tenetur at omnis est similique. Ab facere tempore praesentium perspiciatis sequi.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(18, 'Quibusdam ab.', 'Possimus qui et quis cumque sint eum officia. Atque est qui est deserunt eius. Qui repellat unde libero ut unde adipisci rerum a.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(19, 'Voluptatem et dignissimos voluptatem eum.', 'Error soluta ea facilis itaque facere mollitia. Mollitia ipsam id omnis blanditiis ea. Esse expedita quis deleniti modi. Libero natus enim sit deserunt.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(20, 'Repudiandae velit culpa.', 'Molestias et eligendi corporis illo. Earum sequi dolorem quo rerum rerum laboriosam. Nemo omnis totam aut quas vel iste dolores animi.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(21, 'Est ut accusamus illo.', 'Provident quasi itaque corporis vel autem recusandae autem. Non voluptate nisi id rerum rerum non. Qui illo esse quo voluptatibus.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(22, 'Temporibus ratione provident porro.', 'Ipsa qui ut quibusdam consequatur vel consectetur aut. Assumenda corrupti sint repellat rerum. Odio molestias fugiat rem autem quaerat fuga sed. Quod eum enim et iure quaerat reprehenderit ipsam.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(23, 'Esse sit pariatur.', 'Corrupti atque rerum aliquam veniam pariatur. Tempore tempore sed illo cumque.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(24, 'Aperiam molestiae illum.', 'Dignissimos aut libero qui tenetur animi nemo. Quia omnis ut sequi cumque debitis voluptatem consequatur. Quidem modi optio sint est omnis distinctio.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(25, 'Iusto error assumenda eius.', 'Nam odit quo esse veniam. Rerum modi et velit animi dolore. Molestias ut est nesciunt sequi voluptas animi qui. Et eius error et soluta nobis voluptate officiis pariatur.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(26, 'Doloremque unde laboriosam recusandae mollitia.', 'Consequatur aliquam sapiente eius totam dolorem. Ab aut qui occaecati sit. Rerum explicabo rerum voluptates praesentium dolorem autem error.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(27, 'Inventore consequatur ratione.', 'Quibusdam voluptate eos cumque. Quae consequatur id omnis officiis cupiditate possimus commodi. Qui aut sit sint saepe autem.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(28, 'Nemo in laboriosam.', 'Et similique in blanditiis nisi. Et expedita quod aut ea adipisci commodi eaque.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(29, 'Quis nemo sed.', 'Quo doloribus dicta est ratione voluptas sint. Quidem consequatur recusandae illum nulla. Aperiam qui quisquam eveniet libero sint.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(30, 'Debitis rerum dolor deserunt animi.', 'Ea at qui nostrum a sunt. Quis ab possimus aliquam quos. Beatae vel repellat molestias eos facere corrupti. Totam mollitia natus rerum perspiciatis quibusdam nostrum et voluptatem.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(31, 'Magnam et nulla consequuntur.', 'Sunt similique quas fuga quisquam nihil aut quibusdam. Officiis doloremque minus autem. Omnis voluptas id dolores omnis culpa. Accusantium est ea minus molestiae earum.', 1, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(32, 'A dolores.', 'Omnis quia pariatur ut rerum adipisci. Iste tenetur veritatis voluptatibus nostrum qui.', 0, 1, NULL, NULL, '2025-07-16 22:59:27', '2025-07-16 22:59:27', NULL),
(33, 'Porro quibusdam consequuntur alias.', 'Est et nemo omnis provident veritatis. Est quibusdam dolores quos quis et. Ducimus sunt assumenda voluptas dolor ipsa est. Et et nisi omnis. Recusandae consectetur et corporis architecto enim.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(34, 'Rerum enim repellat et.', 'Quia ut non quia et animi. Provident magnam quibusdam voluptatum maxime assumenda. Voluptates rerum temporibus adipisci vel.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(35, 'Enim impedit ipsa.', 'Velit delectus nisi laboriosam quaerat debitis fugit libero sit. Non ut asperiores nesciunt commodi beatae aut recusandae in. Vel est ut aspernatur id. Sint quaerat corrupti molestias.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(36, 'Sed sapiente eaque voluptatum fugiat.', 'Ab ut amet molestiae ipsa voluptate qui. Qui et sit et qui. Quidem libero quis rerum praesentium. Ab deserunt at cupiditate non est voluptatem quis quod.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(37, 'Placeat est dolorum temporibus.', 'Nesciunt debitis ratione est ad impedit. Voluptas sed distinctio et enim sunt earum libero eaque.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(38, 'At nam et iste.', 'Id fugit aliquid delectus qui incidunt. Veritatis delectus velit sed dolore vitae reiciendis enim. Sit qui ut modi officiis enim.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(39, 'Reiciendis ad eos culpa rerum.', 'Facilis quis eos saepe voluptatem commodi eligendi. Rerum et eius pariatur. Modi quo qui quo sed tenetur. Sunt quam nihil est quibusdam vitae.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(40, 'Consectetur asperiores quidem cumque.', 'Fuga quas quae ea autem laudantium eveniet. Quod repudiandae et mollitia soluta repellendus. Voluptatem qui assumenda deleniti dolores. Asperiores ullam sit quis sint eius quam.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(41, 'Maiores eum qui exercitationem.', 'Et occaecati quibusdam laborum. Quaerat et sapiente eos cumque delectus omnis autem.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(42, 'Dignissimos sed quia dolore.', 'Occaecati fugit eum deserunt nisi repellat. Nihil eligendi minima sit. Debitis praesentium ex delectus. Eum atque reprehenderit ea est nemo fugiat tempora.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(43, 'Mollitia soluta neque ipsam.', 'Quibusdam neque qui ut cupiditate dolorem. Similique fugit dolores eius sed omnis. Itaque pariatur accusantium reprehenderit tenetur sed.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(44, 'Quidem deserunt corporis veniam doloribus.', 'Sunt aperiam sapiente ea enim dolorem porro ut ex. Fuga temporibus quas nisi. Quibusdam commodi qui quia. Nobis natus vitae natus laborum magnam.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(45, 'Dolore quo ex sit.', 'Similique sit consequatur optio eligendi quod. Quia ea voluptatem dolore quis occaecati rerum laboriosam. Illo natus quis ipsa provident porro. Dolores nihil qui dolore excepturi.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(46, 'Veniam deserunt facilis.', 'Placeat accusamus possimus qui perferendis. Ullam nesciunt sed perspiciatis. Eveniet porro doloremque voluptatum deserunt tempora.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(47, 'Velit et ad doloremque minima.', 'Nihil aspernatur repudiandae error laborum est aperiam. Expedita porro qui unde ex. Expedita qui quia rerum.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(48, 'Ut maiores culpa occaecati.', 'Sint et adipisci quisquam qui nostrum. Recusandae animi officia quis nihil aperiam soluta eos. At dolore repudiandae neque quaerat quam. Amet magnam adipisci enim adipisci consequatur ullam nihil.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(49, 'Quidem eveniet occaecati culpa quod.', 'Quia autem odio dolorem minima ad tenetur. Sint qui laboriosam et vel. Atque quo dolor excepturi enim ratione. Ex voluptatem voluptatem minima aut consequatur nisi itaque perferendis.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(50, 'Adipisci et ut.', 'Qui et molestiae ea ut voluptatem pariatur quia. Perspiciatis quo in reprehenderit voluptatem nesciunt. Aut corporis quos id sint.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(51, 'Qui qui enim quos.', 'Fugit nihil et expedita sapiente corrupti assumenda occaecati. Velit repellat quidem esse rerum aut neque atque. Quo voluptas nostrum sequi. Quia et earum ut in autem.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(52, 'Dicta omnis qui deleniti.', 'Aut consequatur vero repellat accusamus occaecati qui vel mollitia. Non blanditiis odit error voluptatum itaque nisi. Eum quia rem neque velit rerum dolorem. Minima sed aut est ab sed quos tempore.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(53, 'Ut praesentium quos sequi.', 'Vel expedita quia iste ratione voluptates odit praesentium. Quia aut maiores laborum ea. Et ad voluptatem nostrum illo quo.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(54, 'Expedita possimus.', 'Asperiores illo molestiae rerum officiis maiores voluptas error. Id eos iste ratione excepturi repellendus quo ut nam. Natus quasi explicabo et non. Doloremque odit dicta quas.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(55, 'Non aut repellat vel.', 'Eum ut impedit enim ad laboriosam est. Suscipit aut ut non eligendi. Sint aperiam perferendis reprehenderit eius dolor consectetur qui.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(56, 'Omnis rerum qui atque.', 'Nihil iste quod sed molestias dolorum debitis voluptatibus. Velit rerum in reiciendis. Et aspernatur assumenda modi dolore cumque et. Tenetur aut nihil recusandae aut.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(57, 'Doloribus possimus enim iure.', 'Blanditiis mollitia ut quis sequi officiis excepturi nemo quo. Quo fuga voluptatum et veniam ipsam itaque et. Cupiditate veniam rem consequatur.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(58, 'Consequatur sint fugiat omnis.', 'Ratione sunt perferendis rerum optio ut. Est enim aliquam velit aut qui autem numquam. Incidunt rerum animi accusamus voluptas officia vel vitae.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(59, 'Quia commodi nam dolor.', 'Architecto quos nostrum sed minima officiis. Est incidunt non asperiores commodi. Quia dolore qui debitis.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(60, 'Accusantium ex eos.', 'Est eaque adipisci quis architecto temporibus vitae inventore. Voluptatum dolorum dolor neque fugiat. Est quibusdam similique non laborum.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(61, 'Impedit aut quo ullam.', 'Ea et voluptates non magni laudantium nulla voluptatem. Illum ullam distinctio fuga incidunt dolor doloribus voluptatem. Et ducimus tempora dolorem. Aliquid natus facere aut dicta.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(62, 'Rerum consequatur sit sed.', 'Qui enim eaque aut accusantium non. Autem et dolore repellendus cupiditate. Voluptatem et recusandae voluptas.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(63, 'Quia quisquam.', 'Debitis in ut qui. Animi aut quidem expedita sit iste illum autem. Porro assumenda dicta quia quasi dolore sapiente et et. Quia delectus perspiciatis aliquid voluptatem.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(64, 'Et neque distinctio qui provident.', 'Quia dolor delectus mollitia qui voluptatibus velit voluptas. Est et quia rem libero sit est. Quibusdam provident quia a pariatur modi nesciunt perspiciatis. Ut sed expedita voluptatem aliquam ipsum.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(65, 'Et culpa eaque.', 'Inventore aperiam quod cumque iusto rerum consequatur. Voluptatem quisquam atque praesentium. Et enim repellendus eos qui et rem et.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(66, 'Et ea eius deserunt.', 'Eos deleniti eligendi delectus aliquam et. Perferendis occaecati facere provident id neque. Recusandae sunt ut inventore itaque dolore.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(67, 'Fuga quasi voluptatem.', 'Eveniet repudiandae accusantium vero voluptatem sed alias doloribus aut. Nulla et ut nam ut. Nam est eveniet praesentium vero enim explicabo ut. Et facere veniam quis aut.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(68, 'Pariatur quisquam expedita molestiae.', 'Aperiam quia reprehenderit perspiciatis libero. Cumque soluta consequatur aut et numquam laboriosam. Aut ut pariatur itaque velit unde. Omnis fugiat qui rerum quisquam velit.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(69, 'Debitis odio possimus repudiandae.', 'Fugit at excepturi magnam eius officiis. Tenetur repellendus est qui eaque ut quod voluptatem quidem. Et pariatur explicabo delectus. Nihil hic amet ut quia dicta sunt.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(70, 'Aut nesciunt voluptatibus repellendus est.', 'Hic laboriosam iure quis sunt ex omnis. Fugit laborum consectetur perspiciatis eum est. Harum odio eaque dolorem itaque qui officia dicta.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(71, 'Sunt modi ea voluptatem similique.', 'Repellat quibusdam porro veritatis id a nisi non. Deleniti illum atque dignissimos unde vero quia. Odio blanditiis sint modi sunt. Beatae suscipit porro voluptate amet occaecati ut sed.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(72, 'Explicabo saepe nesciunt ea.', 'Consequatur optio ducimus omnis eum. Non non iure accusamus molestias et. Eum accusantium molestiae et. Eum ab ipsum rerum est est.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(73, 'Eligendi maiores qui.', 'Eaque et laborum harum corrupti. Deserunt autem voluptatem necessitatibus recusandae iusto. Vel consequuntur exercitationem labore qui. Eos nemo quia voluptatem sint ratione aut omnis culpa.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(74, 'Eligendi eum voluptates nisi.', 'Et fugit quae harum. Aut nemo nisi facilis doloremque. Aliquam dicta corporis molestiae quo illo error corporis.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(75, 'Voluptates sit suscipit.', 'Nesciunt quidem fuga iusto et modi quis ut. Nemo quia animi adipisci repellat quia enim. Nihil harum et neque culpa aliquid qui.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(76, 'Non culpa labore neque.', 'Rerum esse excepturi iste cumque necessitatibus quidem necessitatibus. Omnis dolor omnis id ab ea animi ut occaecati.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(77, 'Qui eius culpa ipsa.', 'Provident eveniet et possimus at. Unde porro aut nihil corporis maiores voluptates. Aut aut nam fuga.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(78, 'Et quis consequatur.', 'Repudiandae vitae voluptas facere beatae voluptas quae illum. Voluptatem culpa adipisci quod impedit sunt corporis et. Laudantium ipsum nemo est totam architecto sit.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(79, 'Necessitatibus iusto ut.', 'Dolores voluptates error impedit consequuntur autem. Ea natus et perferendis pariatur. Perspiciatis nam mollitia aut. Praesentium fugit ut consectetur asperiores et aut et.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(80, 'Saepe totam dolores magni.', 'Voluptatem voluptas in sit eos exercitationem nostrum. Tempore deleniti aut voluptatem nihil voluptate. Minus aut qui molestiae quis a quidem aut ipsa. Nesciunt ex voluptatem voluptatem quis.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(81, 'At ea in.', 'Id et consectetur ut est. Dolorum neque qui sint voluptate sed. Velit nemo officia perspiciatis voluptas ducimus. Deleniti facilis quidem amet rerum.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(82, 'Asperiores omnis aliquid.', 'Beatae expedita error enim voluptatem animi. Odit velit veniam minima ex culpa in. Saepe ut est accusantium labore.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(83, 'Assumenda odit sit sed.', 'Sunt blanditiis qui sit eos. Voluptatem fugit nulla quia nulla deleniti nobis. Illo odio molestiae quia. Cupiditate illum ut ipsa et facilis modi unde.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(84, 'Qui qui consequatur unde ducimus.', 'Iste voluptas maxime magni est saepe alias est et. Perferendis enim aliquid assumenda quas tenetur atque officia. Harum aperiam sequi tempora et omnis.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(85, 'Eaque doloribus cum distinctio.', 'Qui expedita voluptatem commodi tempora debitis. Expedita ipsam laudantium et deleniti. Expedita sed aut debitis sint ab.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(86, 'Suscipit rerum magnam incidunt.', 'Voluptatem libero et assumenda quas nemo vitae. Aut sed voluptas enim magni sequi qui. Qui nobis eos omnis ut qui amet quisquam repudiandae. Illum deserunt a dolor sit asperiores enim sequi.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(87, 'Facere qui ut itaque quo.', 'Recusandae voluptas autem deserunt ut. Est et sequi nemo distinctio quibusdam. Voluptatibus ut ut quia id. Minus cupiditate dolore et.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(88, 'Laborum accusamus aut.', 'Ipsam dolores minus velit nesciunt earum ad qui et. Quis deserunt nihil qui velit similique. Eum veniam odit excepturi consequatur deleniti fugit.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(89, 'Accusantium voluptatum asperiores repellat.', 'Non consectetur corrupti pariatur earum ratione reiciendis ut. Ipsa distinctio laborum aliquam. Porro et dolor ipsam assumenda animi.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(90, 'Velit officiis perferendis odit.', 'Culpa placeat natus laudantium voluptas voluptatem ad aut. Minus dolore aliquid et. Ut possimus at et et est.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(91, 'Asperiores totam blanditiis est facere.', 'Corporis libero officia nesciunt delectus fugit dolor illo velit. Adipisci provident molestias quasi eveniet esse et culpa.', 0, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(92, 'Deserunt et sed sequi.', 'Quia dolor autem totam corrupti omnis. Quam ipsam exercitationem vel. Ducimus ipsa tenetur omnis architecto quisquam ipsum totam libero. Quo tempora illo et.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(93, 'Sed voluptatem et consequatur saepe.', 'Voluptatibus quis velit quo quia autem quasi iusto. Voluptates dolor et et ut nam et. Voluptatem esse dicta aliquid. Dolorem eveniet officia et harum maiores sit.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(94, 'Ex eius vel.', 'Consequatur ex at magnam culpa. Nihil velit dolorem ad aliquam ea. Delectus alias magnam sit aut nisi.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(95, 'Eaque a illo consequatur.', 'Minus excepturi quo aut. Facilis suscipit eum tempora et quo pariatur in.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(96, 'At deserunt adipisci est.', 'Qui aut odit aut id. Possimus sit voluptatem enim. Laboriosam hic id neque sit hic dolor molestias sit.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(97, 'Distinctio in in.', 'Quas quidem quam eos et magnam accusantium sit voluptatem. Necessitatibus reiciendis officiis at quisquam modi dolores aspernatur. Nam ut non libero eos.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(98, 'Consequuntur aut laudantium consequatur modi.', 'Eligendi eligendi quas et voluptas. Vitae sint exercitationem aut beatae et magnam vel recusandae. Nam dolor maxime qui beatae placeat. Labore assumenda in temporibus deleniti itaque dolor.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(99, 'Dolor fuga voluptatum.', 'Aliquid pariatur excepturi itaque qui architecto. Dolores suscipit distinctio saepe consequuntur. Eaque eos fuga at at. Sed neque totam a molestiae.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL),
(100, 'Architecto aut ut.', 'Sit placeat et aliquam mollitia. Commodi alias optio laborum occaecati illum. Voluptates odit impedit rerum libero in quidem.', 1, 1, NULL, NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_setups`
--

CREATE TABLE `department_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medium_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`department_ids`)),
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 means active, 0 means inactive',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `teachers_id` varchar(191) DEFAULT NULL,
  `rfid` varchar(191) DEFAULT NULL,
  `name_english` varchar(191) NOT NULL,
  `name_bangla` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `nid` varchar(191) DEFAULT NULL,
  `birth_certificate_no` varchar(191) DEFAULT NULL,
  `blood_group` varchar(191) DEFAULT NULL,
  `religion` varchar(191) DEFAULT NULL,
  `serial` int(11) NOT NULL,
  `permanent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `educational_information` varchar(191) DEFAULT NULL,
  `experience_information` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `signature` varchar(191) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_admission_circulars`
--

CREATE TABLE `employee_admission_circulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_circular_id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `number_of_seat` int(11) NOT NULL,
  `admission_fee` decimal(10,2) NOT NULL,
  `title` varchar(191) NOT NULL,
  `details` text NOT NULL,
  `salary_scale` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_admission_circular_sessions`
--

CREATE TABLE `employee_admission_circular_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `published_date` date NOT NULL,
  `apply_last_date` date NOT NULL,
  `visibility_date_in_website` date NOT NULL,
  `approximate_admit_card_received_date` date NOT NULL,
  `approximate_exam_date` date NOT NULL,
  `approximate_result_published_date` date NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_applications`
--

CREATE TABLE `employee_leave_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(191) NOT NULL,
  `pay_type` varchar(191) NOT NULL,
  `leave_application_date` date NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_reason` text NOT NULL,
  `emergency_contact_number` varchar(191) NOT NULL,
  `approved_date_from` date DEFAULT NULL,
  `approved_date_to` date DEFAULT NULL,
  `approved_by` varchar(191) DEFAULT NULL,
  `responsible_employee_during_leave` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_manual_attendance`
--

CREATE TABLE `employee_manual_attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(191) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_settings`
--

CREATE TABLE `event_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `class_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means inactive, 1 means active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks_setups`
--

CREATE TABLE `exam_marks_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `written_exam_mark` decimal(8,2) NOT NULL,
  `written_exam_pass_mark` decimal(8,2) NOT NULL,
  `mcq_exam_mark` decimal(8,2) NOT NULL,
  `mcq_exam_pass_mark` decimal(8,2) NOT NULL,
  `practical_mark` decimal(8,2) NOT NULL,
  `class_test_mark` decimal(8,2) NOT NULL,
  `monthly_test_mark` decimal(8,2) NOT NULL,
  `total_mark` decimal(8,2) NOT NULL,
  `converted_in` decimal(8,2) NOT NULL,
  `total_pass_mark` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_routine_setups`
--

CREATE TABLE `exam_routine_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `period_setup_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_setups`
--

CREATE TABLE `exam_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `exam_type_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `present_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `leave_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `absent_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `fee_collection_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `admission_greeting_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `birthday_sms` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `student_id_automatic` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 means off, 1 means on',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_setups`
--

CREATE TABLE `grade_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(191) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  `from_marks` decimal(8,2) NOT NULL,
  `to_marks` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `father_name_bn` varchar(191) NOT NULL,
  `father_name_en` varchar(191) NOT NULL,
  `father_occupation` varchar(191) NOT NULL,
  `father_income` int(11) DEFAULT NULL,
  `mother_name_bn` varchar(191) NOT NULL,
  `mother_name_en` varchar(191) NOT NULL,
  `mother_occupation` varchar(191) NOT NULL,
  `mother_income` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `student_id`, `father_name_bn`, `father_name_en`, `father_occupation`, `father_income`, `mother_name_bn`, `mother_name_en`, `mother_occupation`, `mother_income`, `created_at`, `updated_at`) VALUES
(1, 1, 'মোঃ আবুল কালাম', 'Selmer Leannon', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Amira Emmerich', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(2, 2, 'মোঃ আবুল কালাম', 'Prof. Henderson Stark', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Alta Hermiston', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(3, 3, 'মোঃ আবুল কালাম', 'Dorcas Wilkinson', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Vivienne McClure', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(4, 4, 'মোঃ আবুল কালাম', 'Brannon Kertzmann Sr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Amber Howe', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(5, 5, 'মোঃ আবুল কালাম', 'Herbert Gaylord', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Syble Wiza', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(6, 6, 'মোঃ আবুল কালাম', 'Ford Pagac II', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dejah Dickens Sr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(7, 7, 'মোঃ আবুল কালাম', 'Mr. Imani Langosh DDS', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Isabell Sporer', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(8, 8, 'মোঃ আবুল কালাম', 'Reagan Bashirian', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Heidi Bosco', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(9, 9, 'মোঃ আবুল কালাম', 'Prof. Baron Streich DDS', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Velda Nader III', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(10, 10, 'মোঃ আবুল কালাম', 'Dario O\'Keefe', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Miss Hulda Herman III', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(11, 11, 'মোঃ আবুল কালাম', 'Prof. Noel O\'Kon', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Flavie Wyman', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(12, 12, 'মোঃ আবুল কালাম', 'Nicola Barrows', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dr. Eudora Sawayn', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(13, 13, 'মোঃ আবুল কালাম', 'Prof. Salvatore Bashirian', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Aisha D\'Amore', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(14, 14, 'মোঃ আবুল কালাম', 'Mr. Gianni Runolfsdottir', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ms. April Harvey', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(15, 15, 'মোঃ আবুল কালাম', 'Mr. Christopher Halvorson PhD', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Maximillia Wisoky', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(16, 16, 'মোঃ আবুল কালাম', 'Pietro Predovic', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Erika O\'Reilly', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(17, 17, 'মোঃ আবুল কালাম', 'Chelsey Krajcik', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Josephine Considine Jr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(18, 18, 'মোঃ আবুল কালাম', 'Dr. Ottis Parker DDS', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mrs. Marquise Waters DVM', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(19, 19, 'মোঃ আবুল কালাম', 'Mortimer Wolf', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Eldridge Yost', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(20, 20, 'মোঃ আবুল কালাম', 'Tyson Armstrong', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Evie Zulauf III', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(21, 21, 'মোঃ আবুল কালাম', 'Jesse Daugherty', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Rubie Bogisich III', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(22, 22, 'মোঃ আবুল কালাম', 'Brice Emmerich', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Abigale Harber', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(23, 23, 'মোঃ আবুল কালাম', 'Tito Lubowitz', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dr. Marlen Huel', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(24, 24, 'মোঃ আবুল কালাম', 'Mr. Monserrat Romaguera', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mrs. Jessika Kris', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(25, 25, 'মোঃ আবুল কালাম', 'Prof. Rodrick Roob Jr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Charlene Moen', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(26, 26, 'মোঃ আবুল কালাম', 'Easton Will', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Alexandrea Crooks II', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(27, 27, 'মোঃ আবুল কালাম', 'Arvid Wolff', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Charlene Price', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(28, 28, 'মোঃ আবুল কালাম', 'Clark Cummerata Sr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Brandyn Douglas', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(29, 29, 'মোঃ আবুল কালাম', 'Leland Gottlieb', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Rachelle Lakin MD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(30, 30, 'মোঃ আবুল কালাম', 'Guiseppe Hartmann DVM', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Nayeli Oberbrunner', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(31, 31, 'মোঃ আবুল কালাম', 'Casper Dickens', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ms. Tessie DuBuque', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(32, 32, 'মোঃ আবুল কালাম', 'Mitchel Hyatt I', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Gregoria Konopelski', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(33, 33, 'মোঃ আবুল কালাম', 'Kadin Ebert II', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Sheila Bergnaum Jr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(34, 34, 'মোঃ আবুল কালাম', 'Henri Terry', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Brenda Vandervort Jr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(35, 35, 'মোঃ আবুল কালাম', 'Lula Braun', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Kelsie Windler PhD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(36, 36, 'মোঃ আবুল কালাম', 'Brendon Brekke', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Myrtie Medhurst', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(37, 37, 'মোঃ আবুল কালাম', 'Jayson Greenholt', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Jewel Haley', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(38, 38, 'মোঃ আবুল কালাম', 'Prof. Nathen Kovacek III', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Anjali Schuster', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(39, 39, 'মোঃ আবুল কালাম', 'Kelton Swaniawski', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Elsie Cartwright', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(40, 40, 'মোঃ আবুল কালাম', 'Logan Osinski V', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Rosina Upton', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(41, 41, 'মোঃ আবুল কালাম', 'Vincenzo Wolf', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Cindy Prosacco', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(42, 42, 'মোঃ আবুল কালাম', 'Prof. Jayce Lind IV', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dr. Michele Smitham', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(43, 43, 'মোঃ আবুল কালাম', 'Robb Marquardt I', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Valentina Johns I', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(44, 44, 'মোঃ আবুল কালাম', 'Everardo Jacobson', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Maida Hamill', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(45, 45, 'মোঃ আবুল কালাম', 'Issac Reynolds', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Meggie Deckow II', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(46, 46, 'মোঃ আবুল কালাম', 'Elliot Treutel I', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Della Nicolas', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(47, 47, 'মোঃ আবুল কালাম', 'Keagan Gleason', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Amya Ferry', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(48, 48, 'মোঃ আবুল কালাম', 'Johnson Kris', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Albertha Legros', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(49, 49, 'মোঃ আবুল কালাম', 'Prof. Fausto Sawayn', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dayana Dare', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(50, 50, 'মোঃ আবুল কালাম', 'Stanton Larkin Sr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Berenice Heaney PhD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(51, 51, 'মোঃ আবুল কালাম', 'Dr. Ruben Wiegand II', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ana McLaughlin', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(52, 52, 'মোঃ আবুল কালাম', 'Will Thiel Sr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mallie Rempel', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(53, 53, 'মোঃ আবুল কালাম', 'Tillman Rowe', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ardith Kozey', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(54, 54, 'মোঃ আবুল কালাম', 'Jan Gusikowski', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Marianna Kuhic', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(55, 55, 'মোঃ আবুল কালাম', 'Lukas Heaney', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Delilah Lebsack', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(56, 56, 'মোঃ আবুল কালাম', 'Dr. King Jacobs PhD', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Joannie Leannon', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(57, 57, 'মোঃ আবুল কালাম', 'Jasen Konopelski', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Jackie Gislason', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(58, 58, 'মোঃ আবুল কালাম', 'Mr. Alejandrin Connelly II', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Rylee Grimes', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(59, 59, 'মোঃ আবুল কালাম', 'Prof. Angelo Prohaska III', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Elva Walter', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(60, 60, 'মোঃ আবুল কালাম', 'Dr. Osvaldo Zboncak V', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mrs. Rose Brakus DVM', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(61, 61, 'মোঃ আবুল কালাম', 'Justyn Sipes', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Miss Effie Legros', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(62, 62, 'মোঃ আবুল কালাম', 'Adam Kilback', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Joannie Hand', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(63, 63, 'মোঃ আবুল কালাম', 'Trent Hagenes DDS', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Corene Metz', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(64, 64, 'মোঃ আবুল কালাম', 'Rhett Gerlach', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Dr. Kathryn Swaniawski IV', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(65, 65, 'মোঃ আবুল কালাম', 'Dr. Ibrahim Schaden IV', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Nova Welch', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(66, 66, 'মোঃ আবুল কালাম', 'Watson Towne', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Magdalena Heller MD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(67, 67, 'মোঃ আবুল কালাম', 'Paolo Larson', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Alvera Nader', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(68, 68, 'মোঃ আবুল কালাম', 'Edgardo Hintz', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Duane Kihn', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(69, 69, 'মোঃ আবুল কালাম', 'Monty Harris', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Carmen Orn', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(70, 70, 'মোঃ আবুল কালাম', 'Khalid Gleichner', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mrs. Madilyn Denesik Jr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(71, 71, 'মোঃ আবুল কালাম', 'Dr. Judd Lockman MD', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ms. Shannon Hammes Jr.', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(72, 72, 'মোঃ আবুল কালাম', 'Walton Turner', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Laury Hintz', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(73, 73, 'মোঃ আবুল কালাম', 'Tyler Crist Sr.', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Yolanda Veum', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(74, 74, 'মোঃ আবুল কালাম', 'Dr. Adrian Hill', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Lenna Carroll', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(75, 75, 'মোঃ আবুল কালাম', 'Dr. Porter Hansen', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Leonor Dickens', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(76, 76, 'মোঃ আবুল কালাম', 'Prof. Eldred Marquardt', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Lyda Hammes', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(77, 77, 'মোঃ আবুল কালাম', 'Mr. Trystan Hirthe', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Janice Weimann', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(78, 78, 'মোঃ আবুল কালাম', 'Mr. Antone Lakin V', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Araceli Kutch V', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(79, 79, 'মোঃ আবুল কালাম', 'Prof. Ferne Howe', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Brisa Torphy', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(80, 80, 'মোঃ আবুল কালাম', 'Prof. Hilbert Waelchi', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Celia Gislason', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(81, 81, 'মোঃ আবুল কালাম', 'Harrison Tromp', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Fleta Reinger', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(82, 82, 'মোঃ আবুল কালাম', 'Oda Hauck', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Luisa Maggio', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(83, 83, 'মোঃ আবুল কালাম', 'Moshe Bruen', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ms. Jessyca Trantow DDS', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(84, 84, 'মোঃ আবুল কালাম', 'Mr. Emiliano Smitham II', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Sonia Tremblay', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(85, 85, 'মোঃ আবুল কালাম', 'Macey Schroeder', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Macy Jacobi', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(86, 86, 'মোঃ আবুল কালাম', 'Sheridan Torp', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ms. Carmella Hammes I', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(87, 87, 'মোঃ আবুল কালাম', 'Mr. Dalton Connelly I', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Miss Kianna Rempel DVM', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(88, 88, 'মোঃ আবুল কালাম', 'Tyler Erdman', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Patience Klocko', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(89, 89, 'মোঃ আবুল কালাম', 'Prof. Jaden Ritchie', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Hallie Kilback V', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(90, 90, 'মোঃ আবুল কালাম', 'Mohammed O\'Connell', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Miss Zena Stehr', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(91, 91, 'মোঃ আবুল কালাম', 'Prof. Chandler Willms PhD', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Destini Wintheiser', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(92, 92, 'মোঃ আবুল কালাম', 'Dr. Jules Block MD', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Evalyn Huels I', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(93, 93, 'মোঃ আবুল কালাম', 'Vincent Walter', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Brenna Doyle', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(94, 94, 'মোঃ আবুল কালাম', 'Kaleigh Schmeler', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Maryjane Kreiger', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(95, 95, 'মোঃ আবুল কালাম', 'Mr. Sammy Hills', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Adrianna Durgan MD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(96, 96, 'মোঃ আবুল কালাম', 'Gaetano Willms', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Mrs. Litzy Hintz PhD', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(97, 97, 'মোঃ আবুল কালাম', 'Dr. Jonathon Murray', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Stella Leuschke', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(98, 98, 'মোঃ আবুল কালাম', 'Lamar Swift DVM', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Miss Leilani Crist', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(99, 99, 'মোঃ আবুল কালাম', 'Lester Grady', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Prof. Sydnee Howell', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(100, 100, 'মোঃ আবুল কালাম', 'Tyshawn Weber', 'Businessman', 30000, 'মোছাঃ রুবিনা', 'Ludie Sauer DVM', 'Housewife', 0, '2025-07-16 22:59:28', '2025-07-16 22:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_settings`
--

CREATE TABLE `holiday_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `holiday_type` varchar(191) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `branch_name` varchar(191) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `eiin_code` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `medium_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`medium_ids`)),
  `department_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`department_ids`)),
  `shift_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shift_ids`)),
  `class_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`class_ids`)),
  `exam_type_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`exam_type_ids`)),
  `weekly_holidays` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`weekly_holidays`)),
  `description` text DEFAULT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `dashboard_banner_image` varchar(191) DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `youtube_link` varchar(191) DEFAULT NULL,
  `map_link` varchar(191) DEFAULT NULL,
  `android_link` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mark_entries`
--

CREATE TABLE `mark_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `exam_type_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `marks` double NOT NULL,
  `note` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mediums`
--

CREATE TABLE `mediums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_02_052727_create_mediums_table', 1),
(5, '2024_12_04_034316_create_academic_years_table', 1),
(6, '2024_12_04_072211_create_departments_table', 1),
(7, '2024_12_04_074509_create_shifts_table', 1),
(8, '2024_12_04_081821_create_classes_table', 1),
(9, '2024_12_05_033535_create_exam_types_table', 1),
(10, '2024_12_05_040826_create_subjects_table', 1),
(11, '2024_12_05_061249_create_institutes_table', 1),
(12, '2024_12_10_032549_create_general_settings_table', 1),
(13, '2024_12_10_044017_create_class_setups_table', 1),
(14, '2024_12_10_044748_create_student_categories_table', 1),
(15, '2024_12_10_082448_create_holiday_settings_table', 1),
(16, '2024_12_11_054608_create_department_setups_table', 1),
(17, '2024_12_23_023959_create_subject_setups_table', 1),
(18, '2024_12_23_033410_create_event_settings_table', 1),
(19, '2024_12_29_061854_create_students_table', 1),
(20, '2025_01_05_044216_create_designations_table', 1),
(21, '2025_01_05_061716_create_employees_table', 1),
(22, '2025_01_15_031006_create_employee_leave_applications_table', 1),
(23, '2025_01_23_051052_create_section_setups_table', 1),
(24, '2025_01_23_051335_create_period_setups_table', 1),
(25, '2025_01_23_051622_create_class_routine_setups_table', 1),
(26, '2025_01_23_051935_create_exam_routine_setups_table', 1),
(27, '2025_01_23_052304_create_syllabus_uploads_table', 1),
(28, '2025_01_23_052616_create_student_manual_attendance_table', 1),
(29, '2025_01_23_052728_create_employee_manual_attendance_table', 1),
(30, '2025_01_23_053002_create_student_leave_applications_table', 1),
(31, '2025_01_23_053134_create_student_admission_circular_sessions_table', 1),
(32, '2025_01_23_053246_create_student_admission_circulars_table', 1),
(33, '2025_01_23_053353_create_employee_admission_circular_sessions_table', 1),
(34, '2025_01_23_053449_create_employee_admission_circulars_table', 1),
(35, '2025_01_23_053550_create_exam_marks_setups_table', 1),
(36, '2025_01_23_053654_create_exam_setups_table', 1),
(37, '2025_01_23_053813_create_grade_setups_table', 1),
(38, '2025_01_23_054112_create_assign_mark_entry_faculties_table', 1),
(39, '2025_01_23_054316_create_mark_entries_table', 1),
(40, '2025_06_25_024832_create_guardians_table', 1),
(41, '2025_06_25_024912_create_contacts_table', 1),
(42, '2025_06_25_024954_create_addresses_table', 1),
(43, '2025_06_25_025033_create_agreements_table', 1),
(44, '2025_06_25_030052_create_special_evaluations_table', 1),
(45, '2025_07_17_041427_create_website_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `period_setups`
--

CREATE TABLE `period_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_setups`
--

CREATE TABLE `section_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('392UJExxxQd5s1YKYJSz5EmfRldS6jJXUP7QDHt6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2pnbkg3UWZwRUt4R0NXdlpYbUdzWEJjVzU2M3JSWGV2TWZEZ0doaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753065520),
('FgfGPiN4rWzckWeMOPdYl2JhbgzqdWIiRQpwDQqE', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaTJpNFNXUTMxSDNaN25LNDBiaDd4eENETVpSU010anJEWmdoMWJhZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2Rlc2lnbmF0aW9ucyI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdGVybXMtY29uZGl0aW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1753003087);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special_evaluations`
--

CREATE TABLE `special_evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `diagnosis` varchar(191) DEFAULT NULL,
  `therapist_notes` text DEFAULT NULL,
  `therapist_name` varchar(191) DEFAULT NULL,
  `therapist_date` date DEFAULT NULL,
  `teacher_notes` text DEFAULT NULL,
  `teacher_name` varchar(191) DEFAULT NULL,
  `teacher_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(191) NOT NULL,
  `religion` varchar(191) NOT NULL,
  `admission_date` date NOT NULL,
  `admission_year` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `grade_applied_for` varchar(191) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name_bn`, `name_en`, `birth_date`, `nationality`, `religion`, `admission_date`, `admission_year`, `image`, `grade_applied_for`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'রহমত তাসনীম', 'Leanna Lesch', '1976-02-24', 'Bangladeshi', 'Hinduism', '1986-03-26', '1999', 'https://via.placeholder.com/300x300.png/0055aa?text=people+neque', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(2, 'মি. হাসান আলী', 'Mrs. Marquise McGlynn I', '1973-07-11', 'Bangladeshi', 'Christianity', '1981-07-13', '2020', 'https://via.placeholder.com/300x300.png/003344?text=people+praesentium', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(3, 'ফাহমেদা আলী', 'Nakia Pacocha', '1987-07-09', 'Bangladeshi', 'Christianity', '1982-05-13', '1982', 'https://via.placeholder.com/300x300.png/00ffdd?text=people+est', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(4, 'ইমরুল শেখ', 'Harrison Franecki', '2020-09-26', 'Bangladeshi', 'Buddhism', '2024-12-06', '1998', 'https://via.placeholder.com/300x300.png/00cc33?text=people+harum', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(5, 'রহমত তাসনীম', 'Sabryna Ortiz', '2015-10-17', 'Bangladeshi', 'Islam', '1996-05-19', '1999', 'https://via.placeholder.com/300x300.png/0088cc?text=people+blanditiis', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(6, 'জারিন খান', 'Friedrich Wisozk', '1984-07-17', 'Bangladeshi', 'Hinduism', '1980-12-10', '2012', 'https://via.placeholder.com/300x300.png/006666?text=people+eum', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(7, 'লাবনী তাসনীম', 'Naomi Renner', '2007-09-03', 'Bangladeshi', 'Islam', '2013-09-18', '2025', 'https://via.placeholder.com/300x300.png/00bbff?text=people+ut', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(8, 'মাসনুন আলী', 'Brady Miller', '1971-02-04', 'Bangladeshi', 'Christianity', '1983-10-25', '1983', 'https://via.placeholder.com/300x300.png/0000ee?text=people+rerum', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(9, 'রিফাত তাসনীম', 'Winifred Stanton PhD', '1974-05-02', 'Bangladeshi', 'Christianity', '1989-09-07', '2024', 'https://via.placeholder.com/300x300.png/00bbcc?text=people+tenetur', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(10, 'জলিল তাবাসসুম', 'Ferne Daugherty', '2018-01-28', 'Bangladeshi', 'Hinduism', '1976-05-24', '1972', 'https://via.placeholder.com/300x300.png/00dd55?text=people+explicabo', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(11, 'মি. হাসান শিকদার', 'Brycen Mosciski', '1975-10-02', 'Bangladeshi', 'Islam', '2023-11-30', '2024', 'https://via.placeholder.com/300x300.png/00dddd?text=people+veniam', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(12, 'জারিন তাবাসসুম', 'Kelton Hammes', '1999-09-05', 'Bangladeshi', 'Islam', '1997-01-29', '1988', 'https://via.placeholder.com/300x300.png/006600?text=people+rerum', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(13, 'মি. বরকত খান', 'Chaya Erdman', '2022-12-20', 'Bangladeshi', 'Hinduism', '1984-04-16', '1970', 'https://via.placeholder.com/300x300.png/002222?text=people+doloremque', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(14, 'জলিল শেখ', 'Delmer Steuber', '1971-08-03', 'Bangladeshi', 'Christianity', '1978-01-17', '2002', 'https://via.placeholder.com/300x300.png/007733?text=people+perspiciatis', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(15, 'আহসান তাবাসসুম', 'Prof. Adrian Wolf', '2015-03-15', 'Bangladeshi', 'Christianity', '2001-10-11', '2013', 'https://via.placeholder.com/300x300.png/00ee44?text=people+id', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(16, 'সাবরিনা শিকদার', 'Felipa Windler', '2023-10-03', 'Bangladeshi', 'Buddhism', '1996-08-24', '2021', 'https://via.placeholder.com/300x300.png/00ee66?text=people+omnis', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(17, 'ফারহানা খান', 'Jairo Hyatt', '1978-09-29', 'Bangladeshi', 'Islam', '1986-05-31', '1971', 'https://via.placeholder.com/300x300.png/0044dd?text=people+temporibus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(18, 'মিসেস. হাসিন শেখ', 'Leonel Greenholt', '1983-07-03', 'Bangladeshi', 'Islam', '2002-05-12', '1985', 'https://via.placeholder.com/300x300.png/009999?text=people+eos', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(19, 'মিস. সাবরিনা শেখ', 'Elody Runolfsdottir', '2023-04-01', 'Bangladeshi', 'Islam', '1982-01-25', '1997', 'https://via.placeholder.com/300x300.png/00bb00?text=people+dicta', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(20, 'মি. আব্দুল্লাহ খান', 'Jasmin Huels', '1982-02-04', 'Bangladeshi', 'Buddhism', '2012-09-04', '2003', 'https://via.placeholder.com/300x300.png/009922?text=people+omnis', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(21, 'অনন্ত শেখ', 'Eric Bins', '1991-03-11', 'Bangladeshi', 'Christianity', '1972-08-18', '1996', 'https://via.placeholder.com/300x300.png/000022?text=people+qui', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(22, 'মিসেস. রহিমা তাসনীম', 'Bernie Kub', '1977-09-15', 'Bangladeshi', 'Buddhism', '1972-02-15', '1983', 'https://via.placeholder.com/300x300.png/0000ff?text=people+sed', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(23, 'মিসেস. মেহনাজ খান', 'Prof. Evert Nitzsche', '2016-05-16', 'Bangladeshi', 'Christianity', '2001-09-22', '1989', 'https://via.placeholder.com/300x300.png/00dd22?text=people+consectetur', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(24, 'মাসনুন তাসনীম', 'Dr. Quinten Swaniawski III', '1976-04-25', 'Bangladeshi', 'Christianity', '1984-12-20', '1991', 'https://via.placeholder.com/300x300.png/009900?text=people+laboriosam', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(25, 'মি. হাসান শিকদার', 'Ms. Daphney Schneider', '2015-01-18', 'Bangladeshi', 'Islam', '1991-05-27', '2013', 'https://via.placeholder.com/300x300.png/007766?text=people+itaque', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(26, 'হাসিন তাসনীম', 'Estefania Okuneva Sr.', '2012-06-10', 'Bangladeshi', 'Hinduism', '1970-12-04', '2019', 'https://via.placeholder.com/300x300.png/005522?text=people+eum', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(27, 'মিস. মাহজাবিন শেখ', 'Dr. Ceasar Sporer', '1971-08-13', 'Bangladeshi', 'Buddhism', '1976-04-06', '2004', 'https://via.placeholder.com/300x300.png/00bbaa?text=people+aut', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(28, 'ফাহমেদা শেখ', 'Prof. Art Lesch', '2016-05-13', 'Bangladeshi', 'Islam', '1979-02-07', '1992', 'https://via.placeholder.com/300x300.png/00eecc?text=people+et', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(29, 'সাবরিন তাবাসসুম', 'Miss Emmy Kling DDS', '1996-02-29', 'Bangladeshi', 'Hinduism', '1999-03-01', '1976', 'https://via.placeholder.com/300x300.png/00aa33?text=people+facere', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(30, 'আব্দুল্লাহ খান', 'Ebba Steuber', '1989-11-02', 'Bangladeshi', 'Hinduism', '1996-07-15', '2020', 'https://via.placeholder.com/300x300.png/00ff00?text=people+libero', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(31, 'অনন্ত আলী', 'Susana Trantow', '1977-08-11', 'Bangladeshi', 'Buddhism', '1971-10-30', '2000', 'https://via.placeholder.com/300x300.png/00ee55?text=people+ut', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(32, 'করিম খান', 'Eulalia Hermann', '1987-09-10', 'Bangladeshi', 'Islam', '2000-02-25', '1971', 'https://via.placeholder.com/300x300.png/001199?text=people+quis', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(33, 'মি. আহসান তাবাসসুম', 'Coty Kozey', '1989-11-01', 'Bangladeshi', 'Hinduism', '2001-05-03', '2023', 'https://via.placeholder.com/300x300.png/000011?text=people+totam', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(34, 'আহসান তাসনীম', 'Beatrice Green', '1971-12-14', 'Bangladeshi', 'Buddhism', '2008-03-27', '1986', 'https://via.placeholder.com/300x300.png/0066ff?text=people+provident', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(35, 'আহসান তাবাসসুম', 'Shanel Muller Sr.', '1977-09-06', 'Bangladeshi', 'Buddhism', '1988-12-21', '2015', 'https://via.placeholder.com/300x300.png/004455?text=people+in', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(36, 'ফারহানা খান', 'Ms. Nadia Kirlin PhD', '2016-05-29', 'Bangladeshi', 'Islam', '2019-08-21', '1973', 'https://via.placeholder.com/300x300.png/004466?text=people+accusamus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(37, 'রহমত তাবাসসুম', 'Grover Borer', '2005-04-14', 'Bangladeshi', 'Buddhism', '1986-04-04', '2022', 'https://via.placeholder.com/300x300.png/009999?text=people+est', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(38, 'হাসান তাসনীম', 'Miss Jazmin Will Jr.', '1986-12-16', 'Bangladeshi', 'Islam', '1997-12-05', '1981', 'https://via.placeholder.com/300x300.png/000000?text=people+quia', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(39, 'মাসনুন খান', 'Desmond Block', '1989-12-22', 'Bangladeshi', 'Hinduism', '2023-02-28', '1997', 'https://via.placeholder.com/300x300.png/0099aa?text=people+deleniti', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(40, 'মি. হাসনাত তাসনীম', 'Pauline Blick PhD', '1970-08-07', 'Bangladeshi', 'Christianity', '2019-10-17', '1975', 'https://via.placeholder.com/300x300.png/00ff77?text=people+natus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(41, 'জলিল তাসনীম', 'Isobel Moore DVM', '2017-04-05', 'Bangladeshi', 'Christianity', '1978-10-27', '2008', 'https://via.placeholder.com/300x300.png/002266?text=people+est', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(42, 'জলিল তাসনীম', 'Kassandra Kris', '1983-08-10', 'Bangladeshi', 'Islam', '1994-04-08', '2014', 'https://via.placeholder.com/300x300.png/00aa33?text=people+perspiciatis', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(43, 'ফাহমেদা তাসনীম', 'Albin Gibson', '1971-11-05', 'Bangladeshi', 'Buddhism', '1997-06-20', '1973', 'https://via.placeholder.com/300x300.png/003344?text=people+cum', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(44, 'রহিমা তাবাসসুম', 'Margaretta Connelly', '1976-09-18', 'Bangladeshi', 'Christianity', '2002-04-03', '2012', 'https://via.placeholder.com/300x300.png/00eeee?text=people+impedit', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(45, 'আব্দুল্লাহ খান', 'Miss Earnestine Abshire', '1994-11-02', 'Bangladeshi', 'Hinduism', '1986-12-25', '2022', 'https://via.placeholder.com/300x300.png/0011ee?text=people+odit', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(46, 'ফাহমেদা তাবাসসুম', 'Dewayne Gleichner MD', '2002-07-15', 'Bangladeshi', 'Buddhism', '2002-11-20', '1971', 'https://via.placeholder.com/300x300.png/0099aa?text=people+mollitia', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(47, 'আব্দুল্লাহ খান', 'Loyce Douglas', '1988-12-21', 'Bangladeshi', 'Christianity', '1991-10-08', '1998', 'https://via.placeholder.com/300x300.png/00dddd?text=people+officia', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(48, 'লাবনী খান', 'Mr. Quinn Streich II', '2001-03-11', 'Bangladeshi', 'Islam', '1976-05-26', '1984', 'https://via.placeholder.com/300x300.png/0066bb?text=people+ab', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(49, 'করিম তাবাসসুম', 'Fleta Abbott', '1982-01-04', 'Bangladeshi', 'Islam', '2014-07-26', '1975', 'https://via.placeholder.com/300x300.png/009944?text=people+eaque', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(50, 'বরকত তাসনীম', 'Mr. Sammie Morar', '2007-12-06', 'Bangladeshi', 'Christianity', '2021-10-29', '2008', 'https://via.placeholder.com/300x300.png/001122?text=people+quibusdam', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(51, 'জেরিন তাবাসসুম', 'Ebony Schimmel V', '1999-11-02', 'Bangladeshi', 'Islam', '1973-03-06', '1976', 'https://via.placeholder.com/300x300.png/00ee11?text=people+architecto', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(52, 'জারিন তাসনীম', 'Prof. Marilie Wyman', '2010-08-27', 'Bangladeshi', 'Buddhism', '1980-10-03', '2014', 'https://via.placeholder.com/300x300.png/0099ee?text=people+blanditiis', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(53, 'জলিল শিকদার', 'Vanessa Stracke', '1977-08-23', 'Bangladeshi', 'Hinduism', '1995-01-07', '1982', 'https://via.placeholder.com/300x300.png/0055bb?text=people+asperiores', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(54, 'জারিন তাসনীম', 'Anastasia Johnson', '2004-12-20', 'Bangladeshi', 'Christianity', '1990-02-02', '2023', 'https://via.placeholder.com/300x300.png/0099ee?text=people+iste', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(55, 'মিসেস. ফারহানা তাবাসসুম', 'Prof. Kennedi Mayert', '1986-06-09', 'Bangladeshi', 'Islam', '2011-04-25', '1997', 'https://via.placeholder.com/300x300.png/0044dd?text=people+accusantium', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(56, 'হাসনাত আলী', 'Doug Mayer IV', '1974-05-15', 'Bangladeshi', 'Islam', '1981-06-24', '1976', 'https://via.placeholder.com/300x300.png/007799?text=people+inventore', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(57, 'মি. আহসান তাসনীম', 'Jewell Hilpert', '1981-06-17', 'Bangladeshi', 'Christianity', '2009-12-21', '1997', 'https://via.placeholder.com/300x300.png/00dd99?text=people+sit', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(58, 'ইমরুল তাসনীম', 'Prof. Marty Ritchie', '1973-06-24', 'Bangladeshi', 'Christianity', '2018-02-02', '2009', 'https://via.placeholder.com/300x300.png/00dddd?text=people+quos', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(59, 'বরকত তাবাসসুম', 'Mr. Santa Monahan III', '1992-07-23', 'Bangladeshi', 'Islam', '1983-09-16', '2015', 'https://via.placeholder.com/300x300.png/00ee99?text=people+laboriosam', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(60, 'সাবরিন তাসনীম', 'Audrey Wyman', '1991-01-21', 'Bangladeshi', 'Christianity', '2002-10-29', '2018', 'https://via.placeholder.com/300x300.png/002277?text=people+molestiae', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(61, 'মিসেস. জারিন খান', 'Prof. Tony Gislason DDS', '2011-01-10', 'Bangladeshi', 'Hinduism', '1994-03-23', '1997', 'https://via.placeholder.com/300x300.png/00aa99?text=people+et', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(62, 'ইমরুল আলী', 'Nikita Rutherford MD', '2007-05-15', 'Bangladeshi', 'Islam', '1971-04-23', '2022', 'https://via.placeholder.com/300x300.png/00bb00?text=people+reprehenderit', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(63, 'মিসেস. ফাহমেদা খান', 'Dayne Marks', '1991-11-20', 'Bangladeshi', 'Islam', '1986-05-17', '1975', 'https://via.placeholder.com/300x300.png/00dd33?text=people+velit', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(64, 'রিফাত খান', 'Prof. Rowena Wolff Sr.', '2000-09-03', 'Bangladeshi', 'Hinduism', '1983-08-28', '2002', 'https://via.placeholder.com/300x300.png/0099ff?text=people+ut', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(65, 'সাবরিন খান', 'Ms. Libby Kulas', '2011-07-08', 'Bangladeshi', 'Buddhism', '1989-01-16', '1977', 'https://via.placeholder.com/300x300.png/0044bb?text=people+fugiat', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(66, 'হাসনাত শেখ', 'Lisette Glover', '1976-08-15', 'Bangladeshi', 'Islam', '2013-10-08', '1995', 'https://via.placeholder.com/300x300.png/000099?text=people+enim', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(67, 'রিফাত শেখ', 'Chelsey Jacobson DDS', '1977-01-03', 'Bangladeshi', 'Buddhism', '2000-06-26', '2008', 'https://via.placeholder.com/300x300.png/00cc77?text=people+nihil', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(68, 'জারিন শেখ', 'Dr. Ruben Schamberger', '2017-03-28', 'Bangladeshi', 'Hinduism', '2019-06-20', '1986', 'https://via.placeholder.com/300x300.png/003377?text=people+vero', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(69, 'জেরিন শেখ', 'Sasha Schmeler', '2018-07-17', 'Bangladeshi', 'Christianity', '2015-01-14', '1984', 'https://via.placeholder.com/300x300.png/00dd99?text=people+rerum', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(70, 'মেহনাজ শিকদার', 'Aniya Boyle Jr.', '2007-05-04', 'Bangladeshi', 'Buddhism', '1999-08-24', '2018', 'https://via.placeholder.com/300x300.png/00ccaa?text=people+provident', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(71, 'ফাহমেদা শেখ', 'Deangelo Hudson', '1985-04-03', 'Bangladeshi', 'Christianity', '1990-04-06', '2014', 'https://via.placeholder.com/300x300.png/00bb55?text=people+ex', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(72, 'মাহজাবিন তাসনীম', 'Hermann Corkery', '1973-06-15', 'Bangladeshi', 'Christianity', '2007-12-02', '1972', 'https://via.placeholder.com/300x300.png/00dd22?text=people+omnis', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(73, 'রহিম তাসনীম', 'Prof. Darrion Wiegand', '2011-08-13', 'Bangladeshi', 'Hinduism', '1981-05-13', '2007', 'https://via.placeholder.com/300x300.png/005555?text=people+voluptatem', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(74, 'মি. জলিল শেখ', 'Shanie Klein', '1970-01-23', 'Bangladeshi', 'Hinduism', '1980-07-21', '1983', 'https://via.placeholder.com/300x300.png/0088cc?text=people+nostrum', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(75, 'ইমরুল শেখ', 'Prof. Foster Schmidt V', '1973-04-11', 'Bangladeshi', 'Hinduism', '1998-09-17', '2011', 'https://via.placeholder.com/300x300.png/00ff00?text=people+sint', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(76, 'করিম শিকদার', 'Magdalen Friesen', '1988-06-28', 'Bangladeshi', 'Christianity', '1979-01-03', '1977', 'https://via.placeholder.com/300x300.png/00bb55?text=people+error', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(77, 'সাবরিনা তাসনীম', 'Shaina Bartoletti PhD', '1981-12-18', 'Bangladeshi', 'Hinduism', '1989-05-10', '1992', 'https://via.placeholder.com/300x300.png/006611?text=people+quae', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(78, 'মিস. ফারহানা তাবাসসুম', 'Billy Pacocha MD', '1984-07-31', 'Bangladeshi', 'Islam', '1992-02-03', '2003', 'https://via.placeholder.com/300x300.png/005555?text=people+voluptatem', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(79, 'ইমরুল শেখ', 'Dr. Selina Ankunding', '2018-01-23', 'Bangladeshi', 'Christianity', '1997-12-17', '1992', 'https://via.placeholder.com/300x300.png/00eeee?text=people+impedit', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(80, 'ফাহমেদা তাসনীম', 'Prof. Meggie Schultz DVM', '2003-10-11', 'Bangladeshi', 'Hinduism', '1993-07-17', '1982', 'https://via.placeholder.com/300x300.png/0044ee?text=people+doloribus', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(81, 'মিস. লাবনী শেখ', 'Miss Karli Dibbert MD', '1979-08-03', 'Bangladeshi', 'Buddhism', '2011-06-07', '1973', 'https://via.placeholder.com/300x300.png/00ff77?text=people+ducimus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(82, 'আব্দুল্লাহ আলী', 'Tyree Marks', '2003-07-29', 'Bangladeshi', 'Christianity', '2005-11-14', '2021', 'https://via.placeholder.com/300x300.png/000066?text=people+eaque', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(83, 'হাসনাত শেখ', 'Brionna Zulauf', '2010-09-16', 'Bangladeshi', 'Islam', '2005-06-27', '2021', 'https://via.placeholder.com/300x300.png/0044ee?text=people+voluptates', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(84, 'লাবনী তাসনীম', 'Genesis Morissette', '2009-02-06', 'Bangladeshi', 'Hinduism', '1992-02-29', '2003', 'https://via.placeholder.com/300x300.png/002266?text=people+sed', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(85, 'মাসনুন তাসনীম', 'Dora Kshlerin MD', '2014-05-21', 'Bangladeshi', 'Buddhism', '1972-06-07', '1973', 'https://via.placeholder.com/300x300.png/00ee00?text=people+reiciendis', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(86, 'ফারহানা খান', 'Cory Parker', '2013-01-29', 'Bangladeshi', 'Buddhism', '1998-01-15', '2008', 'https://via.placeholder.com/300x300.png/00bbff?text=people+autem', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(87, 'মিসেস. মাহজাবিন শিকদার', 'Ms. Holly Leffler', '1971-12-14', 'Bangladeshi', 'Buddhism', '1970-12-17', '2001', 'https://via.placeholder.com/300x300.png/0055aa?text=people+est', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(88, 'মিস. সাবরিন খান', 'Prof. Prudence Mills', '1999-03-20', 'Bangladeshi', 'Hinduism', '1994-08-01', '1980', 'https://via.placeholder.com/300x300.png/00ee11?text=people+quam', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(89, 'ফাহমেদা শেখ', 'Davin Roberts', '1995-05-02', 'Bangladeshi', 'Buddhism', '1978-08-04', '2018', 'https://via.placeholder.com/300x300.png/005588?text=people+quia', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(90, 'হাসান খান', 'Lura Tromp Sr.', '1998-03-02', 'Bangladeshi', 'Hinduism', '2021-10-10', '1973', 'https://via.placeholder.com/300x300.png/00cc22?text=people+quas', 'One', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(91, 'সাবরিন শেখ', 'Mireya Johns', '2001-02-11', 'Bangladeshi', 'Buddhism', '2023-08-19', '2006', 'https://via.placeholder.com/300x300.png/000011?text=people+possimus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(92, 'লাবনী তাবাসসুম', 'Green Johns I', '2013-09-22', 'Bangladeshi', 'Christianity', '2007-08-06', '2018', 'https://via.placeholder.com/300x300.png/00aacc?text=people+commodi', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(93, 'মিসেস. ফাহমেদা শিকদার', 'Adrienne Hane MD', '2025-05-31', 'Bangladeshi', 'Christianity', '1982-02-25', '1988', 'https://via.placeholder.com/300x300.png/00cc22?text=people+reiciendis', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(94, 'জেরিন খান', 'Bertram Glover', '2018-01-26', 'Bangladeshi', 'Hinduism', '2018-11-25', '1999', 'https://via.placeholder.com/300x300.png/0044dd?text=people+repellendus', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(95, 'মিসেস. রহমত আলী', 'Murray Herman', '1972-03-15', 'Bangladeshi', 'Islam', '2005-02-21', '2008', 'https://via.placeholder.com/300x300.png/00cc00?text=people+mollitia', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(96, 'অনন্ত তাবাসসুম', 'Miss Orie Roob V', '1997-01-28', 'Bangladeshi', 'Islam', '1999-08-20', '1986', 'https://via.placeholder.com/300x300.png/003377?text=people+cum', 'Two', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(97, 'লাবনী শিকদার', 'Mr. Kaley Mitchell Sr.', '1998-02-10', 'Bangladeshi', 'Hinduism', '1992-11-20', '1975', 'https://via.placeholder.com/300x300.png/009988?text=people+ut', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(98, 'মি. হাসান শেখ', 'Granville Barrows I', '1974-12-24', 'Bangladeshi', 'Christianity', '1996-09-18', '2008', 'https://via.placeholder.com/300x300.png/006666?text=people+ducimus', 'Three', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(99, 'রহিমা শেখ', 'Prof. Lourdes Hudson', '1985-05-18', 'Bangladeshi', 'Islam', '1981-11-08', '1985', 'https://via.placeholder.com/300x300.png/00cc55?text=people+nulla', 'Four', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28'),
(100, 'মিসেস. ফারহানা খান', 'Dr. Golden Kassulke I', '1975-07-18', 'Bangladeshi', 'Christianity', '2022-11-29', '1986', 'https://via.placeholder.com/300x300.png/008866?text=people+praesentium', 'Five', NULL, '2025-07-16 22:59:28', '2025-07-16 22:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_circulars`
--

CREATE TABLE `student_admission_circulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_circular_session_id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `maximum_allowed_seat` int(11) NOT NULL,
  `admission_fee` decimal(10,2) NOT NULL,
  `details` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_circular_sessions`
--

CREATE TABLE `student_admission_circular_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `published_date` date NOT NULL,
  `apply_last_date` date NOT NULL,
  `visibility_date_in_website` date NOT NULL,
  `approximate_admit_card_received_date` date NOT NULL,
  `approximate_exam_date` date NOT NULL,
  `approximate_result_published_date` date NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_categories`
--

CREATE TABLE `student_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_leave_applications`
--

CREATE TABLE `student_leave_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(191) NOT NULL,
  `leave_application_date` date NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_reason` text NOT NULL,
  `emergency_contact_number` varchar(191) NOT NULL,
  `approved_date_from` date DEFAULT NULL,
  `approved_date_to` date DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_manual_attendance`
--

CREATE TABLE `student_manual_attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_setup_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) NOT NULL,
  `student_roll` varchar(191) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_setups`
--

CREATE TABLE `subject_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `subject_type` enum('mandatory','optional','compulsory','combined','4th subject') NOT NULL,
  `serial` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_uploads`
--

CREATE TABLE `syllabus_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `files` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agatha Williams', 'admin@til.net', NULL, '$2y$12$59fpBtmc.sY2mi6C7h2bAujTLJNmCFsrttubG2Qi8eTt/ftyuruBi', NULL, NULL, NULL),
(2, 'Blaine Keller', 'user@til.net', NULL, '$2y$12$59fpBtmc.sY2mi6C7h2bAujTLJNmCFsrttubG2Qi8eTt/ftyuruBi', NULL, NULL, NULL),
(3, 'Garry Wiegand', 'lynch.coralie@example.org', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', '2o7JQCUyCw', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(4, 'Gracie Halvorson DDS', 'watsica.oceane@example.org', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', '4Tg8n0Lk8f', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(5, 'Eldon Kunde', 'doyle.arthur@example.com', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'SomjFKxU4d', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(6, 'Dr. Brianne Johnston MD', 'lea39@example.org', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'lA6cvskW1h', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(7, 'Nathanial Kuvalis DDS', 'rleannon@example.com', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'nhvFlj9aJF', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(8, 'Linnie Heathcote', 'tmcdermott@example.com', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'IlqwYOd6Cw', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(9, 'Mr. Bud Hudson', 'powlowski.soledad@example.org', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'xdWuYd48WG', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(10, 'Isadore Fisher', 'ibergstrom@example.net', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', '0Oq0Sbns8n', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(11, 'Trenton Kuhlman', 'waino.stark@example.com', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', 'hTB1j1Tz9m', '2025-07-16 22:59:27', '2025-07-16 22:59:27'),
(12, 'Prof. Mary Volkman Sr.', 'grimes.juston@example.com', '2025-07-16 22:59:27', '$2y$12$d0kOPg3S6akud.7UQ.xiBeCRgyNI44assZyNb0wKWRCU8OoAOodC.', '8gu0YNgFSq', '2025-07-16 22:59:27', '2025-07-16 22:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `logo` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `principle_name` varchar(191) DEFAULT NULL,
  `principle_image` longtext DEFAULT NULL,
  `principle_message` longtext DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `youtube_link` varchar(191) DEFAULT NULL,
  `twitter_link` varchar(191) DEFAULT NULL,
  `linkedin_link` varchar(191) DEFAULT NULL,
  `alternative_phone_1` varchar(191) DEFAULT NULL,
  `alternative_phone_2` varchar(191) DEFAULT NULL,
  `alternative_email_1` varchar(191) DEFAULT NULL,
  `alternative_email_2` varchar(191) DEFAULT NULL,
  `extra_field_1` varchar(191) DEFAULT NULL,
  `extra_field_2` varchar(191) DEFAULT NULL,
  `extra_field_3` varchar(191) DEFAULT NULL,
  `extra_field_4` varchar(191) DEFAULT NULL,
  `extra_field_5` varchar(191) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `title`, `email`, `phone`, `address`, `logo`, `short_description`, `principle_name`, `principle_image`, `principle_message`, `facebook_link`, `youtube_link`, `twitter_link`, `linkedin_link`, `alternative_phone_1`, `alternative_phone_2`, `alternative_email_1`, `alternative_email_2`, `extra_field_1`, `extra_field_2`, `extra_field_3`, `extra_field_4`, `extra_field_5`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Proyash, Jashore Area', 'admin@proyash.edu.bd', '+8801769-553729', NULL, 'frontend/assets/uploads/1752978352_logo.png', 'Proyash Jashore is a specialized school dedicated to nurturing children with autism and special needs. We provide inclusive education, therapy, and support to help every child grow with dignity and confidence.', 'Lt Col Hasan Shahriar Kabir, psc, Arty', 'frontend/assets/uploads/1752735264_principle.jpeg', '<p>Welcome to Proyash, Jashore Area &ndash; a center of care, hope, and inclusive excellence.<br />\r\n<br />\r\nAt Proyash, we believe that every child is unique, full of potential, and worthy of dignity, respect, and opportunity. Our institution is dedicated to nurturing the cognitive, emotional, physical, and social development of children with special needs, including those on the autism spectrum.<br />\r\n<br />\r\nWe understand the extraordinary journey that these children and their families undertake every day. That&rsquo;s why Proyash is not just a school &ndash; it is a community built on compassion, innovation, and unwavering commitment. With a multidisciplinary team of dedicated educators, therapists, and caregivers, we strive to create an environment where students feel safe, valued, and inspired to grow.<br />\r\n<br />\r\nOur approach combines specialized education, therapy services, and life skills training to equip our students with the tools they need to thrive in society. We emphasize individualized learning plans, family involvement, and integrated support to ensure that each child receives the best possible care tailored to their needs.<br />\r\n<br />\r\nAs the Principal of this institution, I am proud to lead a mission that is deeply rooted in empathy, professionalism, and purposeful education. I am grateful to the Bangladesh Army, 55 Infantry Division and Jessore Area, our partner organizations, and above all, the families who entrust us with their precious children.<br />\r\n<br />\r\nTogether, let us continue to build a more inclusive and compassionate society &ndash; where every ability is recognized, every voice is heard, and every child gets the chance to shine.<br />\r\n<br />\r\nWarm regards,<br />\r\nLt Col Hasan Shahriar Kabir, psc<br />\r\nPrincipal<br />\r\nProyash, Jashore Area</p>', 'https://www.facebook.com/profile.php?id=61576992458903', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-17 00:26:39', '2025-07-19 20:25:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_student_id_foreign` (`student_id`);

--
-- Indexes for table `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agreements_student_id_foreign` (`student_id`);

--
-- Indexes for table `assign_mark_entry_faculties`
--
ALTER TABLE `assign_mark_entry_faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_mark_entry_faculties_institute_id_foreign` (`institute_id`),
  ADD KEY `assign_mark_entry_faculties_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `assign_mark_entry_faculties_medium_id_foreign` (`medium_id`),
  ADD KEY `assign_mark_entry_faculties_shift_id_foreign` (`shift_id`),
  ADD KEY `assign_mark_entry_faculties_class_id_foreign` (`class_id`),
  ADD KEY `assign_mark_entry_faculties_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `assign_mark_entry_faculties_subject_id_foreign` (`subject_id`),
  ADD KEY `assign_mark_entry_faculties_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine_setups`
--
ALTER TABLE `class_routine_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_routine_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `class_routine_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `class_routine_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `class_routine_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `class_routine_setups_class_id_foreign` (`class_id`),
  ADD KEY `class_routine_setups_department_id_foreign` (`department_id`),
  ADD KEY `class_routine_setups_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `class_routine_setups_period_id_foreign` (`period_id`),
  ADD KEY `class_routine_setups_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `class_setups`
--
ALTER TABLE `class_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `class_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `class_setups_created_by_foreign` (`created_by`),
  ADD KEY `class_setups_updated_by_foreign` (`updated_by`),
  ADD KEY `class_setups_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_student_id_foreign` (`student_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_setups`
--
ALTER TABLE `department_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `department_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `department_setups_class_id_foreign` (`class_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_institute_id_foreign` (`institute_id`),
  ADD KEY `employees_department_id_foreign` (`department_id`),
  ADD KEY `employees_medium_id_foreign` (`medium_id`),
  ADD KEY `employees_shift_id_foreign` (`shift_id`),
  ADD KEY `employees_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `employee_admission_circulars`
--
ALTER TABLE `employee_admission_circulars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_admission_circulars_employee_circular_id_foreign` (`employee_circular_id`),
  ADD KEY `employee_admission_circulars_institute_id_foreign` (`institute_id`),
  ADD KEY `employee_admission_circulars_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `employee_admission_circulars_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `employee_admission_circular_sessions`
--
ALTER TABLE `employee_admission_circular_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_admission_circular_sessions_institute_id_foreign` (`institute_id`),
  ADD KEY `employee_admission_circular_sessions_academic_year_id_foreign` (`academic_year_id`);

--
-- Indexes for table `employee_leave_applications`
--
ALTER TABLE `employee_leave_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_leave_applications_institute_id_foreign` (`institute_id`),
  ADD KEY `employee_leave_applications_designation_id_foreign` (`designation_id`),
  ADD KEY `employee_leave_applications_employee_id_foreign` (`employee_id`),
  ADD KEY `employee_leave_applications_created_by_foreign` (`created_by`),
  ADD KEY `employee_leave_applications_updated_by_foreign` (`updated_by`),
  ADD KEY `employee_leave_applications_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `employee_manual_attendance`
--
ALTER TABLE `employee_manual_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_manual_attendance_institute_id_foreign` (`institute_id`),
  ADD KEY `employee_manual_attendance_medium_id_foreign` (`medium_id`),
  ADD KEY `employee_manual_attendance_shift_id_foreign` (`shift_id`),
  ADD KEY `employee_manual_attendance_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `event_settings`
--
ALTER TABLE `event_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_settings_created_by_foreign` (`created_by`),
  ADD KEY `event_settings_updated_by_foreign` (`updated_by`),
  ADD KEY `event_settings_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `exam_marks_setups`
--
ALTER TABLE `exam_marks_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_marks_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `exam_marks_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `exam_marks_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `exam_marks_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `exam_marks_setups_class_id_foreign` (`class_id`),
  ADD KEY `exam_marks_setups_department_id_foreign` (`department_id`),
  ADD KEY `exam_marks_setups_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `exam_routine_setups`
--
ALTER TABLE `exam_routine_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_routine_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `exam_routine_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `exam_routine_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `exam_routine_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `exam_routine_setups_class_id_foreign` (`class_id`),
  ADD KEY `exam_routine_setups_department_id_foreign` (`department_id`),
  ADD KEY `exam_routine_setups_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `exam_routine_setups_period_setup_id_foreign` (`period_setup_id`),
  ADD KEY `exam_routine_setups_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `exam_setups`
--
ALTER TABLE `exam_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `exam_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `exam_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `exam_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `exam_setups_class_id_foreign` (`class_id`),
  ADD KEY `exam_setups_exam_type_id_foreign` (`exam_type_id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_settings_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `grade_setups`
--
ALTER TABLE `grade_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `grade_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `grade_setups_medium_id_foreign` (`medium_id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guardians_student_id_foreign` (`student_id`);

--
-- Indexes for table `holiday_settings`
--
ALTER TABLE `holiday_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `holiday_settings_institute_id_foreign` (`institute_id`),
  ADD KEY `holiday_settings_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `holiday_settings_medium_id_foreign` (`medium_id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institutes_unique_id_unique` (`unique_id`),
  ADD UNIQUE KEY `institutes_eiin_code_unique` (`eiin_code`),
  ADD UNIQUE KEY `institutes_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_entries`
--
ALTER TABLE `mark_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark_entries_institute_id_foreign` (`institute_id`),
  ADD KEY `mark_entries_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `mark_entries_medium_id_foreign` (`medium_id`),
  ADD KEY `mark_entries_shift_id_foreign` (`shift_id`),
  ADD KEY `mark_entries_class_id_foreign` (`class_id`),
  ADD KEY `mark_entries_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `mark_entries_subject_id_foreign` (`subject_id`),
  ADD KEY `mark_entries_exam_type_id_foreign` (`exam_type_id`),
  ADD KEY `mark_entries_employee_id_foreign` (`employee_id`),
  ADD KEY `mark_entries_student_id_foreign` (`student_id`);

--
-- Indexes for table `mediums`
--
ALTER TABLE `mediums`
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
-- Indexes for table `period_setups`
--
ALTER TABLE `period_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `period_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `period_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `period_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `period_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `period_setups_class_id_foreign` (`class_id`),
  ADD KEY `period_setups_department_id_foreign` (`department_id`),
  ADD KEY `period_setups_section_setup_id_foreign` (`section_setup_id`);

--
-- Indexes for table `section_setups`
--
ALTER TABLE `section_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `section_setups_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `section_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `section_setups_shift_id_foreign` (`shift_id`),
  ADD KEY `section_setups_class_id_foreign` (`class_id`),
  ADD KEY `section_setups_department_id_foreign` (`department_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_evaluations`
--
ALTER TABLE `special_evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `special_evaluations_student_id_foreign` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission_circulars`
--
ALTER TABLE `student_admission_circulars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_session_fk` (`admission_circular_session_id`),
  ADD KEY `institute_fk` (`institute_id`),
  ADD KEY `academic_year_fk` (`academic_year_id`),
  ADD KEY `medium_fk` (`medium_id`),
  ADD KEY `shift_fk` (`shift_id`),
  ADD KEY `class_fk` (`class_id`);

--
-- Indexes for table `student_admission_circular_sessions`
--
ALTER TABLE `student_admission_circular_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_admission_circular_sessions_institute_id_foreign` (`institute_id`),
  ADD KEY `student_admission_circular_sessions_academic_year_id_foreign` (`academic_year_id`);

--
-- Indexes for table `student_categories`
--
ALTER TABLE `student_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_leave_applications_institute_id_foreign` (`institute_id`),
  ADD KEY `student_leave_applications_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `student_leave_applications_medium_id_foreign` (`medium_id`),
  ADD KEY `student_leave_applications_shift_id_foreign` (`shift_id`),
  ADD KEY `student_leave_applications_class_id_foreign` (`class_id`),
  ADD KEY `student_leave_applications_department_id_foreign` (`department_id`),
  ADD KEY `student_leave_applications_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `student_leave_applications_student_id_foreign` (`student_id`),
  ADD KEY `student_leave_applications_approved_by_foreign` (`approved_by`),
  ADD KEY `student_leave_applications_created_by_foreign` (`created_by`),
  ADD KEY `student_leave_applications_updated_by_foreign` (`updated_by`),
  ADD KEY `student_leave_applications_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `student_manual_attendance`
--
ALTER TABLE `student_manual_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_manual_attendance_institute_id_foreign` (`institute_id`),
  ADD KEY `student_manual_attendance_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `student_manual_attendance_medium_id_foreign` (`medium_id`),
  ADD KEY `student_manual_attendance_shift_id_foreign` (`shift_id`),
  ADD KEY `student_manual_attendance_class_id_foreign` (`class_id`),
  ADD KEY `student_manual_attendance_department_id_foreign` (`department_id`),
  ADD KEY `student_manual_attendance_section_setup_id_foreign` (`section_setup_id`),
  ADD KEY `student_manual_attendance_student_id_foreign` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_setups`
--
ALTER TABLE `subject_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_setups_institute_id_foreign` (`institute_id`),
  ADD KEY `subject_setups_medium_id_foreign` (`medium_id`),
  ADD KEY `subject_setups_class_id_foreign` (`class_id`),
  ADD KEY `subject_setups_department_id_foreign` (`department_id`),
  ADD KEY `subject_setups_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `syllabus_uploads`
--
ALTER TABLE `syllabus_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabus_uploads_institute_id_foreign` (`institute_id`),
  ADD KEY `syllabus_uploads_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `syllabus_uploads_medium_id_foreign` (`medium_id`),
  ADD KEY `syllabus_uploads_shift_id_foreign` (`shift_id`),
  ADD KEY `syllabus_uploads_class_id_foreign` (`class_id`),
  ADD KEY `syllabus_uploads_department_id_foreign` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `agreements`
--
ALTER TABLE `agreements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_mark_entry_faculties`
--
ALTER TABLE `assign_mark_entry_faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_routine_setups`
--
ALTER TABLE `class_routine_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_setups`
--
ALTER TABLE `class_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `department_setups`
--
ALTER TABLE `department_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_admission_circulars`
--
ALTER TABLE `employee_admission_circulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_admission_circular_sessions`
--
ALTER TABLE `employee_admission_circular_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_leave_applications`
--
ALTER TABLE `employee_leave_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_manual_attendance`
--
ALTER TABLE `employee_manual_attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_settings`
--
ALTER TABLE `event_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_marks_setups`
--
ALTER TABLE `exam_marks_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_routine_setups`
--
ALTER TABLE `exam_routine_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_setups`
--
ALTER TABLE `exam_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_setups`
--
ALTER TABLE `grade_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `holiday_settings`
--
ALTER TABLE `holiday_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark_entries`
--
ALTER TABLE `mark_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediums`
--
ALTER TABLE `mediums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `period_setups`
--
ALTER TABLE `period_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_setups`
--
ALTER TABLE `section_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special_evaluations`
--
ALTER TABLE `special_evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `student_admission_circulars`
--
ALTER TABLE `student_admission_circulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_admission_circular_sessions`
--
ALTER TABLE `student_admission_circular_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_categories`
--
ALTER TABLE `student_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_manual_attendance`
--
ALTER TABLE `student_manual_attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_setups`
--
ALTER TABLE `subject_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabus_uploads`
--
ALTER TABLE `syllabus_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `agreements`
--
ALTER TABLE `agreements`
  ADD CONSTRAINT `agreements_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assign_mark_entry_faculties`
--
ALTER TABLE `assign_mark_entry_faculties`
  ADD CONSTRAINT `assign_mark_entry_faculties_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_mark_entry_faculties_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_routine_setups`
--
ALTER TABLE `class_routine_setups`
  ADD CONSTRAINT `class_routine_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `period_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_routine_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_setups`
--
ALTER TABLE `class_setups`
  ADD CONSTRAINT `class_setups_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `class_setups_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `class_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `class_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `class_setups_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department_setups`
--
ALTER TABLE `department_setups`
  ADD CONSTRAINT `department_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `department_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `department_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_admission_circulars`
--
ALTER TABLE `employee_admission_circulars`
  ADD CONSTRAINT `employee_admission_circulars_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_admission_circulars_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_admission_circulars_employee_circular_id_foreign` FOREIGN KEY (`employee_circular_id`) REFERENCES `employee_admission_circular_sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_admission_circulars_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_admission_circular_sessions`
--
ALTER TABLE `employee_admission_circular_sessions`
  ADD CONSTRAINT `employee_admission_circular_sessions_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_admission_circular_sessions_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_leave_applications`
--
ALTER TABLE `employee_leave_applications`
  ADD CONSTRAINT `employee_leave_applications_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_leave_applications_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employee_leave_applications_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_leave_applications_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_leave_applications_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_leave_applications_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `employee_manual_attendance`
--
ALTER TABLE `employee_manual_attendance`
  ADD CONSTRAINT `employee_manual_attendance_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_manual_attendance_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_manual_attendance_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_manual_attendance_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_settings`
--
ALTER TABLE `event_settings`
  ADD CONSTRAINT `event_settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `event_settings_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `event_settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `exam_marks_setups`
--
ALTER TABLE `exam_marks_setups`
  ADD CONSTRAINT `exam_marks_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_marks_setups_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_routine_setups`
--
ALTER TABLE `exam_routine_setups`
  ADD CONSTRAINT `exam_routine_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_period_setup_id_foreign` FOREIGN KEY (`period_setup_id`) REFERENCES `period_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_routine_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_setups`
--
ALTER TABLE `exam_setups`
  ADD CONSTRAINT `exam_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_exam_type_id_foreign` FOREIGN KEY (`exam_type_id`) REFERENCES `exam_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD CONSTRAINT `general_settings_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grade_setups`
--
ALTER TABLE `grade_setups`
  ADD CONSTRAINT `grade_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grade_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grade_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `guardians_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `holiday_settings`
--
ALTER TABLE `holiday_settings`
  ADD CONSTRAINT `holiday_settings_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `holiday_settings_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `holiday_settings_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mark_entries`
--
ALTER TABLE `mark_entries`
  ADD CONSTRAINT `mark_entries_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_exam_type_id_foreign` FOREIGN KEY (`exam_type_id`) REFERENCES `exam_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_entries_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `period_setups`
--
ALTER TABLE `period_setups`
  ADD CONSTRAINT `period_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `period_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `section_setups`
--
ALTER TABLE `section_setups`
  ADD CONSTRAINT `section_setups_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_setups_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `special_evaluations`
--
ALTER TABLE `special_evaluations`
  ADD CONSTRAINT `special_evaluations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_admission_circulars`
--
ALTER TABLE `student_admission_circulars`
  ADD CONSTRAINT `academic_year_fk` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admission_session_fk` FOREIGN KEY (`admission_circular_session_id`) REFERENCES `student_admission_circular_sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_fk` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `institute_fk` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medium_fk` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shift_fk` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_admission_circular_sessions`
--
ALTER TABLE `student_admission_circular_sessions`
  ADD CONSTRAINT `student_admission_circular_sessions_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_admission_circular_sessions_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  ADD CONSTRAINT `student_leave_applications_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `student_leave_applications_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `student_manual_attendance`
--
ALTER TABLE `student_manual_attendance`
  ADD CONSTRAINT `student_manual_attendance_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_section_setup_id_foreign` FOREIGN KEY (`section_setup_id`) REFERENCES `section_setups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_manual_attendance_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_setups`
--
ALTER TABLE `subject_setups`
  ADD CONSTRAINT `subject_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_setups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_setups_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `syllabus_uploads`
--
ALTER TABLE `syllabus_uploads`
  ADD CONSTRAINT `syllabus_uploads_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_uploads_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_uploads_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_uploads_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_uploads_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_uploads_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
