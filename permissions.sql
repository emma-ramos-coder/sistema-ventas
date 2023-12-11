-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2023 a las 04:04:12
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
(2, 'articles.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'articles.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(4, 'articles.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(5, 'articles.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(6, 'articles.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(7, 'cities.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(8, 'cities.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(9, 'cities.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(10, 'cities.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(11, 'cities.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(12, 'customers.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(13, 'customers.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(14, 'customers.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(15, 'customers.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(16, 'customers.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(17, 'document-types.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(18, 'document-types.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(19, 'document-types.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(20, 'document-types.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(21, 'document-types.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(22, 'item-types.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(23, 'item-types.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(24, 'item-types.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(25, 'item-types.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(26, 'item-types.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(27, 'refunds.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(28, 'refunds.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(29, 'refunds.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(30, 'refunds.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(31, 'refunds.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(32, 'reportes.r1', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(33, 'reportes.r2', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(34, 'reportes.r3', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(35, 'reportes.r4', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(36, 'reportes.r5', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(37, 'reportes.r6', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(38, 'reportes.r7', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(39, 'reportes.r8', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(40, 'reportes.r9', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(41, 'reportes.r10', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(42, 'sales.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(43, 'sales.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(44, 'sales.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(45, 'sales.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(46, 'sales.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(47, 'suppliers.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(48, 'suppliers.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(49, 'suppliers.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(50, 'suppliers.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(51, 'suppliers.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(52, 'way-to-pays.index', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(53, 'way-to-pays.create', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(54, 'way-to-pays.edit', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(55, 'way-to-pays.show', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35'),
(56, 'way-to-pays.destroy', 'web', '2023-12-10 03:00:35', '2023-12-10 03:00:35');










