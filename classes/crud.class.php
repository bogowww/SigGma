<?php
    /**
 * Classe abstrata Crud
 *
 * Essa classe fornece métodos abstratos para realizar operações básicas de CRUD
 * (Create, Read, Update, Delete) em um banco de dados.
 */
require_once('database.class.php');

abstract class Crud{

    /**
     * @var int $id Identificador único da entidade no banco de dados.
     */
    private $id = 0;

    /**
     * Construtor da classe.
     *
     * @param int $pid Identificador único para inicializar o objeto.
     */
    public function __construct($pid){
        $this->setId($pid);
    }        

    /**
     * Obtém o identificador único da entidade.
     *
     * @return int O identificador único da entidade.
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Define o identificador único da entidade.
     *
     * @param int $id O identificador único a ser definido.
     */
    public function setId($id){
        $this->id = $id;
    }       

    /**
     * Método abstrato para inserir uma nova entidade no banco de dados.
     * Deve ser implementado pelas classes filhas.
     */
    public abstract function inserir();

    /**
     * Método abstrato para excluir uma entidade do banco de dados.
     * Deve ser implementado pelas classes filhas.
     */
    public abstract function excluir();

    /**
     * Método abstrato para editar uma entidade no banco de dados.
     * Deve ser implementado pelas classes filhas.
     */
    public abstract function editar();
}

?>
