<?php
abstract class CRUD{
    private $id;

    public abstract function inserir();
    public abstract function excluir();
    public abstract function editar();
    public abstract function listar();
}
?>
