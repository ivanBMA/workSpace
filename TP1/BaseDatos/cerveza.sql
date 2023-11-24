-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 12:08:17
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
  `Nombre` varchar(50) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `GraduacionAlco` int(11) NOT NULL,
  `Pais` varchar(60) NOT NULL,
  `Precio` int(11) NOT NULL,
  `RutaImagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`ID`, `Nombre`, `Tipo`, `GraduacionAlco`, `Pais`, `Precio`, `RutaImagen`) VALUES
(36, 'a', 'Negra', 2, 'España', 2, 'img/rubia.jpg'),
(37, 'Estrella Galicia', 'Tostada', 20, 'España', 4, 'img/rubia.jpg'),
(38, 'Ambar', 'Tostada', 4, 'España', 14, 'img/tostada.jpg'),
(39, 'aa', 'De trigo', 4, 'francia', 12, 'img/cerveza.png'),
(40, 'Bandurria', 'Negra', 6, 'Alemania', 16, 'img/tostada.jpg'),
(41, 'cervezaA', 'Rubia', 5, 'España', 5, 'img/rubia.jpg'),
(42, 'Paco', 'De trigo', 5, 'francia', 6, 'img/cerveza.png'),
(43, 'GallusDomesticus', 'Rubia', 7, 'francia', 4, 'img/rubia.jpg'),
(44, 'canisFamiliaris', 'Negra', 6, 'francia', 4, 'img/cerveza.png');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
