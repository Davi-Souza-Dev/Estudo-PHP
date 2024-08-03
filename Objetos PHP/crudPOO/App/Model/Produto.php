<?php 

//DEFININDO OS NAMESPACES
namespace App\Model;
//CRIANDO A CLASE DO PRODUTO

class Produto{
    
    //CRIANDO OS CAMPOS NO BANCO DE DADOS
    private $id, $nome,$desc;

    //Criando os gets e sets

    public function getID(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDesc(){
        return $this->desc;
    }

    public function setDesc($desc){
        $this->desc = $desc;
    }
}

?>