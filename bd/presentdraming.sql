-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2022 a las 04:22:52
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `presentdraming`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

DROP TABLE IF EXISTS `inmuebles`;
CREATE TABLE IF NOT EXISTS `inmuebles` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `garaje` int(20) NOT NULL,
  `banos` int(20) NOT NULL,
  `metraje` int(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`Id`, `nombre`, `ubicacion`, `precio`, `descripcion`, `garaje`, `banos`, `metraje`) VALUES
(1, 'apartamento en Cajica ', 'cajica, cundinamarca', 123000000, 'Hermosa casa ubicada en la entrada de Cajica, con hermosa vista panoramica, y grande patio con zona verde.', 2, 3, 86),
(2, 'casa en betania', 'barranquilla, atlantico', 200000000, 'Casa duplex, con piscina terraza, zona amplia de juegos y cerca a centros comerciales', 4, 3, 123),
(3, 'casa en paraiso', 'barranquilla, atlantico', 1200000000, 'Casa amoblada, cuenta con balcon, la casa fue recien remodelada y cuenta con dos plantas y piscina', 5, 5, 230),
(4, 'apartamento duplex en Bogota', 'Bogota, Chapinero  Alto', 500000000, 'Apatamento duplex con gym y zona de bbq, cuenta con 4 habitaciones, totalmente amoblado.', 2, 3, 110),
(5, 'casa en Paraiso', 'Barranquilla, Atlantico', 450000000, 'hermosa casa de dos pisos y 3 habitaciones, cuenta con patio y balcon, cerca a centros comerciales y parques, cuenta con vigilancia las 24 horas y una amplia terraza y piscina.', 2, 3, 140),
(6, 'Casa en Suba', 'Bogota, Suba', 250000000, 'hermosa casa ubicada en suba con terraza, patio, 2 chimeneas, ubicada cerca al tencro comercial centro suba.', 2, 4, 234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iot`
--

DROP TABLE IF EXISTS `iot`;
CREATE TABLE IF NOT EXISTS `iot` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iot`
--

INSERT INTO `iot` (`Id`, `temperature`, `humidity`, `tiempo`) VALUES
(83, 31.8, 30, '2022-11-24 16:10:40'),
(82, 32.3, 29, '2022-11-24 16:10:29'),
(81, 33.3, 26, '2022-11-24 16:10:17'),
(80, 34.2, 25, '2022-11-24 16:10:06'),
(79, 35.2, 22, '2022-11-24 16:09:55'),
(84, 30.8, 31, '2022-11-24 16:10:52'),
(85, 30.2, 32, '2022-11-24 16:11:03'),
(86, 29.8, 35, '2022-11-24 16:11:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusled`
--

DROP TABLE IF EXISTS `statusled`;
CREATE TABLE IF NOT EXISTS `statusled` (
  `ID` int(10) NOT NULL,
  `Stat` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `statusled`
--

INSERT INTO `statusled` (`ID`, `Stat`) VALUES
(0, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
