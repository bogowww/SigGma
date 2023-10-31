<?php
require_once('database.php');

class Usuario {
    private $id;
    private $nome;
    private $matricula;
    private $senha;

    public function __construct($id, $nome, $matricula, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->senha = $senha;
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

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function inserir() {
        $sql = "INSERT INTO usuario (nome, matricula, senha) VALUES (:nome, :matricula, :senha)";
        $params = array(
            ':nome' => $this->nome,
            ':matricula' => $this->matricula,
            ':senha' => $this->senha,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public function excluir() {
        $sql = "DELETE FROM usuario WHERE idusuario = :id";
        $params = array(
            ':id' => $this->id,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public function editar() {
        $sql = "UPDATE usuario SET nome = :nome, matricula = :matricula, senha = :senha WHERE idusuario = :id";
        $params = array(
            ':id' => $this->id,
            ':nome' => $this->nome,
            ':matricula' => $this->matricula,
            ':senha' => $this->senha,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public static function listar() {
        $sql = "SELECT * FROM usuario";
        return BancoDeDados::consultar($sql);
    }
}
?>
