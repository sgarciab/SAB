-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2014 at 05:30 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sab`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
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
-- Table structure for table `allowed_actions`
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
-- Table structure for table `archivorespaldo`
--

CREATE TABLE IF NOT EXISTS `archivorespaldo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArchivo` varchar(45) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `autor` varchar(45) NOT NULL,
  `Respaldo_idRespaldo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ArchivoRespaldo_Respaldo1_idx` (`Respaldo_idRespaldo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE IF NOT EXISTS `bug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaAparicion` date NOT NULL,
  `fechaReporte` date NOT NULL,
  `imagen` blob,
  `servicio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bug_servicio1_idx` (`servicio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cambio`
--

CREATE TABLE IF NOT EXISTS `cambio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Cambio_Servicio1_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(127) DEFAULT NULL,
  `RUC` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nombreComercial` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `direccion`, `RUC`, `nombre`, `nombreComercial`) VALUES
(1, 'QUITO ECUADOR', '0502501505', 'CRIFA 2', 'SLONCORP'),
(2, 'alguna mas', '09876543234567', 'La Favorita', 'La favo');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(63) DEFAULT NULL,
  `documentoLegal` varchar(45) DEFAULT NULL,
  `empresaActual` varchar(45) DEFAULT NULL,
  `nombreContacto` varchar(45) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Contacto_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `direccion`, `documentoLegal`, `empresaActual`, `nombreContacto`, `Cliente_idCliente`) VALUES
(1, '', '0987545689', '', 'Eduardo Ortega', 1),
(4, 'La misma', '098765432', '', 'Nuevo', 1),
(5, 'lasdjlaksd', '0987654321', 'asdjoasdj', 'hola', 1),
(6, 'lkjhgfd', '09876543456789', 'gfd', '09876543234567', 1),
(7, 'iuytrertyui', '098765434568', 'fdtyuiop', 'oiuytrewertyui', 1),
(8, '-09876543', '09874321', '098765432', 'poiuytrewq', 1),
(10, 'jdlkajsdlksd', '098765432102', 'oiuytre', '098765', 1),
(11, 'nueva', '2345678901', 'nueva', 'nuevo', 1),
(12, 'nuevo', '3456789012', 'nuevo', 'nuevo 2', 2),
(13, 'nuevoa', '1234567892', '', 'nuevo 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactoola`
--

CREATE TABLE IF NOT EXISTS `contactoola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreContacto` varchar(45) DEFAULT NULL,
  `documentoLegal` varchar(45) DEFAULT NULL,
  `direccion` varchar(63) DEFAULT NULL,
  `empresaActual` varchar(45) DEFAULT NULL,
  `OLA_idOLA` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ContactoOLA_OLA1_idx` (`OLA_idOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fixer`
--

CREATE TABLE IF NOT EXISTS `fixer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Bug_idBug` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Fixer_Bug1_idx` (`Bug_idBug`),
  KEY `fk_Fixer_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `informacioncontacto`
--

CREATE TABLE IF NOT EXISTS `informacioncontacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `observacion` varchar(127) DEFAULT NULL,
  `Contacto_idContacto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_InformacionContacto_Contacto1_idx` (`Contacto_idContacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `informacioncontacto`
--

INSERT INTO `informacioncontacto` (`id`, `tipo`, `contenido`, `observacion`, `Contacto_idContacto`) VALUES
(3, NULL, '09876543', '098765', 5),
(4, NULL, 'hola', '0987654345', 6),
(5, NULL, 'hola', 'kjsald', 7),
(6, NULL, 'HOLA', 'JOJ', 8),
(7, 'telefono', '0987654', '09876543', 10),
(11, 'telefono', '09876543456', 'hotel', 4),
(12, 'telefono', '022345678', 'nuevo', 11),
(13, 'telefono', '1234567', 'nuevo', 12),
(14, 'telefono', '12345689', 'a', 13);

-- --------------------------------------------------------

--
-- Table structure for table `informacioncontactoola`
--

CREATE TABLE IF NOT EXISTS `informacioncontactoola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `ContactoOLA_idContactoOLA` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_InformacionContactoOLA_ContactoOLA1_idx` (`ContactoOLA_idContactoOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `informacionproveedor`
--

CREATE TABLE IF NOT EXISTS `informacionproveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `proveedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_informacionproveedor_proveedor_idx` (`proveedor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `informacionproveedor`
--

INSERT INTO `informacionproveedor` (`id`, `tipo`, `contenido`, `observacion`, `proveedor_id`) VALUES
(1, 'telefono', '0987654321', 'Prueba Actualiza 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ola`
--

CREATE TABLE IF NOT EXISTS `ola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criticidad` varchar(45) DEFAULT NULL,
  `tiempoRespuesta` int(11) DEFAULT NULL,
  `medTiempo` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `ServicioProveedor_idServicioProveedor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_OLA_ServicioProveedor1_idx` (`ServicioProveedor_idServicioProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile_action`
--

CREATE TABLE IF NOT EXISTS `profile_action` (
  `action_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  PRIMARY KEY (`action_id`,`profile_id`),
  KEY `fk_profile__profile_a_profile` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `identificacion` varchar(13) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `identificacion`, `direccion`) VALUES
(1, 'Proveedora de productos', '1234567890', 'direccion 1'),
(2, 'nuevo proveedor', '1234567890', 'direccion 2'),
(3, 'Prueba Actualiza 1', '1234567891', 'Prueba Actualiza 1');

-- --------------------------------------------------------

--
-- Table structure for table `recuperacion`
--

CREATE TABLE IF NOT EXISTS `recuperacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Servicio_idServicio` int(11) NOT NULL,
  `Respaldo_idRespaldo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Recuperacion_Servicio1_idx` (`Servicio_idServicio`),
  KEY `fk_Recuperacion_Respaldo1_idx` (`Respaldo_idRespaldo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `respaldo`
--

CREATE TABLE IF NOT EXISTS `respaldo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(45) NOT NULL,
  `fechaInicio` date NOT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Respaldo_Servicio1_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `responsabilidad`
--

CREATE TABLE IF NOT EXISTS `responsabilidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Responsabilidad_Servicio1_idx` (`Servicio_idServicio`),
  KEY `fk_Responsabilidad_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Servicio_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `servicioproveedor`
--

CREATE TABLE IF NOT EXISTS `servicioproveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `Proveedor_idProveedor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ServicioProveedor_Proveedor1_idx` (`Proveedor_idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sla`
--

CREATE TABLE IF NOT EXISTS `sla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsable` varchar(64) NOT NULL,
  `criticidad` varchar(45) NOT NULL,
  `tiempoRespuesta` int(11) NOT NULL,
  `unidadTiempo` enum('minutos','segundos','horas','dias') NOT NULL,
  `descripcion` varchar(127) DEFAULT NULL,
  `disponibilidad` decimal(4,2) DEFAULT NULL,
  `Servicio_idServicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_SLA_Servicio_idx` (`Servicio_idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `password` text NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_profile_u_profile` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nickname`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `fechaNacimiento`, `profile_id`, `password`, `status`) VALUES
(6, 'admin', 'admin', 'admin', '9876543', '87654345678', 'email@email.com', '2014-02-02', NULL, 'e99a18c428cb38d5f260853678922e03', 'ACTIVE');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowed_actions`
--
ALTER TABLE `allowed_actions`
  ADD CONSTRAINT `fk_allowed__relations_action` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`);

--
-- Constraints for table `archivorespaldo`
--
ALTER TABLE `archivorespaldo`
  ADD CONSTRAINT `fk_ArchivoRespaldo_Respaldo1` FOREIGN KEY (`Respaldo_idRespaldo`) REFERENCES `respaldo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bug`
--
ALTER TABLE `bug`
  ADD CONSTRAINT `fk_bug_servicio1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cambio`
--
ALTER TABLE `cambio`
  ADD CONSTRAINT `fk_Cambio_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_Contacto_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contactoola`
--
ALTER TABLE `contactoola`
  ADD CONSTRAINT `fk_ContactoOLA_OLA1` FOREIGN KEY (`OLA_idOLA`) REFERENCES `ola` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fixer`
--
ALTER TABLE `fixer`
  ADD CONSTRAINT `fk_Fixer_Bug1` FOREIGN KEY (`Bug_idBug`) REFERENCES `bug` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fixer_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `informacioncontacto`
--
ALTER TABLE `informacioncontacto`
  ADD CONSTRAINT `fk_InformacionContacto_Contacto1` FOREIGN KEY (`Contacto_idContacto`) REFERENCES `contacto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `informacioncontactoola`
--
ALTER TABLE `informacioncontactoola`
  ADD CONSTRAINT `fk_InformacionContactoOLA_ContactoOLA1` FOREIGN KEY (`ContactoOLA_idContactoOLA`) REFERENCES `contactoola` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `informacionproveedor`
--
ALTER TABLE `informacionproveedor`
  ADD CONSTRAINT `fk_informacionproveedor_proveedor` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ola`
--
ALTER TABLE `ola`
  ADD CONSTRAINT `fk_OLA_ServicioProveedor1` FOREIGN KEY (`ServicioProveedor_idServicioProveedor`) REFERENCES `servicioproveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile_action`
--
ALTER TABLE `profile_action`
  ADD CONSTRAINT `fk_profile__profile_a_action` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `fk_profile__profile_a_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Constraints for table `recuperacion`
--
ALTER TABLE `recuperacion`
  ADD CONSTRAINT `fk_Recuperacion_Respaldo1` FOREIGN KEY (`Respaldo_idRespaldo`) REFERENCES `respaldo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recuperacion_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `respaldo`
--
ALTER TABLE `respaldo`
  ADD CONSTRAINT `fk_Respaldo_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `responsabilidad`
--
ALTER TABLE `responsabilidad`
  ADD CONSTRAINT `fk_Responsabilidad_Servicio1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Responsabilidad_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `servicioproveedor`
--
ALTER TABLE `servicioproveedor`
  ADD CONSTRAINT `fk_ServicioProveedor_Proveedor1` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sla`
--
ALTER TABLE `sla`
  ADD CONSTRAINT `fk_SLA_Servicio` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_profile_u_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
