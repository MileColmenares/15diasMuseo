-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-10-2023 a las 23:05:05
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

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
-- Estructura de tabla para la tabla `unidad_receptora`
--

CREATE TABLE `unidad_receptora` (
  `id_uni_rec` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `direccion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad_receptora`
--

INSERT INTO `unidad_receptora` (`id_uni_rec`, `nombre`, `telefono`, `email`, `direccion`) VALUES
(1, 'vcwsre', '3518753931', 'wefer', 'betwv');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `unidad_receptora`
--
ALTER TABLE `unidad_receptora`
  ADD PRIMARY KEY (`id_uni_rec`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `unidad_receptora`
--
ALTER TABLE `unidad_receptora`
  MODIFY `id_uni_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
