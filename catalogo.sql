-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-07-2014 a las 21:51:35
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `catalogo`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `camaras`
-- 

CREATE TABLE `camaras` (
  `id_camara` int(100) NOT NULL auto_increment,
  `tipo_camara` varchar(100) collate utf8_spanish_ci NOT NULL,
  `marca` varchar(30) collate utf8_spanish_ci NOT NULL,
  `modelo` varchar(30) collate utf8_spanish_ci NOT NULL,
  `precio1` int(30) NOT NULL,
  `precio2` int(11) NOT NULL,
  `precio3` int(11) NOT NULL,
  `precio4` int(11) NOT NULL,
  `precio5` int(11) NOT NULL,
  `caracteristicas` varchar(250) collate utf8_spanish_ci NOT NULL,
  `tienda1` varchar(30) collate utf8_spanish_ci NOT NULL,
  `tienda2` varchar(30) collate utf8_spanish_ci NOT NULL,
  `tienda3` varchar(30) collate utf8_spanish_ci NOT NULL,
  `tienda4` varchar(30) collate utf8_spanish_ci NOT NULL,
  `tienda5` varchar(30) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id_camara`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `camaras`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) collate utf8_spanish_ci NOT NULL,
  `nombre_com` varchar(70) collate utf8_spanish_ci NOT NULL,
  `password` varchar(10) collate utf8_spanish_ci NOT NULL,
  `descipcion` text collate utf8_spanish_ci NOT NULL,
  `email` varchar(45) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (0, 'lalina', 'ailin belen silva vasquez', '123456', 'administradora de la pagina', 'ailin.silva@gmail.com');
