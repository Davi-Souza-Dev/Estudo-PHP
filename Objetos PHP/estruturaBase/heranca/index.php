<?php 
    //CRIANDO A CLASSE BASE
    class Veiculo{
        public $nome;
        public $combustivel;

        public function __construct($nome,$comb){
            $this->nome = $nome;
            $this->combustivel = $comb;
        }

        public function andar(){
            $this->combustivel = $this->combustivel - 10;
            echo "$this->nome andou | Combustivel: $this->combustivel <br>";
        }
    }

    //CRIANDO A CLASSE FILHO
    class Carro extends Veiculo{
        public function limpador(){
            echo "$this->nome lligou o limpador de vidros! <br>";
        }
    }

    class Moto extends Veiculo{
        public function darGrau(){
            echo "RARAMRAMRMARMAMTAMTAM cabo o grau de $this->nome";
        }
    }


    $carro = new Carro('Carro1',100);
    while($carro->combustivel > 0){
        $carro->andar();
    }
    $carro->limpador();

    echo "<hr>";

    $moto = new Moto("MOTO",100);
    $moto->darGrau();
    

?>