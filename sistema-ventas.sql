-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2023 a las 06:43:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema-ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(30) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `cost_price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `item_type_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `admission_date` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `description`, `sale_price`, `cost_price`, `stock`, `item_type_id`, `supplier_id`, `admission_date`, `created_at`, `updated_at`) VALUES
(1, 'Leche Gloria', 4.00, 3.80, 18, 2, 1, '2023-11-01', '2023-11-30 15:24:03', '2023-12-10 23:20:20'),
(2, 'Leche Ideal Cremosita', 4.00, 3.80, 38, 2, 2, '2023-11-01', '2023-11-30 15:27:29', '2023-12-12 06:58:38'),
(3, 'Atun Filete A1', 4.80, 4.60, 0, 5, 3, '2023-12-01', '2023-12-09 08:23:16', '2023-12-09 08:38:55'),
(4, 'Atun Trozos A1', 4.80, 4.60, 0, 5, 3, '2023-01-31', '2023-12-09 08:27:56', '2023-12-09 08:39:06'),
(5, 'Leche Condensada Nestle', 5.00, 4.80, 0, 2, 1, '2023-12-01', '2023-12-09 08:28:44', '2023-12-09 08:28:44'),
(6, 'Atun Filete Gloria', 4.80, 4.60, 12, 5, 2, '2023-12-01', '2023-12-09 08:29:35', '2023-12-09 08:39:17'),
(7, 'Atun Trozos Gloria', 4.80, 4.60, 19, 5, 2, '2023-12-01', '2023-12-09 08:31:12', '2023-12-12 06:58:38'),
(8, 'Coca Cola 1L', 4.00, 3.80, 10, 1, 4, '2023-12-01', '2023-12-09 08:31:59', '2023-12-10 23:33:12'),
(9, 'Fanta 1L', 4.00, 3.80, 11, 1, 4, '2023-11-12', '2023-12-09 08:32:35', '2023-12-10 23:33:12'),
(10, 'Escocesa 1L', 5.00, 4.80, 0, 1, 4, '2023-12-01', '2023-12-09 08:33:04', '2023-12-09 08:48:09'),
(11, 'Inca Kola 1L', 4.00, 3.80, 24, 1, 4, '2023-12-01', '2023-12-09 08:34:49', '2023-12-09 08:48:17'),
(12, 'Tallarin Don Vitorio', 2.50, 2.30, 23, 4, 1, '2023-12-01', '2023-12-09 08:35:21', '2023-12-12 06:58:38'),
(13, 'Tallarin Nicolini', 2.40, 2.20, 20, 4, 2, '2023-11-15', '2023-12-09 09:26:30', '2023-12-09 09:26:30'),
(14, 'Cabello de Angel Nicolini', 2.00, 1.90, 25, 4, 2, '2023-11-11', '2023-12-09 09:27:21', '2023-12-09 09:27:21'),
(15, 'Fideos Municiones Lavaggi', 2.80, 2.60, 0, 4, 1, '2023-11-11', '2023-12-09 09:31:12', '2023-12-09 09:31:12'),
(16, 'Paneton Todinno 900g en caja', 24.50, 24.40, 37, 6, 4, '2023-12-02', '2023-12-09 09:41:51', '2023-12-15 04:04:55'),
(17, 'Paneton Gloria 900g en caja', 23.00, 22.90, 40, 6, 1, '2023-12-01', '2023-12-09 09:42:38', '2023-12-09 09:42:38'),
(18, 'Paneton Blanca Flor 900g en bo', 22.00, 21.90, 0, 6, 1, '2023-12-01', '2023-12-09 09:43:38', '2023-12-09 09:43:38'),
(19, 'Paneton Buon Natale 750g en bo', 18.00, 17.90, 0, 6, 1, '2023-12-02', '2023-12-09 09:44:34', '2023-12-09 09:44:34'),
(20, 'Paneton Bimbo 900g en bolsa', 20.00, 19.90, 23, 6, 2, '2023-12-03', '2023-12-09 09:45:24', '2023-12-12 06:58:38'),
(21, 'Lasagna Don Vitorio', 5.00, 4.80, 12, 4, 3, '2023-11-24', '2023-12-10 13:20:12', '2023-12-10 13:20:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Arequipa', '2023-11-30 09:38:33', '2023-11-30 09:38:33'),
(2, 'Lima', '2023-11-30 10:31:12', '2023-11-30 10:31:12'),
(3, 'Cusco', '2023-11-30 10:31:20', '2023-11-30 10:31:20'),
(4, 'Puno', '2023-12-09 09:38:09', '2023-12-09 09:38:09'),
(5, 'Tacna', '2023-12-09 09:38:17', '2023-12-09 09:38:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_number` varchar(15) NOT NULL,
  `document_type_id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(30) NOT NULL,
  `surnames` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `document_number`, `document_type_id`, `names`, `surnames`, `address`, `city_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '45484679', 1, 'Juan Luis', 'Perez Santos', 'Calle El Sol 526', 1, '956821456', '2023-11-30 13:42:36', '2023-11-30 13:55:38'),
(2, '45487596', 1, 'Luis Alberto', 'Gonzales Pastor', 'Av. El pardo 789', 1, '956978125', '2023-12-09 03:47:25', '2023-12-09 12:34:52'),
(4, '29548672', 1, 'Carlos Miguel', 'Castro Cifuentes', 'Av. El Cural 152', 1, '945786321', '2023-12-09 09:49:40', '2023-12-09 09:49:40'),
(5, '41454687', 1, 'Rodrigo Benito', 'Vargas Sotomayor', 'Urb. La Alameda G-5', 1, '945786221', '2023-12-09 09:50:23', '2023-12-09 09:50:23'),
(6, '04278564', 1, 'Laura Maria', 'Quintanilla Duarte', 'Av. Los Manzanos 456', 4, '954789512', '2023-12-09 11:28:46', '2023-12-09 11:28:46'),
(7, '02684579', 1, 'Jose Miguel', 'Encinas Manrique', 'Jr. Los Proceres 1254', 4, '945986784', '2023-12-09 11:29:31', '2023-12-09 11:29:31'),
(8, '15487935', 1, 'Alberto', 'Takahashi Lumbreras', 'Jr. La Union 456', 2, '945862742', '2023-12-09 11:30:22', '2023-12-09 11:30:22'),
(9, '15487623', 1, 'Lucio David', 'Machado Cornejo', 'Urb Las Peñas L-2', 2, '946978921', '2023-12-09 12:32:36', '2023-12-09 12:32:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `document_types`
--

INSERT INTO `document_types` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DNI', '2023-11-30 09:23:40', '2023-11-30 09:34:09'),
(2, 'RUC', '2023-11-30 10:19:58', '2023-11-30 10:19:58'),
(3, 'Pasaporte', '2023-12-09 09:37:22', '2023-12-09 09:37:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_types`
--

CREATE TABLE `item_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_type_description` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `item_types`
--

INSERT INTO `item_types` (`id`, `item_type_description`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', '2023-11-30 10:31:33', '2023-11-30 10:31:33'),
(2, 'Lacteos', '2023-11-30 10:31:41', '2023-11-30 10:31:41'),
(4, 'Pastas', '2023-11-30 10:32:08', '2023-11-30 10:32:08'),
(5, 'Conservas', '2023-12-09 08:21:19', '2023-12-09 08:21:19'),
(6, 'Reposteria y panaderia', '2023-12-09 09:40:15', '2023-12-09 09:40:15'),
(7, 'Carnes', '2023-12-10 22:01:29', '2023-12-10 22:01:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_29_012343_create_document_types_table', 1),
(7, '2023_11_29_013539_create_cities_table', 1),
(8, '2023_11_29_013550_create_item_types_table', 1),
(9, '2023_11_29_013608_create_way_to_pays_table', 1),
(10, '2023_11_29_013622_create_customers_table', 1),
(11, '2023_11_29_013632_create_suppliers_table', 1),
(12, '2023_11_29_013639_create_articles_table', 1),
(13, '2023_11_29_013646_create_sales_table', 1),
(14, '2023_11_29_013653_create_sale_details_table', 1),
(15, '2023_11_29_014000_create_refunds_table', 1),
(16, '2023_11_29_014044_create_refund_details_table', 1),
(17, '2023_12_09_153835_create_permission_tables', 1),
(18, '2023_12_09_161130_create_roles', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('emmyramosc@gmail.com', '$2y$12$SdZhOCplQkT5Mhbu7Pxx4usrZNSg9GSZ8VD347ZNePXLD1uqGDDki', '2023-12-13 04:49:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(2, 'articles.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(3, 'articles.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(4, 'articles.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(5, 'articles.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(6, 'articles.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(7, 'cities.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(8, 'cities.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(9, 'cities.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(10, 'cities.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(11, 'cities.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(12, 'customers.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(13, 'customers.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(14, 'customers.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(15, 'customers.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(16, 'customers.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(17, 'document-types.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(18, 'document-types.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(19, 'document-types.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(20, 'document-types.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(21, 'document-types.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(22, 'item-types.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(23, 'item-types.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(24, 'item-types.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(25, 'item-types.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(26, 'item-types.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(27, 'refunds.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(28, 'refunds.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(29, 'refunds.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(30, 'refunds.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(31, 'refunds.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(32, 'reportes.r1', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(33, 'reportes.r2', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(34, 'reportes.r3', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(35, 'reportes.r4', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(36, 'reportes.r5', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(37, 'reportes.r6', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(38, 'reportes.r7', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(39, 'reportes.r8', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(40, 'reportes.r9', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(41, 'reportes.r10', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(42, 'sales.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(43, 'sales.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(44, 'sales.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(45, 'sales.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(46, 'sales.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(47, 'suppliers.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(48, 'suppliers.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(49, 'suppliers.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(50, 'suppliers.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(51, 'suppliers.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(52, 'way-to-pays.index', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(53, 'way-to-pays.create', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(54, 'way-to-pays.edit', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(55, 'way-to-pays.show', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(56, 'way-to-pays.destroy', 'web', '2023-12-10 08:00:35', '2023-12-10 08:00:35'),
(57, 'sale/pdf/{sale}', 'web', '2023-12-13 02:31:47', '2023-12-13 02:31:47'),
(58, 'users.index', 'web', '2023-12-14 15:27:37', '2023-12-14 15:27:37'),
(59, 'users.create', 'web', '2023-12-14 15:27:37', '2023-12-14 15:27:37'),
(60, 'users.edit', 'web', '2023-12-14 15:27:37', '2023-12-14 15:27:37'),
(61, 'users.show', 'web', '2023-12-14 15:27:37', '2023-12-14 15:27:37'),
(62, 'users.destroy', 'web', '2023-12-14 15:27:37', '2023-12-14 15:27:37'),
(63, 'api_articulos', 'web', '2023-12-15 02:53:58', '2023-12-15 02:53:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_date` varchar(15) NOT NULL,
  `way_to_pay_id` bigint(20) UNSIGNED NOT NULL,
  `total_refund` decimal(10,2) NOT NULL,
  `igv` decimal(10,2) NOT NULL,
  `motive` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refund_details`
--

CREATE TABLE `refund_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refund_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-12-10 07:33:04', '2023-12-10 07:33:04'),
(2, 'vendedor', 'web', '2023-12-10 07:33:04', '2023-12-10 07:33:04'),
(3, 'cliente', 'web', '2023-12-10 07:33:04', '2023-12-10 07:33:04'),
(4, 'invitado', 'web', '2023-12-10 07:33:05', '2023-12-10 07:33:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(27, 2),
(27, 3),
(28, 1),
(28, 2),
(28, 3),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(30, 3),
(31, 1),
(31, 2),
(31, 3),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(42, 3),
(43, 1),
(43, 2),
(43, 3),
(44, 1),
(44, 2),
(44, 3),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 2),
(46, 3),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(57, 2),
(57, 3),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_date` varchar(15) NOT NULL,
  `way_to_pay_id` bigint(20) UNSIGNED NOT NULL,
  `total_invoice` decimal(10,2) NOT NULL,
  `igv` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `customer_id`, `user_id`, `invoice_date`, `way_to_pay_id`, `total_invoice`, `igv`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-11-10', 1, 9.44, 1.44, '2023-11-30 15:43:52', '2023-11-30 15:43:52'),
(2, 5, 2, '2023-11-27', 4, 10.38, 1.58, '2023-11-28 08:07:10', '2023-11-28 08:07:10'),
(3, 2, 3, '2023-11-27', 5, 11.80, 1.80, '2023-11-28 08:07:10', '2023-11-28 08:07:10'),
(6, 7, 1, '2023-12-10', 1, 42.48, 6.48, '2023-12-10 22:31:27', '2023-12-10 22:31:27'),
(7, 6, 1, '2023-12-10', 1, 20.77, 3.17, '2023-12-10 22:37:08', '2023-12-10 22:37:08'),
(8, 1, 1, '2023-12-10', 4, 20.77, 3.17, '2023-12-10 22:44:24', '2023-12-10 22:44:24'),
(9, 8, 1, '2023-12-15', 5, 2.83, 0.43, '2023-12-10 22:45:24', '2023-12-10 22:45:24'),
(10, 1, 1, '2023-12-10', 1, 23.60, 3.60, '2023-12-10 23:19:45', '2023-12-10 23:19:45'),
(11, 6, 1, '2023-12-10', 5, 9.44, 1.44, '2023-12-10 23:20:20', '2023-12-10 23:20:20'),
(12, 5, 1, '2023-12-10', 1, 14.16, 2.16, '2023-12-10 23:33:12', '2023-12-10 23:33:12'),
(13, 4, 1, '2023-12-11', 2, 68.20, 10.40, '2023-12-12 06:58:37', '2023-12-12 06:58:37'),
(14, 4, 1, '2023-12-14', 1, 86.73, 13.23, '2023-12-15 04:04:55', '2023-12-15 04:04:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sale_details`
--

INSERT INTO `sale_details` (`id`, `sale_id`, `article_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 4, '2023-11-27 08:04:41', '2023-11-27 08:04:41'),
(2, 1, 2, 1, 4, '2023-11-27 08:04:41', '2023-11-27 08:04:41'),
(3, 2, 7, 1, 5, '2023-11-28 08:10:06', '2023-11-28 08:10:06'),
(4, 2, 8, 1, 4, '2023-11-28 08:10:06', '2023-11-28 08:10:06'),
(5, 3, 11, 2, 4, '2023-11-28 08:12:16', '2023-11-28 08:12:16'),
(7, 3, 14, 1, 2, '2023-11-28 08:23:00', '2023-11-28 08:23:00'),
(8, 6, 1, 9, 4, '2023-12-10 22:31:27', '2023-12-10 22:31:27'),
(9, 7, 6, 2, 5, '2023-12-10 22:37:08', '2023-12-10 22:37:08'),
(10, 7, 11, 2, 4, '2023-12-10 22:37:09', '2023-12-10 22:37:09'),
(11, 8, 8, 2, 4, '2023-12-10 22:44:24', '2023-12-10 22:44:24'),
(12, 8, 13, 4, 2, '2023-12-10 22:44:24', '2023-12-10 22:44:24'),
(13, 9, 13, 1, 2, '2023-12-10 22:45:24', '2023-12-10 22:45:24'),
(14, 10, 1, 5, 4, '2023-12-10 23:19:46', '2023-12-10 23:19:46'),
(15, 11, 1, 2, 4, '2023-12-10 23:20:20', '2023-12-10 23:20:20'),
(16, 12, 8, 2, 4, '2023-12-10 23:33:12', '2023-12-10 23:33:12'),
(17, 12, 9, 1, 4, '2023-12-10 23:33:12', '2023-12-10 23:33:12'),
(18, 13, 2, 2, 4, '2023-12-12 06:58:38', '2023-12-12 06:58:38'),
(19, 13, 7, 1, 5, '2023-12-12 06:58:38', '2023-12-12 06:58:38'),
(20, 13, 12, 2, 3, '2023-12-12 06:58:38', '2023-12-12 06:58:38'),
(21, 13, 20, 2, 20, '2023-12-12 06:58:38', '2023-12-12 06:58:38'),
(22, 14, 16, 3, 25, '2023-12-15 04:04:55', '2023-12-15 04:04:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_number` varchar(20) NOT NULL,
  `document_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `tradename` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`id`, `document_number`, `document_type_id`, `name`, `surname`, `tradename`, `address`, `city_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '20451278452', 2, 'Luis', 'Vargas Fernandez', 'Alicorp', 'Av. Industrial 1234', 1, '965842357', '2023-11-30 14:53:32', '2023-11-30 14:53:32'),
(2, '20154648523', 2, 'Juan', 'Dominguez', 'Distribuidora Alimentaria', 'Av. Los Incas 1500', 1, '986521475', '2023-12-09 08:36:59', '2023-12-09 08:36:59'),
(3, '20458975462', 2, 'Alfredo', 'Gutierrez Pinto', 'Palmira Distribuciones', 'Av. Colón 1250. Paucarpata', 1, '986752412', '2023-12-09 08:38:01', '2023-12-09 08:38:01'),
(4, '20254678951', 2, 'Katia', 'Alacon Fuentes', 'Distribuidora Katita', 'Av. Los Incas 1520', 1, '965845123', '2023-12-09 08:41:05', '2023-12-09 08:41:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emma Edith Ramos Calcina', 'emmyramosc@gmail.com', NULL, '$2y$12$GYFL3AXGvC96J6GcLWDNNuOdXrCOu9mQPsoX6sg5U4aWji4QcnOcW', 'rl5f71AErDTOW9sQLyE38AkTPMaMSErEhgE5LQvOhAIj9IApa3Oy4cvkZVez', '2023-12-10 07:47:51', '2023-12-10 07:47:51'),
(2, 'Yampier Anchante Macedo', 'yamanchante@gmail.com', NULL, '$2y$12$9UaNga0NOyvMmZXkiZ.6ze9BswvOKgVbB0vdGIpVtmRbZpXILw/u6', NULL, '2023-12-10 07:48:28', '2023-12-10 07:48:28'),
(3, 'Hugo Vasquez', 'hugovasquez@gmail.com', NULL, '$2y$12$NltXT0IHqntNv2xq63oKz.ZQItQuGlZJb2aPnb1AP6ZORujVuo/uK', NULL, '2023-12-10 07:48:54', '2023-12-10 07:48:54'),
(4, 'Luis Mendoza', 'luismendoza@gmail.com', NULL, '$2y$12$BzVOemVbD3I4Ff15VwaLI.evFxFqcsOYR1/gFbD0xImxuCpKRE1Be', NULL, '2023-12-10 07:49:18', '2023-12-10 07:49:18'),
(5, 'Manuel Perez', 'mperez@gmail.com', NULL, '$2y$12$LtVSVaG7LRPn5UlPLbU/hOEq0JXNgH3.vJXDo3.vmhH.oR7AF5LWu', NULL, '2023-12-14 10:04:25', '2023-12-14 10:04:25'),
(6, 'admin', 'admin@gmail.com', NULL, '$2y$12$nsru46aWeMEZ/VTBlY/HjODeboegWy2K2HbIYrMY6Py7/07pqS2p6', NULL, '2023-12-15 05:37:27', '2023-12-15 05:37:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `way_to_pays`
--

CREATE TABLE `way_to_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `way_to_pay_description` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `way_to_pays`
--

INSERT INTO `way_to_pays` (`id`, `way_to_pay_description`, `created_at`, `updated_at`) VALUES
(1, 'Efectivo', '2023-11-30 10:32:22', '2023-11-30 10:32:22'),
(2, 'Tarjeta de débito', '2023-11-30 10:33:15', '2023-11-30 10:33:15'),
(3, 'Tarjeta de crédito', '2023-11-30 10:33:26', '2023-11-30 10:33:26'),
(4, 'Yape', '2023-12-09 10:17:16', '2023-12-09 10:17:16'),
(5, 'Plin', '2023-12-09 10:17:25', '2023-12-09 10:17:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_description_unique` (`description`),
  ADD KEY `articles_item_type_id_foreign` (`item_type_id`),
  ADD KEY `articles_supplier_id_foreign` (`supplier_id`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_city_name_unique` (`city_name`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_document_number_unique` (`document_number`),
  ADD KEY `customers_document_type_id_foreign` (`document_type_id`),
  ADD KEY `customers_city_id_foreign` (`city_id`);

--
-- Indices de la tabla `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_types_description_unique` (`description`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `item_types`
--
ALTER TABLE `item_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_types_item_type_description_unique` (`item_type_description`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refunds_sale_id_foreign` (`sale_id`),
  ADD KEY `refunds_customer_id_foreign` (`customer_id`),
  ADD KEY `refunds_user_id_foreign` (`user_id`),
  ADD KEY `refunds_way_to_pay_id_foreign` (`way_to_pay_id`);

--
-- Indices de la tabla `refund_details`
--
ALTER TABLE `refund_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refund_details_refund_id_foreign` (`refund_id`),
  ADD KEY `refund_details_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_customer_id_foreign` (`customer_id`),
  ADD KEY `sales_user_id_foreign` (`user_id`),
  ADD KEY `sales_way_to_pay_id_foreign` (`way_to_pay_id`);

--
-- Indices de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_details_sale_id_foreign` (`sale_id`),
  ADD KEY `sale_details_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_document_number_unique` (`document_number`),
  ADD KEY `suppliers_document_type_id_foreign` (`document_type_id`),
  ADD KEY `suppliers_city_id_foreign` (`city_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `way_to_pays`
--
ALTER TABLE `way_to_pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `way_to_pays_way_to_pay_description_unique` (`way_to_pay_description`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_types`
--
ALTER TABLE `item_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refund_details`
--
ALTER TABLE `refund_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `way_to_pays`
--
ALTER TABLE `way_to_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_item_type_id_foreign` FOREIGN KEY (`item_type_id`) REFERENCES `item_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refunds_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refunds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refunds_way_to_pay_id_foreign` FOREIGN KEY (`way_to_pay_id`) REFERENCES `way_to_pays` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `refund_details`
--
ALTER TABLE `refund_details`
  ADD CONSTRAINT `refund_details_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refund_details_refund_id_foreign` FOREIGN KEY (`refund_id`) REFERENCES `refunds` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_way_to_pay_id_foreign` FOREIGN KEY (`way_to_pay_id`) REFERENCES `way_to_pays` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD CONSTRAINT `sale_details_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
