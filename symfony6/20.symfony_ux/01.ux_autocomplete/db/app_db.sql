-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 12-07-2022 a las 07:06:04
-- Versión del servidor: 8.0.20
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choix`
--

CREATE TABLE `choix` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `choix`
--

INSERT INTO `choix` (`id`, `name`) VALUES
(35076, 'Alix Lagarde'),
(35077, 'André Carre'),
(35078, 'Franck Lamy'),
(35079, 'Joseph Leroux'),
(35080, 'Laurent Schmitt'),
(35081, 'Philippe Olivier'),
(35082, 'Yves Raynaud'),
(35083, 'Maurice-Théodore Ferreira'),
(35084, 'Tristan Berthelot'),
(35085, 'Jeannine Renard');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multiple`
--

CREATE TABLE `multiple` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `multiple`
--

INSERT INTO `multiple` (`id`, `name`) VALUES
(1, 'sdfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multiple_choix`
--

CREATE TABLE `multiple_choix` (
  `multiple_id` int NOT NULL,
  `choix_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `multiple_choix`
--

INSERT INTO `multiple_choix` (`multiple_id`, `choix_id`) VALUES
(1, 35077),
(1, 35080);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simple`
--

CREATE TABLE `simple` (
  `id` int NOT NULL,
  `choix_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `simple`
--

INSERT INTO `simple` (`id`, `choix_id`, `name`) VALUES
(1, 35077, 'fgh');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multiple_choix`
--
ALTER TABLE `multiple_choix`
  ADD PRIMARY KEY (`multiple_id`,`choix_id`),
  ADD KEY `IDX_D9CDBEADAEDC4C7D` (`multiple_id`),
  ADD KEY `IDX_D9CDBEADD9144651` (`choix_id`);

--
-- Indices de la tabla `simple`
--
ALTER TABLE `simple`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C17B3D02D9144651` (`choix_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `choix`
--
ALTER TABLE `choix`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35086;

--
-- AUTO_INCREMENT de la tabla `multiple`
--
ALTER TABLE `multiple`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `simple`
--
ALTER TABLE `simple`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `multiple_choix`
--
ALTER TABLE `multiple_choix`
  ADD CONSTRAINT `FK_D9CDBEADAEDC4C7D` FOREIGN KEY (`multiple_id`) REFERENCES `multiple` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D9CDBEADD9144651` FOREIGN KEY (`choix_id`) REFERENCES `choix` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `simple`
--
ALTER TABLE `simple`
  ADD CONSTRAINT `FK_C17B3D02D9144651` FOREIGN KEY (`choix_id`) REFERENCES `choix` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
