<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
        //Criando array utilizando a classe
        $teste = array();
        $teste[] = "AAA";
        print_r($teste);
        echo "<br/>";

        //Criando array da forma normal
        $clientes = ["Ana","Pedro","Rodrigo"];
        print_r($clientes);
        echo "<br/>";

        echo("<hr>");
        //Exibindo a qtde de valores
        $qtde = count($clientes);
        echo "$qtde";
        echo "<hr>";


        //FUncçoes de array
        $nomes = ["Roberto","Carlos","Davi"];

        //VERIFICA SE A VARIVEL É UM ARRAY (is_array())
        if( is_array($nomes)){
            echo '$nomes é um array';
        }else{
            echo '$nomes não é um array';
        }

        echo "<br/>";

        //VERIFICA SE HÁ UM VALOR NO ARRAY (in_array(valor,arr));
        if(in_array("Davi",$nomes)){
            echo 'Davi está no array';
        }else{
            echo 'Davi não esta no array';
        } 
    ?>
</body>
</html>