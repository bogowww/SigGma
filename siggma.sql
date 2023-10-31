-- -----------------------------------------------------
-- Schema siggma
-- -----------------------------------------------------
CREATE SCHEMA siggma;

-- -----------------------------------------------------
-- Table `siggma`.`tipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`tipoUsuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

-- -----------------------------------------------------
-- Table `siggma`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `matricula` INT NULL,
  `senha` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `tipoUsuario_id` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  CONSTRAINT `fk_usuario_tipoUsuario1`
    FOREIGN KEY (`tipoUsuario_id`)
    REFERENCES `siggma`.`tipoUsuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `siggma`.`eleicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`eleicao` (
  `ideleicao` INT NOT NULL AUTO_INCREMENT,
  `inicio` DATE NULL,
  `fim` TINYINT NULL,
  PRIMARY KEY (`ideleicao`));

-- -----------------------------------------------------
-- Table `siggma`.`chapa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`chapa` (
  `idchapa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `eleicao_ideleicao` INT NOT NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`idchapa`),
  CONSTRAINT `fk_chapa_eleicao1`
    FOREIGN KEY (`eleicao_ideleicao`)
    REFERENCES `siggma`.`eleicao` (`ideleicao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `siggma`.`cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`cargo` (
  `idcargo` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(455) NULL,
  PRIMARY KEY (`idcargo`));


-- -----------------------------------------------------
-- Table `siggma`.`membro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`membro` (
  `idmembro` INT NOT NULL,
  `chapa_idchapa` INT NOT NULL,
  `usuario_idusuario1` INT NOT NULL,
  `cargo_idcargo` INT NOT NULL,
  PRIMARY KEY (`idmembro`, `chapa_idchapa`, `usuario_idusuario1`),
  CONSTRAINT `fk_chapa_has_usuario_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membro_usuario1`
    FOREIGN KEY (`usuario_idusuario1`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membro_cargo1`
    FOREIGN KEY (`cargo_idcargo`)
    REFERENCES `siggma`.`cargo` (`idcargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `siggma`.`tesouro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`tesouro` (
  `idcontribuicao` INT NOT NULL AUTO_INCREMENT,
  `valor` INT NULL,
  `data` DATE NULL,
  `proposito` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idcontribuicao`),
  CONSTRAINT `fk_contribuicao_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `siggma`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`evento` (
  `idevento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `datahora` VARCHAR(45) NULL,
  `local` VARCHAR(45) NULL,
  `descricao` VARCHAR(455) NULL,
  `nota` VARCHAR(455) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idevento`),
  CONSTRAINT `fk_evento_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `siggma`.`votacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`votacao` (
  `eleicao_ideleicao` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`eleicao_ideleicao`, `usuario_idusuario`),
  CONSTRAINT `fk_eleicao_has_usuario_eleicao1`
    FOREIGN KEY (`eleicao_ideleicao`)
    REFERENCES `siggma`.`eleicao` (`ideleicao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eleicao_has_usuario_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
