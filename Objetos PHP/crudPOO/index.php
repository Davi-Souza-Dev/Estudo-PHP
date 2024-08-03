<?php 
    //INICIALIZANDO O AUTOLOAD
    require_once 'vendor/autoload.php';

    //CRIANDO UMA INSTANCIA DO PRODUTO
    $produto = new \App\Model\Produto();
    $produto->setId(1);
    $produto->setNome("Cadeira Gamer");
    $produto->setDesc("COM LED!!!!");
    

    //INSTANCIADO O PRODUTODAO
    $produtoDAO = new \App\Model\ProdutoDao();
    
    //FAZENDO O UPDATE PELO PRODUTODAO
    $produtoDAO->delete($produto->getID());

    //FAZENDO O INSERT COM O PRODUTODAO
    //$produtoDAO->create($produto);

    //FAZENDO O READ COM PRODUTODAO
    $produtoDAO->read();
    //EXIBINDO OS PRODUTOS ENCONTRADOS
    foreach($produtoDAO->read() as $produtoExibir){
        echo $produtoExibir['nome'] . "<br>" . $produtoExibir['descricao'] . "<hr>";
    }


?>