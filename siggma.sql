
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
  `tipoUsuario_id` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  CONSTRAINT `fk_usuario_tipoUsuario1`
    FOREIGN KEY (`tipoUsuario_id`)
    REFERENCES `siggma`.`tipoUsuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `siggma`.`chapa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`chapa` (
  `idchapa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idchapa`));


-- -----------------------------------------------------
-- Table `siggma`.`voto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`voto` (
  `idvoto` INT NOT NULL AUTO_INCREMENT,
  `chapa_idchapa` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idvoto`),
  CONSTRAINT `fk_voto_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_voto_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `siggma`.`membro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `siggma`.`membro` (
  `idmembro` INT NOT NULL,
  `chapa_idchapa` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idmembro`, `chapa_idchapa`, `usuario_idusuario`),
  CONSTRAINT `fk_chapa_has_usuario_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chapa_has_usuario_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


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
  `descricao` VARCHAR(45) NULL,
  `nota` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  `chapa_idchapa` INT NOT NULL,
  PRIMARY KEY (`idevento`),
  CONSTRAINT `fk_evento_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `siggma`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_chapa1`
    FOREIGN KEY (`chapa_idchapa`)
    REFERENCES `siggma`.`chapa` (`idchapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
