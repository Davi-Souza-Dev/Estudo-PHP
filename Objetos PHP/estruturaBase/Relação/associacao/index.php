<?php 
//ASSOCIAÇÃO DE OBJETOS

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Davi";
$cliente->endereco = "Rua XXX Numero: 777";

$pedido = new Pedido();
$pedido->numero = "01";
//O ATRIUTO CLIENTE DA CLASSE PEDIDO RECEBE TODOS OS DADOS DA CLASSE CLIENTE
$pedido->cliente = $cliente;


$dados = ["numero"=>$pedido->numero,'nome'=>$pedido->cliente->nome,'endereço'=>$pedido->cliente->endereco];
var_dump($dados);


?>