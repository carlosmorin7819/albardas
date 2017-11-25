-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 19:57:29
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albardas_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costumers`
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `id_costumer` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `adress` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `rfc` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `costumers`
--

INSERT INTO `costumers` (`id`, `id_costumer`, `name`, `adress`, `phone`, `rfc`) VALUES
(1, 'sc456', 'AGROINDUSTRIAS DEANDAR DE DELICIAS S.A. DE C.V.\r\n', '', '6394736350', 'AID891221HT4'),
(2, 'olk43', 'Agroprocesos Naturales SPR de RL de CV\r\n', '', '01 444 961 1118', 'ANA0703308N9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drivers_emb`
--

CREATE TABLE `drivers_emb` (
  `id` int(11) NOT NULL,
  `id_driver` varchar(11) COLLATE utf8_bin NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `name_reference` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone_reference` varchar(20) COLLATE utf8_bin NOT NULL,
  `photo_lic` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `drivers_emb`
--

INSERT INTO `drivers_emb` (`id`, `id_driver`, `name`, `phone`, `name_reference`, `phone_reference`, `photo_lic`) VALUES
(31, '', 'Jose carlos morin ri', '3456789', 'carlos moin', '3456789', 'maxresdefault.jpg'),
(32, 'ze4rsh', 'Jose carlos morin ri', '3456789', 'carlos moin', '3456789', 'IMG-20170926-WA0013.jpg'),
(33, 'vnxw0j', 'sqqw', 'wqqwqw', 'wqwqwq', 'wqwq', 'maxresdefault.jpg'),
(34, 'xqz1rj', '', '', '', '', ''),
(35, 'vq022a', '', '', '', '', ''),
(36, 'rvsted', 'wqweqew', 'weqweqweq', 'weqweqweq', 'weqweq', ''),
(37, 'xdnvpx', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `driver_box`
--

CREATE TABLE `driver_box` (
  `id` int(11) NOT NULL,
  `placas` varchar(10) COLLATE utf8_bin NOT NULL,
  `n_econ` varchar(10) COLLATE utf8_bin NOT NULL,
  `long` varchar(10) COLLATE utf8_bin NOT NULL,
  `type_box` varchar(20) COLLATE utf8_bin NOT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL,
  `id_box` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `driver_box`
--

INSERT INTO `driver_box` (`id`, `placas`, `n_econ`, `long`, `type_box`, `type`, `id_box`) VALUES
(1, '1234', '1234', '12', 'CAJA_SECA', 'FULL', 'i5oem5'),
(2, '323208', 'ibib', '90', 'CAJA_SECA', 'FULL', 'atibzo'),
(3, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'xkmdye'),
(4, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'x5-0em'),
(5, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'xyweim'),
(6, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'md2k5n'),
(7, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'iyighw'),
(8, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', '5ab-ci'),
(9, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'cjbpm5'),
(10, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', '4qw-k0'),
(11, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', '1ehrh3'),
(12, 'qefwew32', '12fe', '12', 'CAJA_SECA', 'SENCILLO', 'sye-oy'),
(13, '111111111', '1111111111', '11111111', 'termo', 'simple', 'abcdefghij'),
(14, '1111111111', '1111111111', '11111', 'termo', 'full', 'q4tt1u'),
(15, 'dsdsds', 'dssdsd', 'dssdsd', 'seca', 'simple', 'wdetzp'),
(16, 'sdgddsv', 'vsdsdvdv', 'svdsdvsd', 'seca', 'simple', 'k0-mwi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `driver_tractor`
--

CREATE TABLE `driver_tractor` (
  `id` int(11) NOT NULL,
  `id_tractor` varchar(20) COLLATE utf8_bin NOT NULL,
  `model` varchar(20) COLLATE utf8_bin NOT NULL,
  `brand` varchar(20) COLLATE utf8_bin NOT NULL,
  `color` varchar(20) COLLATE utf8_bin NOT NULL,
  `n_econ` varchar(20) COLLATE utf8_bin NOT NULL,
  `placas` varchar(20) COLLATE utf8_bin NOT NULL,
  `img` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `driver_tractor`
--

INSERT INTO `driver_tractor` (`id`, `id_tractor`, `model`, `brand`, `color`, `n_econ`, `placas`, `img`) VALUES
(1, '-zi--c', '20014', 'volvo', 'verde', 'ligi09890', '132314', 'maxresdefault.jpg'),
(2, 'j4rixe', '2019', 'INTERNATIONAL', 'verde pasto', 'iubw23', '12jn', 'foto.jpg'),
(3, 'v22igf', '2018', 'Kenwort', 'verde', '1234rfedw', '1233', '98ca44_6e03b58691364e0d96e059f26112d810-mv2.jpg'),
(4, '', '', '', '', '', 'xqz1rj', 'noa-kh'),
(5, '', '', '', '', '', 'vq022a', 'qi2is-'),
(6, '', '', '', '', '', 'rvsted', 'jmw--t'),
(7, '', '', '', '', '', 'xdnvpx', 'hgo3cs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `id_employe` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `rfc` varchar(15) COLLATE utf8_bin NOT NULL,
  `addres` varchar(240) COLLATE utf8_bin NOT NULL,
  `city` varchar(200) COLLATE utf8_bin NOT NULL,
  `cp` varchar(10) COLLATE utf8_bin NOT NULL,
  `tel` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `employes`
--

INSERT INTO `employes` (`id`, `id_employe`, `name`, `rfc`, `addres`, `city`, `cp`, `tel`) VALUES
(1, '23du7', 'El Calabacillal SPR de RL de CV\r\n', 'CAL121103A17', 'Calle Guerrero,Numero 14 Col. Centro', 'Parras ,Coahuila,', '27980', ' (842)4226370'),
(3, '65df4', 'Las Albardas SPR de RL de CV', 'ALB141027VC7', 'Calle Orilla de Agua Num. 927 Col. Centro', 'Parras, Coahuila Mexico', '27980', '(842)4226370'),
(4, '90yu7', 'El Cegador SPR de RL de CV', 'CEG130413AZ7', 'Calle Vicente Guerrero Num. 14 Col. Centro ', 'Parras, Coahuila Mexico', '27980', '(842) 4220105');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folios`
--

CREATE TABLE `folios` (
  `folio_carga` varchar(10) COLLATE utf8_bin NOT NULL,
  `folio_embarque` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `folios`
--

INSERT INTO `folios` (`folio_carga`, `folio_embarque`) VALUES
('28', '170');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `img_profile` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `gender` varchar(2) COLLATE utf8_bin NOT NULL,
  `pass` varchar(250) COLLATE utf8_bin NOT NULL,
  `type_user` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `img_profile`, `phone`, `gender`, `pass`, `type_user`) VALUES
(10, 'Giobana ', 'Rdz morin', 'gio@mail.com', 'Capture.PNG', '842178900', '0', '123', '0'),
(17, 'carlos morin', 'apellidos', '', 'maxresdefault.jpg', '12345', '0', '12345', '0'),
(19, 'David', 'Gonzalez Morales', 'd.gonzalez@lasalbardas.com', 'IMG-20170926-WA0013.jpg', '5554028260', '3', '12345678', '1'),
(20, 'yuiop', 'uiop', 'carlosmorin7819@hotmail.com', 'maxresdefault.jpg', '12345', '3', '12345', '1'),
(21, 'Jose Carlos', 'Morin Riojas', 'carlosmorin78@gmail.com', 'pink-floyd-1021x550.jpg', '8717848447', '3', 'a1fb15e45a', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `brand` varchar(30) COLLATE utf8_bin NOT NULL,
  `color` varchar(30) COLLATE utf8_bin NOT NULL,
  `code_driver` varchar(30) COLLATE utf8_bin NOT NULL,
  `placas` varchar(30) COLLATE utf8_bin NOT NULL,
  `km_liter` int(10) NOT NULL,
  `model` varchar(10) COLLATE utf8_bin NOT NULL,
  `status` int(2) NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_reg` varchar(30) COLLATE utf8_bin NOT NULL,
  `km_cut` varchar(30) COLLATE utf8_bin NOT NULL,
  `km_mant` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `drivers_emb`
--
ALTER TABLE `drivers_emb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `driver_box`
--
ALTER TABLE `driver_box`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `driver_tractor`
--
ALTER TABLE `driver_tractor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `drivers_emb`
--
ALTER TABLE `drivers_emb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `driver_box`
--
ALTER TABLE `driver_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `driver_tractor`
--
ALTER TABLE `driver_tractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
