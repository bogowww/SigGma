<?php
require_once('database.class.php');

class Evento {
    private $id;
    private $nome;
    private $data;

    public function __construct($id, $nome, $data) {
        $this->id = $id;
        $this->nome = $nome;
        $this->data = $data;
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

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function inserir() {
        $sql = "INSERT INTO evento (nome, data) VALUES (:nome, :data)";
        $params = array(
            ':nome' => $this->nome,
            ':data' => $this->data,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public function excluir() {
        $sql = "DELETE FROM evento WHERE id = :id";
        $params = array(
            ':id' => $this->id,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public function editar() {
        $sql = "UPDATE evento SET nome = :nome, data = :data WHERE id = :id";
        $params = array(
            ':id' => $this->id,
            ':nome' => $this->nome,
            ':data' => $this->data,
        );
        return BancoDeDados::executar($sql, $params);
    }

    public static function listar() {
        $sql = "SELECT * FROM evento";
        return BancoDeDados::consultar($sql);
    }

    public function card() {
        $dataAtual = new DateTime();
        $dataEvento = new DateTime($this->data);

        if ($dataEvento > $dataAtual) {
            return 'green';
        } elseif ($dataEvento->format('Y-m-d') == $dataAtual->format('Y-m-d')) {
            return 'yellow';
        } else {
            return 'red';
        }
    }
}

?>
