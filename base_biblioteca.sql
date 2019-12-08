-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2018 a las 02:30:43
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_apoderado`
--

CREATE TABLE IF NOT EXISTS `datos_apoderado` (
  `n_ficha` int(30) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `rut` varchar(15) NOT NULL,
  `parentesco` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `fono_fijo` int(10) NOT NULL,
  `celular` int(10) NOT NULL,
  PRIMARY KEY (`n_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuario`
--

CREATE TABLE IF NOT EXISTS `datos_usuario` (
  `n_ficha` int(30) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `rut` varchar(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `fono_fijo` int(10) NOT NULL,
  `celular` int(10) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL,
  PRIMARY KEY (`n_ficha`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `datos_usuario`
--

INSERT INTO `datos_usuario` (`n_ficha`, `nombres`, `apellidos`, `rut`, `fecha_nacimiento`, `direccion`, `comuna`, `fono_fijo`, `celular`, `tipo_usuario`) VALUES
(1, 'Sébastian Alejandro', 'Castro Contreras', '16.087.378-7', '1986-02-27', 'nose #454', 'Peñaflor', 1234567, 951106977, 'Alumno'),
(2, 'Javiera Catalina', 'Cárcamo Correa ', '19.483.465-9', '1996-06-03', 'cualquiercosa #345', 'Peñalolén', 98767887, 988943399, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE IF NOT EXISTS `devolucion` (
  `rut` int(10) NOT NULL,
  `id_libros` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_devolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`rut`, `id_libros`, `nombre`, `fecha_inicio`, `fecha_devolucion`) VALUES
(194834658, 659911, '', '2018-06-26', '0000-00-00'),
(160873787, 659905, '', '2018-06-20', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libros` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `tipo_libro` varchar(30) NOT NULL,
  `n_copias` int(3) NOT NULL,
  PRIMARY KEY (`id_libros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `nombre`, `autor`, `tipo_libro`, `n_copias`) VALUES
(659901, 'La niebla', 'Stephen King', 'novela terror', 3),
(659902, 'It (Eso)', 'Stephen King', 'novela terror', 1),
(659903, 'carrie', 'Stephen King', 'novela', 2),
(659904, 'La larga marcha', 'Richard Bachman', 'novela', 1),
(659905, 'El señor de los añillos I: La comunidad del anillo', 'J.R.R. Tolkien', 'novela ficcion', 5),
(659906, 'El señor de los añillos II: Las dos torres', 'J.R.R. Tolkien', 'novela ficcion', 2),
(659907, 'El señor de los añillos III: el retorno del rey', 'J.R.R. Tolkien', 'novela ficcion', 4),
(659908, 'El misterioso mr brown', 'Agatha Christie', 'novela policial', 1),
(659909, 'El espejo roto', 'Agatha Christie', 'novela misterio', 1),
(659910, 'Asylum', 'Madeleine Roux ', 'ficcion paranormal', 3),
(659911, 'Sanctum', 'Madeleine Roux ', 'novela horror', 1),
(659912, 'Catacomb', 'Madeleine Roux ', 'novela horror', 5),
(659913, 'Narraciones extraordinarias', 'Edagar Allan Poe', 'ficcion', 4),
(659914, 'Cuentos macabros', 'Edagar Allan Poe', 'historieta', 5),
(659915, 'El demonio de la perversidad', 'Edagar Allan Poe', 'cuento', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE IF NOT EXISTS `multas` (
  `rut` int(10) NOT NULL,
  `id_libros` int(10) NOT NULL,
  `dias_atraso` int(10) NOT NULL,
  `monto_multa` int(10) NOT NULL,
  UNIQUE KEY `rut` (`rut`,`id_libros`,`dias_atraso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE IF NOT EXISTS `prestamos` (
  `rut` int(10) NOT NULL,
  `id_libros` int(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  UNIQUE KEY `rut` (`rut`,`id_libros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`rut`, `id_libros`, `fecha_inicio`) VALUES
(160873787, 659905, '2018-06-20'),
(194834658, 659911, '2018-06-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `rut` int(10) NOT NULL,
  `id_libros` int(10) NOT NULL,
  `fecha_reserva` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`rut`, `id_libros`, `fecha_reserva`) VALUES
(194834659, 659901, '2018-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_sistema`
--

CREATE TABLE IF NOT EXISTS `usuario_sistema` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_sistema`
--

INSERT INTO `usuario_sistema` (`username`, `password`, `tipo_usuario`) VALUES
('sxdogma', '123456789', 'admin'),
('touka', '123456', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
