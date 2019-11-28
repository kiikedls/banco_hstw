-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema hstw
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hstw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hstw` DEFAULT CHARACTER SET latin1 ;
USE `hstw` ;

-- -----------------------------------------------------
-- Table `hstw`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`clientes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `apellidoM` VARCHAR(20) NOT NULL,
  `apellidoP` VARCHAR(20) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `CURP` VARCHAR(20) NOT NULL,
  `RFC` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`tipo_bancario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`tipo_bancario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`creditos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`creditos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `codigo` VARCHAR(15) NOT NULL,
  `estado` VARCHAR(10) NOT NULL,
  `comportamiento` VARCHAR(15) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  `id_tipo` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_clientec` (`id_cliente`),
  INDEX `fk_tipob` (`id_tipo` ),
  CONSTRAINT `fk_cliente_c`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `hstw`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipob`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `hstw`.`tipo_bancario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`direcciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `calle` VARCHAR(20) NOT NULL,
  `numero_int` VARCHAR(5) NOT NULL,
  `numero_ext` VARCHAR(5) NOT NULL,
  `calles` VARCHAR(20) NOT NULL,
  `cp` INT(11) NOT NULL,
  `colonia` VARCHAR(20) NOT NULL,
  `ciudad` VARCHAR(40) NOT NULL,
  `estado` VARCHAR(40) NOT NULL,
  `pais` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`direccion_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`direccion_cliente` (
  `id_direccion` INT(11) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  INDEX `fk_direccion` (`id_direccion`),
  INDEX `fk_cliente_idx` (`id_cliente`),
  CONSTRAINT `fk_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `hstw`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_direccion`
    FOREIGN KEY (`id_direccion`)
    REFERENCES `hstw`.`direcciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`prestamos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`prestamos` (
  `id` INT(11) NOT NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `periodo` INT(11) NOT NULL,
  `tipo` VARCHAR(15) NOT NULL,
  `monto` VARCHAR(45) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_clientep` (`id_cliente`),
  CONSTRAINT `fk_clientep`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `hstw`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`pagos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`pagos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `pagos` INT(11) NOT NULL,
  `fecha` DATE NOT NULL,
  `cuota` INT(11) NOT NULL,
  `interes` INT(11) NOT NULL,
  `c_amortizacion` INT(11) NOT NULL,
  `c_final` INT(11) NOT NULL,
  `id_prestamo` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_prestamo_idx` (`id_prestamo`),
  CONSTRAINT `fk_prestamo`
    FOREIGN KEY (`id_prestamo`)
    REFERENCES `hstw`.`prestamos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`tipo_tarjeta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`tipo_tarjeta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`tarjetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`tarjetas` (
  `id` INT(11) NOT NULL,
  `numero` TEXT NOT NULL,
  `fecha_vencimiento` VARCHAR(45) NOT NULL,
  `id_tipo` INT(11) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tipo` (`id_tipo`),
  INDEX `fk_clientet` (`id_cliente`),
  CONSTRAINT `fk_clientet`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `hstw`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `hstw`.`tipo_tarjeta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `hstw`.`buro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`buro` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `compania` VARCHAR(100) NOT NULL,
  `calificacion_cliente` INT(11) NOT NULL,
  `info_adeudor` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hstw`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hstw`.`usuarios` (
  `id` INT NOT NULL,
  `user` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
