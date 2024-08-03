<?php 
    //CRIANDO A CLASSE BASE
    class Base{
        public $nome;
        protected $combustivel;
        private $valor;

        public function andar(){
            echo "$this->nome andou <br>";
        }

        public function getComb(){
            return $this->combustivel;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }


        public function setComb($comb){
            $this->combustivel = $comb;
        }

        public function info(){
            echo "Nome: $this->nome <br>";
            echo "Combústivel: $this->combustivel L <br>";
            echo "Valor: R$:$this->valor <br>";
        }
    }

    //CRIANDO A CLASSE FILHO
    class Carro extends Base{
        public function limpador(){
            echo "$this->nome lligou o limpador de vidros! <br>";
        }

        public function getComb(){
            return $this->combustivel;
        }

        public function setComb($comb){
            $this->combustivel = $comb;
        }
    }


    // $carro = new Carro();
    // $carro->nome = "Carro 1";
    // // $carro->valor = "R$100,00"; //Impossivel de acessar
    // $carro->setComb(100);
    // $carro->andar();

    $veiculo = new Base();
    $veiculo->nome = "Veiculo 1";
    $veiculo->setValor("1.000.000,00"); //Impossivel de acessar
    $veiculo->setComb(100);
    $veiculo->info();

    var_dump($veiculo)
?>