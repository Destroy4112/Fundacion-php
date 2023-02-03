-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bancoa
CREATE DATABASE IF NOT EXISTS `bancoa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bancoa`;

-- Volcando estructura para tabla bancoa.beneficiarios
CREATE TABLE IF NOT EXISTS `beneficiarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `cedula` int(12) DEFAULT NULL,
  `fechaNa` varchar(50) DEFAULT NULL,
  `fechaExp` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `telefono` int(10) unsigned zerofill DEFAULT NULL,
  `puntajeSis` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sede` varchar(50) DEFAULT NULL,
  `estadoVuln` varchar(50) DEFAULT NULL,
  `eps` varchar(50) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bancoa.eps
CREATE TABLE IF NOT EXISTS `eps` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bancoa.estadovul
CREATE TABLE IF NOT EXISTS `estadovul` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bancoa.inactivos
CREATE TABLE IF NOT EXISTS `inactivos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `cedula` int(12) DEFAULT NULL,
  `fechaNa` varchar(50) DEFAULT NULL,
  `fechaExp` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `telefono` int(10) unsigned zerofill DEFAULT NULL,
  `puntajeSis` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sede` varchar(50) DEFAULT NULL,
  `estadoVuln` varchar(50) DEFAULT NULL,
  `eps` varchar(50) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bancoa.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bancoa.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
