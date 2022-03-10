-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2022 a las 12:19:40
-- Versión del servidor: 10.5.12-MariaDB-0+deb11u1
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: "prestashop"
--

CREATE DATABASE IF NOT EXISTS `prestashop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;



--
-- Base de datos: `a20davidvg`
--

CREATE DATABASE IF NOT EXISTS `a20davidvg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a20davidvg`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Titulo del evento',
  `enlace` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Enlace al archivo',
  `descripcion` varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Descripción del archivo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `cliente_id`, `titulo`, `enlace`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 5, 'D.', NULL, 'Quod rerum voluptas adipisci sit deleniti. Et in itaque non officiis dolor fuga. Fugit ab voluptas est nesciunt. Iste dolorem placeat earum dignissimos quisquam aut. Eos incidunt molestiae sint.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(2, 3, 'D.', NULL, 'Tempore voluptatum nesciunt illo beatae atque voluptatem velit. Quia architecto incidunt cumque error. Sint sit doloremque magni veniam ut.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(3, 3, 'Dña', NULL, 'Dignissimos ab modi saepe ducimus. Numquam sequi et enim aliquam dolorem saepe. Est est nobis possimus non rerum dolorum qui. Assumenda cupiditate repellat suscipit corporis.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(6, 5, 'Ing.', NULL, 'Voluptas odio sit voluptatem consequatur autem. Enim ratione autem ipsam. Quae ad ipsum voluptate consequatur. Officia accusamus et minus. Consequuntur ea ea molestiae dicta voluptate minus.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(7, 5, 'Ing.', NULL, 'Non repellat temporibus sit qui magni voluptas. Id atque eos beatae et. Eum nihil ipsum nulla aut nulla sit. Distinctio ratione qui rerum.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(8, 2, 'Ing.', NULL, 'Optio earum repellat blanditiis aut. Reiciendis eveniet provident et error sed alias sint. Dicta aut quia voluptatem quas soluta temporibus.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(10, 4, 'Srta.', NULL, 'Culpa est consectetur ut qui nihil. Suscipit quia soluta rerum sunt ad corporis quia exercitationem. Sed nobis illo ut cumque qui.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(14, 3, 'Lic.', NULL, 'Fugit soluta recusandae placeat et quas non. Aut officiis quisquam velit et sed autem. Et dolorum voluptatem ut tenetur. Quo sed non qui velit et.', '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(18, 1, '5645646', 'files/4HiNwiIbxSFYPSHWFhsicRdRVnDHbXxLHXH0cf2V.zip', '45645', '2022-02-25 10:58:06', '2022-02-25 10:58:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `usuario`, `apellidos`, `email`, `telefono`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Javier Aguilera', 'alejandra14', 'Antonio', 'carrillo.ona@example.com', '922-548260', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd3Urw54JEz', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(2, 'José Antonio Córdova', 'montenegro.yeray', 'Jan', 'ismael.avila@example.net', '928 259847', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd7tFBk4Asa', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(3, 'Enrique Ramírez', 'candela.saavedra', 'Luis', 'kespinoza@example.net', '+34 903-774557', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GFFVU1vKv7', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(4, 'Unai Cuellar', 'berrios.malak', 'Guillem', 'vaca.laia@example.com', '+34 982 634717', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dI4P2RnUBe', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(5, 'Hugo Ávalos', 'puig.elsa', 'Emilia', 'javier.tejeda@example.com', '902758917', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gAd6rME2pN', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(66, '2014_10_12_000000_create_users_table', 1),
(67, '2014_10_12_100000_create_password_resets_table', 1),
(68, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(69, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(70, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(71, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(72, '2016_06_01_000004_create_oauth_clients_table', 1),
(73, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(74, '2019_08_19_000000_create_failed_jobs_table', 1),
(75, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(76, '2022_02_07_105312_create_sessions_table', 1),
(77, '2022_02_17_194711_create_clientes_table', 1),
(78, '2022_02_17_200613_create_table_archivos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('davidvgptr@gmail.com', '$2y$10$6nzsGAF950DJcNyBC1xQDOP2k4SM.uWsNl9OJzsEA201OnhRQ57z2', '2022-02-25 10:02:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2VchIHxlS76H7ogEqVIl0xrZeAzOpET4wLz0iH3i', NULL, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkl0SG5oQzhTMHI2UW9KS1BKUmdwRm9zbzd3emF3MXZQWDh2WjRkUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbS9hcmNoaXZvcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646479082),
('aOI0P9gQcIhJcpJiDJ8YcvF97bWiuPpZY2Jtmv8L', NULL, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblU2U29YaFlhMVRWTTVnTTZaemtxOFpOcE90MTdUNmVxZmdISktPSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646408818),
('dFiEpKlsYQNhcN3vYE8Zgp4bdY3WZmqRkd2KAlYR', NULL, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjU0YlkzUFVsa3h0UzFxYkVXZXVIUERaT2xUY0dqNnk1OUpEdmJGVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646421059),
('DrmT4u6f7fJYE71tRwkbnCLruij1g78wvaWdSiuv', NULL, '178.60.195.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUNqNG94MUNzWnNjWU9obHg2VDdHdWxZbG5YNUVUVlBpNUQ1M243UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646381559),
('FbsktHyWcLLJehMjCEsbqVCqsypGGQibhMj3ADNI', NULL, '212.142.160.70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDBLdllNaW8wMnFuQm5FN2NlS2I1QTE2bzhpdzFqenZubE1MR1RUSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646382032),
('GcxH1LUJJbW2MRycSwu6I8BnszQ7H7DYWpvi4lF9', NULL, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXJXU2VnQjNOekdWNU9kWFB2eUd1OWdibXRSZ2E4ZHhWeDBhejJ6dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646411184),
('Hy17FLuwwgi0t8JKaFZOcRMmf771mkdBnKjkUpko', NULL, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVRtaU0xSThVcDlpWEtSVG1BSDhJeEw0cnQ0aDNNZVluQXlPczFHYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hMjBkYXZpZHZnLmtvem93LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646408818),
('x7xsdNUTP2OWPDqU7UzrfahSxLSEF6XgdT8pkUuZ', 3, '37.132.31.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibllTV2FiekNQTlIxUjhxM0swbEtjNkUyODZURzJxQUV3Qk1aSTJkdCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vYTIwZGF2aWR2Zy5rb3pvdy5jb20vdXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTY0NjM4MjAzNjt9czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRLUU01VzB2NW15VmxINk5ORmhLR0YuT0NOTnFzSHpwM085OEVWUXpYSzQ1VS8xYUt1eTZleSI7fQ==', 1646382566);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `usuario`, `apellidos`, `email`, `telefono`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Marina Crespo Hijo', 'icastillo', 'África', 'macias.isaac@example.net', '+34 953 986883', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'FQraJ5fGId', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(2, 'Mateo Vergara', 'yago88', 'Asier', 'alberto07@example.net', '+34 923 625278', '2022-02-17 19:19:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'JLsstdiTAt', NULL, NULL, '2022-02-17 19:19:18', '2022-02-17 19:19:18'),
(3, 'David', 'dvgportor', 'Villaverde', 'davidvgptr@gmail.com', '644405058', NULL, '$2y$10$KQM5W0v5myVlH6NNFhKGF.OCNNqsHzp3O98EVQzXK45U/1aKuy6ey', NULL, NULL, NULL, NULL, NULL, '2022-02-17 19:20:09', '2022-02-17 19:20:09'),
(4, 'EL CASPAS', 'Caspita', 'SI', 'caspa007@gmail.com', '952673453', NULL, '$2y$10$VZr0ziyijpacGE.YPRdhJ.KIqR4dEZ6HT.vvuaLb4snWQsHt3CWO6', NULL, NULL, NULL, NULL, NULL, '2022-02-22 01:10:45', '2022-02-22 01:10:45'),
(5, 'aasdasd', 'asdas', 'asda', 'a@a.com', '4354353', NULL, '$2y$10$Eh4FuzXlXT92jLZpWs8LL.v4iWR66UDpiJLCLfSMvDV/ODhhMhcJq', NULL, NULL, NULL, NULL, NULL, '2022-02-22 10:03:28', '2022-02-22 10:03:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `archivos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
