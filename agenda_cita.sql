-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2021 a las 16:22:47
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda_cita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(4) NOT NULL,
  `id_expositor` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `id_expositor`, `fecha`, `id_usuario`) VALUES
(1, 1, '2021-05-04', 2),
(2, 1, '2021-05-04', 8),
(3, 1, '2021-05-04', 9),
(4, 1, '2021-05-04', 10),
(5, 1, '2021-05-04', 11),
(6, 1, '2021-05-04', 12),
(7, 2, '2021-05-04', 13),
(8, 1, '2021-05-04', 14),
(9, 1, '2021-05-04', 15),
(10, 1, '2021-05-04', 16),
(11, 1, '2021-05-04', 17),
(12, 2, '2021-05-04', 18),
(13, 2, '2021-05-04', 19),
(14, 2, '2021-05-04', 20),
(15, 2, '2021-05-04', 21),
(16, 2, '2021-05-04', 22),
(17, 2, '2021-05-04', 23),
(18, 2, '2021-05-04', 24),
(19, 1, '2021-05-04', 25),
(20, 1, '2021-05-04', 26),
(21, 1, '2021-05-04', 27),
(22, 1, '2021-05-04', 28),
(23, 1, '2021-05-04', 29),
(24, 1, '2021-05-04', 30),
(25, 1, '2021-05-04', 31),
(26, 1, '2021-05-04', 32),
(27, 1, '2021-05-04', 33),
(28, 1, '2021-05-04', 34),
(29, 1, '2021-05-04', 35),
(30, 1, '2021-05-04', 36),
(31, 1, '2021-05-04', 37),
(32, 1, '2021-05-04', 38),
(33, 1, '2021-05-04', 39),
(34, 2, '2021-05-04', 40),
(35, 2, '2021-05-04', 41),
(36, 2, '2021-05-04', 42),
(37, 1, '2021-05-05', 43),
(38, 1, '2021-05-05', 44),
(39, 1, '2021-05-05', 45),
(40, 1, '2021-05-05', 46),
(41, 1, '2021-05-05', 47),
(42, 1, '2021-05-05', 48),
(43, 1, '2021-05-05', 49),
(44, 1, '2021-05-05', 50),
(45, 1, '2021-05-05', 51),
(46, 1, '2021-05-05', 52),
(47, 1, '2021-05-05', 53),
(48, 1, '2021-05-05', 54),
(49, 1, '2021-05-05', 55),
(50, 1, '2021-05-05', 56),
(51, 1, '2021-05-05', 57),
(52, 1, '2021-05-04', 58),
(53, 1, '2021-05-04', 59),
(54, 1, '2021-05-04', 60),
(55, 1, '2021-05-04', 61),
(56, 1, '2021-05-04', 62),
(57, 1, '2021-05-04', 63),
(58, 1, '2021-05-04', 64),
(59, 1, '2021-05-04', 65),
(60, 1, '2021-05-04', 66),
(61, 1, '2021-05-04', 67),
(62, 1, '2021-05-04', 68),
(63, 1, '2021-05-04', 69),
(64, 1, '2021-05-04', 70),
(65, 1, '2021-05-04', 71),
(66, 1, '2021-05-04', 72),
(67, 1, '2021-05-04', 73),
(68, 2, '2021-05-04', 74),
(69, 1, '2021-05-04', 75),
(70, 1, '2021-05-04', 76),
(89, 1, '2021-05-04', 95),
(90, 1, '2021-05-04', 96);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(4) NOT NULL,
  `nombre_evento` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `lugar` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre_evento`, `fecha_inicio`, `fecha_fin`, `lugar`, `url`) VALUES
(1, 'Conferencia magistral', '2021-05-03', '2021-05-05', 'Guayaquil', ''),
(2, 'conferencia extra', '2021-05-03', '2021-05-05', 'merida', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expositor`
--

CREATE TABLE `expositor` (
  `id_expositor` int(4) NOT NULL,
  `nombre_expositor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `represetante` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_horario` int(4) NOT NULL,
  `id_evento` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `expositor`
--

INSERT INTO `expositor` (`id_expositor`, `nombre_expositor`, `represetante`, `email`, `id_horario`, `id_evento`) VALUES
(1, 'ANRP', 'Luis Hernandez', 'isaac@anpr.org.mx', 1, 1),
(2, 'Jumbo', 'Fernando Olivera', 'jumbo@gmail.com', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `organizacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `telefono`, `email`, `organizacion`) VALUES
(1, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(2, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(3, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(4, 'Isaac Euan', '12121222', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(5, 'Luis gomez', '12121222', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(6, 'Isaac Rodrigo', '12121222', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(7, 'Isaac Euan', '12121222', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(8, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(9, 'Isaac Euan', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(10, 'Isaac Rodrigo', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(11, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(12, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(13, 'Isaac Rodrigo', '99923231122', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(14, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(15, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(16, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(17, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(18, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(19, 'Isaac Rodrigo', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(20, 'Isaac Rodrigo', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(21, 'Isaac Rodrigo', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(22, 'Isaac Rodrigo', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(23, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(24, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(25, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(26, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(27, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(28, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(29, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(30, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(31, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(32, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(33, 'Isaac Euan', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(34, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'Parques de mexico'),
(35, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(36, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(37, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(38, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(39, 'Isaac Euan', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(40, 'Isaac Rodrigo', '12121222', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(41, 'Isaac Rodrigo', '12121222', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(42, 'Isaac Rodrigo', '12121222', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(43, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(44, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(45, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(46, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(47, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(48, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(49, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(50, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(51, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(52, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(53, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(54, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(55, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(56, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(57, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(58, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(59, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(60, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(61, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(62, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(63, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(64, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(65, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(66, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(67, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(68, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asasas'),
(69, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'asass'),
(70, 'Isaac Rodrigo', '9992274236', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(71, 'Isaac Rodrigo', '9992274236', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(72, 'Isaac Euan Rejon', '999232123', 'isaaceuan@gmail.com', 'Del mayab'),
(73, 'Isaac Rodrigo Euán Rejón', '929932332', 'isaaceuan@123.com', 'EPP131004CL2'),
(74, 'Isaac Rodrigo Euán Rejón', '929932332', 'asadsdasd@a1234.asd', 'EPP131004CL2'),
(75, 'Isaac Euan', '929932332', 'dalia@123.org', 'EPP131004CL2'),
(76, 'Isaac Rodrigo Euán Rejón', '12121222', 'isaaceuan@123.com', 'EPP131004CL2'),
(77, 'Isaac Rodrigo Euán Rejón', '929932332', 'isaaceuan@gmail.com', 'EPP131004CL2'),
(78, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(79, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(80, 'Isaac Rodrigo Euán Rejón', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(81, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(82, 'Isaac Rodrigo Euán Rejón', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(83, 'Isaac Euan', '1231231233', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(84, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(85, 'Isaac Rodrigo Euán Rejón', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(86, 'Isaac Rodrigo Euán Rejón', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(87, 'Isaac Rodrigo Euán Rejón', '9993342343', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(88, 'Isaac Rodrigo Euán Rejón', 'dalia@parquesdemexic', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(89, 'Isaac Rodrigo Euán Rejón', '123123233', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(90, '', '123123233', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(91, 'Isaac Rodrigo Euán Rejón', '1231231323', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(92, 'Isaac Rodrigo Euán Rejón', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(93, 'Isaac Rodrigo', '929932332', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(94, 'Isaac Rodrigo Euán Rejón', '213123123', 'dalia@parquesdemexico.org', 'EPP131004CL2'),
(95, 'Isaac Rodrigo', '929932332', 'isaaceuan@gmail.com', 'ANPR'),
(96, 'Isaac Rodrigo Euán Rejón', '929932332', 'isaaceuan@gmail.com', 'Del parque nacional');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_expositor` (`id_expositor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `expositor`
--
ALTER TABLE `expositor`
  ADD PRIMARY KEY (`id_expositor`),
  ADD KEY `relacion_evento` (`id_evento`),
  ADD KEY `relacion horario` (`id_horario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `expositor`
--
ALTER TABLE `expositor`
  MODIFY `id_expositor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_expositor`) REFERENCES `expositor` (`id_expositor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `expositor`
--
ALTER TABLE `expositor`
  ADD CONSTRAINT `relacion_evento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
