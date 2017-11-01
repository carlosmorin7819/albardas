-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2017 a las 04:56:38
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fastfood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE IF NOT EXISTS `restaurantes` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nombre`, `imagen`) VALUES
(1, 'pizza chuzz', ''),
(2, 'pizza Mia', 'mia.png'),
(3, 'El mezon ', ''),
(4, 'La casona', ''),
(5, 'Parras Pizza Club', 'club.jpg'),
(6, 'Pizza to go', '509572.jpg'),
(7, 'Angelottis', ''),
(8, 'Tortas GM', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `type_user` int(5) NOT NULL,
  `gender` int(20) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `pass`, `type_user`, `gender`, `phone`) VALUES
(1, 'Jose Carlops Morin', 'carlosmorin7819@gmail.com', 'morin123', 3, 1, 1043196),
(2, 'Jose Carlops Morin', 'carlos7819@gmail.com', 'morin123', 2, 1, 1043196),
(3, 'roberto rios', 'roberios@mail.com', '123456', 1, 1, 842104946),
(4, 'Ale Cuevas', 'ceuvas@mail.com', '123456', 3, 3, 123456),
(5, 'facio fraga', 'facio@mail.com', '123456', 3, 3, 2147483647),
(6, 'CARLOS MORIN', 'morin@mail.com', '123456', 1, 3, 2147483647),
(7, 'Jose Carlos', 'carlos78@gmail.com', '', 0, 0, 2147483647),
(8, '', '', '', 1, 1, 0),
(9, 'Alejandro', 'ale@mail.com', '12234', 3, 3, 123456),
(10, 'Carlos Morin', 'carlos', '123456', 3, 3, 0),
(11, 'Roberto sustaita', 'carlos', '123456', 3, 3, 0),
(12, 'roberto sustaita', 'sustaita.hdz29@gmail.com', '123456789', 2, 3, 2147483647),
(13, 'juan', 'juan@correo.com', '1234', 2, 3, 1245432);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
