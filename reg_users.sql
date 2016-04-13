-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 12-04-2016 a las 14:19:38
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `reg_users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigof`
--

CREATE TABLE `codigof` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `codigof`
--

INSERT INTO `codigof` (`id`, `NOMBRE`) VALUES
(1, 'CARLOS\n'),
(2, 'DRAWDE'),
(3, 'zaid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pw` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `user`, `pw`, `email`) VALUES
(1, 'edward', 'drawde', '1', 'jfads#');
