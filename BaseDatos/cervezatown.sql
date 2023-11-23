-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 13:34:15
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
-- Base de datos: `cervezatown`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Tipo` text NOT NULL,
  `GraduacionAlco` int(11) NOT NULL,
  `Pais` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `RutaImagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`ID`, `Nombre`, `Tipo`, `GraduacionAlco`, `Pais`, `Precio`, `RutaImagen`) VALUES
(3, 'a', 'a', 2, 'a', 3, '../../img/tostada.jpg'),
(5, 'actualizadaB', 'maña', 69, 'EEUU', 15, '../../img/rubia.jpg'),
(6, 'a', 'a', 3, 'a', 3, '../../img/rubia.jpg'),
(7, 'Tostadeitor', 'tostada', 6, 'francia', 15, '../../img/tostada.jpg'),
(8, 'Estrella Galicia', 'rubia', 4, 'España', 7, '../../img/rubia.jpg'),
(9, 'bacaMan', 'tostada', 5, 'Portugal', 6, '../../img/tostada.jpg'),
(10, 'a', 'a', 3, 'a', 3, '../../img/rubia.jpg'),
(11, 'paco', 'tiene', 3, 'de', 2, '../../img/rubia.jpg'),
(15, 'XXXXXXX', 'maña', 69, 'EEUU', 12, '../../img/tostada.jpg'),
(16, 'XXXXXXX', 'maña', 69, 'EEUU', 12, 'img/tostada.jpg'),
(17, 'yyyyyyyy', 'maña', 69, 'EEUU', 12, 'img/rubia.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
