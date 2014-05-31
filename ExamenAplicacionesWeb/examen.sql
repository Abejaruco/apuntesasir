-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2014 a las 17:47:43
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `nombre`, `tipo`) VALUES
(1, 'Bilbao.jpg', 'ciudades'),
(2, 'Caballo.jpg', 'animales'),
(3, 'Conejo.jpg', 'animales'),
(4, 'Escarabajo.jpg', 'coches'),
(5, 'Esqui.jpg', 'deportes'),
(6, 'Ferrari.jpg', 'coches'),
(7, 'Futbol.jpg', 'deportes'),
(8, 'Londres.jpg', 'ciudades'),
(9, 'Natacion.jpg', 'deportes'),
(10, 'Nueva York.jpg', 'ciudades'),
(11, 'Oso.jpg', 'animales'),
(12, 'Paris.jpg', 'ciudades'),
(13, 'Porsche.jpg', 'coches'),
(14, 'Rio de Janeiro.jpg', 'ciudades'),
(15, 'Roma.jpg', 'ciudades'),
(16, 'Seat.jpg', 'coches'),
(17, 'Tigre.jpg', 'animales'),
(18, 'Tucan.jpg', 'animales'),
(19, 'Varios.jpg', 'deportes'),
(20, 'Voleibol.jpg', 'deportes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
