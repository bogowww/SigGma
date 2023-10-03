-- Criação do schema 'SigGma'
CREATE SCHEMA IF NOT EXISTS siggma;

-- Criação da tabela 'usuario'
CREATE TABLE IF NOT EXISTS siggma.usuario (
  id INT AUTO_INCREMENT NOT NULL,
  nome VARCHAR(45) NULL,
  matricula INT NULL,
  PRIMARY KEY (id)
);

-- Criação da tabela 'votacao'
CREATE TABLE IF NOT EXISTS siggma.votacao (
  id INT AUTO_INCREMENT NOT NULL,
  nome VARCHAR(45) NULL,
  voto INT NULL,
  chapa VARCHAR(45) NULL,
  data DATE NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (usuario_id) 
    REFERENCES siggma.usuario (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  INDEX fk_votacao_usuario_idx (usuario_id)
);
