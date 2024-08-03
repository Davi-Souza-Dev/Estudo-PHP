<?php 
    //CRIANDO UMA CLASSE DE MODELO
    abstract class Banco{
        protected $saldo;
        protected $limiteSaque;

        //FUNÇÕES PUBLICAR DE CLASSE QEU PODEM SER USADADS POR QUALUQER CLASSE FILHO
        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        //CRIANDO FUNCÔES PADROÊS DA CLASSE
        abstract protected function sacar($saldo);
        abstract protected function depositar($saldo);
    }


    //CIRANDO OUTRA CLASSE COM O MODELO 
    //ELA PRECISA TER TODOS AS FUNCOES DO MODELO
    class Itau extends Banco{
        public function depositar($saldo){
            $this->saldo += $saldo;
            echo "<hr> Depositou: " . $saldo;
        }

        public function sacar($saldo){
            $this->saldo -= $saldo;
            echo "<hr> Sacou: " . $saldo;
        }
    }

    //INSATNCIADO A CLASSE FILHA
    $itau = new Itau();
    $itau->setSaldo(1000);
    echo "<hr> Saldo: ". $itau->getSaldo();
    $itau->sacar(250);
    echo "<hr> Saldo: ". $itau->getSaldo();
    $itau->depositar(250);
    echo "<hr> Saldo: ". $itau->getSaldo();
?>