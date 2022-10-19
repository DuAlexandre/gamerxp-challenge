-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema product
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema product
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `product` DEFAULT CHARACTER SET utf8 ;
USE `product` ;

-- -----------------------------------------------------
-- Table `product`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `product`.`product` (
  `product` VARCHAR(100) NULL,
  `descr` VARCHAR(100) NULL,
  `unit` INT NULL,
  `price` DOUBLE NULL,
  `datatime` DATETIME NULL,
  `staff` INT NULL)
ENGINE = InnoDB;

CREATE INDEX productDesc ON product(descr);
CREATE INDEX amount ON product(unit);
CREATE INDEX valor ON product(price);



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
