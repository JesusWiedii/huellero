-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-11-2019 a las 21:24:37
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
(1, 'Colocolo', '13:00:00', '17:00:00'),
(2, 'Lions', '09:00:00', '17:00:00'),
(3, 'Margay', '07:00:00', '17:00:00'),
(4, 'Geofrray', '07:00:00', '17:00:00'),
(5, 'Cheetah', '07:00:00', '17:00:00'),
(6, 'Ligers', '07:00:00', '17:00:00'),
(7, 'Puma', '07:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usu` varchar(255) DEFAULT NULL,
  `huella` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `Id_equipo` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` char(2) NOT NULL,
  `admin` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usu`, `huella`, `contraseña`, `Id_equipo`, `correo`, `fecha`, `estado`, `admin`) VALUES
(113, 'dscadsVZCV', '3423', '', 2, 'holi', '2019-11-14 14:17:45', 'Si', ''),
(115, 'fadf', '31243576', '', 1, 'dsafa', '2019-11-14 20:06:19', 'Si', ''),
(116, 'dafd5', '1234', '', 4, 'fqwerwe', '2019-11-14 20:24:51', 'Si', ''),
(117, 'dscadsVZCV', '123', '', 1, 'dsafa', '2019-11-14 20:44:05', 'Si', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`Id_equipo`),
  ADD UNIQUE KEY `nombre_equipo` (`nombre_equipo`);

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
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `Id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_equipo`) REFERENCES `equipos` (`Id_equipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
