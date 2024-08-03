<?php

// __get e __set
class Pessoa
{
    private $dados = [];

    //__set PARA SETAR OS VALORES AUTOMATICAMENTE
    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    //__get PARA PEGAR OS DADOS DE FORMA AUTOMATICA
    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    //__toString para imprimir automaticamente
    public function __toString(){
        return "OBJETO PESSOA SELECIONADO!";
    }
}

//INSTANCIANDO A CLASSE COM OS METODOS MAGICOS
$pessoa = new Pessoa();
$pessoa->nome = "Davi";
$pessoa->idade = 17;
$pessoa->sexo = "M";

echo $pessoa->nome . "<br>";
echo $pessoa->idade . "<br>";
echo $pessoa->sexo . "<br>";

echo "<hr>";

//UTILIZANDO O __toString();
echo $pessoa;
?>
