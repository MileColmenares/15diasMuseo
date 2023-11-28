-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 20:46:51
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
-- Base de datos: `archivo_historico1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondo`
--

CREATE TABLE `fondo` (
  `id_fondo` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fondo`
--

INSERT INTO `fondo` (`id_fondo`, `codigo`, `nombre_fondo`) VALUES
(1, 'MMC', 'Municipalidad de Monte Cristo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `nombre_serie` text NOT NULL,
  `nombre_subserie` enum('Si','No') NOT NULL,
  `id_subfondo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id_serie`, `nombre_serie`, `nombre_subserie`, `id_subfondo`) VALUES
(24, 'quesito', 'Si', 3),
(25, 'CHOCHI', 'No', 5),
(26, 'profe', 'Si', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfondo`
--

CREATE TABLE `subfondo` (
  `id_subfondo` int(11) NOT NULL,
  `nombre_subfondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subfondo`
--

INSERT INTO `subfondo` (`id_subfondo`, `nombre_subfondo`) VALUES
(1, 'Legales'),
(2, 'Hacienda'),
(3, 'Recursos humanos'),
(4, 'Seguridad urbana'),
(5, 'Prensa, difusión y protocolo'),
(6, 'Registro civil'),
(7, 'Obras públicas y privadas'),
(8, 'Catastro municipal'),
(9, 'Cultura y educación'),
(17, 'sssssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subserie`
--

CREATE TABLE `subserie` (
  `id_subserie` int(11) NOT NULL,
  `nombre_subserie` text NOT NULL,
  `id_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subserie`
--

INSERT INTO `subserie` (`id_subserie`, `nombre_subserie`, `id_serie`) VALUES
(1, 'coFran', 24),
(2, 'tampoco otra vez xd', 0),
(4, 'pata', 25),
(8, 'milee', 23),
(18, 'mile', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_documental1`
--

CREATE TABLE `unidad_documental1` (
  `id_documento` int(11) NOT NULL,
  `id_fondo` int(11) NOT NULL,
  `id_subfondo` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `id_subserie` int(11) NOT NULL,
  `nombre_documento` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date DEFAULT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `volumen_soporte` varchar(250) NOT NULL,
  `nombre_productor` varchar(250) NOT NULL,
  `nombre_creador` varchar(250) NOT NULL,
  `forma_ingreso` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado_conservacion` enum('muy bueno','bueno','regular','malo') NOT NULL,
  `condicion_acceso` varchar(200) NOT NULL,
  `condicion_reproduccion` varchar(200) NOT NULL,
  `documentos_relacionados` varchar(50) NOT NULL,
  `notas` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `resp_registro` varchar(50) NOT NULL,
  `resp_control` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidad_documental1`
--

INSERT INTO `unidad_documental1` (`id_documento`, `id_fondo`, `id_subfondo`, `id_serie`, `id_subserie`, `nombre_documento`, `fecha_inicio`, `fecha_final`, `ubicacion`, `volumen_soporte`, `nombre_productor`, `nombre_creador`, `forma_ingreso`, `descripcion`, `estado_conservacion`, `condicion_acceso`, `condicion_reproduccion`, `documentos_relacionados`, `notas`, `fecha_registro`, `resp_registro`, `resp_control`) VALUES
(1, 0, 1, 6, 1, '1', '2023-11-26', NULL, 'HOLAA', 'HOLAA', 'HOLAA', 'HOLAA', 'HOLAA', 'HOLAA', 'muy bueno', 'HOLAA', 'HOLAA', 'HOLAA', '0', '2023-11-16', 'HOLAA', 'HOLAA'),
(2, 0, 1, 1, 1, 'actas de nacimiento', '2001-03-21', NULL, '1a-3b-5g', 'ghby', 'gbnt', 'gtbntttttttttt', 'tttttttb', 'gtbn', 'muy bueno', 'hn', 'hn', 'hgn', '0', '2023-11-21', 'htnn', 'hbgvh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(1000) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contraseña`) VALUES
(1, 'admin', 'muni');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fondo`
--
ALTER TABLE `fondo`
  ADD PRIMARY KEY (`id_fondo`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`);

--
-- Indices de la tabla `subfondo`
--
ALTER TABLE `subfondo`
  ADD PRIMARY KEY (`id_subfondo`);

--
-- Indices de la tabla `subserie`
--
ALTER TABLE `subserie`
  ADD PRIMARY KEY (`id_subserie`);

--
-- Indices de la tabla `unidad_documental1`
--
ALTER TABLE `unidad_documental1`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fondo`
--
ALTER TABLE `fondo`
  MODIFY `id_fondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `subfondo`
--
ALTER TABLE `subfondo`
  MODIFY `id_subfondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `subserie`
--
ALTER TABLE `subserie`
  MODIFY `id_subserie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `unidad_documental1`
--
ALTER TABLE `unidad_documental1`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
