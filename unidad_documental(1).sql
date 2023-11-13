-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 18:43:17
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
-- Estructura de tabla para la tabla `unidad_documental`
--

CREATE TABLE `unidad_documental` (
  `id_documento` int(11) NOT NULL,
  `id_fondo` int(11) NOT NULL,
  `id_subfondo` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `id_subserie` int(11) DEFAULT NULL,
  `nombre_documento` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date DEFAULT NULL,
  `volumen_soporte` varchar(200) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `nombre_productor` text NOT NULL,
  `nombre_creador` text NOT NULL,
  `forma_ingreso` text NOT NULL,
  `descripcion` text NOT NULL,
  `condicion_acceso` varchar(50) NOT NULL,
  `condicion_reproduccion` varchar(100) NOT NULL,
  `descripcion_estado` varchar(400) NOT NULL,
  `intervenciones` longtext NOT NULL,
  `recomendaciones` longtext NOT NULL,
  `documentos_relacionados` varchar(50) NOT NULL,
  `notas` longtext NOT NULL,
  `fecha_registro` date NOT NULL,
  `resp_registro` varchar(50) NOT NULL,
  `resp_control` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidad_documental`
--

INSERT INTO `unidad_documental` (`id_documento`, `id_fondo`, `id_subfondo`, `id_serie`, `id_subserie`, `nombre_documento`, `fecha_inicio`, `fecha_final`, `volumen_soporte`, `ubicacion`, `nombre_productor`, `nombre_creador`, `forma_ingreso`, `descripcion`, `condicion_acceso`, `condicion_reproduccion`, `descripcion_estado`, `intervenciones`, `recomendaciones`, `documentos_relacionados`, `notas`, `fecha_registro`, `resp_registro`, `resp_control`) VALUES
(2, 1, 9, 8, 1, '11', '2023-11-01', '2023-11-07', 'estamos con lo del archivo historico. al momento lo que hicimos fue hacer formularios para que se puedar ingresar las categorias de los documentos que se van a ingresar y esta en proceso el formulario', '1', 'dwed', 'edwe', 'cwc', 'wecs', 'wcec', 'wcec', 'cwdec', 'wcwdc', 'wcdc', 'wdcwdc', 'cwdcc', '2023-11-05', 'mile', 'wdcwc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `unidad_documental`
--
ALTER TABLE `unidad_documental`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id_fondo` (`id_fondo`,`id_subfondo`,`id_serie`,`id_subserie`),
  ADD KEY `id_ubicacion` (`ubicacion`),
  ADD KEY `id_serie` (`id_serie`),
  ADD KEY `id_subfondo` (`id_subfondo`),
  ADD KEY `id_subserie` (`id_subserie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `unidad_documental`
--
ALTER TABLE `unidad_documental`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
