-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para hstw
DROP DATABASE IF EXISTS `hstw`;
CREATE DATABASE IF NOT EXISTS `hstw` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hstw`;

-- Volcando estructura para tabla hstw.buro
CREATE TABLE IF NOT EXISTS `buro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registro` date NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clienteburo` (`cliente_id`),
  CONSTRAINT `fk_clienteburo` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `apeP` varchar(20) CHARACTER SET latin1 NOT NULL,
  `apeM` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `f_nac` date NOT NULL,
  `CURP` varchar(20) CHARACTER SET latin1 NOT NULL,
  `RFC` varchar(15) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.cliente_direccion
CREATE TABLE IF NOT EXISTS `cliente_direccion` (
  `cliente_id` int(11) NOT NULL,
  `direccion_id` int(11) NOT NULL,
  PRIMARY KEY (`cliente_id`,`direccion_id`),
  KEY `fk_direccion` (`direccion_id`),
  KEY `fk_cliente_idx` (`cliente_id`),
  CONSTRAINT `fk_client_dir` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dir_client` FOREIGN KEY (`direccion_id`) REFERENCES `direcciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.creditos
CREATE TABLE IF NOT EXISTS `creditos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `codigo` varchar(15) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `comportamiento` varchar(15) CHARACTER SET latin1 NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientec` (`cliente_id`),
  KEY `fk_tipob` (`id_tipo`),
  CONSTRAINT `fk_cliente_c` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipob` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_bancario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.direcciones
CREATE TABLE IF NOT EXISTS `direcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(20) CHARACTER SET latin1 NOT NULL,
  `num_int` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `num_ext` varchar(5) CHARACTER SET latin1 NOT NULL,
  `calles` varchar(20) CHARACTER SET latin1 NOT NULL,
  `cp` int(11) NOT NULL,
  `colonia` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(40) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(40) CHARACTER SET latin1 NOT NULL,
  `pais` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pago` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `cuota` decimal(10,2) NOT NULL,
  `interes` int(11) NOT NULL,
  `c_amortizacion` int(11) NOT NULL,
  `c_final` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.prestamos
CREATE TABLE IF NOT EXISTS `prestamos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `anios` int(11) NOT NULL,
  `tipo` varchar(15) CHARACTER SET latin1 NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `pago_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pago` (`pago_id`),
  KEY `fk_clientep` (`cliente_id`),
  CONSTRAINT `fk_clientep` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pago` FOREIGN KEY (`pago_id`) REFERENCES `pagos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.tarjetas
CREATE TABLE IF NOT EXISTS `tarjetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` text CHARACTER SET latin1 NOT NULL,
  `f_vencimiento` date NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo` (`tipo`),
  KEY `fk_clientet` (`cliente_id`),
  CONSTRAINT `fk_clientet` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tarjeta_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_tarjeta` (`tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.tipo_bancario
CREATE TABLE IF NOT EXISTS `tipo_bancario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.tipo_tarjeta
CREATE TABLE IF NOT EXISTS `tipo_tarjeta` (
  `tipo` varchar(10) NOT NULL,
  PRIMARY KEY (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla hstw.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) CHARACTER SET latin1 NOT NULL,
  `pass` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
