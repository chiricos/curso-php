-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 12-04-2016 a las 14:19:10
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `codigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CodigoF`
--

CREATE TABLE `CodigoF` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pw` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `CodigoF`
--

INSERT INTO `CodigoF` (`id`, `nombre`, `pw`) VALUES
(4, 'drawde', 123456);
