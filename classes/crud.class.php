<?php
    require_once('database.class.php');
    abstract class CRUD{
        
        private $id = 0;
        
        public function __construct($pid){
            $this->setId($pid);
        }        
        
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }       

        public abstract function inserir();
        
        public abstract function excluir();
        
        public abstract function editar();
    }
?>
