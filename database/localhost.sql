-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 22-11-2019 a las 22:01:39
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huellero`
--
CREATE DATABASE IF NOT EXISTS `huellero` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `huellero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alert`
--

CREATE TABLE `alert` (
  `Id_time` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `h_entry` time DEFAULT NULL,
  `h_departure` time DEFAULT NULL,
  `h_d_lunch` time DEFAULT NULL,
  `h_e_lunch` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alert`
--

INSERT INTO `alert` (`Id_time`, `id`, `h_entry`, `h_departure`, `h_d_lunch`, `h_e_lunch`) VALUES
(1, 121, '07:00:00', '17:00:00', NULL, NULL),
(2, 138, '08:00:00', '12:00:00', NULL, NULL),
(3, 139, '09:00:00', '16:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `Id_equipo` int(11) NOT NULL,
  `nombre_equipo` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`Id_equipo`, `nombre_equipo`, `hora_entrada`, `hora_salida`) VALUES
(1, 'Colocolo', '00:00:00', '17:00:00'),
(2, 'Lions', '00:00:00', '17:00:00'),
(3, 'Margay', '00:00:00', '17:00:00'),
(4, 'Geofrray', '00:00:00', '17:00:00'),
(5, 'Cheetah', '00:00:00', '17:00:00'),
(6, 'Ligers', '00:00:00', '17:00:00'),
(7, 'Puma', '00:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Id_fecha` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `entry_time` time DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Id_fecha`, `Fecha`, `entry_time`, `departure_time`, `id`) VALUES
(15, '2019-11-20', '10:37:56', '11:23:09', 138),
(16, '2019-11-20', '11:23:30', '11:23:32', 138),
(17, '2019-11-20', '11:23:34', '11:31:27', 138),
(18, '2019-11-09', '11:28:08', '11:28:10', 121),
(19, '2019-11-10', '11:28:11', '11:28:13', 121),
(20, '2019-11-11', '11:28:15', '11:28:56', 121),
(21, '2019-11-12', '11:28:57', '11:28:58', 121),
(22, '2019-11-13', '11:28:59', '11:28:59', 121),
(23, '2019-11-14', '11:28:59', '11:29:00', 121),
(24, '2019-11-15', '11:29:00', '11:29:10', 121),
(25, '2019-11-16', '11:29:20', '11:29:20', 121),
(26, '2019-11-17', '11:29:28', '11:30:05', 121),
(27, '2019-11-18', '11:30:07', '11:30:08', 121),
(28, '2019-11-19', '11:30:08', '11:30:09', 121),
(29, '2019-11-20', '11:30:10', '13:05:54', 121),
(30, '2019-11-20', '11:30:30', '11:30:32', 139),
(31, '2019-11-20', '11:30:33', '11:30:34', 139),
(32, '2019-11-20', '11:30:35', '11:30:36', 139),
(33, '2019-11-20', '11:30:36', '11:30:37', 139),
(34, '2019-11-20', '11:30:37', '11:30:42', 139),
(35, '2019-11-20', '11:30:43', '11:30:46', 139),
(36, '2019-11-20', '11:30:47', '11:30:48', 139),
(37, '2019-11-20', '11:30:49', '11:30:51', 139),
(38, '2019-11-20', '11:31:28', '11:31:29', 138),
(39, '2019-11-20', '11:31:33', '11:31:34', 138),
(40, '2019-11-20', '11:31:35', '11:31:35', 138),
(41, '2019-11-20', '11:31:36', '11:31:37', 138),
(42, '2019-11-20', '11:31:38', '11:31:40', 138),
(43, '2019-11-20', '11:31:41', '11:31:42', 138),
(44, '2019-11-20', '11:31:43', '11:31:59', 138),
(45, '2019-11-20', '11:32:00', '11:32:04', 138),
(46, '2019-11-20', '11:32:39', '11:32:40', 138),
(47, '2019-11-20', '11:34:25', '11:34:29', 138),
(48, '2019-11-20', '11:34:32', '11:34:33', 138),
(49, '2019-11-20', '11:34:34', '11:34:35', 138),
(50, '2019-11-20', '11:34:37', '11:36:51', 138),
(51, '2019-11-20', '11:34:38', '11:34:40', 139),
(52, '2019-11-20', '11:34:40', '11:34:41', 139),
(53, '2019-11-20', '11:34:45', '11:34:46', 139),
(54, '2019-11-20', '11:34:47', '11:34:48', 139),
(55, '2019-11-20', '11:34:49', '11:35:49', 139),
(56, '2019-11-20', '11:35:51', '11:35:51', 139),
(57, '2019-11-20', '11:35:52', '11:35:53', 139),
(58, '2019-11-20', '11:35:54', '11:35:54', 139),
(59, '2019-11-20', '11:35:56', NULL, 139),
(60, '2019-11-20', '11:36:53', '11:36:54', 138),
(61, '2019-11-20', '11:36:55', '11:36:55', 138),
(62, '2019-11-20', '11:36:56', '11:36:57', 138),
(63, '2019-11-20', '11:36:58', NULL, 138),
(64, '2019-11-20', '13:13:20', '14:53:13', 121),
(65, '2019-11-22', '11:30:35', '11:44:29', 121),
(66, '2019-11-22', '11:51:19', '11:54:43', 138),
(67, '2019-11-22', '11:53:41', '12:07:34', 121),
(68, '2019-11-22', '12:08:19', '12:14:45', 138),
(69, '2019-11-22', '12:37:45', '12:39:40', 138),
(70, '2019-11-22', '12:37:50', NULL, 121),
(71, '2019-11-22', '13:15:51', '13:16:46', 138),
(72, '2019-11-22', '13:21:57', '13:28:19', 138),
(73, '2019-11-22', '14:46:14', '14:54:12', 138),
(74, '2019-11-22', '14:54:36', '15:08:47', 138),
(75, '2019-11-22', '14:55:55', NULL, 139),
(76, '2019-11-22', '15:12:03', '15:33:30', 138);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usu` varchar(255) DEFAULT NULL,
  `huella` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `Id_equipo` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` char(2) NOT NULL,
  `admini` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usu`, `huella`, `contrasena`, `Id_equipo`, `correo`, `fecha`, `estado`, `admini`) VALUES
(121, 'Jesus Becerra ', '1234', '1234', 1, 'becerra.jesusantonio@gmail.com', '2019-11-19 19:55:33', 'Si', 'No'),
(138, 'Jesus Becerra R', '12345', '12345', 1, 'jesus.becerra@wiedii.co', '2019-11-19 20:46:09', 'Si', 'No'),
(139, 'yorluis', '123', '123', 1, 'yorluis.vega@wiedii.co', '2019-11-19 20:50:15', 'Si', 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`Id_time`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`Id_equipo`),
  ADD UNIQUE KEY `nombre_equipo` (`nombre_equipo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id_fecha`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `huella` (`huella`),
  ADD KEY `id_equipo` (`Id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alert`
--
ALTER TABLE `alert`
  MODIFY `Id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `Id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Id_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `alert_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_equipo`) REFERENCES `equipos` (`Id_equipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
