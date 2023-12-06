<?php
/**
 * Classe Votacao
 *
 * Esta classe representa uma entidade de votação e fornece métodos para manipular dados relacionados à votação no banco de dados.
 */
require_once('database.class.php');

class Votacao {

    /**
     * @var int $id Identificador único da votação.
     */
    private $id;

    /**
     * @var string $nome Nome da votação.
     */
    private $nome;

    /**
     * @var int $voto Valor do voto.
     */
    private $voto;

    /**
     * @var string $chapa Chapa votada.
     */
    private $chapa;

    /**
     * @var string $usuario Usuário que votou.
     */
    private $usuario;

    /**
     * @var string $data Data da votação.
     */
    private $data;

    /**
     * Construtor da classe Votacao.
     *
     * @param int $id Identificador único da votação.
     * @param string $nome Nome da votação.
     * @param int $voto Valor do voto.
     * @param string $chapa Chapa votada.
     * @param string $usuario Usuário que votou.
     * @param string $data Data da votação.
     */
    public function __construct($id, $nome, $voto, $chapa, $usuario, $data) {
        $this->setid($id);
        $this->setnome($nome);
        $this->setvoto($voto);
        $this->setchapa($chapa);
        $this->setusuario($usuario);
        $this->setdata($data);
    }

    /**
     * Define o identificador único da votação.
     *
     * @param int $id O identificador único a ser definido.
     */
    public function setid($id) {
        $this->id = $id;
    }

    /**
     * Obtém o identificador único da votação.
     *
     * @return int O identificador único da votação.
     */
    public function getid() {
        return $this->id;
    }

    /**
     * Define o nome da votação.
     *
     * @param string $nome O nome a ser definido.
     */
    public function setnome($nome) {
        $this->nome = $nome;
    }

    /**
     * Obtém o nome da votação.
     *
     * @return string O nome da votação.
     */
    public function getnome() {
        return $this->nome;
    }

    /**
     * Define o valor do voto.
     *
     * @param int $voto O valor do voto a ser definido.
     */
    public function setvoto($voto) {
        $this->voto = $voto;
    }

    /**
     * Obtém o valor do voto.
     *
     * @return int O valor do voto.
     */
    public function getvoto() {
        return $this->voto;
    }

    /**
     * Define a chapa votada.
     *
     * @param string $chapa A chapa votada a ser definida.
     */
    public function setchapa($chapa) {
        $this->chapa = $chapa;
    }

    /**
     * Obtém a chapa votada.
     *
     * @return string A chapa votada.
     */
    public function getchapa() {
        return $this->chapa;
    }

    /**
     * Define o usuário que votou.
     *
     * @param string $usuario O usuário que votou a ser definido.
     */
    public function setusuario($usuario) {
        $this->usuario = $usuario;
    }

    /**
     * Obtém o usuário que votou.
     *
     * @return string O usuário que votou.
     */
    public function getusuario() {
        return $this->usuario;
    }

    /**
     * Define a data da votação.
     *
     * @param string $data A data da votação a ser definida.
     */
    public function setdata($data) {
        $this->data = $data;
    }

    /**
     * Obtém a data da votação.
     *
     * @return string A data da votação.
     */
    public function getdata() {
        return $this->data;
    }

    /**
     * Insere os dados da votação no banco de dados.
     *
     * @return bool Retorna true se a operação for bem-sucedida, ou false em caso de falha.
     */
    public function inserir() {
        $sql = 'INSERT INTO votacao(nome, voto, chapa, usuario, data)
                VALUES (:nome, :voto, :chapa, :usuario, :data)';
        $params = array(
            ':nome' => $this->getnome(),
            ':voto' => $this->getvoto(),
            ':chapa' => $this->getchapa(),
            ':usuario' => $this->getusuario(),
            ':data' => $this->getdata()
        );

        return Database::executar($sql, $params);
    }

    /**
     * Exclui uma votação do banco de dados com base no identificador.
     *
     * @param int $id Identificador da votação a ser excluída.
     * @return bool Retorna true se a operação for bem-sucedida, ou false em caso de falha.
     */
    public function excluir($id) {
        $sql = 'DELETE FROM votacao
                WHERE id = :id';
        $params = array(':id' => $id);
        return Database::executar($sql, $params);
    }

    /**
     * Edita os dados de uma votação no banco de dados.
     *
     * @return bool Retorna true se a operação for bem-sucedida, ou false em caso de falha.
     */
    public function editar() {
        $sql = 'UPDATE votacao
                SET nome = :nome, 
                    voto = :voto,
                    chapa = :chapa,
                    usuario = :usuario,
                    data = :data
                WHERE id = :id';
        $params = array(
            ':id' => $this->getid(),
            ':nome' => $this->getnome(),
            ':voto' => $this->getvoto(),
            ':chapa' => $this->getchapa(),
            ':usuario' => $this->getusuario(),
            ':data' => $this->getdata()
        );

        return Database::executar($sql, $params);
    }
}


?>