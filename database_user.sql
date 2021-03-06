-- MySQL Script generated by MySQL Workbench
-- Tue Nov  7 10:06:40 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `table1` (
  `usr_id` INT(10) NOT NULL AUTO_INCREMENT,
  `usr_email` VARCHAR(255) NULL,
  `usr_password` VARCHAR(128) NULL,
  `usr_role` VARCHAR(16) NULL,
  `usr_date_creation` DATETIME NULL,
  PRIMARY KEY (`usr_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
