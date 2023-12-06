<?php
/**
 * Classe abstrata Usuario
 *
 * Esta classe abstrata representa um modelo básico para um usuário.
 */
abstract class Usuario {

    /**
     * @var int $id Identificador único do usuário.
     */
    private $id;

    /**
     * @var string $nome Nome do usuário.
     */
    private $nome;

    /**
     * @var string $matricula Matrícula do usuário.
     */
    private $matricula;

    /**
     * Construtor da classe Usuario.
     *
     * @param int $id Identificador único do usuário.
     * @param string $nome Nome do usuário.
     * @param string $matricula Matrícula do usuário.
     */
    public function __construct($id, $nome, $matricula) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    /**
     * Define o identificador único do usuário.
     *
     * @param int $id O identificador único a ser definido.
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Obtém o identificador único do usuário.
     *
     * @return int O identificador único do usuário.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Define o nome do usuário.
     *
     * @param string $nome O nome a ser definido.
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * Obtém o nome do usuário.
     *
     * @return string O nome do usuário.
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Define a matrícula do usuário.
     *
     * @param string $matricula A matrícula a ser definida.
     */
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    /**
     * Obtém a matrícula do usuário.
     *
     * @return string A matrícula do usuário.
     */
    public function getMatricula() {
        return $this->matricula;
    }

    /**
     * Método abstrato para salvar o usuário no banco de dados.
     * Deve ser implementado pelas classes filhas.
     *
     * @return bool Retorna true se a operação for bem-sucedida, ou false em caso de falha.
     */
    abstract public function salvar();
}


?>
