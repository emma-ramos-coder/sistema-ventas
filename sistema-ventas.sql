-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2023 a las 07:35:11
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `description`, `sale_price`, `cost_price`, `stock`, `item_type_id`, `supplier_id`, `admission_date`, `created_at`, `updated_at`) VALUES
(1, 'Leche Gloria', 4.00, 3.80, 25, 2, 1, '2023-11-01', '2023-11-30 10:24:03', '2023-11-30 10:24:03'),
(2, 'Leche Ideal Cremosita', 4.00, 3.80, 40, 2, 1, '2023-11-01', '2023-11-30 10:27:29', '2023-11-30 10:27:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Arequipa', '2023-11-30 04:38:33', '2023-11-30 04:38:33'),
(2, 'Lima', '2023-11-30 05:31:12', '2023-11-30 05:31:12'),
(3, 'Cusco', '2023-11-30 05:31:20', '2023-11-30 05:31:20');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `document_number`, `document_type_id`, `names`, `surnames`, `address`, `city_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '45484679', 1, 'Juan Luis', 'Perez Santos', 'Calle El Sol 526', 1, '956821456', '2023-11-30 08:42:36', '2023-11-30 08:55:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `document_types`
--

INSERT INTO `document_types` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DNI', '2023-11-30 04:23:40', '2023-11-30 04:34:09'),
(2, 'RUC', '2023-11-30 05:19:58', '2023-11-30 05:19:58');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_types`
--

CREATE TABLE `item_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_type_description` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `item_types`
--

INSERT INTO `item_types` (`id`, `item_type_description`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', '2023-11-30 05:31:33', '2023-11-30 05:31:33'),
(2, 'Lacteos', '2023-11-30 05:31:41', '2023-11-30 05:31:41'),
(4, 'Pastas', '2023-11-30 05:32:08', '2023-11-30 05:32:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_29_012343_create_document_types_table', 1),
(6, '2023_11_29_013539_create_cities_table', 1),
(7, '2023_11_29_013550_create_item_types_table', 1),
(8, '2023_11_29_013608_create_way_to_pays_table', 1),
(9, '2023_11_29_013622_create_customers_table', 1),
(10, '2023_11_29_013632_create_suppliers_table', 1),
(11, '2023_11_29_013639_create_articles_table', 1),
(12, '2023_11_29_013646_create_sales_table', 1),
(13, '2023_11_29_013653_create_sale_details_table', 2),
(14, '2023_11_29_014000_create_refunds_table', 3),
(15, '2023_11_29_014044_create_refund_details_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `motive` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `customer_id`, `user_id`, `invoice_date`, `way_to_pay_id`, `total_invoice`, `igv`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-11-10', 1, 8.00, 1.44, '2023-11-30 10:43:52', '2023-11-30 10:43:52');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`id`, `document_number`, `document_type_id`, `name`, `surname`, `tradename`, `address`, `city_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '20451278452', 2, 'Luis', 'Vargas Fernandez', 'Alicorp', 'Av. Industrial 1234', 1, '965842357', '2023-11-30 09:53:32', '2023-11-30 09:53:32');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emma Edith Ramos Calcina', 'emmyramosc@gmail.com', NULL, '$2y$12$b06BFnUA5xaJ.ONs.ePL0O5r/40ZbetqkJkp5iqcOiG/YoSvmht2.', NULL, '2023-11-30 02:47:36', '2023-11-30 02:47:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `way_to_pays`
--

CREATE TABLE `way_to_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `way_to_pay_description` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `way_to_pays`
--

INSERT INTO `way_to_pays` (`id`, `way_to_pay_description`, `created_at`, `updated_at`) VALUES
(1, 'Efectivo', '2023-11-30 05:32:22', '2023-11-30 05:32:22'),
(2, 'Tarjeta de débito', '2023-11-30 05:33:15', '2023-11-30 05:33:15'),
(3, 'Tarjeta de crédito', '2023-11-30 05:33:26', '2023-11-30 05:33:26');

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_types`
--
ALTER TABLE `item_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `way_to_pays`
--
ALTER TABLE `way_to_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
