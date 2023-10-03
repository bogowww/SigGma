CREATE TABLE IF NOT EXISTS `siggma`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `matricula` INT NULL,
  PRIMARY KEY (`id`))


CREATE TABLE IF NOT EXISTS `siggma`.`votacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `voto` INT NULL,
  `chapa` VARCHAR(45) NULL,
  `data` DATE NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_votacao_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `siggma`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
