<?php
require_once('database.class.php');

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
        return Database::executar($sql, $params);
    }

    public function excluir() {
        $sql = "DELETE FROM usuario WHERE idusuario = :id";
        $params = array(
            ':id' => $this->id,
        );
        return Database::executar($sql, $params);
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
        return Database::executar($sql, $params);
    }

    public static function listar($type = 0, $info = '') {
        $sql = 'SELECT * FROM usuario';
        switch ($type) {
            case 1:
                $sql .= ' WHERE idusuario = :info';
                break;
            case 2:
                $sql .= ' WHERE nome = :info';
                break;
        }
        $params = array();
        if ($type > 0)
            $params = array(':info' => $info);
    
        $results = Database::listar($sql, $params);
       
        // var_dump($results);
    
        if (is_array($results)) {
            if ($type == 1 && !empty($results)) {
                $result = $results[0];
                return new Usuario($result['idusuario'], $result['nome'], $result['matricula'], $result['senha'], $result['email']);
            }
    
            $usuarios = array();
            foreach ($results as $result) {
                $usuario = new Usuario($result['idusuario'], $result['nome'], $result['matricula'], $result['senha'], $result['email']);
                $usuarios[] = $usuario;
            }
            return $usuarios;
        } else {
            return array();
        }
    }
    public function verificarSenha($senha) {
        return $senha === $this->senha;
    }
 
}
?>
