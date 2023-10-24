-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema siggma
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema siggma
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `siggma` DEFAULT CHARACTER SET utf8 ;
USE `siggma` ;

-- -----------------------------------------------------
-- Table `siggma`.`tipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`tipoUsuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `matricula` INT NULL,
  `senha` VARCHAR(45) NULL,
  `tipoUsuario_id` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_tipoUsuario1_idx` (`tipoUsuario_id` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_tipoUsuario1`
    FOREIGN KEY (`tipoUsuario_id`)
    REFERENCES `siggma`.`tipoUsuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`chapa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`chapa` (
  `idchapa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idchapa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`voto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`voto` (
  `idvoto` INT NOT NULL AUTO_INCREMENT,
  `chapa_idchapa` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idvoto`),
  INDEX `fk_voto_chapa1_idx` (`chapa_idchapa` ASC) VISIBLE,
  INDEX `fk_voto_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_voto_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_voto_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`membro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`membro` (
  `idmembro` INT NOT NULL,
  `chapa_idchapa` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idmembro`, `chapa_idchapa`, `usuario_idusuario`),
  INDEX `fk_chapa_has_usuario_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  INDEX `fk_chapa_has_usuario_chapa1_idx` (`chapa_idchapa` ASC) VISIBLE,
  CONSTRAINT `fk_chapa_has_usuario_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chapa_has_usuario_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`contribuicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`contribuicao` (
  `idcontribuicao` INT NOT NULL AUTO_INCREMENT,
  `valor` INT NULL,
  `data` DATE NULL,
  `proposito` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idcontribuicao`),
  INDEX `fk_contribuicao_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_contribuicao_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `siggma`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`evento` (
  `idevento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `datahora` VARCHAR(45) NULL,
  `local` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `nota` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  `chapa_idchapa` INT NOT NULL,
  PRIMARY KEY (`idevento`),
  INDEX `fk_evento_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  INDEX `fk_evento_chapa1_idx` (`chapa_idchapa` ASC) VISIBLE,
  CONSTRAINT `fk_evento_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
