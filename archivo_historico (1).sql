-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 21:36:37
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
-- Base de datos: `archivo_historico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_conservacion`
--

CREATE TABLE `estado_conservacion` (
  `id_cons` int(11) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `intervenciones` longtext NOT NULL,
  `recomendaciones` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(22, 'coFran', 'Si', 4),
(23, 'mile', 'No', 9),
(24, 'pata', 'Si', 3),
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
(9, 'Cultura y educación');

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
(5, 'chochi', 26),
(8, 'milee', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `n_habitacion` int(11) NOT NULL,
  `L_mueble` varchar(11) NOT NULL,
  `n_estante` int(11) NOT NULL,
  `n_caja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_documental`
--

CREATE TABLE `unidad_documental` (
  `id_documento` int(11) NOT NULL,
  `id_fondo` int(11) NOT NULL,
  `id_subfondo` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `id_subserie` int(11) DEFAULT NULL,
  `nombre_documento` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date DEFAULT NULL,
  `n_folios` varchar(11) NOT NULL,
  `cant_elementos` int(11) NOT NULL,
  `medidas` varchar(30) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `nombre_productor` text NOT NULL,
  `nombre_creador` text NOT NULL,
  `forma_ingreso` text NOT NULL,
  `descripcion` text NOT NULL,
  `tipo_soporte` text NOT NULL,
  `descripcion_soporte` varchar(200) NOT NULL,
  `accesibilidad` enum('Público','Restringido') NOT NULL,
  `condiciones_accesibilidad` varchar(100) NOT NULL,
  `descripcion_estado` varchar(400) NOT NULL,
  `intervenciones` longtext NOT NULL,
  `recomendaciones` longtext NOT NULL,
  `documentos_relacionados` varchar(50) NOT NULL,
  `notas` longtext NOT NULL,
  `fecha_registro` date NOT NULL,
  `resp_registro` varchar(50) NOT NULL,
  `resp_control` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(1000) NOT NULL,
  `contraseña` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contraseña`) VALUES
(1, 'coFran', '1918');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado_conservacion`
--
ALTER TABLE `estado_conservacion`
  ADD PRIMARY KEY (`id_cons`);

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
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `unidad_documental`
--
ALTER TABLE `unidad_documental`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id_fondo` (`id_fondo`),
  ADD KEY `id_subfondo` (`id_subfondo`),
  ADD KEY `id_serie` (`id_serie`),
  ADD KEY `id_subserie` (`id_subserie`),
  ADD KEY `id_ubicacion` (`ubicacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_conservacion`
--
ALTER TABLE `estado_conservacion`
  MODIFY `id_cons` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fondo`
--
ALTER TABLE `fondo`
  MODIFY `id_fondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `subfondo`
--
ALTER TABLE `subfondo`
  MODIFY `id_subfondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `subserie`
--
ALTER TABLE `subserie`
  MODIFY `id_subserie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_documental`
--
ALTER TABLE `unidad_documental`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `unidad_documental`
--
ALTER TABLE `unidad_documental`
  ADD CONSTRAINT `unidad_documental_ibfk_2` FOREIGN KEY (`id_fondo`) REFERENCES `fondo` (`id_fondo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unidad_documental_ibfk_3` FOREIGN KEY (`id_serie`) REFERENCES `serie` (`id_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unidad_documental_ibfk_4` FOREIGN KEY (`id_subfondo`) REFERENCES `subfondo` (`id_subfondo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unidad_documental_ibfk_5` FOREIGN KEY (`id_subserie`) REFERENCES `subserie` (`id_subserie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
