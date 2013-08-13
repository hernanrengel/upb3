-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-04-2013 a las 05:58:21
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `upb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_carrera`
--

CREATE TABLE IF NOT EXISTS `upb_carrera` (
  `idupb_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `campus` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_carrera` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `concepto` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil_prof` text COLLATE utf8_spanish_ci NOT NULL,
  `mercado` text COLLATE utf8_spanish_ci NOT NULL,
  `areas_est` text COLLATE utf8_spanish_ci NOT NULL,
  `n_creditos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `duracion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idupb_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_carrera`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_imagen`
--

CREATE TABLE IF NOT EXISTS `upb_imagen` (
  `idupb_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_imagen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_imagen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_investigacion`
--

CREATE TABLE IF NOT EXISTS `upb_investigacion` (
  `idupb_investigacion` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `recumen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `articulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `abstract` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `autores` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idupb_investigacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_investigacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_menu_contenido`
--

CREATE TABLE IF NOT EXISTS `upb_menu_contenido` (
  `idupb_menu_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_menu_contenido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_corta` text COLLATE utf8_spanish_ci,
  `upb_menu_contenidocol` text COLLATE utf8_spanish_ci,
  `imagen_menu_contenido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_menu_contenido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_menu_contenido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_menu_pricipal`
--

CREATE TABLE IF NOT EXISTS `upb_menu_pricipal` (
  `idupb_menu_pricipal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_menu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link_menu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_menu_pricipal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_menu_pricipal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_post`
--

CREATE TABLE IF NOT EXISTS `upb_post` (
  `idupb_post` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_post` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `autor` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_post` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_post` text COLLATE utf8_spanish_ci,
  `imagen_post` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idupb_post`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_post`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_postgrado`
--

CREATE TABLE IF NOT EXISTS `upb_postgrado` (
  `idupb_postgrado` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `inicio_modulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_link` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idupb_postgrado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_postgrado`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_publicaciones`
--

CREATE TABLE IF NOT EXISTS `upb_publicaciones` (
  `idupb_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `autores` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_link` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idupb_publicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_publicaciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_slider`
--

CREATE TABLE IF NOT EXISTS `upb_slider` (
  `idupb_slider` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_slider` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_slider` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_slider` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `visible` int(11) NOT NULL,
  PRIMARY KEY (`idupb_slider`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `upb_slider`
--

INSERT INTO `upb_slider` (`idupb_slider`, `tipo_slider`, `nombre_slider`, `descripcion_slider`, `visible`) VALUES
(1, 'main', 's1.jpg', 'snap 1', 1),
(2, 'main', 's2.jpg', 'asde', 1),
(3, 'main', 's3.jpg', 'asdasdas', 1),
(4, 'main', 's4.jpg', 'asfdsfdsfds', 0),
(5, 'main', 's5.jpg', 'asdsadasd', 0),
(6, 'main', 's6.jpg', 'asfafsfsafsafsafasfasfasasfas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_submenu_contenido`
--

CREATE TABLE IF NOT EXISTS `upb_submenu_contenido` (
  `idupb_submenu_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_submenu_contenido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link_submenu_contenido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_submenu_contenido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_submenu_contenido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_tipo_imagen`
--

CREATE TABLE IF NOT EXISTS `upb_tipo_imagen` (
  `idupb_tipo_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_tipo_imagen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_tipo_imagen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_tipo_post`
--

CREATE TABLE IF NOT EXISTS `upb_tipo_post` (
  `idupb_tipo_post` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_post` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_tipo_post`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_tipo_post`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_tipo_slider`
--

CREATE TABLE IF NOT EXISTS `upb_tipo_slider` (
  `idupb_tipo_slider` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_slider` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_tipo_slider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_tipo_slider`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `upb_tipo_usuario` (
  `idupb_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_usuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_tipo_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `upb_tipo_usuario`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upb_usuario`
--

CREATE TABLE IF NOT EXISTS `upb_usuario` (
  `idupb_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_p` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_m` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `nombre_user` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idupb_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `upb_usuario`
--

INSERT INTO `upb_usuario` (`idupb_usuario`, `tipo_usuario`, `nombre`, `apellido_p`, `apellido_m`, `email`, `telefono`, `nombre_user`, `password`) VALUES
(9, 'admin', 'Hernan', 'Rengel', 'Chavez', 'hrengelc@gmail.com', 2457896, 'hernan', 'hernan');
