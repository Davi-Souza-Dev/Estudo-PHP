<?php 
// AGREGAÇÃO DE CLASSES

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome,$valor){   
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    public function addProduto(Produtos $produto){
        $this->produtos[] = $produto;
        // echo 'Produto adicionado! <br>';
    }

    public function exibirProdutos(){
        foreach($this->produtos as $produto){
            echo "$produto->nome. <br>";
            echo " R$:$produto->valor. <hr>";
        }
    }
}

$produto1 = new Produtos("Produto 1",100);
$produto2 = new Produtos("Produto 2",150);


$carrinho = new Carrinho();
$carrinho->addProduto($produto1);
$carrinho->addProduto($produto2);
$carrinho->exibirProdutos();
?>