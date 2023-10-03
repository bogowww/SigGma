<?php
abstract class Usuario {
    private $id;
    private $nome;
    private $matricula;

    public function __construct($id, $nome, $matricula) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    /*public function salvar() {
        $sql = "INSERT INTO usuario (nome, matricula) VALUES (:nome, :matricula)";
        $params = array(
            ':nome' => $this->nome,
            ':matricula' => $this->matricula,
        );
        return BancoDeDados::executar($sql, $params);
    }*/


}

?>
