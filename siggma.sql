
/*Tabela de tipoUsuario*/

CREATE TABLE IF NOT EXISTS `siggma`.`tipoUsuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

/*Tabela de Usuario*/

CREATE TABLE IF NOT EXISTS `siggma`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `matricula` INT NULL,
  `senha` VARCHAR(45) NULL,
  `tipoUsuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usuario_tipoUsuario1`
    FOREIGN KEY (`tipoUsuario_id`)
    REFERENCES `siggma`.`tipoUsuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

/*Tabela de Votação*/

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
    ON UPDATE NO ACTION);
