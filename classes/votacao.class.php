<?php
require_once ('database.class.php');
    
class Votacao{
    /**
     * Atributos da classe
     */
    private $id;
    private $nome;
    private $voto;
    private $chapa;
    private $usuario;
    private $data;


     public function __construct($id, $nome, $voto, $chapa, $usuario, $data){
         $this->setid($id);
         $this->setnome($nome);
         $this->setvoto($voto);
         $this->setchapa($chapa);
         $this->setusuario($usuario);
         $this->setdata($data);
     }

     public function setid($id){
            $this->id = $id;
    }

    public function getid(){
        return $this->id;
    }

    public function setnome($nome){
        $this->nome = $nome;
    }

    public function getnome(){
        return $this->nome;
    }

    public function setvoto($voto){
        $this->voto = $voto;
    }

    public function getvoto(){
    return $this->voto;
    }

    public function setchapa($chapa){
        $this->chapa = $chapa;
    }

    public function getchapa(){
    return $this->chapa;
    }

    public function setusuario($usuario){
        $this->usuario = $usuario;
    }

    public function getusuario(){
    return $this->usuario;
    }

    public function setdata($data){
        $this->data = $data;
    }

    public function getdata(){
    return $this->data;
    }

    public function inserir(){
        $sql = 'INSERT INTO usuario(nome, voto)
                     VALUES (:nome, :voto)';
        $params = array(
        ':nome'=>$this->getnome(),
        ':voto' => $this->getvoto(),
        ':chapa' => $this->getchapa(),
        'usuario' => $this->getusuario(),
        'data' => $this->getdata()
    );
       
       return Database::executar($sql, $params);
    }

    public function excluir($id){
        $sql = 'DELETE FROM votacao 
                 WHERE id = :id';         
        $params = array(':id'=>$id);         
        return Database::executar($sql, $params);
    }

    public function editar(){
        $sql = 'UPDATE votacao
                   SET nome = :nome, 
                    voto = :voto,
                    chapa = :chapa,
                    usuario = :usuario,
                    data = :data
                 WHERE   id = :id';
        $params = array(':id'=>$this->getid(),
                        ':nome'=> $this->getnome());
       return Database::executar($sql, $params);
       
    }

}

?>