-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 12-07-2022 a las 08:15:02
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
-- Estructura de tabla para la tabla `daily_result`
--

CREATE TABLE `daily_result` (
  `id` int NOT NULL,
  `date` datetime NOT NULL,
  `value` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daily_result`
--

INSERT INTO `daily_result` (`id`, `date`, `value`) VALUES
(1, '2017-01-01 00:00:00', 345),
(2, '2018-01-01 00:00:00', 34),
(3, '2019-01-01 00:00:00', 77),
(4, '2020-01-01 00:00:00', 54),
(5, '2021-01-01 00:00:00', 67),
(6, '2022-01-01 00:00:00', 33);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `daily_result`
--
ALTER TABLE `daily_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `daily_result`
--
ALTER TABLE `daily_result`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
