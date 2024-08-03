<?php
//DEFININDO OS NAMESPACES
namespace App\Model;
//CLASSE PARA REALIZAR AS FUNÇõES DO CRUD
class ProdutoDao
{
    //FUNçÃO PARA CRIAR OS PRODUTOS
    public function create(Produto $p)
    {
        //QUERY SQL PARA INSERIR O PRODUTO
        //(?,?) = bindValues
        $query = "INSERT INTO produtos (nome,descricao) VALUES (?,?)";

        //UTILIZANDO O PDO PARA UTILIZAR A QUERY
        $stmt = Conexao::getCom()->prepare($query);

        //ACOSSIANDO OS BINDVALUES AOS DADOS DO PRODUTO

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDesc());

        //EXECUTANDO A QUERY SQL PELO PDO
        $stmt->execute();
    }

    //FUNCAO PARA LER OS PRODUTOS DO DB
    public function read()
    {
        //QUERY
        $query = "SELECT * FROM produtos";
        //FAZENDO A CONEXÃO
        $stmt = Conexao::getCom()->prepare($query);
        $stmt->execute();
        //VERIFICANDO SE UM VALOR FOI RETORNADO
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } else {
            return $result=[];
        }
    }

    //FUNCAO PARA ATUALIZAR OS PRODUTOS
    public function update(Produto $p)
    {
        //QUERY SQL
        $query = "UPDATE produtos SET nome=?, descricao=? WHERE idproduto=?";

        //PEPARANDO A CONEXAO
        $stmt = Conexao::getCom()->prepare($query);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDesc());
        $stmt->bindValue(3, $p->getID());

        //EXECUNTANDO A QUERY
        $stmt->execute();
    }

    //FUNCAO PARA DELETAR OS PRODUTOS
    public function delete($id)
    {
        $query = "DELETE FROM produtos WHERE idproduto=?";
        //PEPARANDO A CONEXAO
        $stmt = Conexao::getCom()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
