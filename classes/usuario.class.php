<?php
require_once('database.php');

class Usuario {
    private $id;
    private $nome;
    private $matricula;
    private $senha;
    private $email;

    public function __construct($id, $nome, $matricula, $senha, $email) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->email = $email;
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

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function inserir() {
        $sql = "INSERT INTO usuario (nome, matricula, senha, email) VALUES (:nome, :matricula, :senha, :email)";
        $params = array(
            ':nome' => $this->nome,
            ':matricula' => $this->matricula,
            ':senha' => $this->senha,
            ':email' => $this->email,
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
        $sql = "UPDATE usuario SET nome = :nome, matricula = :matricula, senha = :senha, email = :email WHERE idusuario = :id";
        $params = array(
            ':id' => $this->id,
            ':nome' => $this->nome,
            ':matricula' => $this->matricula,
            ':senha' => $this->senha,
            ':email' => $this->email,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public static function listar() {
        $sql = "SELECT * FROM usuario";
        return BancoDeDados::consultar($sql);
    }
}

?>
