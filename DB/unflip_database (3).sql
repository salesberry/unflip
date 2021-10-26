-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 12:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unflip_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` int(25) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `tenant_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 8, 'wajahath@gmail.com', '$2a$12$nmkDI3UJjED5fmMutkr5Eu4hV997zoYxSE/6gZn48JgdD4opGj6P.', NULL, NULL),
(2, 2, 'zahid@gmail.com', '$2a$12$nmkDI3UJjED5fmMutkr5Eu4hV997zoYxSE/6gZn48JgdD4opGj6P.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `id` int(11) NOT NULL,
  `business_type_name` varchar(255) NOT NULL,
  `industry_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctypes`
--

CREATE TABLE `doctypes` (
  `doctype_id` bigint(20) UNSIGNED NOT NULL,
  `doctype_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctype_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctype_background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_doctype` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `doctype_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller_action` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctype_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctypes`
--

INSERT INTO `doctypes` (`doctype_id`, `doctype_name`, `doctype_desc`, `doctype_background`, `parent_doctype`, `module_id`, `doctype_slug`, `controller_action`, `doctype_status`, `created_at`, `updated_at`) VALUES
(1, 'Items and Pricing', 'Create a headline that is informative and will capture readers', 'abstract-4.svg', 0, 11, '', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(2, 'Stock Settings', 'Create a headline that is informative and will capture readers', 'abstract-2.svg', 0, 11, '', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(3, 'Items', 'Create a headline that is informative and will capture readers', 'abstract-4.svg', 1, 11, 'items', 'App\\Http\\Controllers\\ItemController', 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(4, 'Items Category', 'Create a headline that is informative and will capture readers', 'abstract-2.svg', 1, 11, 'ItemCategories', 'App\\Http\\Controllers\\ItemCategoryController', 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(5, 'Items Modifier', 'Create a headline that is informative and will capture readers', 'abstract-4.svg', 1, 11, 'item_modifiers', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(6, 'Items Attributes', 'Create a headline that is informative and will capture readers', 'abstract-2.svg', 1, 11, 'Item_attributes', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(7, 'Item Alternative', 'Create a headline that is informative and will capture readers', 'abstract-4.svg', 1, 11, 'item_alternatives', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22'),
(8, 'Item Manufacturer', 'Create a headline that is informative and will capture readers', 'abstract-2.svg', 1, 11, 'Item_manufacturers', NULL, 1, '2021-10-20 10:57:22', '2021-10-20 10:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `doctype_tenants`
--

CREATE TABLE `doctype_tenants` (
  `id` int(25) NOT NULL,
  `tenant_id` int(50) DEFAULT NULL,
  `doc_type_id` int(25) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctype_tenants`
--

INSERT INTO `doctype_tenants` (`id`, `tenant_id`, `doc_type_id`, `status`) VALUES
(1, 8, 3, 'active'),
(2, 8, 4, 'active'),
(3, 1, 3, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `industry_type`
--

CREATE TABLE `industry_type` (
  `id` int(11) NOT NULL,
  `industry_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `no_of_item` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `category_name`, `category_slug`, `category_desc`, `tenent_id`, `status`, `no_of_item`, `created_at`, `updated_at`) VALUES
(18, 'Tacos', 'tacos', 'Hello world', 1, 1, 0, '2021-10-21 22:32:03', '2021-10-21 22:32:15'),
(19, 'Bismillah', 'bismillah', NULL, 2, 1, 0, '2021-10-22 05:27:14', '2021-10-22 05:27:22'),
(20, 'Test', 'demo', 'asdasd', 8, 1, 0, '2021-10-23 04:17:16', '2021-10-23 04:17:16');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_16_082328_create_admins_table', 1),
(7, '2021_10_20_101638_create_doctypes_table', 2),
(8, '2021_10_21_122152_create_item_categories_table', 3),
(9, '2021_10_22_211227_create_landlord_tenants_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `module_slug` varchar(100) NOT NULL,
  `module_title` int(10) NOT NULL,
  `added_on` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `icon`, `module_slug`, `module_title`, `added_on`, `status`) VALUES
(1, 'Modules', '', '#', 0, '2021-10-14', 1),
(2, 'Administration', '', '#', 0, '2021-10-14', 1),
(3, 'Tools', '', '#', 0, '2021-10-14', 1),
(4, 'Users & Permissions', '', 'module_4', 1, '2021-10-14', 1),
(5, 'Selling', '', 'module_5', 1, '2021-10-14', 1),
(7, 'CRM', '', 'module_8', 1, '2021-10-14', 1),
(8, 'Support', '', 'module_10', 2, '2021-10-14', 1),
(9, 'Human Resources', '', 'human_resources', 2, '2021-10-14', 1),
(10, 'CRM 1', '', 'module_80', 2, '2021-10-14', 1),
(11, 'Stocks', '', 'stocks', 1, '2021-10-14', 1),
(12, 'Human Resources d', '', 'module_50', 3, '2021-10-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_tenants`
--

CREATE TABLE `module_tenants` (
  `id` int(11) NOT NULL,
  `tenent_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_tenants`
--

INSERT INTO `module_tenants` (`id`, `tenent_id`, `module_id`, `status`) VALUES
(1, 8, 1, 'active'),
(2, 8, 4, 'active'),
(3, 8, 5, 'active'),
(4, 8, 11, 'active'),
(5, 2, 11, 'active'),
(6, 2, 1, 'active'),
(7, 2, 4, 'active');

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
-- Table structure for table `tabmodule def`
--

CREATE TABLE `tabmodule def` (
  `name` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  `modified_by` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docstatus` int(1) NOT NULL DEFAULT 0,
  `parent` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentfield` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parenttype` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idx` int(8) NOT NULL DEFAULT 0,
  `app_name` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_name` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restrict_to_domain` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_user_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_assign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_liked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `tabmodule def`
--

INSERT INTO `tabmodule def` (`name`, `creation`, `modified`, `modified_by`, `owner`, `docstatus`, `parent`, `parentfield`, `parenttype`, `idx`, `app_name`, `module_name`, `restrict_to_domain`, `_user_tags`, `_comments`, `_assign`, `_liked_by`) VALUES
('Accounts', '2019-10-19 04:17:55.052617', '2019-10-19 04:17:55.052617', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Accounts', NULL, NULL, NULL, NULL, NULL),
('Agriculture', '2019-10-19 04:17:57.179658', '2021-10-11 21:29:13.438657', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Agriculture', 'Agriculture', NULL, NULL, NULL, NULL),
('Assets', '2019-10-19 04:17:56.395860', '2019-10-19 04:17:56.395860', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Assets', NULL, NULL, NULL, NULL, NULL),
('Automation', '2019-10-19 04:17:39.004848', '2019-10-19 04:17:39.004848', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Automation', NULL, NULL, NULL, NULL, NULL),
('Buying', '2019-10-19 04:17:55.340065', '2019-10-19 04:17:55.340065', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Buying', NULL, NULL, NULL, NULL, NULL),
('Chat', '2019-10-19 04:17:36.952081', '2019-10-19 04:17:36.952081', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Chat', NULL, NULL, NULL, NULL, NULL),
('Communication', '2019-10-19 04:17:57.720131', '2019-10-19 04:17:57.720131', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Communication', NULL, NULL, NULL, NULL, NULL),
('Contacts', '2019-10-19 04:17:35.205565', '2019-10-19 04:17:35.205565', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Contacts', NULL, NULL, NULL, NULL, NULL),
('Core', '2019-10-19 04:17:15.394966', '2019-10-19 04:17:15.394966', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Core', NULL, NULL, NULL, NULL, NULL),
('CRM', '2019-10-19 04:17:55.252275', '2019-10-19 04:17:55.252275', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'CRM', NULL, NULL, NULL, NULL, NULL),
('Custom', '2019-10-19 04:17:25.682420', '2019-10-19 04:17:25.682420', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Custom', NULL, NULL, NULL, NULL, NULL),
('Data Migration', '2019-10-19 04:17:36.442299', '2019-10-19 04:17:36.442299', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Data Migration', NULL, NULL, NULL, NULL, NULL),
('Desk', '2019-10-19 04:17:26.737244', '2019-10-19 04:17:26.737244', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Desk', NULL, NULL, NULL, NULL, NULL),
('Education', '2019-10-19 04:17:56.821047', '2021-10-11 21:29:13.514564', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Education', 'Education', NULL, NULL, NULL, NULL),
('Email', '2019-10-19 04:17:22.566188', '2019-10-19 04:17:22.566188', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Email', NULL, NULL, NULL, NULL, NULL),
('ERPNext Integrations', '2019-10-19 04:17:57.273422', '2019-10-19 04:17:57.273422', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'ERPNext Integrations', NULL, NULL, NULL, NULL, NULL),
('Geo', '2019-10-19 04:17:26.347283', '2019-10-19 04:17:26.347283', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Geo', NULL, NULL, NULL, NULL, NULL),
('Healthcare', '2019-10-19 04:17:56.991548', '2019-10-19 04:17:56.991548', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Healthcare', NULL, NULL, NULL, NULL, NULL),
('Hotels', '2019-10-19 04:17:57.449798', '2019-10-19 04:17:57.449798', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Hotels', NULL, NULL, NULL, NULL, NULL),
('HR', '2019-10-19 04:17:55.863843', '2019-10-19 04:17:55.863843', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'HR', NULL, NULL, NULL, NULL, NULL),
('Hub Node', '2019-10-19 04:17:57.536603', '2019-10-19 04:17:57.536603', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Hub Node', NULL, NULL, NULL, NULL, NULL),
('Integrations', '2019-10-19 04:17:29.944087', '2019-10-19 04:17:29.944087', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Integrations', NULL, NULL, NULL, NULL, NULL),
('Maintenance', '2019-10-19 04:17:56.700766', '2019-10-19 04:17:56.700766', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Maintenance', NULL, NULL, NULL, NULL, NULL),
('Manufacturing', '2019-10-19 04:17:55.948823', '2019-10-19 04:17:55.948823', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Manufacturing', NULL, NULL, NULL, NULL, NULL),
('Non Profit', '2019-10-19 04:17:57.357479', '2021-10-11 21:29:13.639588', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Non Profit', 'Non Profit', NULL, NULL, NULL, NULL),
('Portal', '2019-10-19 04:17:56.568550', '2019-10-19 04:17:56.568550', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Portal', NULL, NULL, NULL, NULL, NULL),
('Printing', '2019-10-19 04:17:34.135438', '2019-10-19 04:17:34.135438', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Printing', NULL, NULL, NULL, NULL, NULL),
('Projects', '2019-10-19 04:17:55.585491', '2019-10-19 04:17:55.585491', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Projects', NULL, NULL, NULL, NULL, NULL),
('Quality Management', '2019-10-19 04:17:57.639072', '2019-10-19 04:17:57.639072', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Quality Management', NULL, NULL, NULL, NULL, NULL),
('Regional', '2019-10-19 04:17:56.904571', '2019-10-19 04:17:56.904571', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Regional', NULL, NULL, NULL, NULL, NULL),
('Restaurant', '2019-10-19 04:17:57.083375', '2019-10-19 04:17:57.083375', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Restaurant', NULL, NULL, NULL, NULL, NULL),
('Selling', '2019-10-19 04:17:55.686888', '2019-10-19 04:17:55.686888', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Selling', NULL, NULL, NULL, NULL, NULL),
('Setup', '2019-10-19 04:17:55.771297', '2019-10-19 04:17:55.771297', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Setup', NULL, NULL, NULL, NULL, NULL),
('Shopping Cart', '2019-10-19 04:17:56.303223', '2019-10-19 04:17:56.303223', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Shopping Cart', NULL, NULL, NULL, NULL, NULL),
('Social', '2019-10-19 04:17:37.929999', '2019-10-19 04:17:37.929999', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Social', NULL, NULL, NULL, NULL, NULL),
('Stock', '2019-10-19 04:17:56.045345', '2019-10-19 04:17:56.045345', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Stock', NULL, NULL, NULL, NULL, NULL),
('Support', '2019-10-19 04:17:56.137603', '2019-10-19 04:17:56.137603', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Support', NULL, NULL, NULL, NULL, NULL),
('Utilities', '2019-10-19 04:17:56.219638', '2019-10-19 04:17:56.219638', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'erpnext', 'Utilities', NULL, NULL, NULL, NULL, NULL),
('Website', '2019-10-19 04:17:16.574420', '2019-10-19 04:17:16.574420', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Website', NULL, NULL, NULL, NULL, NULL),
('Workflow', '2019-10-19 04:17:21.364974', '2019-10-19 04:17:21.364974', 'Administrator', 'Administrator', 0, NULL, NULL, NULL, 0, 'frappe', 'Workflow', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `database` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tenent_email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenent_logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenent_login_title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenent_login_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `domain`, `database`, `tenent_email`, `tenent_logo`, `tenent_login_title`, `tenent_login_desc`, `created_at`, `updated_at`) VALUES
(1, 'asif', 'asif.localhost', NULL, NULL, NULL, NULL, NULL, '2021-10-09 20:24:38', '2021-10-09 20:24:38'),
(7, 'zahid', 'zahid.localhost', NULL, NULL, 'data:image/png;base64,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', 'Welcome, Localhost Zahid!', 'lan your blog post by choosing a topic dynamic', '2021-10-09 21:11:19', '2021-10-09 21:11:19'),
(8, 'main', 'localhost', NULL, 'wajahath@gmail.com', 'http://localhost/unflip/public/assets/media/logos/logo-1.svg', 'Welcome, Localhost Tenatn!', 'lan your blog post by choosing a topic dynamic', '2021-10-09 23:53:32', '2021-10-09 23:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `tenants22`
--

CREATE TABLE `tenants22` (
  `tenent_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `domain` varchar(250) DEFAULT NULL,
  `database` varchar(250) DEFAULT NULL,
  `tenent_email` varchar(255) DEFAULT NULL,
  `core_pin` int(11) DEFAULT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `tenent_logo` text NOT NULL,
  `tenent_login_title` varchar(255) NOT NULL,
  `tenent_login_desc` text NOT NULL,
  `subdomain` varchar(100) DEFAULT NULL,
  `pancard` varchar(100) DEFAULT NULL,
  `gstin` varchar(100) DEFAULT NULL,
  `fssai` varchar(100) DEFAULT NULL,
  `address_line_one` text DEFAULT NULL,
  `address_line_two` text DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `business_size` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants22`
--

INSERT INTO `tenants22` (`tenent_id`, `name`, `domain`, `database`, `tenent_email`, `core_pin`, `industry_type`, `business_type`, `phone`, `tenent_logo`, `tenent_login_title`, `tenent_login_desc`, `subdomain`, `pancard`, `gstin`, `fssai`, `address_line_one`, `address_line_two`, `zipcode`, `city`, `area`, `landmark`, `state`, `country`, `status`, `is_active`, `created_at`, `business_size`, `updated_at`) VALUES
(1, 'main', 'localhost', NULL, 'localhost@test.com', 234324, 'Test', 'Test', 545454545, 'http://localhost/unflip/public/assets/media/logos/logo-1.svg', 'tenent_login_titl', 'DEEEE', 'No', 'AA', 'asd', 'asd', 'asd', 'asdsda', '342', '234234', '234', '234', '234', 'asdasd', 1, 1, NULL, 1, '2021-10-22 21:22:49'),
(2, 'Zahid', 'zahid.localhost', NULL, NULL, 234234, 'aa', 'aaa', 33333, 'aaasd', 'aasdsad', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasd', 'asdsad', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 1, 1, NULL, 0, '2021-10-23 01:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `tenent_details`
--

CREATE TABLE `tenent_details` (
  `id` int(11) NOT NULL,
  `tenent_id` int(11) NOT NULL,
  `location_verify` enum('yes','no','process') NOT NULL,
  `phone_verify` enum('yes','no','process') NOT NULL,
  `email_verify` enum('yes','no','process') NOT NULL,
  `business_type_verify` enum('yes','no','process') NOT NULL,
  `notes` text NOT NULL,
  `map_location_verify` enum('yes','no','process') NOT NULL,
  `pancard_doc` text NOT NULL,
  `business_certificate_doc` text NOT NULL,
  `gst_doc` text NOT NULL,
  `fssai_doc` text NOT NULL,
  `other_one_doc` text NOT NULL,
  `other_two_doc` text NOT NULL,
  `other_three_doc` text NOT NULL,
  `other_four_doc` text NOT NULL,
  `other_five_doc` text NOT NULL,
  `pancard_doc_status` enum('yes','no','process') NOT NULL,
  `fssai_doc_status` enum('yes','no','process') NOT NULL,
  `other_one_doc_status` enum('yes','no','process') NOT NULL,
  `other_two_doc_status` enum('yes','no','process') NOT NULL,
  `other_three_doc_status` enum('yes','no','process') NOT NULL,
  `other_four_doc_status` enum('yes','no','process') NOT NULL,
  `other_five_doc_status` enum('yes','no','process') NOT NULL,
  `document_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenent_membership`
--

CREATE TABLE `tenent_membership` (
  `id` int(11) NOT NULL,
  `tenent_id` int(11) NOT NULL,
  `membership_started` datetime NOT NULL,
  `membership_ended` datetime NOT NULL,
  `no_of_staff` int(11) NOT NULL,
  `assign_modules` text NOT NULL,
  `assign_doctype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctypes`
--
ALTER TABLE `doctypes`
  ADD PRIMARY KEY (`doctype_id`);

--
-- Indexes for table `doctype_tenants`
--
ALTER TABLE `doctype_tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_type`
--
ALTER TABLE `industry_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_tenants`
--
ALTER TABLE `module_tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tabmodule def`
--
ALTER TABLE `tabmodule def`
  ADD PRIMARY KEY (`name`),
  ADD KEY `parent` (`parent`),
  ADD KEY `modified` (`modified`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenants_domain_unique` (`domain`);

--
-- Indexes for table `tenants22`
--
ALTER TABLE `tenants22`
  ADD PRIMARY KEY (`tenent_id`),
  ADD UNIQUE KEY `domain` (`domain`);

--
-- Indexes for table `tenent_details`
--
ALTER TABLE `tenent_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenent_membership`
--
ALTER TABLE `tenent_membership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctypes`
--
ALTER TABLE `doctypes`
  MODIFY `doctype_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctype_tenants`
--
ALTER TABLE `doctype_tenants`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industry_type`
--
ALTER TABLE `industry_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `module_tenants`
--
ALTER TABLE `module_tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tenants22`
--
ALTER TABLE `tenants22`
  MODIFY `tenent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tenent_details`
--
ALTER TABLE `tenent_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenent_membership`
--
ALTER TABLE `tenent_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
