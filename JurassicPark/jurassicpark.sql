-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2019 a las 03:42:24
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jurassicpark`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`a01207648`@`%` PROCEDURE `addRegistro`(IN `incidente` INT(11), IN `lugar` INT(11))
insert into registro(id_in, id_lu) values(incidente, lugar)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE IF NOT EXISTS `incidente` (
  `id_incidente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_incidente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`id_incidente`, `nombre`) VALUES
(1, 'Fuga Trex'),
(2, 'Visitantes en zona no autorizada'),
(3, 'Falla eléctrica'),
(4, 'Fuga herbívoro'),
(5, 'Fuga velociraptor'),
(6, 'Robo de ADN'),
(7, 'Auto descompuesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE IF NOT EXISTS `lugar` (
  `id_lugar` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_lugar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lugar`, `nombre`) VALUES
(1, 'Centro Turístico'),
(2, 'Restaurante'),
(3, 'Laboratorios'),
(4, 'Centro Operativo'),
(5, 'Triceraptops'),
(6, 'Dilofosaurios'),
(7, 'Velociraptors'),
(8, 'TRex'),
(9, 'Planicie de los herb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int(4) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_in` int(11) NOT NULL,
  `id_lu` int(11) NOT NULL,
  PRIMARY KEY (`id_registro`),
  KEY `id_in` (`id_in`,`id_lu`),
  KEY `id_lu` (`id_lu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_lu`) REFERENCES `lugar` (`id_lugar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_in`) REFERENCES `incidente` (`id_incidente`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
