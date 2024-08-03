<?php 
//CRIANDO A CLASSE EM PHP
    class Pessoa{
        public $nome;
        public $msg;
        public function falar(){
            echo $this->nome . "<br>" . $this->msg . "<br>";
        }
    }

    //INTANCIANDO A CLASSE
    $pessoa = new Pessoa();
    
    ///Acessando os atributos e metódos
    $pessoa->nome = "Teste Pessoa";
    $pessoa->msg = "Olá mundo";
    $pessoa->falar();
    var_dump($pessoa);
?>