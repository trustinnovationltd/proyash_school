-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

-- --------------------------------------------------------

--
-- Table structure for table `assign_employees`
--

CREATE TABLE `assign_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"d\";s:10:\"group_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:28:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"dashboard.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"dashboard\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"dashboard.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"dashboard\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:14:\"admission.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"admission\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:3;a:5:{s:1:\"a\";i:4;s:1:\"b\";s:14:\"admission.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"admission\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:4;a:5:{s:1:\"a\";i:5;s:1:\"b\";s:16:\"admission.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"admission\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:5;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:16:\"admission.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:9:\"admission\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:5:{s:1:\"a\";i:7;s:1:\"b\";s:12:\"website.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"website\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:5:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"website.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"website\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:5:{s:1:\"a\";i:9;s:1:\"b\";s:14:\"website.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"website\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:5:{s:1:\"a\";i:10;s:1:\"b\";s:14:\"website.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"website\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:5:{s:1:\"a\";i:11;s:1:\"b\";s:11:\"user.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"user\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:11;a:5:{s:1:\"a\";i:12;s:1:\"b\";s:9:\"user.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"user\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:12;a:5:{s:1:\"a\";i:13;s:1:\"b\";s:9:\"user.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"user\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:13;a:5:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"user.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"user\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:14;a:5:{s:1:\"a\";i:15;s:1:\"b\";s:12:\"user.approve\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"user\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:15;a:5:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"role.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"role\";s:1:\"r\";a:1:{i:0;i:3;}}i:16;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:9:\"role.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"role\";s:1:\"r\";a:1:{i:0;i:3;}}i:17;a:5:{s:1:\"a\";i:18;s:1:\"b\";s:9:\"role.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"role\";s:1:\"r\";a:1:{i:0;i:3;}}i:18;a:5:{s:1:\"a\";i:19;s:1:\"b\";s:11:\"role.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"role\";s:1:\"r\";a:1:{i:0;i:3;}}i:19;a:5:{s:1:\"a\";i:20;s:1:\"b\";s:12:\"role.approve\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:4:\"role\";s:1:\"r\";a:1:{i:0;i:3;}}i:20;a:5:{s:1:\"a\";i:21;s:1:\"b\";s:12:\"profile.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"profile\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:21;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:12:\"profile.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"profile\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:22;a:5:{s:1:\"a\";i:23;s:1:\"b\";s:14:\"profile.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"profile\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:23;a:5:{s:1:\"a\";i:24;s:1:\"b\";s:14:\"profile.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:7:\"profile\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:24;a:5:{s:1:\"a\";i:25;s:1:\"b\";s:13:\"employee.view\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:8:\"employee\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:25;a:5:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"employee.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:8:\"employee\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:26;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:15:\"employee.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:8:\"employee\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:27;a:5:{s:1:\"a\";i:28;s:1:\"b\";s:15:\"employee.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";s:8:\"employee\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"superadmin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:7:\"Teacher\";s:1:\"c\";s:3:\"web\";}}}', 1754903985);

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
(1, 'Possimus enim ea esse.', 'Quo sunt dolorem dolorem eveniet ipsa dolorum. Aut non dignissimos tempora. Atque autem et quis dolorem est tempora. Dolor et nihil aut qui reprehenderit.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(2, 'Unde commodi necessitatibus autem incidunt.', 'Quo voluptatem rerum asperiores temporibus cupiditate aut repellendus. Cupiditate architecto natus esse tenetur. Est voluptate ducimus fuga nam ab ut laudantium. Tenetur porro ad et et.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(3, 'Quis laudantium impedit.', 'Consequatur excepturi voluptatum ducimus quia libero quod quisquam laboriosam. Quia quaerat esse qui architecto.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(4, 'Exercitationem velit aut similique.', 'Quasi nihil dolorem eum rerum aut est dolores accusantium. Qui aliquid nihil cumque facilis voluptas tenetur non esse. Assumenda quisquam quo deleniti.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(5, 'Iste et accusantium fugiat quia.', 'Nobis placeat sint voluptatem doloribus veritatis. Numquam vero quisquam magnam adipisci perferendis. Qui quae omnis suscipit.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(6, 'Dolorem ab quae tempore.', 'Ipsam enim nesciunt repudiandae est rerum. Eaque dignissimos voluptas odio. Voluptate aut eos magni nihil. Modi quos possimus labore ut ratione quia.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(7, 'Qui in voluptates quia.', 'Molestias dolores tempore animi adipisci molestiae eos ut. Occaecati at eos illo aut consequatur in. Veniam nihil sit ut est sit blanditiis. Harum minus quasi facere eos et deserunt.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(8, 'Beatae et autem.', 'At perferendis fugit molestias qui aperiam. Omnis facere eius quae dicta est minus enim. Adipisci ut iste eius aliquam eum. Porro velit similique illo eum.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(9, 'Sapiente ut fugiat.', 'Distinctio dicta inventore quaerat aut ipsam inventore sit recusandae. Dolorem iste et officia eaque et iusto.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(10, 'Molestiae ut atque.', 'Voluptatem nam et reprehenderit quod nihil. Voluptatibus sit aspernatur ad nostrum velit distinctio.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(11, 'Recusandae eaque.', 'Nam omnis recusandae odit fuga est et. Aut at optio sunt in voluptas dolores temporibus. Natus enim earum quas voluptatem facere nulla. Nesciunt natus deserunt aut voluptas voluptas aspernatur qui.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(12, 'Dolores dolorem et dolores.', 'Rem aspernatur qui odit at similique velit. Et ut esse at suscipit. Quisquam voluptatum omnis ducimus autem error.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(13, 'Omnis nulla similique ducimus.', 'Ratione eos odio qui non suscipit laborum officiis. Quasi et corrupti dolore quas. Ullam non maxime ipsam reiciendis facere. Nam ut ratione repudiandae laudantium et asperiores et.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(14, 'Error rem dolorem cupiditate.', 'Eligendi odit blanditiis cumque aut mollitia et enim. Eligendi culpa qui blanditiis itaque quia debitis ut omnis. Officia expedita laboriosam iure. Quo corrupti fugit perferendis voluptatem amet.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(15, 'Et harum et quis.', 'Veritatis aliquid dolorem ipsum eos officia nam aut provident. Enim aut voluptatem officiis id numquam. Odio et ullam est illum tempore ut placeat sed. Dolor et architecto sed quis.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(16, 'Commodi recusandae officia.', 'Id voluptas provident et sed consectetur quia ut. Quia quod quaerat corporis ut deserunt tenetur. In error velit non et et ex quia ipsa.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(17, 'Omnis aspernatur.', 'Aut nobis omnis et culpa non. Non ad enim sint sed fuga facilis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(18, 'Esse nesciunt illo amet.', 'Reiciendis aut nihil ut accusantium ea odit. Omnis quos ipsa suscipit nostrum doloribus voluptatem. Est occaecati est vitae natus molestiae iure labore voluptas. Veritatis error quia nihil porro sed.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(19, 'Consequatur omnis quod consectetur.', 'Exercitationem possimus neque est quas sit quod earum. Reiciendis ipsa sapiente impedit. Rerum id iure et dolor. Possimus eos odit qui dolorum.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(20, 'Neque aliquam enim pariatur reprehenderit.', 'Est non dicta dicta impedit laudantium vel eligendi. Voluptas qui ut qui. Veniam aliquam nemo nihil aliquid fugiat sequi alias.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(21, 'Rem impedit dolore eligendi.', 'Aut eaque dolor aut. Voluptatem nostrum rerum ea maiores non nesciunt consequuntur. Et rerum praesentium qui quam. Deserunt dolorem ea dolorem quia provident dicta ad.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(22, 'Enim quos aut.', 'Enim rem repellat aperiam voluptatem. Qui fugiat voluptatem quia accusamus autem nihil. Facilis quos praesentium possimus aspernatur ipsum.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(23, 'Ut blanditiis inventore sed.', 'Facilis voluptatem est pariatur sunt. Suscipit doloremque sed velit eaque ad non officia. Omnis voluptatibus debitis aut et quia sint ipsa.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(24, 'Id molestias.', 'Dolores repellendus earum qui qui suscipit blanditiis. Incidunt ad ut corporis eum. Nam nihil cumque inventore veritatis. Consequatur dolores assumenda tenetur at.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(25, 'Rerum sint repellat.', 'Laboriosam dignissimos accusantium temporibus odio. Exercitationem deserunt cum quis aut eum excepturi.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(26, 'Corrupti corporis et ullam dolorem.', 'Non officia dolor consequatur deserunt aut impedit. Vel corrupti reprehenderit qui. Tenetur fuga animi eius soluta officiis facere itaque. Deserunt qui fugit sint tenetur aut consequatur et.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(27, 'Odio laborum repudiandae.', 'Distinctio nisi officiis at ipsa. Consectetur ut atque soluta voluptas quidem. Quod cupiditate a ullam quia ad odit nulla.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(28, 'Molestias quaerat sit perferendis.', 'Reprehenderit necessitatibus sed praesentium debitis distinctio deleniti dolorem. Sint at non corrupti dolores dolore. Aliquid assumenda ut eligendi sed atque nihil rerum.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(29, 'Cumque sunt eligendi odio.', 'Alias et molestiae molestiae officiis qui ratione aliquam. Rerum reiciendis unde id quia voluptatem enim. Sint saepe et dolorem error itaque.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(30, 'Et veritatis eveniet dolor.', 'Et earum illo porro qui et officia. Molestiae ea doloribus numquam delectus ab eos. Consequuntur eaque doloremque sunt eos.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(31, 'Et cumque ut sit.', 'Est et fuga delectus architecto eum. Voluptate omnis sed sit voluptates numquam voluptate facilis. Facilis omnis et et recusandae qui. Et atque qui voluptas adipisci.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(32, 'Reprehenderit doloribus sapiente eos.', 'Qui dolor eius quam quia et. Optio eligendi voluptatem in et ut omnis. Cumque sint rerum dolorem dignissimos nulla magni beatae.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(33, 'Non aut possimus nam.', 'Assumenda omnis nam pariatur nulla amet labore magni. Et error soluta nobis eaque et qui natus. Itaque qui iure neque sit blanditiis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(34, 'Esse nesciunt natus ex.', 'Doloremque inventore saepe odit adipisci omnis. Quo beatae molestias voluptas quos exercitationem. Vel aut autem nesciunt minus quis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(35, 'Enim eius.', 'Voluptas est qui enim dolor. Modi corrupti sed laborum ut omnis. Possimus est nisi ea recusandae omnis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(36, 'Temporibus quod hic aut.', 'Illum illum consequatur ut ut. Numquam nulla ratione illum quo quaerat. Sed voluptatem aut neque voluptatum doloremque molestiae autem. Qui et et ratione molestias recusandae ut.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(37, 'Odio ullam quas quibusdam et.', 'Voluptatem quia eveniet maxime nihil et maiores commodi ipsam. Incidunt vel officiis inventore similique qui molestias molestias. Ut sed mollitia in ex autem pariatur aut ratione.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(38, 'Quia repellat similique officiis.', 'Et dignissimos repellendus saepe occaecati delectus. Hic repellat totam voluptas. Voluptatem et ex nihil quia.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(39, 'Dolores consequatur aut.', 'Repudiandae temporibus at ab. Omnis porro dolor magnam eum aperiam. Ab labore ab ut aliquam corrupti debitis tempore.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(40, 'Debitis qui nisi sed.', 'Qui numquam reiciendis dolorem nisi. Et aperiam ullam quod perferendis. Et odio sequi veritatis officiis. Eum modi et in enim repellat earum doloribus minus.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(41, 'Et omnis est aut.', 'Voluptas et vel explicabo. Voluptas aut quibusdam adipisci aut. Doloribus et unde numquam sit rerum. Nihil suscipit at quam quas est.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(42, 'Eum labore ab quas.', 'Qui qui totam aut non repudiandae dolore. Et itaque qui eveniet. Officiis voluptatem quibusdam eaque voluptas ut unde aliquid. Aut est et nostrum aut non vel adipisci.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(43, 'Dolorem omnis autem.', 'Dolorem et vitae suscipit voluptatibus fugit. Optio veniam quasi consequatur ut. Consequuntur voluptas veniam cum est alias rerum omnis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(44, 'Unde autem qui non.', 'Quae autem nisi rerum quos provident. Odio quos ut ut adipisci est. Voluptatem est labore nam occaecati quos ad. Quia est molestiae vel praesentium molestias facere.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(45, 'Temporibus consequatur quam mollitia.', 'Ut nihil velit dolor blanditiis corporis. Quo nisi repudiandae ut voluptas eligendi. Molestiae illo totam ut qui.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(46, 'Laudantium ut tempora adipisci.', 'Ut error ab blanditiis rem. Sit et numquam dicta nulla asperiores eligendi quia. Autem ipsum placeat et atque molestiae. Quia omnis neque corporis qui totam.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(47, 'Ut at omnis ut.', 'Neque quo non asperiores voluptas dolore. Cum qui recusandae debitis velit quisquam facilis nostrum. Rem eos labore adipisci qui sunt qui consequatur ex.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(48, 'Dolorem nulla nulla.', 'Aliquam non aspernatur doloribus sed libero qui sint magnam. Exercitationem non modi numquam omnis. Voluptatem sed alias quisquam sequi inventore neque.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(49, 'Neque et est itaque.', 'Quaerat provident mollitia soluta quia. Reiciendis recusandae occaecati nulla odio sunt et. Eum voluptas sint maxime similique sapiente.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(50, 'Ratione exercitationem quibusdam laudantium.', 'Tempore numquam labore quisquam consequuntur. Dolore excepturi aperiam impedit. Id nulla cupiditate laudantium est quis rerum repudiandae unde.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(51, 'Omnis sint corporis eaque dolores.', 'Cumque non labore ea quae. Aut asperiores nostrum est molestias. Velit sed exercitationem aut earum veniam. Est optio ducimus at quia iusto distinctio dolorem. Enim soluta omnis dolor aut.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(52, 'Natus aut sapiente.', 'Et ducimus nostrum eos voluptate ullam. Quod eius vero quisquam quae accusantium debitis quam autem. Architecto voluptatem facere est nulla. At repudiandae qui odio est omnis cum.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(53, 'Amet ratione qui.', 'Est dolorem quos atque delectus aut. Et quia aperiam doloremque. Consequatur qui similique autem culpa quo modi est.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(54, 'Rem iusto fuga.', 'Nemo ullam fugit sunt nihil cum aliquid. Et numquam quo unde libero. Et sint placeat ut fuga.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(55, 'Cupiditate laudantium reprehenderit possimus est.', 'Reiciendis consectetur tempore enim odit eveniet cupiditate sunt repellendus. Assumenda aut adipisci omnis ad. Natus corrupti illo ut expedita provident officiis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(56, 'Voluptas distinctio voluptatem.', 'Est suscipit quod ut officia cum rem. Ducimus possimus quia ut non tenetur est. Error quibusdam sit et omnis nihil.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(57, 'Necessitatibus corporis eum ut.', 'Harum sed odio reiciendis qui est ipsa molestiae. Aliquam corporis porro dolorem odio quibusdam vel. Ut eos dicta odit laborum. Dolor maxime animi unde dolor dolorem suscipit quod.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(58, 'Vero temporibus quidem.', 'Possimus est incidunt neque veniam nam. Exercitationem quis ducimus ratione libero ratione. Dolores molestias neque animi hic magnam eligendi.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(59, 'Possimus dolorem excepturi optio.', 'Dolores mollitia non aspernatur assumenda. Explicabo tenetur blanditiis placeat ea repellat voluptas. Nobis harum explicabo numquam dolores ut dolorem sunt.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(60, 'Quisquam et est et nam.', 'Ex sed modi suscipit consequatur dolorem debitis et. Distinctio ut ea eius voluptate autem. Sed veniam laborum excepturi minus.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(61, 'Corporis consequatur eligendi doloremque.', 'Alias non corrupti quo et quas quis aspernatur. Doloribus illo repellendus accusamus est quas harum consequatur. Reiciendis quia ut iusto sit ut sunt.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(62, 'Pariatur in voluptatem assumenda iure.', 'Quod dicta aliquam inventore odit et a cumque doloribus. Cumque necessitatibus amet quisquam nisi facilis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(63, 'Temporibus fugiat labore.', 'Iste officia alias quia alias numquam. Non vel aut molestiae quia enim. Corrupti repudiandae et illum fugiat.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(64, 'Delectus suscipit in.', 'Omnis voluptatem dolorum rerum voluptas distinctio maxime possimus officia. Sed expedita corporis fugit totam ut libero. Quasi officia est minima accusantium. Et non animi omnis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(65, 'Deleniti enim ut qui.', 'Quis error voluptates eius. Ipsa deleniti culpa non sapiente eum fugit quo magnam. Quasi impedit quos voluptate quia.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(66, 'Dolores vel ea cupiditate.', 'Doloremque et reprehenderit inventore. Nulla rerum in ipsa. Fugiat eum neque magni suscipit omnis. Quos sunt dignissimos aut laborum ducimus debitis iusto.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(67, 'Ut pariatur voluptatem id vero.', 'In voluptate voluptatem consequatur. Consequatur quia alias nihil sunt beatae molestiae modi. Reprehenderit et aliquam sint quis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(68, 'Consequatur aut ex.', 'Dolores aut alias sit sit aut laboriosam. Culpa unde labore animi magni quae. Et alias consequuntur ut placeat fugit. Sed perferendis qui deserunt cumque.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(69, 'Voluptas vitae magni.', 'A aut velit voluptatem minima expedita. Qui pariatur omnis occaecati dolorem dolor voluptates. Dolore ratione ut reiciendis porro quia consequatur beatae. Nobis quia occaecati id rerum.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(70, 'Dicta aut laborum.', 'Aliquid cumque iste impedit distinctio explicabo nam dolor aut. Et corrupti temporibus optio aliquid et saepe fugiat. Maxime aut dolor aut dolores rem odio non. Ut cum sit est et.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(71, 'Necessitatibus voluptates odit omnis.', 'Et est dicta laudantium temporibus. Quia repellat voluptatum explicabo nesciunt. Consequatur et sequi eligendi ut adipisci quo ducimus. Ut est officiis suscipit et.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(72, 'Sint asperiores reprehenderit.', 'Sed voluptas esse tempore ut. Magni expedita molestiae saepe dicta possimus architecto officiis. Provident vel dignissimos distinctio qui ducimus. Aut ea ut vitae earum.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(73, 'Labore aperiam.', 'Rem consequuntur qui architecto repellendus. Minus voluptatem rerum rerum exercitationem voluptas. Reprehenderit aut voluptatem accusamus deleniti aspernatur atque qui omnis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(74, 'Error omnis sed.', 'Alias commodi quisquam at est fugit mollitia. Voluptas ab qui quia ex. Ea doloremque voluptas totam omnis necessitatibus rerum. Suscipit fugiat rerum reiciendis provident est ex totam.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(75, 'Et sed.', 'Consequatur vel ut praesentium officia adipisci. Est omnis voluptates et aut. Fuga et exercitationem eos qui modi. Et molestiae omnis quo dolor ut nisi.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(76, 'Voluptatem voluptatem molestiae a.', 'Fugiat quod qui error beatae. Velit aliquid hic dicta in suscipit aliquam. Fugit et est tempore rerum error velit.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(77, 'Et qui similique.', 'Provident voluptate id pariatur ut aliquam laudantium. Iusto maiores quas quia molestias ut distinctio perspiciatis. Et fuga eum consequatur et eius. Quibusdam tempora nesciunt quae illo.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(78, 'Aut harum est numquam.', 'Voluptatem esse odit sapiente molestiae. Sed non ut qui nostrum dicta deserunt illum. Nesciunt mollitia ut voluptatem unde voluptatem sapiente.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(79, 'Ipsa consequatur deserunt est.', 'Velit autem nisi assumenda libero facere laboriosam quia. Et laborum doloremque eos voluptas hic non quia. Explicabo quia laborum quibusdam sed.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(80, 'Aut itaque.', 'Quia alias quis quo provident. Nulla dolorum perferendis exercitationem accusantium. Nesciunt quisquam et a voluptas.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(81, 'Quis voluptatem corrupti debitis.', 'Voluptatum aut sunt odio debitis atque pariatur tempore ipsa. Vitae in non dolore dolorem. Et impedit odio natus vel dolor voluptatem.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(82, 'Nostrum omnis sed.', 'Ipsam quis dicta dolore repudiandae. Ut ipsam mollitia neque eveniet quaerat facere. Nihil ea velit quasi natus aperiam quasi. Voluptatem libero et distinctio.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(83, 'Ea pariatur fuga alias.', 'Libero non tenetur nesciunt culpa est possimus harum voluptatum. Maxime omnis ullam qui autem suscipit eos. Sit ut dignissimos velit ea quia. Temporibus ex sed ea.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(84, 'Dignissimos unde.', 'Labore cupiditate ab ut non fuga expedita aspernatur ea. Officiis unde quidem fugiat magni magnam maxime dolorem.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(85, 'Laborum minus sit est.', 'Velit explicabo voluptatem et numquam magni rerum ad. Repellat at ipsum cupiditate aut asperiores nesciunt. Expedita illum veritatis laborum dolor repudiandae.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(86, 'Reprehenderit vel perferendis quaerat.', 'Omnis ut enim quia esse. Magni alias hic hic modi. Odio quos adipisci delectus ut non.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(87, 'Eligendi corrupti minus.', 'Sunt quia voluptatem repellat molestiae impedit iure. Nobis dolor neque laudantium earum laborum architecto pariatur non. Autem rem blanditiis ut eveniet sunt amet culpa asperiores.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(88, 'Vel eius velit.', 'Aspernatur animi modi nobis deserunt deleniti. Perspiciatis et officiis officiis et fugit. Sit eveniet at est ullam est voluptatem.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(89, 'Ullam pariatur laboriosam aut.', 'Ducimus et cupiditate qui quia quis. Eligendi velit sit eum reiciendis recusandae doloremque nesciunt. Aut id ut autem labore tempora perferendis maiores nobis.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(90, 'Eligendi delectus non.', 'Est nam quo dolores omnis nesciunt deserunt quia nostrum. Perspiciatis cumque non voluptatibus enim illo consequatur. Nemo numquam et vero nam accusamus optio a minima.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(91, 'Ut adipisci voluptas quis neque.', 'Dolore in ea facilis quod quia. Qui similique sequi eos laudantium ut. Est voluptatum ut numquam eum. Provident culpa iusto laboriosam voluptas consequatur id.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(92, 'Qui est ipsam et.', 'Atque accusamus officia eum id nihil minus sapiente. Nostrum architecto nulla aliquid. Aut ipsum ex quia qui sed dolores. Suscipit et et exercitationem commodi.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(93, 'Id hic in ducimus.', 'Cum rerum iusto provident aut aspernatur modi. Molestias expedita voluptas porro voluptatem atque ut ab. Iste eos quo magni officia animi quo placeat.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(94, 'Eveniet itaque perspiciatis.', 'Quaerat ut debitis sint sunt id aut. Est eveniet nam ab. Quo exercitationem et iusto ducimus corporis error laborum. Officia autem a modi consequatur quos.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(95, 'Facilis ex earum saepe repellendus.', 'Velit excepturi animi commodi voluptatem exercitationem et repellat. Atque distinctio autem officiis. Reprehenderit consequatur blanditiis voluptas optio inventore provident.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(96, 'Quod necessitatibus natus quam.', 'Nisi omnis assumenda minus voluptatem illum et. Quis quo minus iure odio maiores. Ut magnam voluptate illo sunt at qui.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(97, 'Repudiandae sit et.', 'Iure magnam nemo est nihil. Et minima eos natus qui ex mollitia reprehenderit repellendus.', 0, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(98, 'Tenetur fugit maxime libero.', 'Qui at et optio excepturi animi. Modi voluptatem cumque facere asperiores quibusdam inventore. Velit expedita autem dolor labore aut. Esse sit officiis itaque numquam et atque nam.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(99, 'Consequatur ut rerum.', 'Sed rerum autem illum rerum neque quis. Laborum impedit deleniti et saepe. At nihil nihil necessitatibus.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL),
(100, 'Enim voluptatem voluptas.', 'Natus aliquid id ut ut. Quia eum quia et odio. Vel officiis delectus aperiam sed perspiciatis veniam. Sed dignissimos non libero temporibus.', 1, 1, NULL, NULL, '2025-08-10 15:31:54', '2025-08-10 15:31:54', NULL);

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
  `name` varchar(191) NOT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Order of the designation for sorting',
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
  `name_english` varchar(191) NOT NULL,
  `name_bangla` varchar(191) NOT NULL,
  `nid` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(191) DEFAULT NULL,
  `religion` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `present_village` varchar(191) DEFAULT NULL,
  `present_post_office` varchar(191) DEFAULT NULL,
  `present_upazila` varchar(191) DEFAULT NULL,
  `present_district` varchar(191) DEFAULT NULL,
  `permanent_village` varchar(191) DEFAULT NULL,
  `permanent_post_office` varchar(191) DEFAULT NULL,
  `permanent_upazila` varchar(191) DEFAULT NULL,
  `permanent_district` varchar(191) DEFAULT NULL,
  `ssc_school` varchar(191) DEFAULT NULL,
  `ssc_board` varchar(191) DEFAULT NULL,
  `ssc_year` varchar(191) DEFAULT NULL,
  `ssc_result` varchar(191) DEFAULT NULL,
  `hsc_college` varchar(191) DEFAULT NULL,
  `hsc_board` varchar(191) DEFAULT NULL,
  `hsc_year` varchar(191) DEFAULT NULL,
  `hsc_result` varchar(191) DEFAULT NULL,
  `diploma_institute` varchar(191) DEFAULT NULL,
  `diploma_subject` varchar(191) DEFAULT NULL,
  `diploma_year` varchar(191) DEFAULT NULL,
  `diploma_result` varchar(191) DEFAULT NULL,
  `bachelor_university` varchar(191) DEFAULT NULL,
  `bachelor_department` varchar(191) DEFAULT NULL,
  `bachelor_year` varchar(191) DEFAULT NULL,
  `bachelor_result` varchar(191) DEFAULT NULL,
  `masters_university` varchar(191) DEFAULT NULL,
  `masters_department` varchar(191) DEFAULT NULL,
  `masters_year` varchar(191) DEFAULT NULL,
  `masters_result` varchar(191) DEFAULT NULL,
  `other_qualification` varchar(191) DEFAULT NULL,
  `year_of_experience` date DEFAULT NULL,
  `experience_information` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `signature` varchar(191) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `father_mobile` varchar(191) NOT NULL,
  `father_occupation` varchar(191) DEFAULT NULL,
  `father_organization_name` varchar(191) DEFAULT NULL,
  `father_basic_income` int(11) DEFAULT NULL,
  `father_gross_income` int(11) DEFAULT NULL,
  `mother_name_bn` varchar(191) NOT NULL,
  `mother_name_en` varchar(191) NOT NULL,
  `mother_mobile` varchar(191) NOT NULL,
  `mother_occupation` varchar(191) DEFAULT NULL,
  `mother_organization_name` varchar(191) DEFAULT NULL,
  `mother_basic_income` int(11) DEFAULT NULL,
  `mother_gross_income` int(11) DEFAULT NULL,
  `guardian_signature` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, '2025_01_05_044216_create_sections_table', 1),
(22, '2025_01_05_061716_create_employees_table', 1),
(23, '2025_01_15_031006_create_employee_leave_applications_table', 1),
(24, '2025_01_23_051052_create_section_setups_table', 1),
(25, '2025_01_23_051335_create_period_setups_table', 1),
(26, '2025_01_23_051622_create_class_routine_setups_table', 1),
(27, '2025_01_23_051935_create_exam_routine_setups_table', 1),
(28, '2025_01_23_052304_create_syllabus_uploads_table', 1),
(29, '2025_01_23_052616_create_student_manual_attendance_table', 1),
(30, '2025_01_23_052728_create_employee_manual_attendance_table', 1),
(31, '2025_01_23_053002_create_student_leave_applications_table', 1),
(32, '2025_01_23_053134_create_student_admission_circular_sessions_table', 1),
(33, '2025_01_23_053246_create_student_admission_circulars_table', 1),
(34, '2025_01_23_053353_create_employee_admission_circular_sessions_table', 1),
(35, '2025_01_23_053449_create_employee_admission_circulars_table', 1),
(36, '2025_01_23_053550_create_exam_marks_setups_table', 1),
(37, '2025_01_23_053654_create_exam_setups_table', 1),
(38, '2025_01_23_053813_create_grade_setups_table', 1),
(39, '2025_01_23_054112_create_assign_mark_entry_faculties_table', 1),
(40, '2025_01_23_054316_create_mark_entries_table', 1),
(41, '2025_06_25_024832_create_guardians_table', 1),
(42, '2025_06_25_024954_create_addresses_table', 1),
(43, '2025_06_25_030052_create_special_evaluations_table', 1),
(44, '2025_07_17_041427_create_website_settings_table', 1),
(45, '2025_07_31_041710_create_assign_employees_table', 1),
(46, '2025_08_03_074820_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 13);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `group_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'web', 'dashboard', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(2, 'dashboard.edit', 'web', 'dashboard', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(3, 'admission.view', 'web', 'admission', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(4, 'admission.edit', 'web', 'admission', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(5, 'admission.delete', 'web', 'admission', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(6, 'admission.update', 'web', 'admission', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(7, 'website.view', 'web', 'website', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(8, 'website.edit', 'web', 'website', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(9, 'website.delete', 'web', 'website', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(10, 'website.update', 'web', 'website', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(11, 'user.create', 'web', 'user', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(12, 'user.view', 'web', 'user', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(13, 'user.edit', 'web', 'user', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(14, 'user.delete', 'web', 'user', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(15, 'user.approve', 'web', 'user', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(16, 'role.create', 'web', 'role', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(17, 'role.view', 'web', 'role', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(18, 'role.edit', 'web', 'role', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(19, 'role.delete', 'web', 'role', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(20, 'role.approve', 'web', 'role', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(21, 'profile.view', 'web', 'profile', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(22, 'profile.edit', 'web', 'profile', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(23, 'profile.delete', 'web', 'profile', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(24, 'profile.update', 'web', 'profile', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(25, 'employee.view', 'web', 'employee', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(26, 'employee.edit', 'web', 'employee', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(27, 'employee.delete', 'web', 'employee', '2025-08-10 15:31:55', '2025-08-10 15:31:55'),
(28, 'employee.update', 'web', 'employee', '2025-08-10 15:31:55', '2025-08-10 15:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(2, 'Executive', 'web', '2025-08-10 15:31:54', '2025-08-10 15:31:54'),
(3, 'Teacher', 'web', '2025-08-10 15:34:13', '2025-08-10 15:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Order of the sections for sorting',
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
('1WnVmfaQTCf75ddtIKc0Htvx1ZlpaKk54tQergNL', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWxUY2lDWTFQVjVoZVU1a21QYUxjdGhLNjJjZ3FqSkpFZE1tSDM1YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755032487),
('2BaamGesfAgNCHJIKVOeZXbTv9o5eH37lb9zGP2w', NULL, '172.25.2.1', 'libredtail-http', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlBVRW5XUnV2UU9BenJiWTM2S0F6cnI4NG5uREhENFlzR2hscDBHMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTUyOiJodHRwOi8vMTIwLjg5LjY1Ljg4L3B1YmxpYy9pbmRleC5waHA/ZnVuY3Rpb249Y2FsbF91c2VyX2Z1bmNfYXJyYXkmcz0lMkZpbmRleCUyRiU1Q3RoaW5rJTVDYXBwJTJGaW52b2tlZnVuY3Rpb24mdmFycyU1QjAlNUQ9bWQ1JnZhcnMlNUIxJTVEJTVCMCU1RD1IZWxsbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1755039546),
('2Ma9IrPvyRzTFnfr0mL9ygijvJKKC0bRpuXZY1m0', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzlPa3hiSjVHSnJiV0pjc1dPblNEZWxUVGloQmJRakVaUm5uR0lGOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755029189),
('7eU1jEbSqBMieZAcWMhZOgrpPyxvNTCLSo7mITwM', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnNUVGhYeEVZdEVFOFNaZW9DUFVmTEdjSHFTeDhiT2MwVVdFcGpqNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755052748),
('8CY7BcNt7vejbCgIBMd0ehmhiu7Xi7uCu5tddoP5', NULL, '172.25.2.1', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejl5cFI1NFNZdDBuZ2l5UkFQYVFUaG5Jaklyczl4RFdNV2VidHpObiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755030777),
('8gnRRN8jCvzlksRr8gToqMAjd1MZYe1cUUC6fiEo', NULL, '172.25.2.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXQ5WUtVcG5OdlY1S0tUM1dpOFlKTVg2T2ZXdnVsS3hSN3lyMkx5ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755031954),
('a93GTu6sIYQej5CDMBHHMoOARvbTMuOY01YJyhMm', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVBTZEtPaGdINXVGSk5ZWVVSeHdLZ1VvMWcyMlY4T2pBakoyZXFQRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755043918),
('AG2egMRO2tT9WUzFt84EtmLQOPUJW06t9w7HmRXe', NULL, '172.25.2.1', 'libredtail-http', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXhoellHVWxyd0lZMWVyZmNyRjh6Z2lTWkJOMklSWnRVZExudkgzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTUyOiJodHRwOi8vMTIwLjg5LjY1Ljg4L3B1YmxpYy9pbmRleC5waHA/ZnVuY3Rpb249Y2FsbF91c2VyX2Z1bmNfYXJyYXkmcz0lMkZpbmRleCUyRiU1Q3RoaW5rJTVDYXBwJTJGaW52b2tlZnVuY3Rpb24mdmFycyU1QjAlNUQ9bWQ1JnZhcnMlNUIxJTVEJTVCMCU1RD1IZWxsbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1755039547),
('Br8IJdbqjawSgcWCzRWA7vnE2YsAhRLygCtH0hnX', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVQ4Nm5idWk3dEd4bmZLUGdnc0ZsUGZHa3E3ZTFIVzdDV25kWU9EZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755027166),
('C98O1YL6VR25ejzwegLl1KPGipJtukTIZuHhmpSV', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.1) Gecko/2008070206 Firefox/2.0.0.8', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTBQaVE5MXNzeHRhZVJmVGFWM29VN0hnQjNJRFZjakZBMTNNWTF0NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjAuODkuNjUuODgvP3VyaT0lMkZhcHAlMkYuZW52Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755041898),
('dgsm459U3Rh0mjR6ae3UufWMLjzzwlenwkwhLn7h', NULL, '172.25.2.1', 'libredtail-http', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGNwNFBWU0l5RnVXZ0czOTJxdkYxcVNvRHdKWUhyczZpbXByOGpXNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA1OiJodHRwOi8vMTIwLjg5LjY1Ljg4L3B1YmxpYy9pbmRleC5waHA/JTJGJTNDJTNGZWNobyUyOG1kNSUyOCUyMmhpJTIyJTI5JTI5JTNCJTNGJTNFJTIwJTJGdG1wJTJGaW5kZXgxLnBocD0mY29uZmlnLWNyZWF0ZSUyMCUyRj0mbGFuZz0uLiUyRi4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkYuLiUyRi4uJTJGdXNyJTJGbG9jYWwlMkZsaWIlMkZwaHAlMkZwZWFyY21kIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755039547),
('eqtLikTndIvf2UfoVxksU7twR3HPSIYqtDH17rKG', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemNGaWw4MUZWSXFFMFVBcXVhMWZYZjBHSmF6Z3VmeVR0aTBlN1FvdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755058671),
('f48RbjmT7RPV7J14GWROxvygBpUSS5Mb3IAJPXd2', NULL, '172.25.2.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmRwUUZPa0RubjdVY1JpQ2dNT2JqVk5heHROakhzTFVrT3dDOTFQZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755030967),
('hos9OeE5Tx3bfPhMhjRNj7jy2PpalYRzdxbkXXD7', NULL, '172.25.2.1', 'libredtail-http', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVFLTzF1Q2w0MUNnTnlvaEN0Q2RvYWRHYzYwUXVpbFVPV3RlQ29QciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTQ6Imh0dHA6Ly8xMjAuODkuNjUuODgvcHVibGljL2luZGV4LnBocD9sYW5nPS4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkZ0bXAlMkZpbmRleDEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755039548),
('hQw8RyddPYSqOLEwzMcsMVnvpXgrEGSqOmMX2KDJ', NULL, '172.25.2.1', 'Hello from Palo Alto Networks, find out more about our scans in https://docs-cortex.paloaltonetworks.com/r/1/Cortex-Xpanse/Scanning-activity', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEVsR2NXVFd1Q0tiZ25hd1IxNmYydHZ1bFVLRzFldjJBbHJwZ0s3WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755041450),
('Io3wq1A3Yygo5i3WnBttm9QbCdrAr0RPPMtVyCjX', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXI0M2F2bG1TdjFWOE9uRnIyQUp5UjVJellvSXpUcE5UZjRVeTNFZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755053882),
('JqfRR8XsQebNeGSFFGRO6bCAaUMIYemNOGBoTolC', NULL, '172.25.2.1', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHo3RERXY0tlYlZJTzZXN3pDY1BESTJhcnBGaDkxMnVHNWNpNDhqbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755056398),
('Ju9BqJWNR84Opje4ZKJwbNEN0vPdBEg4haJSX4Ub', NULL, '172.25.2.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1B3WUJ6c1pLTFF6UEZyTW5xZHpNcGdkRHhUd0c4bjZsOURNbDFITCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755050688),
('kgID2IrbQoEzsfc9kCr8bgbthXlBx2s9FNJMsEPQ', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnBOMjM0OVB3eTVzWjNVVVVZVkIxdXV2SnpUYVhmVjZkN1k4ZnZUbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755027705),
('lKuCURJmIu1hawJp0XcsLL7KCmC6OwitFaCNibJA', NULL, '172.25.2.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; S.N.O.W.4)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDdBbTVGd05FY3d4cnNJbDlEbEpLMjNmM2l3Zjl3VE13Q0dabTI4eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjAuODkuNjUuODgvP3VyaT0lMkZ3d3clMkYuZW52Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755041904),
('mkghEPwmtkIxbU2QJeYlMuVXpSKlbtkqZbKWFPnL', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmR0SXBNQnA4V2lwZmdiUnp5VXMyMVRuWERiUUFBNVlhV2VwV0xETyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755040460),
('OurqcDnJStMbyHsZsrSIXauS7wM29Eo5TZh6visB', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVEpkVThKbnlteUpzcE5KR3pmeEdmamVUdWgyaFpsZmFzNVY0Q0ZOMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755036801),
('OWW1dN7JmehtoQDd0Td6w0QgrWFXxp1EkC96tULd', NULL, '172.25.2.1', 'Hello from Palo Alto Networks, find out more about our scans in https://docs-cortex.paloaltonetworks.com/r/1/Cortex-Xpanse/Scanning-activity', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjdOd0sxeTBlNHlIak93Q3RlaVlFSVJub3NQUmtraW9JME53MUR0NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755042390),
('pyqOoC91wFzz1G2fpu0VWDAzxv4COaYpuyMgq1MW', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkd1amxlSXNnVDF4Z0V4ZExvZVJIZ3RJc1o2bXNldFRMbWRueTB0biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755048596),
('qEL7sJbCg008galz72zLqLmomFv1MILsX2xzE17H', NULL, '172.25.2.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkIxWEJaWlJBekV2TWZnNWhvRFBJbHhHc1IzNGE0dzY3Uk5yZTlLdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755035146),
('Qv2GuyGuHpsv3LNF84PAFfZ37JI5evXpV3Kv3Pye', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUlCWU5TeTIyVlVGSnZ2WXVVRmh1OVZvaVBDUDNCQkQ3elFKcWFpUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755025131),
('R1yh4dlenDpgL8jAHuLceiK5nifdh9e66way3W1p', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.140 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEZvMUd1YUVKdHlwcHczYjdGVHZPV1BOOVZWaHBiR2M5b2lscmdWZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755049887),
('RwaVg3Xc18yQEbFlGNurPVhWYHEskBQXPiG3j77o', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclNNYjNiSlV3ck5lRkNDaU15NkFJc0lrcG9kTVlSOHFXbFNxbnFaYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755056083),
('s50kGaZFnNq4nNEVKWSTFuE5dbSm57GNTHZrJ9Rz', NULL, '172.25.2.1', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXpQNjhjenhsWFJBS3lISHBMUWFIYUxWWUp1TGI3V2tyYTlkYUN2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755033304),
('SvaiJe2hV8obzN6sJNNzFAukSgNyAkvN8eafe6Hx', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.140 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3U4eFRqQnJ0TDI0bGkxOFdRV3NJbXRWNWZXbVltVDlHTGRMeENlVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755054519),
('tqOuW6cqKEOTyK24v9jRAGzUlmdlrTR0mC271E5T', NULL, '172.25.2.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:45.0) Gecko/20100101 Firefox/45.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEtGY3VONldLZTNwbDd6aFg2NHBLNmNiSkp5M3dqTFJqUzBXdmR3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjAuODkuNjUuODgvP3VybD0lMkZhcHAlMkYuZW52Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755041906),
('TuxEkSmhjBi2wpXbmjFTYXAwOoHxU2W2BV5cpiuq', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0tqMWZ2NnI2OEExY2lsUzQzVkNGbEFad3JZMW9mZDNoUWZKWTl1RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vdGVzdC1wcm95YXNoLWpzci50aWxiZC5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755068761),
('uZQBwEkd116sMUBjRpaWuztACk6heBF7mG646Zt0', NULL, '172.25.2.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTMyN084RWhOTTdRVU94Z2E3bVhrbHhwdXdKWG5jaE9rOWljVFUwdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755038590),
('VaV5aLzuPkSLKbP8X7Au3mwvLdDuVDiSqw2LoE3B', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm9nNFMzT3B6TWlnb1pCSEN3ZnkyVmJnZUlGcUdxTWlFUURzWDJTRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755041367),
('vGJ6YSZpgPnQOIS5vzcuhO2XR1PR84RSS68lzOlM', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; rv:108.0) Gecko/20100101 Firefox/108.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUI4bk1uZ2tZbHB6bUpBWkZna0FpUGhTS1ZMRldMcTdkY09nVWo4VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755054959),
('Vlo6v3SygR3pRsUspKZWvwPU2nzkzzT6BwYl4oeR', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; rv:108.0) Gecko/20100101 Firefox/108.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzF5Uklzb0pmV1JBRVl0Smphek1scm5QVDRUa3ozWUJrdDVDY0p5SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755053794),
('VUnCNtMPZ0USEGYUyNJzXBB4ZVYsM15yQlEOHC6y', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibU54NUFCM3JpZHRkSVhPSENGWXFDaUwyN1ZNUGlRWkh4aVVCWTlUUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vdGVzdC1wcm95YXNoLWpzci50aWxiZC5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755068170),
('w0BBffrlX9y8CmQa2c1zOQNAYFdGk3TVA4q4tKs4', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmR0cmtTdnAwdDlxRDd0cE1BSlk4WGtaY2tSM3UyOXNWQlFlYm4xWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755029107),
('WskqJzpVGWL8Ws4CN4QExwVOdz15phmttupsLJUX', NULL, '172.25.2.1', 'Hello from Palo Alto Networks, find out more about our scans in https://docs-cortex.paloaltonetworks.com/r/1/Cortex-Xpanse/Scanning-activity', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2tWOThkV1lTS0UxNVZlTzRCOG1RdWphNWRxeWE5QW1nSDhvSW5CeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755048480),
('xB2y7ZxWy0fc7w2mbV31pLGkLAo5ScZkULjZE87P', NULL, '172.25.2.1', 'python-requests/2.32.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG0zQXJPRWxJbk5uSXVqcDdvSGNWUGplOWowcm5ZeEJqQ2VhaDlNYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755041610),
('xGMCsOap8vQ6uiAF4bx873ikdfjRdAX7CLorB3dd', NULL, '172.25.2.1', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVRTY1ZEcEd3RUNGOVBxTFg1b1ZtdzZVb0I3NmtWRzY1dFZlMFZNMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755044816),
('xmc1VnrniyaWVqh0dhzWtXJ7K4QXUM4t3Jm1oYXu', NULL, '172.25.2.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmROV0I4a010UHo3empvazdENjRMTGxGYVJPb1lJWkdVT3psN3FWNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755052556),
('xqPR1TMnq4BQwYAyyza2CHsw1S7kHM4VUYisLd2c', NULL, '172.25.2.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFZscndGdkFDWDFOOGgzMHFjQXh1YXFQWHVpVWFWVzNiTDh0YzRKOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755040807),
('XUNYbKqtVQJBPPb4WR7cMQnTU8XUjybfTriAJEKL', NULL, '172.25.2.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajRybThaWmJYd3VkcVFxYXFUaTE5aVhOR1hqbnNZNzhrV0puaWZITCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755056404),
('XwT30yjdYRgZdkUmK0wZkCobvigK1ghXsfPo316x', NULL, '172.25.2.1', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT05jVG9xcnlORlJHSkFOZjlpY1BvdDJaUUVGR3NmdElrN2pGUGFpRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755025140),
('YdQKJvzVLK5zEUOPScT0i3fdhsxIza4bD7YAAu7i', NULL, '172.25.2.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHRmQ1dvNzVmMkE1amlGZFlnc2o1ZEtPcGRxb3ZjVkowRG5qSUhwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755042661),
('YLyZxh0EwE6myjvG8BXfijxwKfV9Eg0j3ZBKaSen', NULL, '172.25.2.1', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlpTU3hTYWZhNURXQXlaV2VVa0xXdXpqdEgzU1M5b2xqVEtYWjRBRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHBzOi8vMTIwLjg5LjY1Ljg4Lz9kbnM9aTFVQkFBQUJBQUFBQUFBQUIyVjRZVzF3YkdVRFkyOXRBQUFCQUFFIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755047397),
('yxCMxttoeZyHDMPtBRJpNzmEXkrrp9yXfrviM74w', NULL, '172.25.2.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1hUcHl5OHZ2dnNrSHpTT1Yyb3JZQ3pVZUpDdTZzdTVsTExCVTJ0ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755054625),
('Z2VUWaXaClBLbiNzbtHgVeCuxuld4LUAOJwbBySO', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoic0tRcW1TcUZVdGs2SjdMY2g2WFM2SmF1dlF0R2RWMTFQeVFTa2JLWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755053884),
('ZDKrMWvwRfoyetJYe4rZcu6KWpzDR4xthGXiEFLT', NULL, '172.25.2.1', 'Mozilla/5.0 (Linux; Android 5.1.1; LGL82VL Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/38.0.2125.102 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHhRcGdTQ0NvMzIxVGtSOVlxSUtlSnY2aW4yTXZiTDZjNUx3V0VJMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjAuODkuNjUuODgvP3VybD0lMkZ3d3clMkYuZW52Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1755041909),
('zeGN7wuOgj3X8wNWNbsriNX3vcsoTuvefqmCekCb', NULL, '172.25.2.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickdtSGo1QVRuWXJybWZqQnk0b1FzSFowUlBPdHMxVFJGVHV1Z3ljZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755030615),
('zVOATxPlXS6UN9BobHjVWY9wfocKEctArN2A5UoY', NULL, '172.25.2.1', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGV3Z0l4SnBQQ2liZmZBMlVNckFqOTgyTmZEWHZJVVowa0VNVHBaeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMjAuODkuNjUuODgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1755052980);

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
  `admission_year` varchar(191) DEFAULT NULL,
  `blood_group` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `student_signature` varchar(191) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `phone` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agatha Williams', 'admin@til.net', NULL, NULL, '$2y$12$59fpBtmc.sY2mi6C7h2bAujTLJNmCFsrttubG2Qi8eTt/ftyuruBi', NULL, NULL, NULL),
(13, 'CTO', 'cto@tilbd.net', '01900000000', NULL, '$2y$12$TEN5Q/kTgFTBtX/7fsiCieVvyJpkzbCd2b3ZfUYp8LKW15TI9h2K.', NULL, '2025-08-10 15:33:23', '2025-08-10 16:33:44');

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
-- Indexes for table `assign_employees`
--
ALTER TABLE `assign_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_employees_employee_id_foreign` (`employee_id`),
  ADD KEY `assign_employees_section_id_foreign` (`section_id`),
  ADD KEY `assign_employees_designation_id_foreign` (`designation_id`),
  ADD KEY `assign_employees_created_by_foreign` (`created_by`),
  ADD KEY `assign_employees_updated_by_foreign` (`updated_by`),
  ADD KEY `assign_employees_deleted_by_foreign` (`deleted_by`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_employees`
--
ALTER TABLE `assign_employees`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `period_setups`
--
ALTER TABLE `period_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assign_employees`
--
ALTER TABLE `assign_employees`
  ADD CONSTRAINT `assign_employees_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `assign_employees_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `assign_employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_employees_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_employees_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_employees_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

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
-- Constraints for table `department_setups`
--
ALTER TABLE `department_setups`
  ADD CONSTRAINT `department_setups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `department_setups_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `department_setups_medium_id_foreign` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE SET NULL;

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
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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
