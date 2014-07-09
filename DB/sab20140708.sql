-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2014 a las 03:04:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allowed_actions`
--

CREATE TABLE IF NOT EXISTS `allowed_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_allowed__relations_action` (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivorespaldo`
--

CREATE TABLE IF NOT EXISTS `archivorespaldo` (
  `idArchivoRespaldo` int(11) NOT NULL,
  `nombreArchivo` varchar(45) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `autor` varchar(45) NOT NULL,
  `Respaldo_idRespaldo` int(11) NOT NULL,
  PRIMARY KEY (`idArchivoRespaldo`),
  KEY `fk_ArchivoRespaldo_Respaldo1_idx` (`Respaldo_idRespaldo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bug`
--

CREATE TABLE IF NOT EXISTS `bug` (
  `idBug` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaAparicion` date NOT NULL,
  `fechaReporte` date NOT NULL,
  `imagen` blob,
  PRIMARY KEY (`idBug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambio`
--

CREATE TABLE IF NOT EXISTS `cambio` (
  `idCambio` int(11) NOT NULL AUTO_INCREMENT,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`idCambio`),
  KEY `fk_Cambio_Servicio1_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(127) DEFAULT NULL,
  `RUC` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nombreComercial` varchar(45) DEFAULT NULL,
  `Clientecol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(63) DEFAULT NULL,
  `documentoLegal` varchar(45) DEFAULT NULL,
  `empresaActual` varchar(45) DEFAULT NULL,
  `nombreContacto` varchar(45) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idContacto`),
  KEY `fk_Contacto_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoola`
--

CREATE TABLE IF NOT EXISTS `contactoola` (
  `idContactoOLA` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(63) DEFAULT NULL,
  `documentoLegal` varchar(45) DEFAULT NULL,
  `empresaActual` varchar(45) DEFAULT NULL,
  `nombreContacto` varchar(45) DEFAULT NULL,
  `OLA_idOLA` int(11) NOT NULL,
  PRIMARY KEY (`idContactoOLA`),
  KEY `fk_ContactoOLA_OLA1_idx` (`OLA_idOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fixer`
--

CREATE TABLE IF NOT EXISTS `fixer` (
  `idFixer` int(11) NOT NULL AUTO_INCREMENT,
  `Bug_idBug` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idFixer`),
  KEY `fk_Fixer_Bug1_idx` (`Bug_idBug`),
  KEY `fk_Fixer_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacioncontacto`
--

CREATE TABLE IF NOT EXISTS `informacioncontacto` (
  `idInformacionContacto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `Contacto_idContacto` int(11) NOT NULL,
  PRIMARY KEY (`idInformacionContacto`),
  KEY `fk_InformacionContacto_Contacto1_idx` (`Contacto_idContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacioncontactoola`
--

CREATE TABLE IF NOT EXISTS `informacioncontactoola` (
  `idInformacionContactoOLA` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `ContactoOLA_idContactoOLA` int(11) NOT NULL,
  PRIMARY KEY (`idInformacionContactoOLA`),
  KEY `fk_InformacionContactoOLA_ContactoOLA1_idx` (`ContactoOLA_idContactoOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ola`
--

CREATE TABLE IF NOT EXISTS `ola` (
  `idOLA` int(11) NOT NULL AUTO_INCREMENT,
  `criticidad` varchar(45) DEFAULT NULL,
  `tiempoRespuesta` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `ServicioProveedor_idServicioProveedor` int(11) NOT NULL,
  PRIMARY KEY (`idOLA`),
  KEY `fk_OLA_ServicioProveedor1_idx` (`ServicioProveedor_idServicioProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile_action`
--

CREATE TABLE IF NOT EXISTS `profile_action` (
  `action_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  PRIMARY KEY (`action_id`,`profile_id`),
  KEY `fk_profile__profile_a_profile` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono1` varchar(45) DEFAULT NULL,
  `telefono2` varchar(45) DEFAULT NULL,
  `movil1` varchar(45) DEFAULT NULL,
  `movil2` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion`
--

CREATE TABLE IF NOT EXISTS `recuperacion` (
  `idRecuperacion` int(11) NOT NULL AUTO_INCREMENT,
  `Servicio_idServicio` int(11) NOT NULL,
  `Respaldo_idRespaldo` int(11) NOT NULL,
  PRIMARY KEY (`idRecuperacion`),
  KEY `fk_Recuperacion_Servicio1_idx` (`Servicio_idServicio`),
  KEY `fk_Recuperacion_Respaldo1_idx` (`Respaldo_idRespaldo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo`
--

CREATE TABLE IF NOT EXISTS `respaldo` (
  `idRespaldo` int(11) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(45) NOT NULL,
  `fechaInicio` date NOT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`idRespaldo`),
  KEY `fk_Respaldo_Servicio1_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsabilidad`
--

CREATE TABLE IF NOT EXISTS `responsabilidad` (
  `idResponsabilidad` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idResponsabilidad`),
  KEY `fk_Responsabilidad_Servicio1_idx` (`Servicio_idServicio`),
  KEY `fk_Responsabilidad_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`),
  KEY `fk_Servicio_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioproveedor`
--

CREATE TABLE IF NOT EXISTS `servicioproveedor` (
  `idServicioProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `Proveedor_idProveedor` int(11) NOT NULL,
  PRIMARY KEY (`idServicioProveedor`),
  KEY `fk_ServicioProveedor_Proveedor1_idx` (`Proveedor_idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sla`
--

CREATE TABLE IF NOT EXISTS `sla` (
  `idSLA` int(11) NOT NULL AUTO_INCREMENT,
  `responsable` varchar(64) NOT NULL,
  `criticidad` varchar(45) NOT NULL,
  `tiempoRespuesta` int(11) NOT NULL,
  `unidadTiempo` enum('minutos','segundos','horas','dias') NOT NULL,
  `descripcion` varchar(127) DEFAULT NULL,
  `disponibilidad` decimal(4,2) DEFAULT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`idSLA`),
  KEY `fk_SLA_Servicio_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_usuario_profile_u_profile` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nickname`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `fechaNacimiento`, `profile_id`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '9999999999', '4567898765', 'fabiansgb@hotmail.com', '2010-11-09', NULL, 'abc123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `allowed_actions`
--
ALTER TABLE `allowed_actions`
  ADD CONSTRAINT `fk_allowed__relations_action` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`);

--
-- Filtros para la tabla `archivorespaldo`
--
ALTER TABLE `archivorespaldo`
  ADD CONSTRAINT `fk_ArchivoRespaldo_Respaldo1` FOREIGN KEY (`Respaldo_idRespaldo`) REFERENCES `respaldo` (`idRespaldo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cambio`
--
ALTER TABLE `cambio`
  ADD CONSTRAINT `fk_Cambio_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_Contacto_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contactoola`
--
ALTER TABLE `contactoola`
  ADD CONSTRAINT `fk_ContactoOLA_OLA1` FOREIGN KEY (`OLA_idOLA`) REFERENCES `ola` (`idOLA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fixer`
--
ALTER TABLE `fixer`
  ADD CONSTRAINT `fk_Fixer_Bug1` FOREIGN KEY (`Bug_idBug`) REFERENCES `bug` (`idBug`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fixer_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informacioncontacto`
--
ALTER TABLE `informacioncontacto`
  ADD CONSTRAINT `fk_InformacionContacto_Contacto1` FOREIGN KEY (`Contacto_idContacto`) REFERENCES `contacto` (`idContacto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informacioncontactoola`
--
ALTER TABLE `informacioncontactoola`
  ADD CONSTRAINT `fk_InformacionContactoOLA_ContactoOLA1` FOREIGN KEY (`ContactoOLA_idContactoOLA`) REFERENCES `contactoola` (`idContactoOLA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ola`
--
ALTER TABLE `ola`
  ADD CONSTRAINT `fk_OLA_ServicioProveedor1` FOREIGN KEY (`ServicioProveedor_idServicioProveedor`) REFERENCES `servicioproveedor` (`idServicioProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profile_action`
--
ALTER TABLE `profile_action`
  ADD CONSTRAINT `fk_profile__profile_a_action` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `fk_profile__profile_a_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Filtros para la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  ADD CONSTRAINT `fk_Recuperacion_Respaldo1` FOREIGN KEY (`Respaldo_idRespaldo`) REFERENCES `respaldo` (`idRespaldo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recuperacion_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respaldo`
--
ALTER TABLE `respaldo`
  ADD CONSTRAINT `fk_Respaldo_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `responsabilidad`
--
ALTER TABLE `responsabilidad`
  ADD CONSTRAINT `fk_Responsabilidad_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Responsabilidad_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicioproveedor`
--
ALTER TABLE `servicioproveedor`
  ADD CONSTRAINT `fk_ServicioProveedor_Proveedor1` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sla`
--
ALTER TABLE `sla`
  ADD CONSTRAINT `fk_SLA_Servicio` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_profile_u_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
